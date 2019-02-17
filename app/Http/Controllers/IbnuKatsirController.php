<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IbnuKatsirModel;

class IbnuKatsirController extends Controller
{
    public function index()
    {
        $data = IbnuKatsirModel::all();
        return view('ibnuKatsir.dashboard')->with('data', $data);
    }

    public function create()
    { 
        return view('ibnuKatsir.input');
    }

    public function store(Request $req)
    {
        IbnuKatsirModel::create($req->all());
        return redirect('ibnuKatsir');
    }

    public function edit($id)
    {
        $data = IbnuKatsirModel::find($id);
        return view('ibnuKatsir.edit')->with('data', $data);
    }

    public function update(Request $req, $id)
    {
        IbnuKatsirModel::find($id)->update($req->all());
        return redirect('ibnuKatsir');
    }

    public function destroy($id)
    {
        IbnuKatsirModel::find($id)->delete();
        return redirect('ibnuKatsir');
    }
}
