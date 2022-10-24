<!-- banner.html -->
<div class="w3-border w3-border-black w3-light-blue">
    <div id="logo" class="w3-half" style="padding-left: 15px; padding-top: 70px">
        <img src="images/logo_small.png" alt="Innovative Inventory Logo" style="width: 100%" />
    </div>

    <div class="w3-half w3-right-align">
        <div class="w3-panel">

            <?php
            
            $loggedIn = isset($_SESSION['customer_id']) ? true : false;
            if(isset($_SESSION['customer_id']))
                $customerId = $_SESSION['customer_id'];
            if(isset($_SESSION['salutation']))
                $salutation = $_SESSION['salutation'];
            if(isset($_SESSION['first_name']))
                $firstName = $_SESSION['first_name'];
            if(isset($_SESSION['middle_initial']))
                $middleInitial = $_SESSION['middle_initial'];
            if(isset($_SESSION['last_name']))
                $lastName = $_SESSION['last_name'];
            if(!$loggedIn)
                echo "<h5>Welcome!</h5>";
            else 
                echo "<h6>$salutation $firstName $middleInitial $lastName 
                ... Welcome, $firstName!</h6>"; 
                echo "<h6 id='datetime'> It's ".date("l, F jS");
                echo " and our time is ".date('g:ia').".</h6>";

            if($loggedIn)
                echo "<a class='w3-button w3-orange w3-round'
                    href='pages/logout.php'>Click here to log out</a>";
             else
                echo "<a class='w3-button w3-orange w3-round'
                href='pages/formLogin.php'>Click here to log in</a>";  
                            
            ?>

            <p class="quotes w3-left-align">
                <?php
                include($_SERVER['CONTEXT_DOCUMENT_ROOT']
                . "/submissions/submission04"
                . "/scripts/get_quote.php");
                ?>
            </p>

        </div>
    </div>
    <script>
    //This script sets up the AJAX infrastructure for 
    //requesting time updates from the server.
    var request = null;

    function getCurrentTime() {
        request = new XMLHttpRequest();
        var url = " ./scripts/time.php";
        request.open("GET", url, true);
        request.onreadystatechange = updatePage;
        request.send(null);
    }

    function updatePage() {
        if (request.readyState == 4) {
            var
                dateDisplay = document.getElementById("datetime");
            dateDisplay.innerHTML = request.responseText;
        }
    }
    getCurrentTime();
    setInterval('getCurrentTime()', 60000)
    </script>