@extends('layouts.app')
@section('title'){{$objs->name}}@endsection
@section('content')
    <div class="container-xl">
        <div class="row">
            <div class="col-md-4 my-2">
                @foreach($brands as $brand)
                    <div class="border border-dark text-center bg-danger my-1 py-1 g-3">
                        <a href="{{ route('brands.show', $brand->id) }}" class="text-decoration-none text-light">
                            {{$brand->name}}
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="col">
                <div class="text-bg-dark my-3">
                    <div class="fs-3">{{ $objs->name }}</div>
                </div>
                <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-6 g-2 g-sm-3">
                    @foreach($products as $product)
                        <div class="col position-relative">
                            <div class="border p-sm-1 h-100">
                                {{--<img src="{{ count($product->images) > 0 ? Storage::url($product->images[0]) : asset('img/product.jpg') }}" class="img-fluid" alt="">--}}
                                <a href="{{ route('products.show', $product->id) }}" class="link-dark stretched-link text-decoration-none">
                                    {{ $product->name }}
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection