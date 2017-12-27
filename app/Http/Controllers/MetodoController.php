<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use DB;
Use App\CategoriaModel;
Use App\CursoInfo;
use App\Http\Requests;

class MetodoController extends Controller
{
    public function index()
    {
        $CategoriaModels        = CategoriaModel::orderBy('id')->get();
        $CursoInfos              = CursoInfo::orderBy('id')->get();

        return view('metodo.index', [

        ], compact('CategoriaModels', 'CursoInfos'));
    }
}
