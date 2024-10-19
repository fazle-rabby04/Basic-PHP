<?php
interface PaymentProcessor {
    public function processPayment($amount);
}

class PayPal implements PaymentProcessor {
    public function processPayment($amount) {
        echo "Processing payment of $" . $amount . " through PayPal.";
    }
}

class Stripe implements PaymentProcessor {
    public function processPayment($amount) {
        echo "Processing payment of $" . $amount . " through Stripe.";
    }
}

function makePayment(PaymentProcessor $processor, $amount) {
    $processor->processPayment($amount);
}

$paypal = new PayPal();
$stripe = new Stripe();

makePayment($paypal, 100); // Output: Processing payment of $100 through PayPal.
makePayment($stripe, 200); // Output: Processing payment of $200 through Stripe.
