<?php
use efimova\Sqrt;
use efimova\EfimovaException;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class SqrtTest extends TestCase {

    /**
     * @dataProvider providerSolve
     */
    public function testSolve($a, $b, $c, $res) {
        $fTest = new Sqrt();
        $this->assertEquals($res, $fTest->solve($a, $b, $c));
    }
    public function providerSolve ()
    {
        return array (
            array (15, 9, 0,[-9.3 ,-8.7]),
            array (1, 6, -40,[ -13,1]),
            array (0, 1, 1,[-1]),
            array (0, 1, 2, [-2]),
            array (0, 0, 0, [null]),

        );
    }
    /**
     * @dataProvider providerSolveEx
     */
    public function testSolveEx($a, $b, $c, $res) {
        $this->expectException(EfimovaException::class);
        $fTest = new Sqrt();
        $this->assertEquals($res, $fTest->solve($a, $b, $c));
    }
    public function providerSolveEx (): array
    {
        return array (
            array (4, 2, 1, []),
            array (6, 3 , 2, [])
        );
    }
}