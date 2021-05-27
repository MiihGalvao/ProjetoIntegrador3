<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
   
    <title>Loja do Senac</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</head>
<body>
    <header>
<nav class="navbar navbar-expand-sm navbar-light bg-white shadow-sm">
        <div class="container">
            <h1><a class="navbar-brand" href="{{ url('/') }}">Loja do Senac</a></h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuCategoria" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Categoria</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuCategoria">
                    @foreach(\App\Models\Category::all() as $category)
                    <li><a class="dropdown-item" href="{{ route('category.show, $category->id')}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </li>
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuTag" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Tags</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuTag">
                @foreach(\App\Models\Tag::all() as $tag)
                    <li><a class="dropdown-item" href="{{ route('tag.show, $tag->id')}}">{{$tag->name}}</a></li>
                    @endforeach
                </ul>
            </li>
        </ul>
     </div>
                </div>
</nav>

</header>

    <main class="container my-4">

    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
        {{ session()->get('success')   }}
        </div>
        @endif

        @if(session()->has('error'))
        <div class="alert alert-danger" role="alert">
        {{ session()->get('error')   }}
        </div>
        @endif
        @yield('content')
        
    </main>

    <footer class="container bg-primary text-white p-5">
        <div class="row">
            <div class="col-6">
                <h2>Localização:</h2>
                <address>
                    Rua Lorem ipsum dolor.<br>
                    Lorem, ipsum. -Lorem,LR<br>
                    CEP:00000-OOO<br>
                    Telefone: (11) 99999-9999
                </address>
            </div>
            <div class="col-6">
            <h2>Horario de funcionamento</h2>
            <ul class = "list-unstyled">
                <li>Segunda - sexta: 9:00h as 18:00h</li>
                <li>Sabado: 10:00h as 16:00h</li>
            <ul>
            </div>
            </div>
    </footer>
    </body>
        </html>