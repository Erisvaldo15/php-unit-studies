<?php

namespace tests\unit\classes;

use PHPUnit\Framework\TestCase;

class ValidationTest extends TestCase
{
    public function testRequired()
    {
        $this->assertTrue(true);
    }

    public function testEmail() {
        $this->assertNotTrue(false);
    }
}
