<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\SelfcareResource;
use App\Models\SelfCare;

class PostController extends Controller
{
    public function index()
    {
        //get catper
        $catper = SelfCare::latest()->paginate(5);

        //return collection of posts as a resource
        return new SelfcareResource(true, 'List Data Catatan Perjalanan', $catper);
    }
}
