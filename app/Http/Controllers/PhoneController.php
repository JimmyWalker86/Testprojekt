<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Phone;
use App\User;

class PhoneController extends Controller
{
    public function index(Phone $phone)
    {
        $phone = new Phone(['number' => '017736772771']);

        $user = User::findOrFail(1);
        $user->phones()->save($phone);

        return response($phone->number, 200);
    }
}
