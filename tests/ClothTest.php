


<?php

require_once "./Cloth.php";

// pour tester !!  taper composer test dans la console !!
class ClothTest extends \PHPUnit\Framework\TestCase {
    
    public function setUp() {
        $this->classTest = new Cloth('polo', 60, 'Lacoste');
    }

    public function tearDown() {
        unset($this->classTest);
    }

    public function testAttribute() {
        $this->assertClassHasAttribute('brand', Cloth::class);
    }

    public function testEquality() {
        $this->assertEquals('Lacoste', $this->classTest->getBrand());
    }

    public function testType() {
        $this->assertInternalType('string', $this->classTest->getBrand());
    }

}

?>