@extends('layouts.store')

@section('content')
<section>
    <div class="row pi-5">
        <div class="text-center my-2">
            <h2>{{ $category->name }}</h2>
            <span class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
        </div>
    </div>

  <div class="row">
     @foreach($products as $product)
        <div class="col-lg-4 col-md-6 col-sm-10">
            <div class="text-center" style="height: 250px;">
                 <img src=" {{ asset($product->image) }}" class="h-100">
             </div>

            <div class="text-center">
                <span class="d-block fw-bold">{{ $product->name }}</span>
                <span class="d-block">R$ {{ $product->price }}</span>
            <div class="mt-2">
                <a href="{{ route('product.show', $product->id) }}" class="btn btn-secondary">Visualizar</a>
                <a href="{{ route('cart.add', $product->id) }}" class="btn btn-primary">Comprar</a>
            </div>
        </div>
    </div>
    @endforeach

</div> 
<div class="d-flex justify-content-center mt-4">
    {{ $products->links() }}
</div>
</section>

@endsection