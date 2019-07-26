<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table ='buku';
    public $timestamp =false; //tidak ada colom created_at dan updated_at

    // syarat penggunaan mask assigment harus ada variable $guarded atau $filalble
    // protected $guarded = ['upadated_at','created_at']; //kolom yang tidak boleh diisi
    protected $fillable = ['nama','tahun']; //kolom yang boleh diisi
}
