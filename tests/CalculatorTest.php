<?php

require __DIR__ . '/../app/Calculator.php';

use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase {
    public function testDivide() {
        $this->expectException(InvalidArgumentException::class);
        Calculator::divide(2, 0);
    }
}
