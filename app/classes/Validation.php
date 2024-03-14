<?php

namespace app\classes;

class Validation {

    public function validate(array $data): bool {
        if(empty($data)) return false;
        return true;
    }

}