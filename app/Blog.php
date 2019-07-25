<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table ='buku';
    public $timestamp =false; //tidak ada colom created_at dan updated_at
}
