<?php

namespace tests\unit\controller;

use app\classes\Validation;
use app\controller\Auth;
use PHPUnit\Framework\TestCase;

class AuthTest extends TestCase {

    public function testAttempt() {
        $validated = (new Validation)->validate([""]);
        $this->assertTrue((new Auth)->attempt($validated));
    }

}