<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTafsirModel;

class DataTafsirController extends Controller
{
    public function index()
    {
        $data = DataTafsirModel::all();
        return view('dataTafsir.dashboard')->with('data', $data);
    }

    public function create()
    {
        return view('dataTafsir.input');
    }

    public function store(Request $req)
    {
        DataTafsirModel::create($req->all());
        return redirect('dataTafsir');
    }

    public function edit($id)
    {
        $data = DataTafsirModel::find($id);
        return view('dataTafsir.edit')->with('data', $data);
    }

    public function update(Request $req, $id)
    {
        DataTafsirModel::find($id)->update($req->all());
        return redirect('dataTafsir');
    }

    public function destroy($id)
    {
        DataTafsirModel::find($id)->delete();
        return redirect('dataTafsir');
    }

    public function Show($id)
    {
        $data = DataTafsirModel::find($id);
        return view('dataTafsir.tafsir')->with('data', $data);
    }
}

