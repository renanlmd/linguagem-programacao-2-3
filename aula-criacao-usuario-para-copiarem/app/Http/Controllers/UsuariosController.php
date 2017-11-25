<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuariosController extends Controller
{
  public function formularioUsuario()
  {
    return view('usuarios.criar');
  }

  public function listaUsuario(Request $requisicao)
  {
    $usuarios = User::select('*');

    if($requisicao->has('pesquisa')) {
      $usuarios->where('name', 'like', '%' . $requisicao->get('pesquisa') . '%');
    }

    $usuarios->orderBy('name', 'asc');

    $listaDeUsuarios = $usuarios->get();

    return view('usuarios.lista', [
      'usuarios' => $listaDeUsuarios
    ]);
  }

  public function alteraUsuario($id, Request $requisicao)
  {
    $usuario = User::find($id);

    $usuario->update([
      'name' => $requisicao->get('name'),
      'email' => $requisicao->get('email')
    ]);

    return redirect('lista-usuarios');
  }

  public function deletarUsuario($id)
  {
    User::destroy($id);

    return redirect('lista-usuarios');
  }

  public function editarUsuario($id)
  {
    $usuario = User::find($id);

    return view('usuarios.editar', [
      'usuario' => $usuario
    ]);
  }

  public function salvarUsuario(Request $requisicao)
  {
    User::create([
      'name' => $requisicao->get('name'),
      'email' => $requisicao->get('email'),
      'password' => bcrypt($requisicao->get('password')),
    ]);

    return redirect('lista-usuarios');
  }

}
