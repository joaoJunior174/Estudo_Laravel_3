<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form class="form" action="/cadastro" method="get" enctype="multipart/form-data" autocomplete="off">
    {{ csrf_field() }}
      
      <input type="submit" value="Listar" name="register" class="btn btn-block btn-primary" />
    </form>
    
    @if($clientes != null)
    
        @foreach($clientes as $cliente)

            <p>{{$cliente->name}}</p>

        @endforeach

    @endif


</body>
</html>