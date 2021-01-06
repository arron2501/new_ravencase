@extends('layouts.app')

@section('title', '100% QUALITY CUSTOM CASES | ')
@section('cases_status', 'active')
@section('fixed-top', 'fixed-top')
@section('css')
    <link href="{{ asset('css/products.css') }}" rel="stylesheet">
@stop

@section('content')

<div class="container mb-5 mt-5">
    <div class="row">
        <div class="col-4">
            <img src="/storage/{{ $product['mockup'] }}" class="w-100">
        </div>
        <div class="col-8">
            <h3 class="font-weight-bold">{{ $product['title'] }}</h3>
            <hr>
            <div class="mr-3">
                <p class="text-black-50 font-weight-bold">PRICE</p>
            </div>
            <h2 class="font-weight-bold text-danger">@currency($product->price)</h2>
            <hr>
            <div class="mr-3">
                <p class="text-black-50 font-weight-bold">SUITABLE FOR</p>
            </div>
            <div class="d-flex align-items-center">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <div class="pr-3">
                        @foreach($devices as $device)
                            <label class="btn btn-outline-primary btn-sm">
                                <input type="radio" name="device" autocomplete="off"> {{ $device['name'] }}
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>
            <hr>
            <div class="mr-3">
                <p class="text-black-50 font-weight-bold">QUANTITY</p>
            </div>
            <h5></h5>
            <hr>
            <div class="mr-3">
                <p class="text-black-50 font-weight-bold">DESCRIPTION</p>
            </div>
            <h5>{{ $product['description'] }}</h5>
            <hr>
            <div class="d-flex align-items-center">
                <div class="pr-2">
                    <a href="" class="btn btn-outline-primary">Buy Now</a>
                </div>
                <a href="" class="btn btn-primary">Add To Cart</a>
            </div>
        </div>
    </div>
</div>
