<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function listAllUsers()
    {
        $users = User::all();

        return view('listAllUsers', [
            'users' => $users
        ]);
    }

    public function listUser(User $user)
    {
        return view('listUser', [
            'user' => $user
        ]);
    }
}
