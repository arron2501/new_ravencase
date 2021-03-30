@extends('layouts.app')

@section('title', '100% QUALITY CUSTOM CASES | ')
@section('cases_status', 'active')
@section('fixed-top', 'fixed-top')
@section('css')
    <link href="{{ asset('css/products.css') }}" rel="stylesheet">
@stop

@section('content')

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            @foreach($banners as $key => $banner)
                <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                    <img class="d-block w-100" src="/storage/{{ $banner['banner'] }}" alt="First slide">
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    {{--  START Offers Section  --}}
    <div class="container mb-5 mt-5">
        <div class="row">
            <div class="col-sm-12">
                <h3><strong>OUR PRODUCTS</strong></h3>
            </div>
        </div>
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-4">
                <div class="card-deck">
                    <div class="card noborder shadow-lg bg-white rounded">
                        <img class="card-img-top" src="/storage/{{ $product['mockup'] }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product['title'] }}</h5>
                            <p class="card-text">{{ $product['description'] }}</p>
                            <p class="card-text font-weight-bold">@currency($product->price)</p>
                            <a href="/products/{{ $product->id }}" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {{--  END Offers Section  --}}
