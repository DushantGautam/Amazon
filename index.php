<?php
	session_start();
	 $userprofile = $_SESSION['user_name'];
	if($userprofile)
	{
        
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon</title>
    <link rel = "stylesheet" href="css/style1.css?v=<?php echo time(); ?>"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

    <div class="hero-section">
    <div class="hero-msg">
            <p>You are on amazon.com. You can also shop on Amazon India for millions of products with fast local delivery.  <a>Click here to go to amazon.in</a></p>
        </div>
    </div>

    <div class="shop-section">
	
    <div class="box">
            <div class="box-content">
            <a href = "product.php?category=electronics" class = "products-link">
                <h2>Top PCs & Accessories
                </h2>
                <div class="img-groups">
                    <div class="box-img box-margin" style="background-image: url('pictures/desktop.jpg');"></div>
                    <div class="box-img" style="background-image: url('pictures/laptops.jpg');"></div>
                    <div class="box-img box-margin" style="background-image: url('pictures/hard_drive.jpg');"></div>
                    <div class="box-img" style="background-image: url('pictures/pc_accessories.jpg');"></div>
                </div>
                <p>see more</p>
                </a>
            </div>
        </div>


    <div class="box">
            <div class="box-content">
            <a href = "product.php?category=shop_deals" class = "products-link">
                <h3>Shop deals in Fashion</h3>
                <div class="img-groups">
                <div class="box-img box-margin " style="background-image: url('pictures/box91.jpg');"></div>
                <div class="box-img" style="background-image: url('pictures/box92.jpg');"></div>
                <div class="box-img box-margin" style="background-image: url('pictures/box94.jpg');"></div>
                <div class="box-img" style="background-image: url('pictures/box93.jpg');"></div>
                </div>
                <p>see more</p>
		     </a>
            </div>
        </div>
	
        <div class="box">
            <div class="box-content">
            <a href = "product.php?category=home_arrivals" class = "products-link">
                <h3>New home arrivals</h3>
                <div class="img-groups">
                    <div class="box-img box-margin" style="background-image: url('pictures/box101.jpg');"></div>
                    <div class="box-img" style="background-image: url('pictures/box102.jpg');"></div>
                    <div class="box-img box-margin" style="background-image: url('pictures/box103.jpg');"></div>
                    <div class="box-img" style="background-image: url('pictures/box104.jpg');"></div>
                    </div>
                <p>see more</p>
                </a>
            </div>
        </div>
        <div class="box">
            <div class="box-content">
            <a href = "product.php?category=wireless_tech" class = "products-link">
                <h3>Wireless Tech</h3>
                <div class="img-groups">
                    <div class="box-img box-margin" style="background-image: url('pictures/box10_1.jpg');"></div>
                    <div class="box-img" style="background-image: url('pictures/box10_2.jpg');"></div>
                    <div class="box-img box-margin" style="background-image: url('pictures/box10_3.jpg');"></div>
                    <div class="box-img" style="background-image: url('pictures/box10_4.jpg');"></div>
                    </div>
                <p>see more</p>
                </a>
            </div>
             
        </div>
        
       
    


        <div class="box">
            <div class="box-content">
            <a href = "product.php?category=clothes"  class = "products-link">
                <h2>Clothes</h2>
                <div class="box-img" style="background-image: url('pictures/box1_image.jpg');"></div>
                <p>see more</p>
            </a>
            </div>
        </div>
        <div class="box">
            <div class="box-content">
            <a href = "product.php?category=personal_care"  class = "products-link">
                <h2>Health & Personal Care</h2>
                <div class="box-img" style="background-image: url('pictures/box2_image.jpg');"></div>
                <p>see more</p>
                </a>
            </div>
        </div>
        <div class="box">
            <div class="box-content">
            <a href = "product.php?category=furniture" class = "products-link">
                <h2>Furniture</h2>
                <div class="box-img" style="background-image: url('pictures/box3_image.jpg');"></div>
                <p>see more</p>
                </a>
            </div>
        </div>
        <div class="box">
            <div class="box-content">
            <a href = "product.php?category=electronics" class = "products-link">
                <h2>Electronics</h2>
                <div class="box-img" style="background-image: url('pictures/box4_image.jpg');"></div>
                <p>see more</p>
                </a>
            </div>
        </div>
        <div class="box">
            <div class="box-content">
            <a href = "product.php?category=beauty_picks" class = "products-link">
                <h2>Beauty Picks</h2>
                <div class="box-img" style="background-image: url('pictures/box5_image.jpg');"></div>
                <p>see more</p>
                </a>
            </div>
        </div>
        <div class="box">
            <div class="box-content">
            <a href = "product.php?category=pet_care" class = "products-link">
                <h2>Pet Care</h2>
                <div class="box-img" style="background-image: url('pictures/box6_image.jpg');"></div>
                <p>see more</p>
                </a>
            </div>
        </div>
        <div class="box">
            <div class="box-content">
            <a href = "product.php?category=toys" class = "products-link">
                <h2>New Arrivals in Toys</h2>
                <div class="box-img" style="background-image: url('pictures/box7_image.jpg');"></div>
                <p>see more</p>
                </a>
            </div>
        </div>
        <div class="box">
            <div class="box-content">
            <a href = "product.php?category=fashion" class = "products-link">
                <h2>Discover Fashion Trends</h2>
                <div class="box-img" style="background-image: url('pictures/box8_image.jpg');"></div>
                <p>see more</p>
                </a>
            </div>
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

<?php
}
else {
header('location:login.php');
}
?>

