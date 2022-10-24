<?php
/*formFeedbackProcess.php
Processes the submitted feedback from data by first constructing a response
message from the user's input. First the form data is "sanitized" by doing
some server-side redundant validation of the data received from the form. 
Then the following actions are performed:
    -send an e-mail message to the business based on the client's form data
    -send a modified confirmation e-mail to the client from the business
    -return a confirmation page to the client's brower
    -log the feedback information from the form in a file on the server.
*/

session_start();

$secure = $_SESSION['SECURE'];
if($secure != "!@#$^%FDSSFDWQR@"){
    die('SECURE test failed.');
}

$origin = $_SESSION['ORIGIN'];
if($origin != "/~u21/submissions/submission05/pages/formFeedback.php"){
    die('ORIGIN test failed.');
}

$salutation = $firstName = $lastName = "";
$email = $phoneNumber = "";
$subject = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $salutation = sanitized_input($_POST["salutation"]);
    $firstName = sanitized_input($_POST["firstName"]);
    if (!preg_match("/^[A-Z][A-Za-z-]*$/",$firstName ))
        die("Bad first Name!");
    $lastName = sanitized_input($_POST["lastName"]);
    if (!preg_match("/^[A-Z][A-Za-z-]*$/",$lastName ))
        die("Bad last Name!");
    $email = sanitized_input($_POST["email"]);
    if (!preg_match("/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})$/",$email ))
        die("Bad email!");
    $phoneNumber = sanitized_input($_POST['phone']);
    $phoneNumber = !empty($_POST['phone']) ? $_POST['phone'] : "Not given";
    if (!empty($_POST['phone']) &&
    !preg_match("/^(\d{3}-)?\d{3}-\d{4}$/", $phoneNumber))
    die("Bad phone number!");
    
    $subject = sanitized_input($_POST["subject"]);
    $message = sanitized_input($_POST["message"]);
}

function sanitized_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


//Step 1 =============================================================
//First construct the message to be sent to the business
$messageToBusiness =
    "From: $salutation $firstName $lastName\r\n". 
    "E-mail address: $email\r\n".
    "Phone Number: $phoneNumber\r\n".
    "-------------------------\r\n".
    "Subject: $subject\r\n".
    "-------------------------\r\n".
    "$message\r\n".
    "=========================\r\n";


//Now send an e-mail feedback message to the "business".
//Here, during testing, this is to the student account, but
//when websites is submitted, it must be to the marker account
//so that he marker may become the "business" and thus be able to
//verify that the business is in fact getting the business e-mails.
$headerToBusiness = "From: $email\r\n";
mail("u50@mail.cs.smu.ca", $subject,
    $messageToBusiness, $headerToBusiness);
    
    
//Step2 ==============================================================
//Next, construct an e-mail confirmation message for the client.
//This is just a slightly modified version of the message that
///went to the business (see above).
$messageToClient =
    "Dear $salutation $lastName:\r\n". 
    "The following message was received from you by Innovative Inventory:\r\n". 
    "=========================\r\n".
    $messageToBusiness.
    "Thank you for your interest and your feedback.\r\n".
    "From the folks at Innovative Inventory\r\n".
    "=========================\r\n";
if(isset($_POST['reply'])) $messageToClient.=
    "P.S We will contact you shortly with more information.";

//Now send the above-constructed e-mail confirmation message to the client.
$headerToClient = "From: u21@ps.smu.ca\r\n";
mail($email, "Re: $subject",
    $messageToClient, $headerToClient);

    
//Step3 ==============================================================
//Next, transform the confirmation message to the client HTML5 format
//for immediate display in the client's brower.
$display = str_replace("\r\n", "\r\n<br>", $messageToClient);
$display = "<!DOCTYPE html>
    <html lang= 'en'>
     <head>
        <meta charset='utf-8'>
        <title>Your Message</title>
     </head>
     <body>
        <code>$display</code>
     </body>
    </html>";
echo $display;


//Step4 ==============================================================
//Log the feedback information in data/feedback.txt on the web server.
//Note the directory "data" is at same level as directory "scrupts".
$fileVar = fopen("../data/feedback.txt", "a")
    or die("Error: Could not write divider to the log file.");
fwrite($fileVar,
    "\n-------------------------------------------------------\n")
    or die("Error: Could not write divider to the log file.");
fwrite($fileVar, "Date received:".date("jS \of F, Y \a\\t H:i:s\n"))
    or die("Error: Could not write date to the log file.");
fwrite($fileVar, $messageToBusiness)
    or die("Error: Could not write message to the log file.");



?>