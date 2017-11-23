@extends('template')

@section('conteudo')
<form method="POST" action="/altera-usuario/{{$usuario->id }}">
    {!! csrf_field() !!}
    {!! method_field('PUT') !!}
    <div class="form-group">
      <label>Nome</label>
      <input value="{{ $usuario->name }}" type="text" class="form-control" name="name">
    </div>

    <div class="form-group">
      <label>Email</label>
      <input value="{{ $usuario->email }}" type="text" class="form-control" name="email">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection