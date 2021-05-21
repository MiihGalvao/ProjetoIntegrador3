<!DOCTYPE html>
<html lang="pt-br">
<head>
    
<title>Lista de Tags</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap. min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script>
        function remover(){
            return confirm('Você deseja remover a tag ?');
        }
    </script>
</head>
<body class="container mt-5">
@if(session()->has('success'))
    <div class="alert alert-success" role="alert">
     {{ session()->get('success')   }}
    </div>
    @endif
    <h1>Lista de Tags</h1>
    <a href="{{route ('tag.create') }}" class="btn btn-lg btn-primary"> Criar Tags</a>
    <div class="row">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID<th>
                <th>Nome<th>
                <th>Opçoes<th>
            <tr>
            <thead>
    <tbody>
    @foreach($tags as $tag)
    <tr>
        <td>{{ $tag->id }}</td>
        <td>{{ $tag->name }} ({{ $tag->products()->count() }})</td>
        <td>
            <a href="#" class="btn btn-sm btn-success">Visualizar</a>
            <a href="{{ route('tag.edit',$tag->id)}}" class="btn btn-sm btn-warning">Editar</a>
        <form class="d-inline" method="POST" action="('{{route('tag.destroy', $tag->id )}}" onsubmit="return remover();"
        @method ('DELETE') 
        @csrf
              
            <button type="submit"  class="btn btn-sm btn-danger">Apagar</a>
           </form>
            </td>
        </tr>
        @endforeach
    </tbody>
        </table>
            </div>

</body>
</html>