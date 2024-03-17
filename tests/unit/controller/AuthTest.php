<?php

namespace tests\unit\controller;

use app\classes\Validation;
use app\controller\Auth;
use PHPUnit\Framework\TestCase;

class AuthTest extends TestCase {

    public function setUp(): void {
        echo "setUp method it's working. \n";
    }

    public function tearDown(): void {
        echo "tearDown method it's working. \n";
    }

    public function testAttempt() {
        echo "attemp test \n";
        $validated = (new Validation)->validate([true]);
        $this->assertTrue((new Auth)->attempt($validated));
    }

    public function testLogout() {
        echo "logout test \n";
        $this->assertTrue(true);
    }

}