<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataTafsirModel extends Model
{
    protected $table = 'datatafsir';
    protected $fillable = ['id', 'juz', 'surat', 'noAyat', 'ayat', 'latin', 'terjemahan', 'tafsirIbnuKatsir'];
}
