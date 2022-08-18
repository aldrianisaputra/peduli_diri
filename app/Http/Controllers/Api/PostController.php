<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\SelfcareResource;
use App\Models\SelfCare;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index()
    {
        //get catper
        $catper = SelfCare::latest()->paginate(5);

        //return collection of posts as a resource
        return new SelfcareResource(true, 'List Data Catatan Perjalanan', $catper);
    }
    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'tanggal'     => 'required',
            'waktu'     => 'required',
            'lokasi'   => 'required',
            'suhu'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }


        //create catper
        $catper = SelfCare::create([
            'tanggal'     => $request->tanggal,
            'waktu'     => $request->waktu,
            'lokasi'   => $request->lokasi,
            'suhu'   => $request->suhu,
        ]);

        //return response
        return new SelfcareResource(true, 'Data Catatan Perjalanan Berhasil Ditambahkan!', $catper);
    }
}
