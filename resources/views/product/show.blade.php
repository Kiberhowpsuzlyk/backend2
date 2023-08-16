@extends('layouts.app')
@section('title'){{ $obj->name }} - {{ $obj->brand->name }}@endsection
@section('content')
    <div class="container-xl text-center py-3">
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-6 g-2 g-sm-3">
            <div class="card">
                <div class="py-2 h3">{{$obj->brand->name}}</div>
                <div class="h4 py-2">{{$obj->name}}</div>
                <div class="h5 py-2 fw-normal">Blokda {{$obj->stock}} <span>sany</span></div>
                <div class="h6 py-2 fw-normal">Barcode {{$obj->barcode}}</div>
                <div class="h4">{{$obj->price}} <span class="text-primary">TMT</span></div>
                <div class="py-2">{{$obj->description}}</div>
            </div>
        </div>
        <div class="row justify-content-center align-items-start row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
            @foreach($products as $product)
                <div class="card g-3">
                    <img src="" alt="">
                    <div class="h4">{{$product->brand->name}}</div>
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