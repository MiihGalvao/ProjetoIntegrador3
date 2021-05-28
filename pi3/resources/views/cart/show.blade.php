@extends('layout.store')
@section('content')
<h2>Carrinho de compra</h2>
    <table class="table table-striped">
    <thead>
        <tr>
            <th>Produto</th>
                <th></th>
            <th>Quantidade</th>
                <th></th>
        </tr>
    </thead>
    <tbody class="align-middle">

    @foreach($cart as $item)
        <tr>
            <td><img src="{{ asset ($item->product()->image) }}"  style="width:40px"></td>
            <td><a href="{{ route('product.show', $item->product()->id }}">{{ $item->product()->name }}</a></td>
            <td><span> {{ $item->quantity }}</span></td>
            <td>
                <a href="{{ route.('cart.add', $item->product()->id) }}" class="btn btn btn-success">+</a>
                <a href="{{ route.('cart.remove', $item->product()->id) }}" class="btn btn btn-warning">-</a>
             </td>

            </tr>
    @endforeach
</tbody>
</table>
 
 @endsection