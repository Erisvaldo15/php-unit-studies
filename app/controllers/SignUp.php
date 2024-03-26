<?php

namespace app\controllers;

use Exception;
use app\database\Insert;

class SignUp {

    public function __construct(private Insert $insert) {}

    public function store() {


         $data = [
            "name" => filter_var($_POST["name"], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            "email" => filter_var($_POST["email"], FILTER_SANITIZE_EMAIL),
            "password" => filter_var($_POST["password"], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            "confirmationPassword" => filter_var($_POST["confirmationPassword"], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
        ];

        $data = (object) $data;

        foreach ($data as $field => $value) {
            if(empty($value)) throw new Exception("Field {$field} is required");
        }
    
        if(strlen($data->name) < 3) {
            throw new Exception("Field name must have at least 3 characters");
        }

        if(!filter_var($data->email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Invalid Email");
        }

        if(strlen($data->password) < 8) {
            throw new Exception("Field password must have at least 8 characters");
        }

        return $this->insert->create($data);
    }

}