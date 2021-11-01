<?php
require_once('vendor/autoload.php');
\Stripe\Stripe::setApiKey('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');
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