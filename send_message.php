<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $number = $_POST["number"];
    $subject= $_POST["subject"];
    $to = "pranavrp16@gmail.com";
    $headers = "From: $email";
    
    mail($to,$name,$subject,$message,$number,$headers)

    if (mail($to,$name,$subject,$message,$number,$headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending the message. Please try again later.";
    }
}

?>
