<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function sqlInject($name)
    {
        $user = User::where('name', $name)->first();
        return $user;
    }
}
