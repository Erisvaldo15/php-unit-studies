<?php

namespace tests\unit\app\classes;

use app\classes\Checkout;
use app\classes\Email;
use app\classes\StripeApi;
use PHPUnit\Framework\TestCase;

class CheckoutTest extends TestCase
{

    public function test_checkout_pay()
    {

        $checkout = new Checkout;
        $stripeApi = new StripeApi;

        $email = $this->createMock(Email::class);
        $email->expects($this->once())->method("send");

        $checkout->pay($stripeApi, $email);

        // $this->assertTrue($result);
    }
}
