<?php

namespace tests\unit\core;

use app\core\Router;
use Exception;
use PharIo\Manifest\InvalidEmailException;
use PHPUnit\Framework\TestCase;

class RouterTest extends TestCase {

    private Router $router;

    public function setUp(): void {
        $this->router = new Router;
    }

    public function testRoute() {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("Route");
        $this->router->route("");
    }

}