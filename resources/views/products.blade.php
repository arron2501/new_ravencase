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
            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/neon1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/neon1.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/neon1.jpg" alt="Third slide">
            </div>
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
        <div class="card-deck">
            <div class="card noborder shadow-lg bg-white rounded">
                <img class="card-img-top" src="/images/neon1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
            <div class="card noborder shadow-lg bg-white rounded">
                <img class="card-img-top" src="/images/fortnite1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
            <div class="card noborder shadow-lg bg-white rounded">
                <img class="card-img-top" src="/images/marvel1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>
        <div class="card-deck">
            <div class="card noborder shadow-lg bg-white rounded">
                <img class="card-img-top" src="/images/neon1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
            <div class="card noborder shadow-lg bg-white rounded">
                <img class="card-img-top" src="/images/fortnite1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
            <div class="card noborder shadow-lg bg-white rounded">
                <img class="card-img-top" src="/images/marvel1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>
        <div class="card-deck">
            <div class="card noborder shadow-lg bg-white rounded">
                <img class="card-img-top" src="/images/neon1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
            <div class="card noborder shadow-lg bg-white rounded">
                <img class="card-img-top" src="/images/fortnite1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
            <div class="card noborder shadow-lg bg-white rounded">
                <img class="card-img-top" src="/images/marvel1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>
    </div>
    {{--  END Offers Section  --}}
