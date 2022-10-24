<!-- logout.php for Innovative Inventory, version 4 -->
<!DOCTYPE html>

<html lang="en">
<!-- document_head.html -->
<?php
    session_start();
    $loggedInAtStartOfLogout = isset($_SESSION['customer_id']) ? true : false;
    if ($loggedInAtStartOfLogout) 
    {

        $customerID = $_SESSION['customer_id'];
        include("../scripts/connectToDatabase.php");
        include("../scripts/logoutProcess.php");
        session_unset();
        session_destroy();
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
      ?>
    </header>


    <main class="w3-container">
        <article class="w3-container w3-border-left w3-border-right w3-border-black w3-blue">
            <h4>Logout</h4>
            <?php
            
            if($loggedInAtStartOfLogout) echo
                '<p>Thank you for visiting our e-store.<br> 
                You have successfully logged out.</p>
            <p>If you wish to log back in,
                <a href="pages/formLogin.php">click here</a>.</p>
            <p>To browse our product catalog,
                <a href="pages/catalog.php">click here</a>.</p>';
            else echo
            '<p>Thank you for visiting Innovative Inventory.
                You have not logged in.</p>
            <p>If you do wish to log in,
                <a href="pages/formLogin.php">click here</a>.</p>
            <p>Or you can browse our product catalog without loggin in by
                <a href="pages/catalog.php">clicking here</a>.</p>';
            
            ?>
        </article>
    </main>

    <!--footer.html -->
    <?php 
     include '../common/footer.html';  
    ?>

</body>

</html>