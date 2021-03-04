<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;

class BabSatuController extends Controller
{
    Public function a1(){
        $artikels=Artikel::where('id',17)->where('user_id',160)->get();

        return $artikels;
    }

    Public function a2(){
       $artikels=Artikel::where('id',2)->orwhere('id',5)->latest()->get();
       return $artikels;
    }
}
