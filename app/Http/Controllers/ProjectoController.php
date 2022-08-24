<?php

namespace App\Http\Controllers;
use App\Models\Projecto;
use Illuminate\Http\Request;
use illuminate\Support\Facades\DB;
class ProjectoController extends Controller
{
      public function index(Request $request){
        // SIN PAGINACION
        // $usuarios = Projecto::all();
        // return view('projectos.index',compact('usuarios'));
        // CON PAGINACION
         // $usuarios = Projecto::Paginate(7);
        // PARA BORRAR LOS ESPACIOS EN BLANCO USO EL SIGUENTE METODO TRIM
        $texto = trim($request->texto);
        $usuarios = Projecto::where('apellido','LIKE','%'.$texto.'%')
                    ->orWhere('apellido','LIKE','%'.$texto.'%')
                    ->latest('id')
                    ->paginate(5);
                    $data = [
                      'usuarios'=>$usuarios,
                      'texto'=>$texto
                    ];
        return view('projectos.index',compact('usuarios','texto'));
    }
}
