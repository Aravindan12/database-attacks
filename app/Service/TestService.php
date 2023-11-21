<?php

namespace App\Service;


class TestService
{
    public function __construct()
    {
        echo "__construct";
    }

    public function __invoke()
    {
        echo "__invoke";
    }

    public function test()
    {
        return 1;
    }
}