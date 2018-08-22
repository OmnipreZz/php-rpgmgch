
<?php

require "./User.php";

// pour tester !!  taper composer test dans la console !!
class UserTest extends \PHPUnit\Framework\TestCase {
    
    public function setUp() {
        $this->classTest = new User('test@gmail.com');
    }

    public function tearDown() {
        unset($this->classTest);
    }

    public function testAttribute() {
        $this->assertClassHasAttribute('id', User::class);
        $this->assertClassHasAttribute('email', User::class);
        $this->assertClassHasAttribute('createdAt', User::class);
    }

    public function testEquality() {
        $this->assertEquals('test@gmail.com', $this->classTest->getMail());
    }

    public function testType() {
        $this->assertInternalType('string', $this->classTest->getId());
        $this->assertInternalType('string', $this->classTest->getMail());
        $this->assertInternalType('string', $this->classTest->getDate());
    }
}

?>