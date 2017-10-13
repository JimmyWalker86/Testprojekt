<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\User;

class UserController extends Controller
{
    public function index(User $user)
    {
        // alls users and there phones
        return User::with('phones')->get();

        // one user and his phones
        return User::findOrFail(1)->with('phones')->get();
    }

    public function create(User $user){
        $user = $user::create([
            'name' => 'Torsten',
            'email' => 'torsten@email.de',
            'password' => 'secret']);

        return response($user->id, 200);
    }

    public function getPhoneFromUser(User $user, $id)
    {
        $user = $user::findOrFail($id);

        return response($user->phones, 200);
    }
}
