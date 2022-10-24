<!-- formLogin.php for Innovative Inventory, version 4 -->
<!DOCTYPE html>

<html lang="en">
<!-- document_head.html -->
<?php
    session_start();
    if(isset($_SESSION['customer_id']))
        header('Location: estore.php');
    $retrying = isset($_GET['retrying']) ? true : false;
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

    <?php
    $loginNameSaved = isset($_SESSION['POST_SAVE']["loginName"]) ? 
                    $_SESSION['POST_SAVE']["loginName"]  :"";
    
    $loginPasswordSaved = isset($_SESSION['POST_SAVE']["loginPassword"]) ? 
                    $_SESSION['POST_SAVE']["loginPassword"]  :"";
    ?>

    <main class="w3-container">
        <article class="w3-container w3-border-left w3-border-right w3-border-black w3-blue">
            <h4 class="w3-center"><strong>Login Form</strong></h4>

            <p class="w3-center w3-red w3-padding">Important Note</p>

            <p><span class="w3-padding-16">Purchasing items from our on-line
                    e-store requires logging in. And if you have not registered with estore with
                    Innovative Inventory. Before attempting to log in you must
                    <a href="pages/formRegistration.php">register here</a>.
                </span>
            </p>

            <form id="loginForm" action="scripts/formLoginProcess.php" method="post" autocomplete="no">
                <div class="w3-row w3-selection">
                    <div class="w3-quarter w3-containter">
                        Login Name:
                    </div>
                    <div class="w3-threequarter w3-containter w3-wide">
                        <input type="text" class="w3-yellow" name="loginName" required style="width: 90%;"
                            placeholder="Must be name assigned at registration">
                    </div>
                    &nbsp;
                </div>

                <div class="w3-row">
                    <div class="w3-quarter w3-containter">
                        Password:
                    </div>
                    <div class="w3-threequarter w3-containter w3-wide">
                        <input type="password" class="w3-yellow" name="loginPassword" required style="width: 90%;"
                            placeholder="Must be password chosen at registration">

                    </div>
                    &nbsp;
                </div>

                <div class="w3-row w3-selection">
                    <div class="w3-quarter w3-containter">
                        &nbsp;
                    </div>
                    <div class="w3-threequarter w3-containter w3-wide">
                        <input type="submit" value="Log in" class="w3-orange">
                        <input type="reset" value="Reset Form" class="w3-orange" onclick="this.form.reset()">
                    </div>
                    &nbsp;
                </div>

                <div>
                    <?php  if($retrying) { ?>
                    <p class="w3-red w3-padding">
                        Sorry, but your login procedure failed.
                        An invalid username or password was entered.
                        Please try again to enter your correct login information.
                    </p>

                    <?php  } ?>

                    <!--?php 
                    //echo $_POST['loginName'];
                    //echo $_POST['loginPassword'];
                    //echo "ABC";
                    ?-->
                </div>

            </form>
        </article>
    </main>

    <!--footer.html -->
    <?php 
     include '../common/footer.html';  
    ?>

</body>

</html>