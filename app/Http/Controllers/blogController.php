<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
    public function index(){
        $data['title'] = 'Belajar Laravel - Blog';
        $data['rows'] = [
            1 => 'Belajar Laravel',
            2 => 'Belajar Controller',
            3 => 'Belajar Blade Tamplating',
        ];
        return view('blog/blog',$data);
    }
    public function show($id){
        $data['title'] = 'Belajar Laravel - Detail';
        $data['id'] = $id;
        $data['nama'] = 'Jatnika';
        $data['hewan'] = ['ayam','kambing','kelinci'];
        return view('blog/single',$data);
    }
}
