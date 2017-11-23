@extends('template')


@section('conteudo')
  <form method="POST" action="/salva-usuario">
    {!! csrf_field() !!}
    <div class="form-group">
      <label>Nome</label>
      <input type="text" class="form-control" name="name">
    </div>

    <div class="form-group">
      <label>Email</label>
      <input type="text" class="form-control" name="email">
    </div>

    <div class="form-group">
      <label>Senha</label>
      <input type="password" class="form-control" name="senha">
    </div>

    <a class="btn btn-secondary" href="/lista-usuarios">
      <i class="fa fa-arrow-left"></i> Voltar
    </a>
    
    <button type="submit" class="btn btn-success">
      <i class="fa fa-check-circle"></i>
      Salvar
    </button>

  </form>
@stop