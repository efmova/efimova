<?php
use efimova\Line;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class LineTest extends TestCase {
    /**
     * @dataProvider providerEquation
     */
    public function testEquation($a, $b, $res) {
        $fTest = new Line();
        $this->assertEquals($res, $fTest->l_solve($a, $b));
    }
    public function providerEquation ()
    {
        return array (
            array (3, 3, [-1]),
            array (-4, 8, [2]),
            array (550, 55, [-0.1]),
            array (0, 0, [null]),
            array (0, 2, [null]),
            array (1, 2, [-2]),


        );
    }
}