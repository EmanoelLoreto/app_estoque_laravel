<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="../../css/app.css" rel="stylesheet">
  <title>Laravel</title>
  <div class="container">
    <h1 class="mt-2">Pokemons</h1>
    <table class="table mt-2 text-center">
      <tr>
        <th class="text-left">Nome</th>
        <th></th>
      </tr>
      @foreach ($pokemons as $p)
        <tr>
          <td class="text-left">{{ $p->name }}</td>
        </tr>
      @endforeach
    </table>
  </div>
</head>
<body>
  
</body>
</html>