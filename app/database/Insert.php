<?php

namespace app\database;

class Insert {

    public function create(string $image): bool {
        if($image) return true;
        return false;
    }

}