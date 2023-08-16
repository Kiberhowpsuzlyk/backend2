@extends('layouts.app')
@section('title')
    Ynamdar
@endsection
@section('content')
    <div class="container-xl">
        <div class="row align-items-start">
            <div class="col-2">
                <span class="h4 text-center">Brands</span>
                @foreach($brands as $brand)
                    <div class="border border-dark text-center bg-danger  g-3">
                        <a href="{{ route('brands.show', $brand->id) }}" class="text-decoration-none text-light">
                            {{$brand->name}}
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="col-2">
                <span class="h4 text-center">Categories</span>
                @foreach($categories as $category)
                    <div class="border border-dark text-center bg-danger  g-3">
                        <a href="#" class="text-decoration-none text-light">
                            {{$category->name}}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="row justify-content-center align-items-start row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
            @foreach($products as $product)
                <div class="card g-3">
                    <img src="" alt="">
                    {{--<div class="py-2">Satyjyn ady {{$product->user->name}}</div>--}}
                    {{--<div>Categoriya {{$product->category->name}}</div>--}}
                    {{--<div class="py-2">Brand {{$product->brand->name}}</div>--}}
                    <div class="h4">{{$product->name}}</div>
                    <div class="py-2">Haryt sany {{$product->stock}}</div>
                    <div>Barcode {{$product->barcode}}</div>
                    <div class="py-2">{{$product->price}} <span class="text-primary">TMT</span></div>
                    <div>{{$product->description}}</div>
                </div>
            @endforeach
        </div>
    </div>
@endsection