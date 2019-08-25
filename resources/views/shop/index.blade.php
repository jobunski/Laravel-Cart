@extends('layout.master')
@section('title')
    Shopping Cart
@endsection
@section('content')
    @foreach($products->chunk(3) as $productChunk)
        <div class="row">
            @foreach($productChunk as $product)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="{{ $product-> imagePath }}"  class="img-fluid">
                        <div class="caption">
                            <h3>{{ $product -> title }}</h3>
                            <p class="description">{{ $product-> description }}</p>
                            <div class="clearfix">
                                <p class="price float-left">Ksh {{ $product-> price }}</p>
                                <a  class="btn btn-success float-right" role="button" href="{{ route('product.addToCart',['$id'=>$product->id]) }}">
                                    Add
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection
