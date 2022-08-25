<?php

namespace App\Http\Controllers;

use App\Models\Projecto;
use Illuminate\Http\Request;
use illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ProjectoController extends Controller
{
  public function index(Request $request)
  {
    // SIN PAGINACION
    // $usuarios = Projecto::all();
    // return view('projectos.index',compact('usuarios'));
    // CON PAGINACION
    // $usuarios = Projecto::Paginate(7);
    // PARA BORRAR LOS ESPACIOS EN BLANCO USO EL SIGUENTE METODO TRIM
    $texto = trim($request->texto);
    $usuarios = Projecto::where('nombre', 'LIKE', '%' . $texto . '%')
      ->orWhere('apellido', 'LIKE', '%' . $texto . '%')
      ->orderBy('id', 'asc')
      ->paginate(5);
    $data = [
      'usuarios' => $usuarios,
      'texto' => $texto
    ];
    return view('projectos.index', compact('usuarios', 'texto'));
  }

  public function create()
  {
    return view('/projectos.create');
  }

  public function store(Request $request)
  {
    $usuarios = new Projecto();
    $usuarios->codigo = $request->get('codigo');
    $usuarios->nombre = $request->get('nombre');
    $usuarios->apellido = $request->get('apellido');
    $usuarios->pais = $request->get('pais');
    $usuarios->nivel_de_equipo = $request->get('nivel_de_equipo');
    $usuarios->correo = $request->get('correo');

    $usuarios->save();
    return redirect('/');
  }

  public function edit($id)
  {
    $usuario = Projecto::find($id);
    return view('/projectos.edit',compact('usuario'));
  }
  public function update(Request $request, $id){

    $usuario = Projecto::find($id);
    $usuario->codigo = $request->get('codigo');
    $usuario->nombre = $request->get('nombre');
    $usuario->apellido = $request->get('apellido');
    $usuario->pais = $request->get('pais');
    $usuario->nivel_de_equipo = $request->get('nivel_de_equipo');
    $usuario->correo = $request->get('correo');
    $usuario->save();
    return redirect('/');
  }
  public function destroy($id)
  {
    $user = Projecto::find($id);
    $user->delete();
    return redirect('/')->with('notice', 'Usuarios eliminado correctamente');
  }
}
