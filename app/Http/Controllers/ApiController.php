<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTafsirModel;
use App\IbnuKatsirModel;

class ApiController extends Controller
{
    public function index()
    {
        // return DataTafsirModel::all();
    }

    public function Surah1()
    {
        return DataTafsirModel::where('surat', 'Al-Fatihah')->get();
    }

    public function Surah2()
    {
        return DataTafsirModel::where('surat', 'Al-Baqarah')->get();
    }
}
