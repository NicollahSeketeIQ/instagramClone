<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = User::findorFail($user); //findofFail will direct to a 404not found page when a page that doesnt exist

        return view('profiles.index',[
            'user' => $user,
        ]);
    }
}
 