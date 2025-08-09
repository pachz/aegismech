<?php
/**
 * File: Form Submission Scripts
 */
 
require_once './vendor/autoload.php';
$recaptcha = new \ReCaptcha\ReCaptcha("");


$resp = $recaptcha->setExpectedHostname('aegismech.com')
                  ->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

if (isset($_POST['email']) && $resp->isSuccess()) {

    /* Sanitize and Validate Target email address that will be configured from theme options */
    $to_email = 'alrzch@gmail.com';

    /* Sanitize and Validate contact form input data */
    $from_name = $_POST['name'];
    $email_subject = "Message from " . $from_name . ": " . $_POST['subject'];
    $message = stripslashes($_POST['message']);
    $from_email = $_POST['email'];
    
    
    $from_name2 = "Aegis Contact Form";
    $from_email2 = "form@aegismech.com";

    if (empty($email_subject)) {
        $email_subject = 'You Have Received a Message From ' . $from_name . '.';
    }

    $email_body = "You have received a message from: " . $from_name . " <br/>";

    $email_body .= "Their additional message is as follows." . " <br/>";
    $email_body .= $message . " <br/>";
    $email_body .= "You can contact " . $from_name . " via email, " . $from_email;

    $header = 'Content-type: text/html; charset=utf-8' . "\r\n";
    $header .= 'From: ' . $from_name2 . " <" . $from_email2 . "> \r\n";

    if (mail($to_email, $email_subject, $email_body, $header)) {
        echo "Message Sent Successfully!";
    } else {
        echo "Server Error: WordPress mail method failed!";
    }

} else {
    echo "Invalid Request!";
}
?>