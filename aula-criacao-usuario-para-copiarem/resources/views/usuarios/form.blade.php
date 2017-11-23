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

  <button type="submit" class="btn btn-primary">Submit</button>
</form>