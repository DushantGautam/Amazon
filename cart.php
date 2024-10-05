<?php
	session_start();
	 $userprofile = $_SESSION['user_name'];
	if($userprofile)
	{
        
        


// Handle Remove functionality via GET request
if (isset($_GET['remove'])) {
    $remove_index = $_GET['remove'];
    if (isset($_SESSION['cart'][$remove_index])) {
        unset($_SESSION['cart'][$remove_index]);
        // Reindex array to avoid gaps
        $_SESSION['cart'] = array_values($_SESSION['cart']);
        echo "<script>alert('Item removed'); window.location.href='cart.php';</script>";
    }
}

// Handle Add to Cart functionality via POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['update_quantity'])) {
        // Update the quantity of the specific product
        $update_index = $_POST['product_index'];
        $new_quantity = (int)$_POST['quantity'];
        if (isset($_SESSION['cart'][$update_index])) {
            $_SESSION['cart'][$update_index]['quantity'] = $new_quantity;
            echo "<script>alert('Quantity updated'); window.location.href='cart.php';</script>";
        }
    } else {
        // Handle adding new products to the cart
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_quantity = (int)$_POST['product_quantity']; // Ensure quantity is an integer

        if (isset($_POST['add_to_cart'])) {
            if (isset($_SESSION['cart'])) {
                $myitem = array_column($_SESSION['cart'], 'name');
                if (in_array($product_name, $myitem)) {
                    echo "<script>alert('Item already added'); window.location.href='product.php';</script>";
                } else {
                    $count = count($_SESSION['cart']);
                    $_SESSION['cart'][$count] = array(
                        'name' => htmlspecialchars($product_name),
                        'price' => $product_price,
                        'quantity' => $product_quantity
                    );
                    echo "<script>alert('Item added'); window.location.href='product.php';</script>";
                }
            } else {
                $_SESSION['cart'][] = array(
                    'name' => htmlspecialchars($product_name),
                    'price' => $product_price,
                    'quantity' => $product_quantity
                );
                echo "<script>alert('Item added'); window.location.href='cart.php';</script>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart with PHP</title>
    <link rel="stylesheet" href="CSS/product.css">
    <link rel = "stylesheet" href="css/style1.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <!--header -->

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


<div class="cart-container">
    <h1>Shopping Cart</h1>

    <!-- Display Cart Items -->
    <?php if (!empty($_SESSION['cart'])): ?>
        <?php foreach ($_SESSION['cart'] as $index => $item): ?>
            <form method="POST" action="cart.php">
                <div class="cart-item">
                    <div class="product-details">
                        <h2><?php echo htmlspecialchars($item['name']); ?></h2>
                        <p>Price: $<?php echo number_format($item['price'], 2); ?></p>
                        <label for="quantity">Qty: </label>
                        <select id="quantity" class="qty-select1" name="quantity">
                            <?php for ($i = 1; $i <= 10; $i++): ?>
                                <option value="<?php echo $i; ?>" <?php echo ($item['quantity'] == $i) ? 'selected' : ''; ?>>
                                    <?php echo $i; ?>
                                </option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <div class="remove-btn">
                        <button type="submit" name="update_quantity">Update Qty</button>      
                        <input type="hidden" name="product_index" value="<?php echo $index; ?>">
                        <a href="?remove=<?php echo $index; ?>"><button type="button">Remove</button></a>
                    </div>
                </div>
            </form>
            <hr>
        <?php endforeach; ?>
    <?php else: ?>
        <br/>
        <br/>
        <p>Your cart is empty!</p>
    <?php endif; ?>
    
    <!-- Cart Summary -->
    <?php if (!empty($_SESSION['cart'])): ?>
        <div class="cart-summary">
            <h2>Cart Summary</h2>
            <?php
            $total_price = 0;
            foreach ($_SESSION['cart'] as $item) {
                $total_price += $item['price'] * $item['quantity'];
            }
            ?>
            <p>Subtotal (<?php echo count($_SESSION['cart']); ?> items): <strong>$<?php echo number_format($total_price, 2); ?></strong></p>
            <a href="checkout.php">
                <button class="checkout-btn">Proceed to Checkout</button>
            </a>
        </div>
    <?php endif; ?>
    <br/><br/>
    <div class="product"><a href="index.php" style="text-decoration:none;"> Back To Products</a></div>
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

<?php
}
else {
header('location:login.php');
}
?>