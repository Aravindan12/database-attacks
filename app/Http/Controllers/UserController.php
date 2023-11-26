<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function sqlInject($id)
    {
        //validated
        // $validator = Validator::make(['id' => $id], [
        //     'id' => 'required|numeric'
        // ]);
        // if ($validator->fails()) {
        //     return "Error";
        // }else {
        //     $user = User::where('id', $id)->first();
        // }

        //normal
        $user = User::where('id', $id)->first();

        return $user;
    }

    public function sqlInjectOnRaw($id)
    {
        //sql inject query
        $user = DB::table('users')
        ->select('*')
        ->whereRaw('id =' . $id)->first(); 

        //sanitized query
        // $user = DB::table('users')
        // ->select('*')
        // ->whereRaw('id = ?' , $id)->first(); 
        return $user;
    }

    public function sqlInjectOnStatement(Request $request)
    {
        $data = $request->all();
        // dd("UPDATE users SET name='".$data['name']."' WHERE email ='".$data['email']."'");
        DB::statement("UPDATE users SET name='".$data['name']."' WHERE email ='".$data['email']."'");

        return User::all();
    }

    public function xssAttack(Request $request)
    {
        $name = isset($request->name) ? $request->name : 'test';
        // dd($name);
        return view('user', compact('name'));
    }

    public function xssAttackTwo(Request $request)
    {
        //attack
        // echo "Hello " . $_GET['name'];
        //prevention
        echo "Hello " . htmlspecialchars($_GET['name']);
    }

    public function addNewUser()
    {
        return view('add-user');
    }

    public function storeUser(Request $request)
    {
        $user = User::create($request->all());
        return redirect(route('list-users'));
    }


    public function listUsers()
    {
        $users = User::all();
        return view('users', compact('users'));
    }

    public function addNewBook()
    {
        return view('add-book');
    }

    public function storeBook(Request $request)
    {
        $book = Book::create($request->all());
        return redirect(route('list-books'));
    }


    public function listBooks()
    {
        $books = Book::all();
        return view('books', compact('books'));
    }
}
