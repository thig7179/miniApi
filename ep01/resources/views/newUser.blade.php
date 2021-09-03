<!DOCTYPE html>
<html lang="PT-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </head>
  <title>Cadatro de Usuário</title>
  <h1 align="center">Cadastro</h1>
    <div class="container">
        <form action="{{route('users.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">nome</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="nome completo">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
              </div>
              <div class="form-group col-md-6">
                <label for="">Senha</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Senha">
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </form>
    </div>
</html>