<?php require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_hide",
  "publishable_key" => "pk_test_hide"
);

 \Stripe\Stripe::setApiKey($stripe['secret_key']);
?>