<?php
session_start();

// If product information is passed via POST, add it to the session cart
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['buy_now'])) {
    $product = [
        'name' => $_POST['product_name'],
        'price' => $_POST['product_price'],
        'quantity' => $_POST['product_quantity'],
    ];
    $product_name = $_POST['product_name'];
    if(isset($_SESSION['cart'])) {
        $myitem = array_column($_SESSION['cart'], 'name');
        if(in_array($product_name, $myitem)) {
            ?>
            <script> window.location.href='buy_now_checkout.php'; </script>
            <?php
        } else {
            $count = count($_SESSION['cart']);
            $_SESSION['cart'][$count] = $product;
            echo "<script>alert('Item added to cart'); window.location.href='buy_now_checkout.php';</script>";
        }
    } else {
        $_SESSION['cart'][] =  $product;
        
        echo "<script>alert('Item added to cart'); window.location.href='buy_now_checkout.php';</script>";
    }


}

// Check if the cart is empty
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    header("Location: Product.php"); // Redirect to product page if cart is empty
    exit;
}

$total_price = 0;
foreach ($_SESSION['cart'] as $item) {
    $total_price += $item['price'] * $item['quantity'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon Checkout</title>
    <link rel="stylesheet" href="css/checkout.css?v=<?php echo time(); ?>">
    <link rel = "stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="css/buy_now_checkout.js"></script> <!-- Link to the JavaScript file -->

    <!-- Pass the total price to JavaScript -->
    <script type="text/javascript">
        const totalPrice = <?php echo json_encode(number_format($total_price, 2)); ?>;
    </script>
</head>
<body>

<header>
        <div class="navbar">
            <div class="nav-logo border">
                <a href = "index.php">
                <div class="logo">
                </div>
                </a>
            </div>

            <div class="nav-address border">
                <p class = "add-first">Dilever to</p>
                <div class="add-icon">
                    <i class="fa-solid fa-location-dot"></i>
                    <p class = "add-sec">
                        India
                    </p>
                </div>
            </div>

            <div class="nav-search">
                <select class = "search-select">
                    <option>All</option>
                </select>
                <input type="text" placeholder="Search Amazon" class = "search-input"/>
                <div class="search-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>

            <div class="nav-signin border">
                <p>
                <?php
                    if (isset($_SESSION['user_name'])) {
                        // Display the user's name from the session
                        echo "<span>Hello, " . htmlspecialchars($_SESSION['user_name']) . "</span>";
                    } else {
                        echo "<span>Hello, sign in</span>";
                    }
                    ?>
                </p>            
                <p class ="nav-second">Account & Lists</p>
            </div>

            <a href = "orders.php" style = "text-decoration:none;color:white;">
            <div class="nav-return border">
                <p>
                    <span>Returns</span>
                </p>            
                <p class ="nav-second">& Orders </p>
            </div>
            </a>
            <a href = "cart.php" style="text-decoration:none;color:white;">
            <div class="nav-cart border">
                <i class="fa-solid fa-cart-shopping"></i>
                Cart
            </div>
	        </a>

            <div class="nav-logout">
              <a href = "logout.php">
                <input type = "submit" value = "LOGOUT"  class = "logout"/>
              </a>
            </div>
        </div>

        <div class="pannel">
            <div class="pannel-all border padding">
                <i class="fa-solid fa-bars"></i>
                All    
            </div>
            <div class="pannel-ops">
                <a class="border padding">Today's Deals</a>
                <a class="border padding">Customer Services</a>
                <a class="border padding">Registry</a>
                <a class="border padding">Gift Cards</a>
                <a class="border padding">Sell</a>
            </div>
            <div class="pennel-deals border padding">
                <p>Shop the Gaming Store</p>
            </div>
        </div>
    </header>


    <div class="checkout-container">
        <h1>Checkout</h1>
        
        <!-- Shipping Address Section -->
        <div class="section">
            <h2>Shipping Address</h2>
            <form id="checkoutForm" action="order_confirm.php" method="POST"> <!-- Redirect to order completion page -->
                <label for="fullName">Full Name</label>
                <input type="text" id="fullName" class = "input-text" name="fullName" required>
                
                <label for="address">Address</label>
                <input type="text" id="address" class = "input-text" name="address" required>
                
                <label for="city">City</label>
                <input type="text" id="city" class = "input-text" name="city" required>
                
                <label for="zip">ZIP Code</label>
                <input type="text" id="zip" class = "input-text" name="zip" required>
                
                <label for="country">Country</label>
                <select id="country" class = "select" name="country" required>
                    <option value="IN">India</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="GB">United Kingdom</option>
                    <option value="AU">Australia</option>
                </select>
                
                <hr>
                
                <!-- Payment Method Section -->
                <h2>Payment Method</h2>
                
                <label for="cardNumber">Card Number</label>
                <input type="text" id="cardNumber" class = "input-text" name="cardNumber" placeholder="xxxx-xxxx-xxxx-xxxx" required>
                
                <label for="expDate">Expiration Date</label>
                <input type="month" id="expDate" class = "input-month" name="expDate" required>
                
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" class = "input-text" name="cvv" placeholder="123" required>

                <hr>

                <!-- Order Summary Section -->
                <div class="order-summary-section">
                    <h2>Order Summary</h2>
                    <?php
                    foreach ($_SESSION['cart'] as $item) {
                        echo "<p>{$item['name']} (x{$item['quantity']}) - $" . number_format($item['price'] * $item['quantity'], 2) . "</p><br/>";
                    }
                    ?><br/>
                    <p>Total Price: <strong>$<?php echo number_format($total_price, 2); ?></strong></p>
                </div>
                    <br/>
                <!-- Place Order Button -->
                <div class="place-order">
                    <button type="submit" class="place-order-btn">Place Order</button>
                </div>
            </form>
        </div>
    </div>


    <footer>
        <a style ="cursor:pointer;">
        <div class="foot-pannel1" id = "backToTop">
            Back to top
        </div>
                </a>
        <div class="foot-pannel2">
            <ul>
                <p>Get to Know Us</p>
                <a>Careers</a>
                <a>Blog</a>
                <a>About Amazon</a>
                <a>Investor Relations</a>
                <a>Amazon Devices</a>
                <a>Amazon Science</a>
            </ul>
            <ul>
                <p>Make Money with Us</p>
                <a>Sell products on Amazon</a>
                <a>Sell on Amazon Business</a>
                <a>Sell apps on Amazon</a>
                <a>Become an Affiliates</a>
                <a>Advertise Your Productss</a>
                <a>Self-Publish with Us</a>
                <a>Host an Amazon Hub</a>
                <a>› See More Make Money with Us</a>
            </ul>
            <ul>
                <p>Amazon Payment Products</p>
                <a>Amazon Business Card</a>
                <a>Shop with Points</a>
                <a>Reload Your Balance</a>
                <a>Amazon Currency Converters</a>
            </ul>
            <ul>
                <p>Let Us Help You</p>
                <a>Amazon and COVID-19</a>
                <a>Your Account</a>
                <a>Your Orders</a>
                <a>Shipping Rates & Policies</a>
                <a>Returns & Replacements</a>
                <a>Manage Your Content and Devices</a>
                <a>Help</a>
            </ul>
        </div>

        <div class="foot-pannel3">
            <div class="logo"></div>
        </div>
        
        <div class="foot-pannel4">
            <div class="pages">
                <a>Conditions of Use</a>
                <a>Privacy Notice</a>
                <a>Your Ads Privacy Choices</a>
            </div>
            <div class="copyright">
                © 1996-2024, Amazon.com, Inc. or its affiliates
            </div>
        </div>
    </footer>

    <script>
    // Scroll to the top when the "Back to top" is clicked
    document.getElementById("backToTop").addEventListener("click", function() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
</script>

</body>
</html>