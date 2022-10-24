<!-- events_special.php for Innovative Inventory, version 4 -->
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
            <h3>Special Events</h3>
            <p>
                Since the start of Innovative Inventory, our team of organizers have
                been arranging fantastic events for our community members.Here are some
                of our special events:
            </p>
            <dl>
                <dt>Funding Raising Events</dt>
                <dd>
                    For one week, we would sell our amazing inventories and half of the profits made from
                    our sales would directly go some charity of the buyer's choice. This is our way
                    of trying to give back to the world and help out other communities.
                </dd>
                <dt>Innovation Exchange</dt>
                <dd>
                    We love to hear ideas from our community and our customers. Once every month, we host
                    an innovation exchange event where we take ideas from our customers about new innovative projects
                    which would do well in our company. The top 10 ideas are rewarded with special gift packages from
                    us.
                </dd>
            </dl>
            <p>
                Keep an eye on our Future Events page for more news on the interesting events that we host
                every month.
            </p>
        </article>
    </main>

    <!-- footer.html -->
    <?php 
     include '../common/footer.html';  
    ?>
</body>

</html>