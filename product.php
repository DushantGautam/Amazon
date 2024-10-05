
<?php
	session_start();
	 $userprofile = $_SESSION['user_name'];
	if($userprofile)
	{
        
        
?>

<?php
// Retrieve the 'category' from the URL
$category = isset($_GET['category']) ? $_GET['category'] : 'electronics'; // Default to 'electronics' if no category is set

// Function to determine if a product category should be displayed first
function showCategory($productCategory, $selectedCategory) {
    return $productCategory === $selectedCategory ? 'flex' : 'none';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Samsung Galaxy S24 Ultra, AI Smartphone with 512GB, 200MP camera, and more">
    <title>Product Information</title>
    <link rel = "stylesheet" href="css/product.css"/>
    <link rel = "stylesheet" href="css/style1.css"/>
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

    <div class="product-info">
    <!-- Header -->
    

    <!-- Main Product Container -->
    <div class="container" style="display: <?php echo showCategory('electronics', $category); ?>;">
        <!-- Product Image Section -->
        <div class="image-section">
            <img src="pictures/electronics.webp" alt="HP 17 Business Laptop">
        </div>

        <!-- Product Details Section -->
        <div class="details-section">
            <h1>HP 17 Business Laptop</h1>

            <!-- Product Rating -->
            <div class="rating">
                <img src="pictures/Rating.jpg" alt="4.5 out of 5 stars rating">
            </div>

            <!-- Product Price -->
            <p class="price">$470.00</p>

            <!-- Product Description -->
            <p>HP 17 Business Laptop, 17.3” HD+ Display, 11th Gen Intel Core i3-1125G4 Processor, 32GB RAM, 1TB SSD, Wi-Fi, HDMI, Webcam, Windows 11 Pro, Silver</p>

            <!-- Specifications -->
            <div class="specifications-section">
                <h3>Product Specifications</h3>
                <table>
                    <tr>
                        <th>Feature</th>
                        <th>Details</th>
                    </tr>
                    <tr>
                        <td>Brand</td>
                        <td>HP</td>
                    </tr>
                    <tr>
                        <td>Color</td>
                        <td>Silver</td>
                    </tr>
                    <tr>
                        <td>Hard Disk Size</td>
                        <td>1 TB</td>
                    </tr>
                    <tr>
                        <td>Ram Memory Installed Size</td>
                        <td>32 GB</td>
                    </tr>
                </table>
            </div>

            <!-- Purchase Buttons -->
            <div class="purchase-section">
		<form action = "cart.php" method = "POST">
                <button type = "submit" class="add-to-cart" name = "add_to_cart">Add to Cart</button>
		<input type ="hidden" name = "product_name" value = "HP 17 Business Laptop"/>
		<input type = "hidden" name = "product_price" value = "470.00" />
		<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
        </form>

		<!-- Modify the "Buy Now" button form -->
        <form action="buy_now_checkout.php" method="POST">
                <input type ="hidden" name = "product_name" value = "HP 17 Business Laptop"/>
	        	<input type = "hidden" name = "product_price" value = "470.00" />
	        	<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
                <button type="submit" class="buy-now" name = "buy_now">Buy Now</button>
                </form>
            </div>
        </div>
    </div>

 
    

    <!-- Main Product Container -->
    <div class="container" style="display: <?php echo showCategory('furniture', $category); ?>;">
        <!-- Product Image Section -->
        <div class="image-section">
            <img src="pictures/furniture.webp" alt="Coffee Table for Living Room">
        </div>

        <!-- Product Details Section -->
        <div class="details-section">
            <h1>Coffee Table for Living Room</h1>

            <!-- Product Rating -->
            <div class="rating">
                <img src="pictures/Rating.jpg" alt="4.5 out of 5 stars rating">
            </div>

            <!-- Product Price -->
            <p class="price">$159.99</p>

            <!-- Product Description -->
            <p>NSdirect Round Coffee Table,36" Coffee Table for Living Room,2-Tier Rustic Wood Desktop with Storage Shelf Modern Design Home Furniture(Light Walnut).</p>

            <!-- Specifications -->
            <div class="specifications-section">
                <h3>Product Specifications</h3>
                <table>
                    <tr>
                        <th>Feature</th>
                        <th>Details</th>
                    </tr>
                    <tr>
                        <td>Brand</td>
                        <td>NSdirect</td>
                    </tr>
                    <tr>
                        <td>Color</td>
                        <td>Light Walnut</td>
                    </tr>
                    <tr>
                        <td>Weight</td>
                        <td>300 Pounds</td>
                    </tr>
                    <tr>
                        <td>Dimensions</td>
                        <td>36"D x 36"W x 18"H</td>
                    </tr>
                </table>
            </div>

            <!-- Purchase Buttons -->
            <div class="purchase-section">
		<form action = "cart.php" method = "POST">
                <button type = "submit" class="add-to-cart" name = "add_to_cart">Add to Cart</button>
		<input type ="hidden" name = "product_name" value = "Coffee Table"/>
		<input type = "hidden" name = "product_price" value = "159.99" />
		<input type = "hidden" name = "product_quantity" value = "1" min = "1" />

		</form>
        <form action="buy_now_checkout.php" method="POST">
                 <button type="submit" class="buy-now" name = "buy_now">Buy Now</button>

                  <input type="hidden" name="product_name" value="Coffee Table"/>
                  <input type="hidden" name="product_price" value="159.99"/>
                  <input type="hidden" name="product_quantity" value="1"/>
        </form>
            </div>
        </div>
    </div>

    <!-- Main Product Container -->
    <div class="container" style="display: <?php echo showCategory('personal_care', $category); ?>;">
        <!-- Product Image Section -->
        <div class="image-section">
            <img src="pictures/personal_care.webp" alt="Beauty by Earth Self Tanner">
        </div>

        <!-- Product Details Section -->
        <div class="details-section">
            <h1>Beauty by Earth Self Tanner</h1>

            <!-- Product Rating -->
            <div class="rating">
                <img src="pictures/Rating.jpg" alt="4.5 out of 5 stars rating">
            </div>

            <!-- Product Price -->
            <p class="price">$35.99</p>

            <!-- Product Description -->
            <p>Beauty by Earth Self Tanner - USA Made with Natural & Organic Ingredients, Moisturizing Self Tanning Lotion with Aloe Vera & Coconut for a Natural Glow, Streak-Free Fake Tan, Medium to Dark</p>
            <!-- Specifications -->
            <div class="specifications-section">
                <h3>Product Specifications</h3>
                <table>
                    <tr>
                        <th>Feature</th>
                        <th>Details</th>
                    </tr>
                    <tr>
                        <td>Brand</td>
                        <td>Beauty by Earth</td>
                    </tr>
                    <tr>
                        <td>Color</td>
                        <td>Medium to Dark</td>
                    </tr>
                    <tr>
                        <td>Weight</td>
                        <td>220 ml</td>
                    </tr>
                    <tr>
                        <td>Product Benefits</td>
                        <td>Hydrating</td>
                    </tr>
                </table>
            </div>

            <!-- Purchase Buttons -->
            <div class="purchase-section">
		<form action = "cart.php" method = "POST">
                <button type = "submit" class="add-to-cart" name = "add_to_cart">Add to Cart</button>
		<input type ="hidden" name = "product_name" value = "Beauty by Earth"/>
		<input type = "hidden" name = "product_price" value = "35" />
		<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
        </form>

		<!-- Modify the "Buy Now" button form -->
        <form action="buy_now_checkout.php" method="POST">
                <input type ="hidden" name = "product_name" value = "Beauty by Earth"/>
	        	<input type = "hidden" name = "product_price" value = "35" />
	        	<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
                <button type="submit" class="buy-now" name = "buy_now">Buy Now</button>
                </form>
            </div>
        </div>
    </div>



    <!-- Main Product Container -->
    <div class="container" style="display: <?php echo showCategory('clothes', $category); ?>;">
        <!-- Product Image Section -->
        <div class="image-section">
            <img src="pictures/clothes.jpg" alt="COOFANDY Men's Hooded Sweatshirts">
        </div>

        <!-- Product Details Section -->
        <div class="details-section">
            <h1>COOFANDY Men's Hooded Sweatshirts</h1>

            <!-- Product Rating -->
            <div class="rating">
                <img src="pictures/Rating.jpg" alt="4.5 out of 5 stars rating">
            </div>

            <!-- Product Price -->
            <p class="price">$22.39</p>

            <!-- Product Description -->
            <p>COOFANDY Men's Hooded Sweatshirts Long Sleeve Casual Pullover Hoodie Waffle Knit Sweatshirt with Pocket</p>

            <!-- Specifications -->
            <div class="specifications-section">
                <h3>Product Specifications</h3>
                <table>
                    <tr>
                        <th>Feature</th>
                        <th>Details</th>
                    </tr>
                    <tr>
                        <td>Fabric type</td>
                        <td>Soft Material</td>
                    </tr>
                    <tr>
                        <td>Care instructions</td>
                        <td>Machine Wash</td>
                    </tr>
                    <tr>
                        <td>Closure type</td>
                        <td>Lace Up</td>
                    </tr>
                    <tr>
                        <td>Neck style</td>
                        <td>Hooded Neck</td>
                    </tr>
                </table>
            </div>

            <!-- Purchase Buttons -->
            <div class="purchase-section">
		<form action = "cart.php" method = "POST">
                <button type = "submit" class="add-to-cart" name = "add_to_cart">Add to Cart</button>
		<input type ="hidden" name = "product_name" value = "Hooded Sweatshirts"/>
		<input type = "hidden" name = "product_price" value = "22.39" />
		<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
        </form>

		<!-- Modify the "Buy Now" button form -->
        <form action="buy_now_checkout.php" method="POST">
                <input type ="hidden" name = "product_name" value = "Hooded Sweatshirts"/>
	        	<input type = "hidden" name = "product_price" value = "22.39" />
	        	<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
                <button type="submit" class="buy-now" name = "buy_now">Buy Now</button>
                </form>
            </div>
        </div>
    </div>




    <!-- Main Product Container -->
    <div class="container" style="display: <?php echo showCategory('beauty_picks', $category); ?>;">
        <!-- Product Image Section -->
        <div class="image-section">
            <img src="pictures/beauty_picks.jpg" alt="Water Flosser for Teeth Cleaning">
        </div>

        <!-- Product Details Section -->
        <div class="details-section">
            <h1>Water Flosser for Teeth Cleaning</h1>

            <!-- Product Rating -->
            <div class="rating">
                <img src="pictures/Rating.jpg" alt="4.5 out of 5 stars rating">
            </div>

            <!-- Product Price -->
            <p class="price">$19.99</p>

            <!-- Product Description -->
            <p>SAMSUNG Galaxy S24 Ultra Cell Phone, 512GB AI Smartphone, Unlocked Android, 200MP, 100x Zoom Cameras, Long Battery Life, S Pen, US Version, 2024, Titanium Black.</p>

            <!-- Specifications -->
            <div class="specifications-section">
                <h3>Product Specifications</h3>
                <table>
                    <tr>
                        <th>Feature</th>
                        <th>Details</th>
                    </tr>
                    <tr>
                        <td>Brand</td>
                        <td>Setonia</td>
                    </tr>
                    <tr>
                        <td>Color</td>
                        <td>Black</td>
                    </tr>
                    <tr>
                        <td>Power Source</td>
                        <td>Battery Powered</td>
                    </tr>
                    <tr>
                        <td>Product Benefits</td>
                        <td>Gum Healths</td>
                    </tr>
                </table>
            </div>

            <!-- Purchase Buttons -->
            <div class="purchase-section">
		<form action = "cart.php" method = "POST">
                <button type = "submit" class="add-to-cart" name = "add_to_cart">Add to Cart</button>
		<input type ="hidden" name = "product_name" value = "Water Flosser"/>
		<input type = "hidden" name = "product_price" value = "19.99" />
		<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
        </form>

		<!-- Modify the "Buy Now" button form -->
        <form action="buy_now_checkout.php" method="POST">
                <input type ="hidden" name = "product_name" value = "Water Flosser"/>
	        	<input type = "hidden" name = "product_price" value = "19.99" />
	        	<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
                <button type="submit" class="buy-now" name = "buy_now">Buy Now</button>
                </form>
            </div>
        </div>
    </div>




    <!-- Main Product Container -->
    <div class="container" style="display: <?php echo showCategory('pet_care', $category); ?>;">
        <!-- Product Image Section -->
        <div class="image-section">
            <img src="pictures/pet_care.jpg" alt="The BARK Buff">
        </div>

        <!-- Product Details Section -->
        <div class="details-section">
            <h1>The BARK Buff</h1>

            <!-- Product Rating -->
            <div class="rating">
                <img src="pictures/Rating.jpg" alt="4.5 out of 5 stars rating">
            </div>

            <!-- Product Price -->
            <p class="price">$29.99</p>

            <!-- Product Description -->
            <p>The BARK Buff - Dog Nail Scratch Board with Built-in Treat Box for Stress-Free Nail Maintenance - Durable Pet Care Solution for Dog Nail File - Extra Sandpaper Sheet Included.</p>

            <!-- Specifications -->
            <div class="specifications-section">
                <h3>Product Specifications</h3>
                <table>
                    <tr>
                        <th>Feature</th>
                        <th>Details</th>
                    </tr>
                    <tr>
                        <td>Target Species</td>
                        <td>Dog</td>
                    </tr>
                    <tr>
                        <td>Breed Recommendation</td>
                        <td>All Breed Sizes</td>
                    </tr>
                    <tr>
                        <td>Specific Uses For Product</td>
                        <td>Dog Nail Maintenance</td>
                    </tr>
                    <tr>
                        <td>Material</td>
                        <td>Pine Wood</td>
                    </tr>
                </table>
            </div>

            <!-- Purchase Buttons -->
            <div class="purchase-section">
		<form action = "cart.php" method = "POST">
                <button type = "submit" class="add-to-cart" name = "add_to_cart">Add to Cart</button>
		<input type ="hidden" name = "product_name" value = "The BARK Buff"/>
		<input type = "hidden" name = "product_price" value = "29.99" />
		<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
        </form>

		<!-- Modify the "Buy Now" button form -->
        <form action="buy_now_checkout.php" method="POST">
                <input type ="hidden" name = "product_name" value = "The BARK Buff"/>
	        	<input type = "hidden" name = "product_price" value = "29.99" />
	        	<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
                <button type="submit" class="buy-now" name = "buy_now">Buy Now</button>
                </form>
            </div>
        </div>
    </div>


    <!-- Main Product Container -->
    <div class="container" style="display: <?php echo showCategory('toys', $category); ?>;">
        <!--< Product Image Section -->
        <div class="image-section">
            <img src="pictures/toys.webp" alt="Bear Plush Stuffed Animal">
        </div>

        <!-- Product Details Section -->
        <div class="details-section">
            <h1>Bear Plush Stuffed Animal</h1>

            <!-- Product Rating -->
            <div class="rating">
                <img src="pictures/Rating.jpg" alt="4.5 out of 5 stars rating">
            </div>

            <!-- Product Price -->
            <p class="price">$20.99</p>

            <!-- Product Description -->
            <p>Libima 14 Inch Remembrance Bear Plush Stuffed Animal with Recorder Soft Doll Fabric Animal Toy with a Picture Frame for Baby Shower Wedding Birthday Gift (Dark Brown, 14 Inch)</p>

            <!-- Specifications -->
            <div class="specifications-section">
                <h3>Product Specifications</h3>
                <table>
                    <tr>
                        <th>Feature</th>
                        <th>Details</th>
                    </tr>
                    <tr>
                        <td>Brand</td>
                        <td>Libima</td>
                    </tr>
                    <tr>
                        <td>Color</td>
                        <td>Dark Brown</td>
                    </tr>
                    <tr>
                        <td>Product Benefits</td>
                        <td>Lovely and Warm Gift Choice</td>
                    </tr>
                    <tr>
                        <td>Dimensions</td>
                        <td>3.2 x 3.2 inches </td>
                    </tr>
                </table>
            </div>

            <!-- Purchase Buttons -->
            <div class="purchase-section">
		<form action = "cart.php" method = "POST">
                <button type = "submit" class="add-to-cart" name = "add_to_cart">Add to Cart</button>
		<input type ="hidden" name = "product_name" value = "Bear Plush Stuffed Animal"/>
		<input type = "hidden" name = "product_price" value = "20.99" />
		<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
        </form>

		<!-- Modify the "Buy Now" button form -->
        <form action="buy_now_checkout.php" method="POST">
                <input type ="hidden" name = "product_name" value = "Bear Plush Stuffed Animal"/>
	        	<input type = "hidden" name = "product_price" value = "20.99" />
	        	<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
                <button type="submit" class="buy-now" name = "buy_now">Buy Now</button>
                </form>
            </div>
        </div>
    </div>


    <!-- Main Product Container -->
    <div class="container" style="display: <?php echo showCategory('fashion', $category); ?>;">
        <!-- Product Image Section -->
        <div class="image-section">
            <img src="pictures/fashion.jpg" alt="DUPER Sunglasses">
        </div>

        <!-- Product Details Section -->
        <div class="details-section">
            <h1>DUPER Sunglasses</h1>

            <!-- Product Rating -->
            <div class="rating">
                <img src="pictures/Rating.jpg" alt="4.5 out of 5 stars rating">
            </div>

            <!-- Product Price -->
            <p class="price">$11.95</p>

            <!-- Product Description -->
            <p>DUPER Sunglasses Womens Trendy Sunglasses Men y2k sunglasses Wrap Around Sunglasses For Women Unisex Glasses</p>

            <!-- Specifications -->
            <div class="specifications-section">
                <h3>Product Specifications</h3>
                <table>
                    <tr>
                        <th>Feature</th>
                        <th>Details</th>
                    </tr>
                    <tr>
                        <td>Brand</td>
                        <td>DUPER</td>
                    </tr>
                    <tr>
                        <td>Color</td>
                        <td>Black</td>
                    </tr>
                    <tr>
                        <td>Origin</td>
                        <td>Imported</td>
                    </tr>
                    <tr>
                        <td>Country of Origin</td>
                        <td>India</td>
                    </tr>
                </table>
            </div>

            <!-- Purchase Buttons -->
            <div class="purchase-section">
		<form action = "cart.php" method = "POST">
                <button type = "submit" class="add-to-cart" name = "add_to_cart">Add to Cart</button>
		<input type ="hidden" name = "product_name" value = "DUPER Sunglasses"/>
		<input type = "hidden" name = "product_price" value = "11.95" />
		<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
        </form>

		<!-- Modify the "Buy Now" button form -->
        <form action="buy_now_checkout.php" method="POST">
                <input type ="hidden" name = "product_name" value = "DUPER Sunglasses"/>
	        	<input type = "hidden" name = "product_price" value = "11.95" />
	        	<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
                <button type="submit" class="buy-now" name = "buy_now">Buy Now</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Main Product Container -->
    <div class="container" style="display: <?php echo showCategory('wireless_tech', $category); ?>;">
        <!-- Product Image Section -->
        <div class="image-section">
            <img src="pictures/phone.webp" alt="SAMSUNG Galaxy A15">
        </div>
    <!-- Product Details Section -->
    <div class="details-section">
            <h1>SAMSUNG Galaxy A15</h1>

            <!-- Product Rating -->
            <div class="rating">
                <img src="pictures/Rating.jpg" alt="4.5 out of 5 stars rating">
            </div>

            <!-- Product Price -->
            <p class="price">$199.99</p>

            <!-- Product Description -->
            <p>SAMSUNG Galaxy A15 5G A Series Cell Phone, 128GB Unlocked Android Smartphone, AMOLED Display, Expandable Storage, Knox Security, Super Fast Charging, US Version, 2024, Blue Black</p>

            <!-- Specifications -->
            <div class="specifications-section">
                <h3>Product Specifications</h3>
                <table>
                    <tr>
                        <th>Feature</th>
                        <th>Details</th>
                    </tr>
                    <tr>
                        <td>Brand</td>
                        <td>SAMSUNG</td>
                    </tr>
                    <tr>
                        <td>Color</td>
                        <td>Black</td>
                    </tr>
                    <tr>
                        <td>Ram Memory Installed Size</td>
                        <td>4 GB</td>
                    </tr>
                    <tr>
                        <td>Memory Storage Capacity</td>
                        <td>128 GB</td>
                    </tr>
                </table>
            </div>

            <!-- Purchase Buttons -->
            <div class="purchase-section">
		<form action = "cart.php" method = "POST">
                <button type = "submit" class="add-to-cart" name = "add_to_cart">Add to Cart</button>
		<input type ="hidden" name = "product_name" value = "SAMSUNG Galaxy A15"/>
		<input type = "hidden" name = "product_price" value = "199.99" />
		<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
        </form>

		<!-- Modify the "Buy Now" button form -->
        <form action="buy_now_checkout.php" method="POST">
                <input type ="hidden" name = "product_name" value = "SAMSUNG Galaxy A15"/>
	        	<input type = "hidden" name = "product_price" value = "199.99" />
	        	<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
                <button type="submit" class="buy-now" name = "buy_now">Buy Now</button>
                </form>
            </div>
        </div>
    </div>

     <!-- Main Product Container -->
     <div class="container" style="display: <?php echo showCategory('wireless_tech', $category); ?>;">
        <!-- Product Image Section -->
        <div class="image-section">
            <img src="pictures/watch.webp" alt="Small Smart Watch">
        </div>
    <!-- Product Details Section -->
    <div class="details-section">
            <h1>Small Smart Watch</h1>

            <!-- Product Rating -->
            <div class="rating">
                <img src="pictures/Rating.jpg" alt="4.5 out of 5 stars rating">
            </div>

            <!-- Product Price -->
            <p class="price">$23.99</p>

            <!-- Product Description -->
            <p>40mm Small Smart Watch for Women, 50 Meters Waterproof Sport Step Counter, Fitness Tracker Watch with Heart Rate Blood Oxygen Monitor, Alexa-Built in Smartwatch Pedometer Digital Watch.</p>

            <!-- Specifications -->
            <div class="specifications-section">
                <h3>Product Specifications</h3>
                <table>
                    <tr>
                        <th>Feature</th>
                        <th>Details</th>
                    </tr>
                    <tr>
                        <td>Brand</td>
                        <td>Imzuc</td>
                    </tr>
                    <tr>
                        <td>Color</td>
                        <td>Green</td>
                    </tr>
                    <tr>
                        <td>Operating System</td>
                        <td>Smartphones with iOS 9.0</td>
                    </tr>
                    <tr>
                        <td>Screen Size</td>
                        <td>1.7 Inches</td>
                    </tr>
                </table>
            </div>

            <!-- Purchase Buttons -->
            <div class="purchase-section">
		<form action = "cart.php" method = "POST">
                <button type = "submit" class="add-to-cart" name = "add_to_cart">Add to Cart</button>
		<input type ="hidden" name = "product_name" value = "Small Smart Watch"/>
		<input type = "hidden" name = "product_price" value = "23.99" />
		<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
        </form>

		<!-- Modify the "Buy Now" button form -->
        <form action="buy_now_checkout.php" method="POST">
                <input type ="hidden" name = "product_name" value = "Small Smart Watch"/>
	        	<input type = "hidden" name = "product_price" value = "23.99" />
	        	<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
                <button type="submit" class="buy-now" name = "buy_now">Buy Now</button>
                </form>
            </div>
        </div>
    </div>


    <!-- Main Product Container -->
    <div class="container" style="display: <?php echo showCategory('wireless_tech', $category); ?>;">
        <!-- Product Image Section -->
        <div class="image-section">
            <img src="pictures/tablet.webp" alt="Tablet,10.1 Android Tablet">
        </div>
    <!-- Product Details Section -->
    <div class="details-section">
            <h1>Tablet,10.1" Android Tablet</h1>

            <!-- Product Rating -->
            <div class="rating">
                <img src="pictures/Rating.jpg" alt="4.5 out of 5 stars rating">
            </div>

            <!-- Product Price -->
            <p class="price">$89.99</p>

            <!-- Product Description -->
            <p>Tablet,10.1" Android Tablet with Octa-core Processor 10GB RAM 128GB ROM HD IPS Touchscreen 8H Battery, Wi-Fi 6, BT 5.0, Dual Camera, Google Tablets 2024</p>

            <!-- Specifications -->
            <div class="specifications-section">
                <h3>Product Specifications</h3>
                <table>
                    <tr>
                        <th>Feature</th>
                        <th>Details</th>
                    </tr>
                    <tr>
                        <td>Brand</td>
                        <td>URAO</td>
                    </tr>
                    <tr>
                        <td>Color</td>
                        <td>Black</td>
                    </tr>
                    <tr>
                        <td>Memory Storage Capacity</td>
                        <td>128 GB</td>
                    </tr>
                    <tr>
                        <td>Screen Size</td>
                        <td>10.1 Inches</td>
                    </tr>
                </table>
            </div>

            <!-- Purchase Buttons -->
            <div class="purchase-section">
		<form action = "cart.php" method = "POST">
                <button type = "submit" class="add-to-cart" name = "add_to_cart">Add to Cart</button>
		<input type ="hidden" name = "product_name" value = "Tablet,10.1 Android Tablet"/>
		<input type = "hidden" name = "product_price" value = "89.99" />
		<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
        </form>

		<!-- Modify the "Buy Now" button form -->
        <form action="buy_now_checkout.php" method="POST">
                <input type ="hidden" name = "product_name" value = "Tablet,10.1 Android Tablet"/>
	        	<input type = "hidden" name = "product_price" value = "89.99" />
	        	<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
                <button type="submit" class="buy-now" name = "buy_now">Buy Now</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Main Product Container -->
    <div class="container" style="display: <?php echo showCategory('wireless_tech', $category); ?>;">
        <!-- Product Image Section -->
        <div class="image-section">
            <img src="pictures/headphones.webp" alt="Wireless Headphones">
        </div>
    <!-- Product Details Section -->
    <div class="details-section">
            <h1>Wireless Headphones</h1>

            <!-- Product Rating -->
            <div class="rating">
                <img src="pictures/Rating.jpg" alt="4.5 out of 5 stars rating">
            </div>

            <!-- Product Price -->
            <p class="price">$39.98</p>

            <!-- Product Description -->
            <p>TOZO HT2 Hybrid Active Noise Cancelling Headphones, Wireless Over Ear Bluetooth Headphones, 60H Playtime, Hi-Res Audio Custom EQ via App Deep Bass Comfort Fit Ear Cups, for Home Office Travel</p>

            <!-- Specifications -->
            <div class="specifications-section">
                <h3>Product Specifications</h3>
                <table>
                    <tr>
                        <th>Feature</th>
                        <th>Details</th>
                    </tr>
                    <tr>
                        <td>Brand</td>
                        <td>TOZO</td>
                    </tr>
                    <tr>
                        <td>Color</td>
                        <td>Black</td>
                    </tr>
                    <tr>
                        <td>Ear Placement</td>
                        <td>Over Ear</td>
                    </tr>
                    <tr>
                        <td>Impedance</td>
                        <td>32 Ohm</td>
                    </tr>
                </table>
            </div>

            <!-- Purchase Buttons -->
            <div class="purchase-section">
		<form action = "cart.php" method = "POST">
                <button type = "submit" class="add-to-cart" name = "add_to_cart">Add to Cart</button>
		<input type ="hidden" name = "product_name" value = "Wireless Headphones"/>
		<input type = "hidden" name = "product_price" value = "39.98" />
		<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
        </form>

		<!-- Modify the "Buy Now" button form -->
        <form action="buy_now_checkout.php" method="POST">
                <input type ="hidden" name = "product_name" value = "Wireless Headphones"/>
	        	<input type = "hidden" name = "product_price" value = "39.98" />
	        	<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
                <button type="submit" class="buy-now" name = "buy_now">Buy Now</button>
                </form>
            </div>
        </div>
    </div>


    <!-- Main Product Container -->
    <div class="container" style="display: <?php echo showCategory('shop_deals', $category); ?>;">
        <!-- Product Image Section -->
        <div class="image-section" >
            <img src="pictures/jeans.webp" alt="Men's Athletic-Fit Stretch Jean" style = "height: 540px;width: 260px;margin-left:70px;" >
        </div>
    <!-- Product Details Section -->
    <div class="details-section">
            <h1>Men's Athletic-Fit Stretch Jean</h1>

            <!-- Product Rating -->
            <div class="rating">
                <img src="pictures/Rating.jpg" alt="4.5 out of 5 stars rating">
            </div>

            <!-- Product Price -->
            <p class="price">$26.60</p>

            <!-- Product Description -->
            <p>ATHLETIC FIT: Extra room in the hip and thigh for athletic builds. Sits at the waist.These classic, five-pocket jeans are a wardrobe workhorse, perfect for business casual or everyday on-the-go.</p>

            <!-- Specifications -->
            <div class="specifications-section">
                <h3>Product Specifications</h3>
                <table>
                    <tr>
                        <th>Feature</th>
                        <th>Details</th>
                    </tr>
                    <tr>
                        <td>Fabric type</td>
                        <td>98% Cotton, 2% Elastane</td>
                    </tr>
                    <tr>
                        <td>Care instructions</td>
                        <td>Machine Wash</td>
                    </tr>
                    <tr>
                        <td>Origin</td>
                        <td>Imported</td>
                    </tr>
                    <tr>
                        <td>Country of Origin</td>
                        <td>Bangladesh</td>
                    </tr>
                </table>
            </div>

            <!-- Purchase Buttons -->
            <div class="purchase-section">
		<form action = "cart.php" method = "POST">
                <button type = "submit" class="add-to-cart" name = "add_to_cart">Add to Cart</button>
		<input type ="hidden" name = "product_name" value = "Men's Athletic-Fit Jeans"/>
		<input type = "hidden" name = "product_price" value = "26.60" />
		<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
        </form>

		<!-- Modify the "Buy Now" button form -->
        <form action="buy_now_checkout.php" method="POST">
                <input type ="hidden" name = "product_name" value = "Men's Athletic-Fit Jeans"/>
	        	<input type = "hidden" name = "product_price" value = "26.60" />
	        	<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
                <button type="submit" class="buy-now" name = "buy_now">Buy Now</button>
                </form>
            </div>
        </div>
    </div>


    <!-- Main Product Container -->
    <div class="container" style="display: <?php echo showCategory('shop_deals', $category); ?>;">
        <!-- Product Image Section -->
        <div class="image-section">
            <img src="pictures/dress.jpg" alt="CIDER midi dress" style = "height: 540px;width: 260px;margin-left:70px">
        </div>
    <!-- Product Details Section -->
    <div class="details-section">
            <h1>CIDER midi dress</h1>

            <!-- Product Rating -->
            <div class="rating">
                <img src="pictures/Rating.jpg" alt="4.5 out of 5 stars rating">
            </div>

            <!-- Product Price -->
            <p class="price">$19.99</p>

            <!-- Product Description -->
            <p>Flattering Fit: This CIDER midi dress features a ruched design that contours gracefully to your body shape, offering a flattering fit that accentuates your curves without compromising comfort.</p>

            <!-- Specifications -->
            <div class="specifications-section">
                <h3>Product Specifications</h3>
                <table>
                    <tr>
                        <th>Feature</th>
                        <th>Details</th>
                    </tr>
                    <tr>
                        <td>Fabric type</td>
                        <td>96% Polyester, 4% Elastane</td>
                    </tr>
                    <tr>
                        <td>Care instructions</td>
                        <td>Machine Wash</td>
                    </tr>
                    <tr>
                        <td>Origin</td>
                        <td>Imported</td>
                    </tr>
                    <tr>
                        <td>Closure type</td>
                        <td>Pull On</td>
                    </tr>
                </table>
            </div>

            <!-- Purchase Buttons -->
            <div class="purchase-section">
		<form action = "cart.php" method = "POST">
                <button type = "submit" class="add-to-cart" name = "add_to_cart">Add to Cart</button>
		<input type ="hidden" name = "product_name" value = "CIDER midi dress"/>
		<input type = "hidden" name = "product_price" value = "19.99" />
		<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
        </form>

		<!-- Modify the "Buy Now" button form -->
        <form action="buy_now_checkout.php" method="POST">
                <input type ="hidden" name = "product_name" value = "CIDER midi dress"/>
	        	<input type = "hidden" name = "product_price" value = "19.99" />
	        	<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
                <button type="submit" class="buy-now" name = "buy_now">Buy Now</button>
                </form>
            </div>
        </div>
    </div>




    <!-- Main Product Container -->
    <div class="container" style="display: <?php echo showCategory('shop_deals', $category); ?>;">
        <!-- Product Image Section -->
        <div class="image-section">
            <img src="pictures/sleeveless_shirt.jpg" alt="Sleeveless Cami Shirt">
        </div>
    <!-- Product Details Section -->
    <div class="details-section">
            <h1>Sleeveless Cami Shirt</h1>

            <!-- Product Rating -->
            <div class="rating">
                <img src="pictures/Rating.jpg" alt="4.5 out of 5 stars rating">
            </div>

            <!-- Product Price -->
            <p class="price">$27.98</p>

            <!-- Product Description -->
            <p>Ekouaer Womens Silk Satin Camisole Tank Tops V Neck Spaghetti Strap Blouses Cross Back Sleeveless Cami Shirt</p>

            <!-- Specifications -->
            <div class="specifications-section">
                <h3>Product Specifications</h3>
                <table>
                    <tr>
                        <th>Feature</th>
                        <th>Details</th>
                    </tr>
                    <tr>
                        <td>Fabric type</td>
                        <td>95% Polyester, 5% Spandex</td>
                    </tr>
                    <tr>
                        <td>Care instructions</td>
                        <td>Hand Wash Only</td>
                    </tr>
                    <tr>
                        <td>Origin</td>
                        <td>Importedr</td>
                    </tr>
                    <tr>
                        <td>Closure type</td>
                        <td>Pull On</td>
                    </tr>
                </table>
            </div>

            <!-- Purchase Buttons -->
            <div class="purchase-section">
		<form action = "cart.php" method = "POST">
                <button type = "submit" class="add-to-cart" name = "add_to_cart">Add to Cart</button>
		<input type ="hidden" name = "product_name" value = "Sleeveless Cami Shirt"/>
		<input type = "hidden" name = "product_price" value = "27.98" />
		<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
        </form>

		<!-- Modify the "Buy Now" button form -->
        <form action="buy_now_checkout.php" method="POST">
                <input type ="hidden" name = "product_name" value = "Sleeveless Cami Shirt"/>
	        	<input type = "hidden" name = "product_price" value = "27.98" />
	        	<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
                <button type="submit" class="buy-now" name = "buy_now">Buy Now</button>
                </form>
            </div>
        </div>
    </div>



    <!-- Main Product Container -->
    <div class="container" style="display: <?php echo showCategory('shop_deals', $category); ?>;">
        <!-- Product Image Section -->
        <div class="image-section">
            <img src="pictures/shoes.jpg" alt="Barefoot Walking Shoes">
        </div>
    <!-- Product Details Section -->
    <div class="details-section">
            <h1>Barefoot Walking Shoes</h1>

            <!-- Product Rating -->
            <div class="rating">
                <img src="pictures/Rating.jpg" alt="4.5 out of 5 stars rating">
            </div>

            <!-- Product Price -->
            <p class="price">$42.99</p>

            <!-- Product Description -->
            <p>Men's Wide Slip on Barefoot Walking Shoes | Zero Drop Sole | Minimalist Footwear | Wide Toe Box</p>

            <!-- Specifications -->
            <div class="specifications-section">
                <h3>Product Specifications</h3>
                <table>
                    <tr>
                        <th>Feature</th>
                        <th>Details</th>
                    </tr>
                    <tr>
                        <td>Care instructions</td>
                        <td>Machine Wash</td>
                    </tr>
                    <tr>
                        <td>Color</td>
                        <td>Grey</td>
                    </tr>
                    <tr>
                        <td>Sole material</td>
                        <td>Oxford</td>
                    </tr>
                    <tr>
                        <td>Closure type</td>
                        <td>Lace-Up</td>
                    </tr>
                </table>
            </div>

            <!-- Purchase Buttons -->
            <div class="purchase-section">
		<form action = "cart.php" method = "POST">
                <button type = "submit" class="add-to-cart" name = "add_to_cart">Add to Cart</button>
		<input type ="hidden" name = "product_name" value = "Barefoot Walking Shoes"/>
		<input type = "hidden" name = "product_price" value = "42.99" />
		<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
        </form>

		<!-- Modify the "Buy Now" button form -->
        <form action="buy_now_checkout.php" method="POST">
                <input type ="hidden" name = "product_name" value = "Barefoot Walking Shoes"/>
	        	<input type = "hidden" name = "product_price" value = "42.99" />
	        	<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
                <button type="submit" class="buy-now" name = "buy_now">Buy Now</button>
                </form>
            </div>
        </div>
    </div>



    <!-- Main Product Container -->
    <div class="container" style="display: <?php echo showCategory('home_arrivals', $category); ?>;">
        <!-- Product Image Section -->
        <div class="image-section">
            <img src="pictures/dining.jpg" alt="Dining Chair Set">
        </div>
    <!-- Product Details Section -->
    <div class="details-section">
            <h1>Dining Chair Set</h1>

            <!-- Product Rating -->
            <div class="rating">
                <img src="pictures/Rating.jpg" alt="4.5 out of 5 stars rating">
            </div>

            <!-- Product Price -->
            <p class="price">$79.99</p>

            <!-- Product Description -->
            <p>2Buyshop Dining Chair Set of 2,Upholstered High-end Tufted Upholstered Fabric Dining Chair with Solid Wood Legs for Kitchen Dining Room - Beige</p>

            <!-- Specifications -->
            <div class="specifications-section">
                <h3>Product Specifications</h3>
                <table>
                    <tr>
                        <th>Feature</th>
                        <th>Details</th>
                    </tr>
                    <tr>
                        <td>Brand</td>
                        <td>2Buyshop</td>
                    </tr>
                    <tr>
                        <td>Color</td>
                        <td>B-cream</td>
                    </tr>
                    <tr>
                        <td>Shape</td>
                        <td>L-Shape</td>
                    </tr>
                    <tr>
                        <td>Item dimensions L x W x H</td>
                        <td>10.04 x 7.76 x 14.72 inches</td>
                    </tr>
                </table>
            </div>

            <!-- Purchase Buttons -->
            <div class="purchase-section">
		<form action = "cart.php" method = "POST">
                <button type = "submit" class="add-to-cart" name = "add_to_cart">Add to Cart</button>
		<input type ="hidden" name = "product_name" value = "Dining Chair Set"/>
		<input type = "hidden" name = "product_price" value = "79.99" />
		<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
        </form>

		<!-- Modify the "Buy Now" button form -->
        <form action="buy_now_checkout.php" method="POST">
                <input type ="hidden" name = "product_name" value = "Dining Chair Set"/>
	        	<input type = "hidden" name = "product_price" value = "79.99" />
	        	<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
                <button type="submit" class="buy-now" name = "buy_now">Buy Now</button>
                </form>
            </div>
        </div>
    </div>



    <!-- Main Product Container -->
    <div class="container" style="display: <?php echo showCategory('home_arrivals', $category); ?>;">
        <!-- Product Image Section -->
        <div class="image-section">
            <img src="pictures/home_decore.webp" alt="Farmhouse Glass Flower">
        </div>
    <!-- Product Details Section -->
    <div class="details-section">
            <h1>Farmhouse Glass Flower</h1>

            <!-- Product Rating -->
            <div class="rating">
                <img src="pictures/Rating.jpg" alt="4.5 out of 5 stars rating">
            </div>

            <!-- Product Price -->
            <p class="price">$32.99</p>

            <!-- Product Description -->
            <p>Farmhouse Glass Lantern Vase Vintage Flower Vases with Plants Hydrangea Lights Rustic Floral Arrangement Centerpieces Home Decor Hostess Housewarming Gift
            </p>

            <!-- Specifications -->
            <div class="specifications-section">
                <h3>Product Specifications</h3>
                <table>
                    <tr>
                        <th>Feature</th>
                        <th>Details</th>
                    </tr>
                    <tr>
                        <td>Brand</td>
                        <td>FIAHOSEY</td>
                    </tr>
                    <tr>
                        <td>Color</td>
                        <td>Vase+greenery+light+hydrangea</td>
                    </tr>
                    <tr>
                        <td>Material</td>
                        <td>Metal</td>
                    </tr>
                    <tr>
                        <td>Product Dimensions</td>
                        <td>6.29"L x 6.29"W x 10"H</td>
                    </tr>
                </table>
            </div>

            <!-- Purchase Buttons -->
            <div class="purchase-section">
		<form action = "cart.php" method = "POST">
                <button type = "submit" class="add-to-cart" name = "add_to_cart">Add to Cart</button>
		<input type ="hidden" name = "product_name" value = "Farmhouse Glass Flower"/>
		<input type = "hidden" name = "product_price" value = "32.99" />
		<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
        </form>

		<!-- Modify the "Buy Now" button form -->
        <form action="buy_now_checkout.php" method="POST">
                <input type ="hidden" name = "product_name" value = "Farmhouse Glass Flower"/>
	        	<input type = "hidden" name = "product_price" value = "32.99" />
	        	<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
                <button type="submit" class="buy-now" name = "buy_now">Buy Now</button>
                </form>
            </div>
        </div>
    </div>


<!-- Main Product Container -->
<div class="container" style="display: <?php echo showCategory('home_arrivals', $category); ?>;">
        <!-- Product Image Section -->
        <div class="image-section">
            <img src="pictures/home_improvement.jpg" alt="Sujeet Night Light">
        </div>
    <!-- Product Details Section -->
    <div class="details-section">
            <h1>Sujeet Night Light</h1>

            <!-- Product Rating -->
            <div class="rating">
                <img src="pictures/Rating.jpg" alt="4.5 out of 5 stars rating">
            </div>

            <!-- Product Price -->
            <p class="price">$15.99</p>

            <!-- Product Description -->
            <p>Sujeet Night Light, Night Lights Plug into Wall 4-Pack, Nightlight Plug in Night Light, Dusk to Dawn Night Lamp Led Night Light for Bedroom, Bathroom, Hallway Warm White
            </p>

            <!-- Specifications -->
            <div class="specifications-section">
                <h3>Product Specifications</h3>
                <table>
                    <tr>
                        <th>Feature</th>
                        <th>Details</th>
                    </tr>
                    <tr>
                        <td>Finish Type	</td>
                        <td>Unfinished</td>
                    </tr>
                    <tr>
                        <td>Color</td>
                        <td>Warm White</td>
                    </tr>
                    <tr>
                        <td>Base Material</td>
                        <td>Plastic</td>
                    </tr>
                    <tr>
                        <td>Product Dimensions</td>
                        <td>2.4"D x 2.4"W x 1.6"H</td>
                    </tr>
                </table>
            </div>

            <!-- Purchase Buttons -->
            <div class="purchase-section">
		<form action = "cart.php" method = "POST">
                <button type = "submit" class="add-to-cart" name = "add_to_cart">Add to Cart</button>
		<input type ="hidden" name = "product_name" value = "Sujeet Night Light"/>
		<input type = "hidden" name = "product_price" value = "15.99" />
		<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
        </form>

		<!-- Modify the "Buy Now" button form -->
        <form action="buy_now_checkout.php" method="POST">
                <input type ="hidden" name = "product_name" value = "Sujeet Night Light"/>
	        	<input type = "hidden" name = "product_price" value = "15.99" />
	        	<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
                <button type="submit" class="buy-now" name = "buy_now">Buy Now</button>
                </form>
            </div>
        </div>
    </div>

    
<!-- Main Product Container -->
<div class="container" style="display: <?php echo showCategory('home_arrivals', $category); ?>;">
        <!-- Product Image Section -->
        <div class="image-section">
            <img src="pictures/bed.webp" alt="Cooling Bed Sheets">
        </div>
    <!-- Product Details Section -->
    <div class="details-section">
            <h1>Cooling Bed Sheets</h1>

            <!-- Product Rating -->
            <div class="rating">
                <img src="pictures/Rating.jpg" alt="4.5 out of 5 stars rating">
            </div>

            <!-- Product Price -->
            <p class="price">$42.90</p>

            <!-- Product Description -->
            <p>Shilucheng 6-Piece Queen Size Sheets Set，Blend of 60% Rayon Derived from Bamboo_ and 40% Polyester，Cooling Bed Sheets, Silky Bedding Sheets & Pillowcases, 16 Inch Deep Pockets (Queen,Beige)

            </p>

            <!-- Specifications -->
            <div class="specifications-section">
                <h3>Product Specifications</h3>
                <table>
                    <tr>
                        <th>Feature</th>
                        <th>Details</th>
                    </tr>
                    <tr>
                        <td>Brand</td>
                        <td>Queen Beige</td>
                    </tr>
                    <tr>
                        <td>Color</td>
                        <td>Beige</td>
                    </tr>
                    <tr>
                        <td>Size</td>
                        <td>Queen - 6 Pieces Set</td>
                    </tr>
                    <tr>
                        <td>Product Dimensions</td>
                        <td>2.4"D x 2.4"W x 1.6"H</td>
                    </tr>
                </table>
            </div>

            <!-- Purchase Buttons -->
            <div class="purchase-section">
		<form action = "cart.php" method = "POST">
                <button type = "submit" class="add-to-cart" name = "add_to_cart">Add to Cart</button>
		<input type ="hidden" name = "product_name" value = "Cooling Bed Sheets"/>
		<input type = "hidden" name = "product_price" value = "42.90" />
		<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
        </form>

		<!-- Modify the "Buy Now" button form -->
        <form action="buy_now_checkout.php" method="POST">
                <input type ="hidden" name = "product_name" value = "Cooling Bed Sheets"/>
	        	<input type = "hidden" name = "product_price" value = "42.90" />
	        	<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
                <button type="submit" class="buy-now" name = "buy_now">Buy Now</button>
                </form>
            </div>
        </div>
    </div>



<!-- Main Product Container -->
<div class="container" style="display: <?php echo showCategory('electronics', $category); ?>;">
        <!-- Product Image Section -->
        <div class="image-section">
            <img src="pictures/cpu.jpg" alt="Lenovo V50T Gen 2 Desktop Tower">
        </div>
    <!-- Product Details Section -->
    <div class="details-section">
            <h1>Lenovo V50T Gen 2 Desktop Towers</h1>

            <!-- Product Rating -->
            <div class="rating">
                <img src="pictures/Rating.jpg" alt="4.5 out of 5 stars rating">
            </div>

            <!-- Product Price -->
            <p class="price">$929.99</p>

            <!-- Product Description -->
            <p>Lenovo V50T Gen 2 Desktop Tower, Intel i9-11900K, 64GB RAM, 2TB NVMe SSD, UHD Graphics 750, USB C, DisplayPort, HDMI, VGA, DVD, Card Reader, AC Wi-Fi, Bluetooth, Windows 11 Pro, Black
            </p>

            <!-- Specifications -->
            <div class="specifications-section">
                <h3>Product Specifications</h3>
                <table>
                    <tr>
                        <th>Feature</th>
                        <th>Details</th>
                    </tr>
                    <tr>
                        <td>Brand</td>
                        <td>Lenovo</td>
                    </tr>
                    <tr>
                        <td>Operating System</td>
                        <td>Windows 11 Pro</td>
                    </tr>
                    <tr>
                        <td>CPU Model</td>
                        <td>Core i9</td>
                    </tr>
                    <tr>
                        <td>Memory Storage Capacity</td>
                        <td>2 TB</td>
                    </tr>
                </table>
            </div>

            <!-- Purchase Buttons -->
            <div class="purchase-section">
		<form action = "cart.php" method = "POST">
                <button type = "submit" class="add-to-cart" name = "add_to_cart">Add to Cart</button>
		<input type ="hidden" name = "product_name" value = "Lenovo V50T Gen 2 Desktop"/>
		<input type = "hidden" name = "product_price" value = "929.99" />
		<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
        </form>

		<!-- Modify the "Buy Now" button form -->
        <form action="buy_now_checkout.php" method="POST">
                <input type ="hidden" name = "product_name" value = "Lenovo V50T Gen 2 Desktop"/>
	        	<input type = "hidden" name = "product_price" value = "929.99" />
	        	<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
                <button type="submit" class="buy-now" name = "buy_now">Buy Now</button>
                </form>
            </div>
        </div>
    </div>


<!-- Main Product Container -->
<div class="container" style="display: <?php echo showCategory('electronics', $category); ?>;">
        <!-- Product Image Section -->
        <div class="image-section">
            <img src="pictures/hdd.webp" alt="External Hard Drive" style = "height:550px;width:350px">
        </div>
    <!-- Product Details Section -->
    <div class="details-section">
            <h1>External Hard Drive</h1>

            <!-- Product Rating -->
            <div class="rating">
                <img src="pictures/Rating.jpg" alt="4.5 out of 5 stars rating">
            </div>

            <!-- Product Price -->
            <p class="price">$319.99</p>

            <!-- Product Description -->
            <p>WD 20TB Elements Desktop External Hard Drive, USB 3.0 drive for plug-and-play storage - WDBWLG0200HBK-NESN
            </p>

            <!-- Specifications -->
            <div class="specifications-section">
                <h3>Product Specifications</h3>
                <table>
                    <tr>
                        <th>Feature</th>
                        <th>Details</th>
                    </tr>
                    <tr>
                        <td>Brand</td>
                        <td>Western Digital</td>
                    </tr>
                    <tr>
                        <td>Digital Storage Capacity</td>
                        <td>20000 GB</td>
                    </tr>
                    <tr>
                        <td>Color</td>
                        <td>Black</td>
                    </tr>
                    <tr>
                        <td>Hard Disk Interface</td>
                        <td>USB 3.0</td>
                    </tr>
                </table>
            </div>

            <!-- Purchase Buttons -->
            <div class="purchase-section">
		<form action = "cart.php" method = "POST">
                <button type = "submit" class="add-to-cart" name = "add_to_cart">Add to Cart</button>
		<input type ="hidden" name = "product_name" value = "External Hard Drive"/>
		<input type = "hidden" name = "product_price" value = "319.99" />
		<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
        </form>

		<!-- Modify the "Buy Now" button form -->
        <form action="buy_now_checkout.php" method="POST">
                <input type ="hidden" name = "product_name" value = "External Hard Drive"/>
	        	<input type = "hidden" name = "product_price" value = "319.99" />
	        	<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
                <button type="submit" class="buy-now" name = "buy_now">Buy Now</button>
                </form>
            </div>
        </div>
    </div>




    <div class="container" style="display: <?php echo showCategory('electronics', $category); ?>;">
        <!-- Product Image Section -->
        <div class="image-section">
            <img src="pictures/mouse.webp" alt="Wireless Computer Mouse for PC "/>
        </div>
    <!-- Product Details Section -->
    <div class="details-section">
            <h1>Wireless Computer Mouse</h1>

            <!-- Product Rating -->
            <div class="rating">
                <img src="pictures/Rating.jpg" alt="4.5 out of 5 stars rating">
            </div>

            <!-- Product Price -->
            <p class="price">$26.40</p>

            <!-- Product Description -->
            <p>Logitech M510 Wireless Computer Mouse for PC with USB Unifying Receiver - Graphite Your hand can relax in comfort hour after hour with this ergonomically designed mouse. Its contoured shape with soft rubber grips, gently curved sides and broad palm area give you the support you need for effortless control all day long.

            </p>

            <!-- Specifications -->
            <div class="specifications-section">
                <h3>Product Specifications</h3>
                <table>
                    <tr>
                        <th>Feature</th>
                        <th>Details</th>
                    </tr>
                    <tr>
                        <td>Brand</td>
                        <td>Logitech</td>
                    </tr>
                    <tr>
                        <td>Connectivity Technology</td>
                        <td>Bluetooth, USB</td>
                    </tr>
                    <tr>
                        <td>Color</td>
                        <td>Graphite</td>
                    </tr>
                    <tr>
                        <td>Movement Detection Technology</td>
                        <td>Optical</td>
                    </tr>
                </table>
            </div>

            <!-- Purchase Buttons -->
            <div class="purchase-section">
		<form action = "cart.php" method = "POST">
                <button type = "submit" class="add-to-cart" name = "add_to_cart">Add to Cart</button>
		<input type ="hidden" name = "product_name" value = "Wireless Computer Mouse"/>
		<input type = "hidden" name = "product_price" value = "26.40" />
		<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
        </form>

		<!-- Modify the "Buy Now" button form -->
        <form action="buy_now_checkout.php" method="POST">
                <input type ="hidden" name = "product_name" value = "Wireless Computer Mouse"/>
	        	<input type = "hidden" name = "product_price" value = "26.40" />
	        	<input type = "hidden" name = "product_quantity" value = "1" min = "1"/>
                <button type="submit" class="buy-now" name = "buy_now">Buy Now</button>
                </form>
            </div>
        </div>
    </div>




    <!-- Reviews Section -->
    <div class="container reviews-section">
        <h2>Customer Reviews</h2>

        <!-- Individual Review -->
        <div class="review">
            <h3>Great Product!</h3>
            <p>The Samsung Galaxy S24 Ultra, with its impressive 512GB storage capacity, sets a high bar in the smartphone market, offering a blend of cutting-edge technology, sleek design, and robust performance.</p>
        </div>

        <div class="review">
            <h3>Highly Recommend</h3>
            <p>Great phone and the service from Heaven Star Electronics, was super fast & efficient.</p>
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