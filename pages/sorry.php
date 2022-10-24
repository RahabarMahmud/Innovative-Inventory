<!-- sorry.php for Innovative Inventory, version 4 -->
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
            <h1 class="w3-margin w3-center">
                Sorry!
            </h1>
            <h2 class="w3-margin w3-center">
                This page has not yet been activated,<br>
                or has been temporarily deactivated.
            </h2>
        </div>
    </main>

    <!--footer.html -->
    <?php 
     include '../common/footer.html';  
    ?>

</body>

</html>