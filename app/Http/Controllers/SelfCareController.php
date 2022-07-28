<?php

namespace App\Http\Controllers;

use App\Models\SelfCare;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Self_;

class SelfCareController extends Controller
{
    public function tampilan(){
        $data = SelfCare::all();
        // dd($data);

        return view('dataperjalanan', compact('data'));
    }
    public function tambahdata(){
        return view('tambahdata');
    }
   
}
