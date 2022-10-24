<!-- my_business.php for Innovative Inventory, version 4 -->
<!DOCTYPE html>

<html lang="en">
<!-- document_head.html -->
<?php
    session_start();
   include 'common/document_head.html'; 
  ?>

<body class="body w3-auto" onload="carousel()">
    <header class="w3-container">
        <!-- banner.php -->
        <?php 
       include 'common/banner.php';      
      ?>

        <!-- menus.html -->
        <?php 
       include 'common/menus.html'; 
      ?>
    </header>

    <main class="w3-container">
        <div class="w3-container w3-border-left w3-border-right w3-border-black w3-blue" style="padding-right: 0">
            <article class="w3-half">
                <h3>You've come to Innovative Inventory!</h3>
                <p>
                    Founded in 2022, Innovative Inventory was created to go and search
                    in all the obscure nooks and crannies of this amazing world to find
                    all the innovative things that you might not have known were hiding
                    there. And now you get to choose from among all those amazing things
                    we have discovered and brought back just for you!
                </p>
                <p>
                    If you like to explore the unknown via your interaction with
                    concrete objects from the far corners of the globe, you've come to
                    the right place ... check out our e-store!
                </p>
            </article>

            <div class="w3-half w3-padding w3-center">
                <?php 
                    include 'resources/images_and_labels.html';      
                 ?>
            </div>
        </div>
    </main>

    <!-- footer.html -->
    <?php 
     include 'common/footer.html';  
    ?>
</body>

</html>