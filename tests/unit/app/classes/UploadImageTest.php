<?php

namespace tests\unit\app\classes;

use PHPUnit\Framework\TestCase;
use app\classes\UploadImage;
use Exception;

class UploadImageTest extends TestCase {

    private UploadImage $uploadImage;
    private string $image = "./assets/images/family.png";

    public function setUp(): void {
        $this->uploadImage = new UploadImage();
    }

    public function test_upload_of_image() {
        $uploaded = $this->uploadImage->upload($this->image);
        $this->assertTrue($uploaded);
    }

    public function test_is_valid_image_with_exception() {
        $this->image = "./assets/images/family.pdf";
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("valid");
        $uploaded = $this->uploadImage->upload($this->image);
        $this->assertTrue($uploaded);
    }

}