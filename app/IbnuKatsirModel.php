<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IbnuKatsirModel extends Model
{
    protected $table = 'ibnuKatsir';
    protected $fillable = ['id','surat','ayat','tafsir'];
}
