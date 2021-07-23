<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;
use Illuminate\Support\Facades\DB;

class MarcaController extends Controller
{
    public function index(){

        $marcas = Marca::all();
        return $marcas;
    }
    public function store(Request $request)
    {
        $marca = Marca::create($request->all());
        return $marca;
    }

    public function show($id)
    {
        $marca = Marca::find($id);
        return $marca;
    }

    public function update(Request $request, $id)
    {
        Marca::find($id)->update($request->all());
        $marca = Marca::find($id);
        return $marca;
    }
}
