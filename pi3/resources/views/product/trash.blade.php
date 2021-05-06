<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Lista de produtos apagados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap. min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script>
        function restore(){
            if (confirm('Você deseja restaurar o produto ?'))
            window.location = route;


        }
    </script>
</head>
<body>
@include ('layouts.menu')
        <main class="container mt-5">
            
            @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
            {{ session()->get('success')   }}
            </div>
            @endif
            <h1>Lista de produtos - apagados</h1>
            <a href="{{ route('product.create')  }}" class="btn btn-lg btn-primary"> Criar Produto</a>
            <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID<th>
                        <th>Nome<th>
                        <th>Preço<th>
                        <th>Descrição<th>
                        <th>Categoria<th>
                        <th>Opçoes<th>
                    </tr>
                    </thead>
            <tbody>
                @foreach($products as $prod)
            <tr>
                <td>{{ $prod->id }}</td>
                <td>{{ $prod->name }}</td>
                <td>{{ $prod->price }}</td>
                <td>{{ $prod->description }}</td>
                <td>{{ $prod->category->name }}</td
                    <td>
                
                    <form action="{{route('product.restore', $prod->id)}}" method="POST" onsubmit="return remover()" class="d-inline">       
                    @method('PATCH')
                    @csrf               
                <button type="submit" class="btn btn-sm btn-primary">Restaurar</button>
                </form>
                </td>
                </tr>
                @endforeach
            </tbody>
                </table>
                    </div>
                </main>