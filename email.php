<?php

    $recipient="socialdukan@gmail.com";
    $subject="Query";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message= $_POST["message"];

    $mailBody="Name: $sender\n
    Email: $senderEmail\n
    Message: $message";
    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
die();
?>