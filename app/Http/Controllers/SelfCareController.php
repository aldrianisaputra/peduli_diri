<?php 

namespace App\Http\Controllers;

use App\Models\SelfCare;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Self_;

class SelfCareController extends Controller
{
    // mengambil data secara konektiv
    // public function __construct(Selfcare $catper)    
    // {
    //     $this->catper = $catper;
    // }


    public function tampilan(){
        $data = SelfCare::all();
        // dd($data);

        return view('dataperjalanan', compact('data'));
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
