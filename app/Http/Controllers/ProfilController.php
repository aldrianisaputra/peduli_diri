<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index(){
        $data = User::all();
        // dd($data);
        return view('profil', compact('data'));
    }
}
