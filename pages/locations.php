<!-- locations.php for Innovative Inventory, version 4 -->
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
            <h3>Our Locations</h3>
            <p>
                As our company grows, we hope to expand world wide, so
                eventually we will provide here a list of all our store
                locations. Each location will be accompanied by contact
                information for that location and a link to a map showing
                showing you how to find us at that location.
            </p>
            <p>
                In the meantime, here are a few details (just address
                and telephone number) for our current (and only) location,
                should you wish to drop by and meet the owners:
            </p>
            <p>
                Innovative Inventory, Inc.<br>
                5845 GorseBrook Avenue<br>
                Halifax, NS<br>
                Canada B3H 3C3
            </p>
        </article>
    </main>

    <!-- footer.html -->
    <?php 
     include '../common/footer.html';  
    ?>
</body>

</html>