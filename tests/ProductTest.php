
<?php

require "./Vegetable.php";

// pour tester !!  taper composer test dans la console !!
class ProductTest extends \PHPUnit\Framework\TestCase {
    
    public function setUp() {
        $this->classTest = new Vegetable('tomate', 2, 'tomate', '29-08-18');
    }

    public function tearDown() {
        unset($this->classTest);
    }

    public function testAttribute() {
        $this->assertClassHasAttribute('id', Product::class);
        $this->assertClassHasAttribute('name', Product::class);
        $this->assertClassHasAttribute('price', Product::class);
        $this->assertClassHasAttribute('productName', Vegetable::class);
        $this->assertClassHasAttribute('expiresAt', Vegetable::class);
    }

    public function testEquality() {
        $this->assertEquals('tomate', $this->classTest->getName());
    }

    public function testType() {
        $this->assertInternalType('integer', $this->classTest->getId());
        $this->assertInternalType('string', $this->classTest->getName());
        $this->assertInternalType('integer', $this->classTest->getPrice());
        $this->assertInternalType('boolean', $this->classTest->isFresh());
    }

    public function testIsFresh() {
        $this->assertTrue($this->classTest->isFresh());
    }

}

?>