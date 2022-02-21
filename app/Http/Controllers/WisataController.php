<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WisataController extends Controller
{
    public function pantai(){
        return view('/praktikum3/pantai');
    }

    public function pegunungan(){
        return view('/praktikum3/pegunungan');
    }

    public function pantai(){
        return view('/praktikum3/hutan');
    }
}
