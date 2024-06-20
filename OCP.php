<?php

interface PaymentMethod
{
    public function process($amount);
}

class KBZPay implements PaymentMethod
{
    public function process($amount)
    {
        echo "Payment process with kbz pay " . $amount . " . ";
    }
}

class WavePay implements PaymentMethod
{
    public function process($amount)
    {
        echo "Payment process with wavepay " . $amount . " .";
    }
}

class PaymentProcessor {
    public function process(PaymentMethod $paymentMethod, $amount)
    {
        $paymentMethod->process($amount);
    }
}

$payment = new PaymentProcessor();
$payment->process(new KBZPay(), 200);
$payment->process(new WavePay(), 300);