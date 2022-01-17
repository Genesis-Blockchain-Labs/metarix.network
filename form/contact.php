<?php
session_start();
include("../config.php");
require 'sendgrid/vendor/autoload.php'; // If you're using Composer (recommended)
// Comment out the above line if not using Composer
// require("<PATH TO>/sendgrid-php.php");
// If not using Composer, uncomment the above line and
// download sendgrid-php.zip from the latest release here,
// replacing <PATH TO> with the path to the sendgrid-php.php file,
// which is included in the download:
// https://github.com/sendgrid/sendgrid-php/releases

$email = new \SendGrid\Mail\Mail(); 
$email->setFrom("admin@genesisblockchainlabs.com", "Metarix");
$email->setSubject($_POST['subject']);
$email->addTo("support@metarix.network", "Support Metarix");
$email->addCc("paluvala@genesisblockchainlabs.com", "Paluvala Metarix");
$email->addContent("text/plain", $_POST['message']);
$email->addContent(
    "text/html", $_POST['message']
);
$sendgrid = new \SendGrid($sendgridKey);
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
	$_SESSION['message'] = "Thank for contact with us!";
	header("location:/contact.php");
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}