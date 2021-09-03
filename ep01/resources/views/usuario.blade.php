<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=devce-width, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes do usuario</title>
    </head>
    <body>
        <h1>{{$user->name}}
        </h1>
        <p>E-mail: {{$user->email}}
        </p>
        <p>Data de criação: {{date('d/m/y H:i', strtotime($user->created_at))}}
        </p>
    </body>
</html>