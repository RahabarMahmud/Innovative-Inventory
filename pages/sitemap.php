<!-- sitemap.php for Innovative Inventory, version 4 -->
<!DOCTYPE html>

<html lang="en">
<!-- document_head.html -->
<?php 
   session_start();
   include '../common/document_head.html'; 
  ?>

<body class="body w3-auto">
    <header class="w3-container">
        <!-- banner.html -->
        <?php 
       include '../common/banner.php';      
      ?>

        <!-- menus.html -->
        <?php 
       include '../common/menus.html'; 
      ?>
    </header>

    <main class="w3-container">
        <div class="w3-container w3-border-left w3-border-right
                  w3-border-black w3-blue">
            <div class="w3-half w3-border w3-border-black">
                <ul class="w3-ul">
                    <li>
                        <h4 class="w3-wide"><a href="my_business.php">Home</a></h4>
                    </li>
                </ul>
                <ul class="w3-ul w3-border-top w3-border-black">
                    <li>
                        <h4 class="w3-wide">e-store</h4>
                    </li>
                    <li><a href="pages/estore.php">e-store Options</a></li>
                    <li><a href="pages/catalog.php">Product Catalog</a></li>
                    <li><a href="pages/formRegistration.php">Register</a></li>
                    <li><a href="pages/formLogin.php">Login</a></li>
                    <li><a href="pages/shoppingCart.php?productID=view">View Shopping Cart</a></li>
                    <li><a href="pages/checkout.php">Checkout</a></li>
                    <li><a href="pages/logout.php">Logout</a></li>
                </ul>
            </div>
            <div class="w3-half w3-border w3-border-black">
                <ul class="w3-ul">
                    <li>
                        <h4 class="w3-wide">Events</h4>
                    </li>
                    <li><a href="pages/events_info_sessions.php">Info Sessions</a></li>
                    <li><a href="pages/events_future.php">Future Events</a></li>
                    <li><a href="pages/events_special.php">Special Events</a></li>
                </ul>
                <ul class="w3-ul w3-border-top w3-border-black">
                    <li>
                        <h4 class="w3-wide">About Us</h4>
                    </li>
                    <li><a href="pages/vision.php">Vision and Mission</a></li>
                    <li><a href="pages/locations.php">Locations</a></li>
                    <li><a href="pages/formFeedback.php">Tell Us What You Think</a></li>
                </ul>
                <ul class="w3-ul w3-border-top w3-border-black">
                    <li>
                        <h4 class="w3-wide">
                            <a href="pages/sitemap.php">Site Map</a>
                        </h4>
                    </li>
                </ul>
            </div>
        </div>
    </main>

    <!-- footer.html -->
    <?php 
     include '../common/footer.html';  
    ?>
</body>

</html>