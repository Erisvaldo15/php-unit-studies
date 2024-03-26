<?php

namespace tests\unit\app\classes;

use app\controllers\SignUp;
use app\database\Insert;
use Exception;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class SignUpTest extends TestCase
{

    public function setUp(): void {
        $_POST["name"] = "Erisvaldo";
        $_POST["email"] = "eris@gmail.com";
        $_POST["password"] = "12345678";
        $_POST["confirmationPassword"] = "12345678";
    }

     public function test_signup() {

        $insert = $this->getMockBuilder(Insert::class)->getMock();
        $insert->expects($this->once())->method("create")->willReturn(true);

        /** @var Insert $insert */
        $signUp = new SignUp($insert);

        $this->assertTrue($signUp->store());
     }

     #[DataProvider('providerNames')]
     public function test_with_exception_because_from_invalid_name(string $name) {

        $_POST["name"] = $name;

        $signUp = new SignUp(new Insert);

        $this->expectException(Exception::class);

        $signUp->store();
     }

     public function test_with_exception_because_from_one_data_empty() {

        $_POST["password"] = "";

        $signUp = new SignUp(new Insert);

        $this->expectException(Exception::class);
        $this->expectExceptionMessage("Field password is required");

        $signUp->store();

     }

     public static function providerNames() {
        return [[""],["bê"],["be"],["ana"]];
     }

}
