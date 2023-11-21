<?php

namespace App\Http\Controllers;

use App\Service\Calculator;
use App\Service\TestService;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        //When we create an object, the __construct method will run. 
        //If we then call the object as a function, the __invoke method will run.
        $test = new TestService(); //Output: __construct
        $test(); //Output: __invoke.
    }

    public function add($num1, $num2)
    {
        $cal = new Calculator();
        return $cal($num1, $num2, 'add');
    }
    public function subtract($num1, $num2)
    {
        $cal = new Calculator();
        return $cal($num1, $num2, 'subtract');
    }
    public function multiply($num1, $num2)
    {
        $cal = new Calculator();
        return $cal($num1, $num2, 'multiply');
    }
    public function divide($num1, $num2)
    {
        $cal = new Calculator();
        return $cal($num1, $num2, 'divide');
    }
}
