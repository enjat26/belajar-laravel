<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
    public function index(){
        return view('blog/home');
    }
    public function show($id){
        // return $id;
        $data = [
            'id'    => $id,
            'nama'  => 'jatnika',
            'hewan' => ['ayam','kambing','kelinci']
        ];
        return view('blog/single',$data);
    }
}
