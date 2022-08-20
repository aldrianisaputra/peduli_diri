<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SelfcareResource extends JsonResource
{

     //define properti
     public $status;
     public $message;


    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    public function __construct($status, $message, $resource)
    {
        parent::__construct($resource);
        $this->status  = $status;
        $this->message = $message;
    }
    
    public function toArray($request)
    {
        return [
            'success'   => $this->status,
            'message'   => $this->message,
            'data'      => $this->resource
        ];
    }
    public function update(Request $request, SelfCare $catper)
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


            //update post with new image
            $catper->update([
                'tanggal'     => $request->tanggal,
                'waktu'     => $request->waktu,
                'lokasi'   => $request->lokasi,
                'suhu'   => $request->suhu,
            ]);

        

        //return response
        return new SelfcareResource(true, 'Data catper Berhasil Diubah!', $catper);
    }
}
