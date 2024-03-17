<?php

namespace app\core;

use Exception;
use PharIo\Manifest\InvalidEmailException;

class Router {

    public function route(string $route) {

        if(!$route) {
            throw new InvalidEmailException("Route does not exist");    
        }

        return $route;
    }

}