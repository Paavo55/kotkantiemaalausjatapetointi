<?php 
$email = $msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST['emailInput'])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST['emailInput']);
    }
    if (empty($_POST['messageInput'])) {
        $messageErr = "Message is required";
    } else {
        $msg = test_input($_POST['messageInput']);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>