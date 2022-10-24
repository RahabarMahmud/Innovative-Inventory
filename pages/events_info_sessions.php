<!-- events_info_sessions.php for Innovative Inventory, version 4 -->
<!DOCTYPE html>

<html lang="en">
<!-- document_head.html -->
<?php
 session_start();
  include '../common/document_head.html'
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
            <h3>Info Session and Storytime Events</h3>
            <p>
                Here are some typical kinds of events that we host on a frequently:
            </p>
            <ul>
                <li>Talks about the inventor of our innovative inventories.</li>
                <li>
                    Talks on the history and uses of innovatice items with which we sell on our sites.
                </li>
                <li>Stories about how our the products we sell on our site actually
                    came into existence.</li>
                <li>
                    Live demonstration of our products and how to use them.
                </li>
                <li>
                    Getting to hear from our sponsors who invested in
                    our innovative inventory project.
                </li>

            </ul>
        </article>
    </main>

    <!-- footer.html -->
    <?php 
     include '../common/footer.html';  
    ?>
</body>

</html>