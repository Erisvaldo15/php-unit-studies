<?php

namespace app\classes;

class Checkout {

    public function pay(StripeApi $stripeApi, Email $email) {
        $stripeApi->request();
        $email->send();
    }

}