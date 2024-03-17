<?php

namespace tests\unit\controller;

use app\classes\Validation;
use app\controller\Auth;
use PHPUnit\Framework\TestCase;

class AuthTest extends TestCase {

    public function testAttempt() {
        $firstName = filter_var("erís", FILTER_SANITIZE_STRING);
        $validated = (new Validation)->validate([$firstName]);
        $this->assertTrue((new Auth)->attempt($validated));
    }

    public function testLogout() {
        $this->assertTrue(true);
    }

}