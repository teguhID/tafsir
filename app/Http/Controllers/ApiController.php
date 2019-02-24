<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AyatModel;

class ApiController extends Controller
{
    public function index()
    {
        return AyatModel::all();
    }
}
