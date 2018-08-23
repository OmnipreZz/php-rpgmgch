

<?php

require_once "./Vegetable.php";

// pour tester !!  taper composer test dans la console !!
class VegetableTest extends \PHPUnit\Framework\TestCase {
    
    public function setUp() {
        $this->classTest = new Vegetable('tomate', 2, 'tomato', '2018-09-02');
    }

    public function tearDown() {
        unset($this->classTest);
    }

    public function testAttribute() {
        $this->assertClassHasAttribute('productorName', Vegetable::class);
        $this->assertClassHasAttribute('expiresAt', Vegetable::class);
    }

    public function testEquality() {
        $this->assertEquals('tomato', $this->classTest->getProductor());
    }

    public function testType() {
        $this->assertInternalType('string', $this->classTest->getExpire());
        $this->assertInternalType('boolean', $this->classTest->isFresh());
    }

    public function testIsFresh() {
        $this->assertTrue($this->classTest->isFresh());
    }

}

?>