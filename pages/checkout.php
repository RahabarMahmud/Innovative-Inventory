<!-- checkout.php for Innovative Inventory, version 4 -->
<!DOCTYPE html>

<html lang="en">
<!-- document_head.html -->
<?php
    session_start();
    if(!preg_match('/shoppingCart.php/', $_SERVER['HTTP_REFERER']))
    header("Location: shoppingCart.php?productID=view");
    $customerID = $_SESSION['customer_id'];
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
       include '../scripts/connectToDatabase.php';
      ?>
    </header>

    <main class="w3-container">
        <article class="w3-containter w3-border-left w3-border-right w3-border-black
         w3-light-blue">
            <?php 
            include("../scripts/checkoutProcess.php");
            ?>
        </article>
    </main>

    <!--footer.html -->
    <?php 
     include '../common/footer.html';  
    ?>

</body>

</html>