<?php

namespace App\Http\Controllers;

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
}
