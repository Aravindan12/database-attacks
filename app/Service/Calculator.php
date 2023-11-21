<?php

namespace App\Service;


class Calculator
{
    public function __invoke($num1, $num2, $operation)
    {
        switch ($operation) {
            case 'add':
                return $num1 + $num2;
            case 'subtract':
                return $num1 - $num2;
            case 'multiply':
                return $num1 * $num2;
            case 'divide':
                if ($num2 != 0) {
                    return $num1 / $num2;
                } else {
                    return 'Cannot divide by zero';
                }
            default:
                return 'Invalid operation';
        }
    }
}