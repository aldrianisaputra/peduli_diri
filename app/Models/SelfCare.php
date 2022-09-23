<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelfCare extends Model
{
    use HasFactory;
    // protected $guarded=[];

    protected $fillable = [
        'tanggal',
        'waktu',
        'lokasi',
        'suhu',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
