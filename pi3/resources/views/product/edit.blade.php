<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Editar Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body class= "container mt-5 bg-light">
    <h1>Cadastra produtos</h1>
    <form method="POST" action="{{ route('product.update', $product->id) }}" > 
    @csrf
<div class="row">
    <span class = "form-label">Nome</span>
    <input type="text" name="name" class="form-control" value= "{{ product->name }}">
</div>
<div class="row">
    <span class = "form-label">Descrição</span>
    <textarea class="form-control" name="description"> {{ product->description }} </textarea>
</div>
<div class="row">
    <span class = "form-label">Preço</span>
    <input type="number" min="0.00" max = "10000.00" name="price" step="0.01" class="form-control" value="{{product->price}}">
</div>
<div class="row mt-4">
    <button type="submit" class="btn btn-success btn-lg"> Salvar</button>
</div>
    </form>
</body>
</html>              
