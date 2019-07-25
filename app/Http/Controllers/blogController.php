<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class blogController extends Controller
{
    public function index(){
        $data['title'] = 'Belajar Laravel - Blog';
        // $insert = [
        //     'nama' => 'Belajar query builder',
        //     'tahun' => 2009
        // ];
        // DB::table('buku')->insert($insert);
        $data['rows'] = DB::table('buku')->get();
        // dd($data) die dump
        return view('blog/blog',$data);
    }
    public function show($id){
        $data['title'] = 'Belajar Laravel - Detail';
        $data['id'] = $id;
        $data['nama'] = 'Jatnika';
        $data['rows'] = DB::table('buku')->where('Id',$id)->get();
        return view('blog/single',$data);
    }
}
