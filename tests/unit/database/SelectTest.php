<?php

namespace tests\unit\database;

use PHPUnit\Framework\TestCase;

class SelectTest extends TestCase {

    public function testQuery() {
        dd($_ENV['DATABASE_HOST']);
        dd($_ENV['DATABASE_NAME']);
        $this->assertTrue(true);
    }

}