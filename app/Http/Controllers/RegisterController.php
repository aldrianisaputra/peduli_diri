<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(Request $request){
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'nik' => 'required|numeric',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validateData['password'] = bcrypt($validateData['password']);
        $validateData['email_verified_at'] = date("Y-m-d H:i:s");

        User::create($validateData);
        $request->session();
        return redirect('/');

    }
}
