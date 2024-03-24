<?php

namespace app\classes;

use app\database\Insert;
use Exception;

class UploadImage {

    private array $allowedExtensions;

    public function __construct(private Insert $insert) {
        $this->allowedExtensions = ["png", "jpg", "webp", "svg"];
    }

    private function validateImage($image) {
        if(in_array(pathinfo($image, PATHINFO_EXTENSION), $this->allowedExtensions)) return $image;
    }

    public function upload(string $image): bool {
        $validatedImage = $this->validateImage($image);
        if(!$validatedImage) throw new Exception("Image isn't valid");  
        return $this->insert->create($validatedImage);
    }

}