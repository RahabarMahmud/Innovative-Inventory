<!--shoppingCart.php-->
<!DOCTYPE html>

<html lang="en">
<!-- document_head.html -->
<?php
    session_start();
    $customerID = isset($_SESSION['customer_id']) 
    ? $_SESSION['customer_id'] 
    : "";
    $productID = $_GET['productID'];
    if ($customerID == ""){
        $_SESSION['purchasePending'] = $productID;
        header("Location: formLogin.php");
    }
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
       echo '</div>';
      ?>
    </header>

    <main class="w3-container">
        <article class="w3-container w3-border-left w3-border-right
                 w3-border-black w3-blue">
            <h4 class="w3-center">
                <strong>Your Shopping Cart</strong>
            </h4>
            <?php 
                include '../scripts/shoppingCartProcess.php';      
             ?>
        </article>
    </main>

    <!--footer.html -->
    <?php 
     include '../common/footer.html';  
    ?>

</body>

</html>