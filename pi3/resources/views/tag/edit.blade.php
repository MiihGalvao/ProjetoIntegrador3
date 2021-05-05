<!DOCTYPE html>
<html lang="pt-br">
<head>
  
<title>Editar tag</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body class= "container mt-5 bg-light">
    <h1>Editar tag</h1>
    <form method="POST" action="{{ route('tag.update', $tag->id) }}" > 
    @method('PATCH')

    @csrf
<div class="row">
    <span class = "form-label">Nome</span>
    <input type="text" name="name" class="form-control" value= "{{ $tag->name }}">
</div>

<div class="row mt-4">
    <button type="submit" class="btn btn-success btn-lg"> Salvar</button>
</div>
    </form>
</body>
</html>