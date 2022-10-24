<!-- vision.php for Innovative Inventory, version 4 -->
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
        <article class="w3-container w3-border-left w3-border-right
                     w3-border-black w3-blue">
            <h3>About Innovative Inventory: Our Vision and Mission</h3>
            <p>
                Innovative Inventory is a new online business, and this is how it got started.
                In the process of working on an assignment, we had come across many amazing
                products, and in the process of sharing stories about the things we had seen,
                we somehow got the idea that bringing these products back home and making them
                available to others might be a good idea and even, we hoped, a
                good business model.
            </p>
            <p>
                Of course it is well known that, "One man's treasure is another
                man's garbage." Thus we cannot expect that everything we find
                amazing, or even iteresting, will excite the same level of
                admiration in others. However, we think that each of the items
                we present is "objectively amazing" at some level, and we hope
                that you will agree.
            </p>
        </article>
    </main>

    <!-- footer.html -->
    <?php 
     include '../common/footer.html';  
    ?>
</body>

</html>