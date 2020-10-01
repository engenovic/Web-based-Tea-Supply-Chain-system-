<?php
require 'vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;

// Set your app credentials
$username   = "Unilever";
$apikey     = "8f57d44aa7192eb24d36cef6b03582481cec26710d47675f0bd095c409123890";

// Initialize the SDK
$AT         = new AfricasTalking($username, $apiKey);

// Get the payments service
$payments   = $AT->payments();

// Set the name of your Africa's Talking payment product
$productName  = "My Online Store";

// Set your mobile b2c recipients
$recipients = [[
    "phoneNumber"  => "+254707142565",
    "currencyCode" => "KES",
    "amount"       => 100.50,
    "reason"       => $payments::REASON["SALARY"],
    "metadata"     => [
        "name"     => "Ngeno Victor"
    ]
]];

// That's it, hit send and we'll take care of the rest
try {
    $results = $payments->mobileB2C([
        "productName" => $productName,
        "recipients"  => $recipients
    ]);

    print_r($results);
} catch(Exception $e) {
    echo "Error: ".$e->getMessage();
}
