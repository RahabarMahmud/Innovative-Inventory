<!-- category.php for Innovative Inventory, version 5 -->

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
       include '../scripts/connectToDatabase.php';
       echo '</div>';
      ?>
    </header>

    <main class="w3-container">
        <article class="w3-container w3-border-left w3-border-right
                 w3-border-black w3-blue">
            <h4>
                Items Available in Your Chosen Category&nbsp;&nbsp;&nbsp;&nbsp;
                <a class='w3-button w3-orange w3-round w3-wall' href='pages/catalog.php'>
                    Return to category list
                </a>
            </h4>
            <?php 
                include '../scripts/categoryProcess.php';      
             ?>
        </article>
    </main>

    <!--footer.html -->
    <?php 
     include '../common/footer.html';  
    ?>

</body>

</html>