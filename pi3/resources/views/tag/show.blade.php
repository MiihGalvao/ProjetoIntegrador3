@extends('layouts.store')

@section('content')
<section>
    <div class="row pi-5">
        <div class="text-center my-2">
            <h2>{{ $tag->name }}</h2>
            <span class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
        </div>
    </div>

  <div class="row">
     @foreach($tag->products as $product)
        <div class="col-lg-4 col-md-6 col-sm-10">
            <div class="text-center" style="height: 250px;">
                 <img src=" {{ asset($product->image) }}" class="h-100">
             </div>

            <div class="text-center">
                <span class="d-block fw-bold">{{ $product->name }}</span>
                <span class="d-block">R$ {{ $product->price }}</span>
            <div class="mt-2">
                <a href="{{ route('product.show', $product->id) }}" class="btn btn-secondary">Visualizar</a>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
    </div>
    @endforeach

</div> 

</section>

@endsection