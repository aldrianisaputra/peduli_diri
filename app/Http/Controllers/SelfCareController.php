<?php 

namespace App\Http\Controllers;

use App\Models\SelfCare;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Self_;

class SelfCareController extends Controller
{
    // mengambil data secara konektiv
    public function __construct(Selfcare $data)    
    {
        $this->catper = $data;
    }


    public function tampilan(){
        $data = $this->catper->with('user')->get();
        // dd($data);

        return view('dataperjalanan', compact('data'));

        // $catper = $this->catper->with('user')->get();
        // return view('dataperjalanan');

    }
    public function tambahdata(){
        return view('tambahdata');
    }

    public function insertdata(Request $request){
        // dd($request->all());
        SelfCare::create($request->all());
        return redirect()->route('tampilandata');
    }
   
}
