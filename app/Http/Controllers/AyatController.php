<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AyatModel;

class AyatController extends Controller
{
    public function index()
    {
        $data = AyatModel::all();
        return view('ayat.dashboard')->with('data', $data);
    }

    public function create()
    {
        return view('ayat.input');
    }

    public function store(Request $req)
    {
        AyatModel::create($req->all());
        return redirect('ayat');
    }

    public function edit($id)
    {
        $data = AyatModel::find($id);
        return view('ayat.edit')->with('data', $data);
    }

    public function update(Request $req, $id)
    {
        AyatModel::find($id)->update($req->all());
        return redirect('ayat');
    }

    public function destroy($id)
    {
        AyatModel::find($id)->delete();
        return redirect('ayat');
    }
}
