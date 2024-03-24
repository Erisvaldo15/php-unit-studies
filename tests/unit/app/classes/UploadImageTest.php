<?php

namespace tests\unit\app\classes;

use app\classes\UploadImage;
use app\database\Insert;
use Exception;
use PHPUnit\Framework\TestCase;

class UploadImageTest extends TestCase
{
    private string $image;

    public function setUp(): void {
        $this->image = "./assets/images/family.jpg";
    }

    public function test_upload()
    {
        $insert = $this->getMockBuilder(Insert::class)->getMock();

        $insert->expects($this->exactly(1))->method("create")->with($this->image)->willReturn(true);

        /** @var Insert $insert */
        $uploadImageInstance = new UploadImage($insert);

        /** @var Insert $insert */
        $uploadedOrFailure = $uploadImageInstance->upload($this->image);

        $this->assertTrue($uploadedOrFailure);
    }

    public function test_invalid_image() {

        $this->image = "./assets/images/family.pdf";

        /** @var Insert $insert */
        $uploadImageInstance = new UploadImage(new Insert);

        $this->expectException(Exception::class);

        /** @var Insert $insert */
        $uploadImageInstance->upload($this->image);
    }
}
