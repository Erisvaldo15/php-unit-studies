<?php

namespace app\classes;

class Validation {

    public function validate(array $data): bool {
        if(!is_array($data)) return false;
        return true;
    }

}