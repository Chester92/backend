<?php

namespace App\Http\Controllers;

use App\Models\Modelo;
use Illuminate\Http\Request;

class ModeloController extends Controller
{
    public function index()
    {
        $modelos = Modelo::all();
        return $modelos;

    }

    public function store(Request $request)
    {
        $modelo = Modelo::create($request);
        return $modelo;
    }

    public function show($id)
    {
        $modelo = Modelo::find($id);
        return $modelo;
    }

    public function update(Request $request, $id)
    {
        Modelo::find($id)->update($request->all());
        $modelo = Modelo::find($id);
        return $modelo;
    }
}
