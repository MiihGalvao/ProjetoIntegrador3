<!DOCTYPE html>
<html lang="pt-br">
<head>
   
    <title>Lista de Produtos</title>
    <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap. min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script>
        function remover(route){
            if (confirm('Você deseja remover o produto ?'))
            window.location = route;


        }
    </script>
</head>
<body class="container mt-5">
@if(session()->has('success'))
    <div class="alert alert-success" role="alert">
     {{ session()->get('success')   }}
    </div>
    @endif
    <h1>Lista de produtos</h1>
    <a href="{{ route('product.create')  }}" class="btn btn-lg btn-primary"> Criar Produto</a>
    <div class="row">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID<th>
                <th>Nome<th>
                <th>Preço<th>
                <th>Opçoes<th>
            <tr>
            <thead>
    <tbody>
        @foreach($products as $prod)
    <tr>
        <td>{{ $prod->id }}</td>
        <td>{{ $prod->name }}</td>
        <td>{{ $prod->price }}</td>
        <td>{{ $prod->description }}</td>
            <td>
            <a href="#" class="btn btn-sm btn-success">Visualizar</a>
            <a href="{{ route ('product.edit',$prod->id) }}" class="btn btn-sm btn-warning">Editar</a>
            <a href="#" onclick="remover('{{route('product.destroy' ,$prod->id )}}');" class="btn btn-sm btn-danger">Apagar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
        </table>
            </div>

</body>
</html> 