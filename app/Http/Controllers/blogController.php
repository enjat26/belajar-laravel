<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Blog;
class blogController extends Controller
{
    public function index(){
        $data['title'] = 'Belajar Laravel - Blog';
        //////////////////query bulider
        // $insert = [
        //     'nama' => 'Belajar query builder',
        //     'tahun' => 2009
        // ];
        // DB::table('buku')->insert($insert);
        // $data['rows'] = DB::table('buku')->get();
        // dd($data) die dump


        ///////////////elequent
         // insert biasa 
        // $blog = new Blog;
        // $blog->nama = 'Buku CI';
        // $blog->tahun = 2019;
        // $blog->save();

        // insert mass assigment
        // Blog::create([
        //     'nama' => 'Buku Ci V2',
        //     'tahun' => '2017',
        //     'created_at' => '2019-07-26 01:50:00',
        //     'updated_at' => '2019-07-26 01:50:00',
        // ]);

        //update biasa
            // $blog = Blog::find(2);
            // // dd($blog);
            // $blog->nama = 'Buku Aku2';
            // $blog->save();
        //update mass assigment
            // Blog::where('Id', 1)
            // //->where('destination', 'San Diego')
            // ->update(['nama' => 'akuuuu']);

        //delete
        // $blog = Blog::find(1);
        // $blog->delete();
        //delete pake destroy methode
        Blog::destroy(['2','3']); //hapus id 2 dan 3
        $data['rows'] = Blog::all();
        return view('blog/blog',$data);

       
    }
    public function show($id){
        $data['title'] = 'Belajar Laravel - Detail';
        $data['id'] = $id;
        $data['nama'] = 'Jatnika';
        //////////////////query bulider
        // $data['rows'] = DB::table('buku')->where('Id',$id)->get();


        ///////////////elequent
        $data['rows'] = Blog::find($id);
        // dd($data['rows']);
            // if(!$data['rows']){

            // abort('404');
            // }
        return view('blog/single',$data);
    }
}
