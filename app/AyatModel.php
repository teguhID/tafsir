<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AyatModel extends Model
{
    protected $table = 'ayat';
    protected $fillable = ['id', 'juz', 'surat', 'ayat', 'latin', 'terjemahan'];
}
