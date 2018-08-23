
<?php

require_once "./Product.php";

// pour tester !!  taper composer test dans la console !!
class ProductTest extends \PHPUnit\Framework\TestCase {
    
    public function setUp() {
        $this->classTest = new Product('tomate', 2);
    }

    public function tearDown() {
        unset($this->classTest);
    }

    public function testAttribute() {
        $this->assertClassHasAttribute('id', Product::class);
        $this->assertClassHasAttribute('name', Product::class);
        $this->assertClassHasAttribute('price', Product::class);
    }

    public function testEquality() {
        $this->assertEquals('tomate', $this->classTest->getName());
    }

    public function testType() {
        $this->assertInternalType('integer', $this->classTest->getId());
        $this->assertInternalType('string', $this->classTest->getName());
        $this->assertInternalType('integer', $this->classTest->getPrice());
    }

}

?>