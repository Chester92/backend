<?php

namespace App\Http\Controllers;

use App\Models\Tipo;
use Illuminate\Http\Request;

class TipoController extends Controller
{
    public function index()
    {
        $tipos = Tipo::all();
        return $tipos;
    }

    public function store(Request $request)
    {
        $tipo = Tipo::created($request->all());
        return $tipo;
    }

    public function show($id)
    {
        $tipo = Tipo::find($id);
        return $tipo;
    }

    public function update(Request $request, $id)
    {
        Tipo::find($id)->update($request->all());
        $tipo = Tipo::find($id);
        return $tipo;
    }
}
