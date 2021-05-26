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
        <span class="h2 d-block">Toda nossa loja esta</span>
        <span class="h1 d-block"> Em promoção</span>
        <button class="btn btn-lg btn-primary">Veja nossos produtos</button>
    </div>
</section>


@endsection