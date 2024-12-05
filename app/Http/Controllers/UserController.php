<?php

namespace App\Http\Controllers;

use App\Models\User;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('prueba.users.index', compact('users'));
    }


    public function create()
    {

        $user = new User;
        $user->name = Lorem::words(2, true);
        $user->email = Lorem::words(2, true) . '@example.com';
        $user->password = Hash::make("password");
        $user->age = Lorem::numberBetween(15, 75);
        $user->address = Lorem::words(4, true);
        $user->address = Lorem::randomNumber(5, true);
        $user->save();


        return redirect()->route('user.index');
    }


    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
