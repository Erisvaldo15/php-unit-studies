<?php

namespace app\classes;

class UploadImage
{

    private array $allowedExtensions = ["png", "webp", "jpg", "jpeg", "svg"];
    private ?string $validatedImage = null;

    public function isValidImage(string $image): void
    {
        $extension = trim(pathinfo($image, PATHINFO_EXTENSION), ".");
        if (in_array($extension, $this->allowedExtensions)) {
            $this->validatedImage = $image;
            return;
        }
        throw new \Exception("Image is not valid.", 1);
    }

    public function upload($image)
    {
        $this->isValidImage($image);
        if ($this->validatedImage) return true;
    }
}
