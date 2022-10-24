<!-- events_future.php for Innovative Inventory, version 4 -->
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
            <h3>Future Events</h3>
            <p>
                Here is a current list of our future events for this 2022:
            </p>
            <dl>
                <dt>Adrenaline Auction</dt>
                <dd>
                    We will be letting our customers bid and set the prices for some of our best
                    one-off products. This event will be hosted in May this year, so keep an eye
                    on future updates.
                </dd>
                <dt>Virtual Concert</dt>
                <dd>Our team will be arranging a Virtual concert for our community to enjoy during
                    the pandemic from the pleasure of their homes. Even while socially distancing ourselves
                    we should try to enjoy our social lives virtually. So, please make sure to register
                    for our virtual concert session from our website.
                </dd>
                <dt>Innovative Competition</dt>
                <dd>
                    An amazing virtual competition where our customers will be able to display
                    their own Innovative Creations, which will be judged by our panel of judges.
                    The top 5 Innovators will receive amazing rewards.
                </dd>
            </dl>
            <p>
                Note that all events will be held virtually due to the lockdown conditions from
                Covid-19, make sure to visit this page frequently for more updates and
                news on our events. We update our site daily with fresh new innovative ideas and
                content for our community.
            </p>
        </article>
    </main>

    <!-- footer.html -->
    <?php 
     include '../common/footer.html';  
    ?>
</body>

</html>