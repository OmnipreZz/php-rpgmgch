
<?php

require "./User.php";

// pour tester !!  taper composer test dans la console !!
class UserTest extends \PHPUnit\Framework\TestCase {
    
    public function setUp() {
        $this->classTest = new User('test', 'test@gmail.com');
    }

    public function tearDown() {
        unset($this->classTest);
    }

    public function testAttribute() {
        $this->assertClassHasAttribute('id', User::class);
        $this->assertClassHasAttribute('email', User::class);
        $this->assertClassHasAttribute('createAt', User::class);
    }

    public function testEquality() {
        $this->assertEquals('test@gmail.com', $this->classTest->getMail());
    }
}

?>