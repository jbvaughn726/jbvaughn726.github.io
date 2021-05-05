<?php
if($_POST["Message"]) {
    mail("jbvaughn283@gmail.com", "Form to email message", $_POST["Message"], "From: an@email.address");
}

if($_POST["submit"]) {
    $recipient="jbvaughn283@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["Name"];
    $senderEmail=$_POST["Email"];
    $message=$_POST["Message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}