<?php

use PHPUnit\Framework\TestCase;
use Discommand2\Ash2\Calculator;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $this->assertEquals(3, $calculator->add(1, 2));
    }
}