<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tesController extends Controller
{
    public function index($namaku,$alamatku){
        return $namaku.' '.$alamatku;
    }
    public function show(){
        $url = route('tes_nama');
        echo $url;
    }
}
