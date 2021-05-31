@extends('layouts.store')
@section('content')
<h2>Pagamentos</h2>

<div class="row justify-content-center">
    <div class="col-md-6 col-10 my-4 p-3">
        <h3>Endereço de entrega</h3>
        <addres class="ms-3">
            Rua Joao silva,100<br>
            São Paulo, SP<br>
            CEP: 04846-000<br>
            Brasil
        </addres>
        <a href="#" class="float-end me-4">Trocar o endereço</a>
    </div>
    <div class="col-md-6 col-10 bg-light my-4 p-3">
           <h3> Resumo da compra</h3>
           <div class="ms-3">
                <div>
                    <span>Quantidade de produtos comprados:</span>
                    <a href="{{ route('cart.show') }}" class="float-end me-4">{{ \App\Models\Cart::count() }} produto(s)</a>
                </div>
                    <span>Frete::</span>
                    <span class="float-end me-4 text-success fw-bold">GRÁTIS</span>
                </div>
                <hr>
                <div>
                    <span class="h4">Total a pagar:</span>
                    <span class="float-end me-4 h4">R$ {{ number_format(\App\Models\Cart::totalValue(), 2, ',' , '.') }}</span>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <form class="my-4">
        <h2>Dados de pagamento</h2>
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-6 col-10 my-4 p-3">
                <label for="cc-nome">Nome no cartão</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="far fa-credit-card"></i></span>
               
                <input type="text" id="cc-nome" name="cc-nome" class="form-control" required>
            </div>
            <small class="text-muted">Você deve prencher o nome igual no cartão</small>
            </div>
            <div class="col-md-6 col-10 my-4 p-3">

                Numero do Cartão
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-10 my-4 p-3">
                CVV

            </div>
            <div class="col-md-6 col-10 my-4 p-3">

                Data de expiração
            </div>
        </div>
    </form>

@endsection