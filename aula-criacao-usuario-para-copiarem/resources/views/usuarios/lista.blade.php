@extends('template')


@section('conteudo')
  <a href="/cria-usuario" class="btn btn-success">
    <i class="fa fa-plus-circle"></i>
    Criar um Usuário
  </a>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach($usuarios as $usuario)
        <tr>
            <td> {{ $usuario->id }} </td>
            <td> {{ $usuario->name }} </td>
            <td> {{ $usuario->email }} </td>
            <td>
              <a class="btn btn-secondary" href="/editar-usuario/{{ $usuario->id }}">
                <i class="fa fa-edit"></i> Editar
              </a>

              <form style="display: inline;" method="POST" action="deletar-usuario/{{ $usuario->id }}">
                {!! method_field('DELETE') !!}
                {!! csrf_field() !!}
              <button type="submit" class="btn btn-danger" href="/editar-usuario/{{ $usuario->id }}">
                <i class="fa fa-trash"></i> Deletar
              </button>
              </form>
            </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@stop