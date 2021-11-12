<?php
require_once('vendor/autoload.php');
\Stripe\Stripe::setApiKey('');
$token = $_POST['stripeToken'];
// This is a $20.00 charge in US Dollar.
$charge = \Stripe\Charge::create(
    array(
        'amount' => 200,
        'currency' => 'eur',
        'source' => $token
    )
);
print_r($charge);
?>