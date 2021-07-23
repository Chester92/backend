<?php

namespace App\Http\Controllers;

use App\Models\Accesorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccesorioController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $accesorio = Accesorio::all();
        return $accesorio;
    }

    public function store(Request $request)
    {
        $accesorio = Accesorio::created($request->all());
        return $accesorio;
    }

    public function show($id)
    {
        $accesorio = Accesorio::find($id);
        return $accesorio;
    }

    public function update(Request $request, $id)
    {
        $accesorio = Accesorio::find($id)->update($request->all());
        return $accesorio;
    }
}
