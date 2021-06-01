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
    <form style ="margin-top: 25px; margin-bottom: 70px;">
            <h2>Dados de pagamento</h2>
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-5 col-10 mb-3">
                <label for="cc-nome">Nome no cartão</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-user-tag"></i></span> 
                <input type="text" id="cc-nome" name="cc-nome" class="form-control" required>
            </div>
            <small class="text-muted">Você deve prencher o nome igual no cartão</small>
            </div>
            <div class="col-md-5 col-10 mb-3">
                <label for="cc-nome">Numero do Cartão</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-credit-card"></i></span> 
                <input type="text" id="cc-card" name="cc-nome" class="form-control" required>
            </div>
        </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-5 col-10 mb-3">
            <label for="cc-nome">Código CVV (Atras do cartão)</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-unlock"></i></span> 
                <input type="text" id="cc-cvv" name="cc-cvv" class="form-control" required>
            </div>

            </div>
            <div class="col-md-6 col-10 my-4 p-3">

                Data de expiração
            </div>
        </div>
    </form>

@endsection