<?php

namespace app\database;

class Insert {

   public function create(array|object $data): bool {
        if($data) return true; 
        return false;
   }

}