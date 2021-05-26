@extends('layouts.store')
@section('css')
<style>
    #banner {
        background:url('https://via.placeholder.com/2000x800');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        min-height: 400px;
    }

   </style>
   @endsection

@section('content')
<section id="banner" class="d-flex align-items-center p-4">

    <div>
        <span class="h2 d-block text-capitalize mb-0">Toda nossa loja esta</span>
        <span class="h1 d-block text-uppercase fw-bold mb-3"> Em promoção</span>
        <button class="btn btn-lg btn-primary">Veja nossos produtos</button>
    </div>
</section>

<section>
    <div class="row pi-4">
        <div class="text-center my-2">
            <h2>Produtos em Promoção</h2>
            <span class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
        </div>
    </div>

  <div class="row">
     @foreach()
        <div class="col-lg-4 col-md-6 col-sm-10">
            <div class="text-center" style="height: 250px;">
                 <img src="Endereço da img" class="h-100">
             </div>

            <div class="text-center">
                <span class="d-block fw-bold">Nome do produto</span>
                <span class="d-block">R$50,00</span>
            <div class="mt-2">
                <a href="#" class="btn btn-secondary">Visualizar</a>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
    </div>
    @endforeach

</div> 

</section>

@endsection