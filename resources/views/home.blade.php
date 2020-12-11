@extends('layouts.app')

@section('title', '100% QUALITY CUSTOM CASES | ')
@section('home_status', 'active')
@section('fixed-top', 'fixed-top')

@section('content')

<!--    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <div class="jumbotron min-vh-100 landingcover d-flex flex-column justify-content-center text-center text-white">
                    <h1 class="display-4">RAVEN CASE</h1>
                    <p class="lead"><span class="typed"></span></p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                    </p>
                </div>
            </div>
        </div>
    </div>-->

    {{--  START Hero Section  --}}
    <div class="mb-5">
        <div class="jumbotron-fluid hero d-flex flex-column justify-content-center">
            <div class="container text-center text-white">
                <h1 class="display-4">RAVEN CASE</h1>
                <p class="lead"><span class="typed"></span></p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                </p>
            </div>
        </div>
    </div>
    {{--  END Hero Section  --}}

<!--    <div id="carouselBillboard" class="carousel slide mb-5" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselBillboard" data-slide-to="0" class="active"></li>
            <li data-target="#carouselBillboard" data-slide-to="1"></li>
            <li data-target="#carouselBillboard" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 blur" src="/images/fortnite1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4">RAVEN CASE</h1>
                    <p class="lead">100% QUALITY CUSTOM CASES</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 blur" src="/images/marvel1.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4">RAVEN CASE</h1>
                    <p class="lead">100% QUALITY CUSTOM CASES</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 blur" src="/images/neon1.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4">RAVEN CASE</h1>
                    <p class="lead">100% QUALITY CUSTOM CASES</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                    </p>
                </div>
            </div>
        </div>
    </div>-->

<!--    <div id="carouselVoucher" class="carousel slide carousel-multi-item" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselVoucher" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselVoucher" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>-->

    {{--  START Coupons Section  --}}
    <div class="container mb-5">
        <div class="row">
            <div class="col-sm-12">
                <h3><strong>CLAIM YOUR COUPONS HERE!</strong></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="card noborder">
                    <div class="card-body shadow-lg bg-white rounded">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card noborder">
                    <div class="card-body shadow-lg bg-white rounded">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  END Coupons Section  --}}

    {{--  START Offers Section  --}}
    <div class="container mb-5">
        <div class="row">
            <div class="col-sm-12">
                <h3><strong>JUST FOR YOU!</strong></h3>
            </div>
        </div>
        <div class="card-deck">
            <div class="card noborder shadow-lg bg-white rounded">
                <img class="card-img-top" src="/images/neon1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
            <div class="card noborder shadow-lg bg-white rounded">
                <img class="card-img-top" src="/images/fortnite1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
            <div class="card noborder shadow-lg bg-white rounded">
                <img class="card-img-top" src="/images/marvel1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
            </div>
        </div>
    </div>
    {{--  END Offers Section  --}}

    {{--  START Showcases Section  --}}
    <div>
        <div class="jumbotron-fluid showcaseonepiece d-flex flex-column justify-content-center">
            <div class="container text-center text-white">
                <h1 class="display-4">Fluid jumbotron</h1>
                <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
            </div>
        </div>

        <div class="jumbotron-fluid showcaseneon d-flex flex-column justify-content-center">
            <div class="container text-center text-white">
                <h1 class="display-4">Fluid jumbotron</h1>
                <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
            </div>
        </div>

        <div class="jumbotron-fluid showcasefortnite d-flex flex-column justify-content-center">
            <div class="container text-center text-white">
                <h1 class="display-4">Fluid jumbotron</h1>
                <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
            </div>
        </div>

        <div class="jumbotron-fluid showcasemarvel d-flex flex-column justify-content-center">
            <div class="container text-center text-white">
                <h1 class="display-4">Fluid jumbotron</h1>
                <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
            </div>
        </div>
    </div>
    {{--  END Showcases Section  --}}

    {{--  START Footer Section  --}}
    <footer>
        <div class="text-center text-white py-4">
            <div class="footer-copyright text-center">
                © 2020 Raven Case:<strong> All Rights Reserved.</strong>
            </div>
        </div>
    </footer>
    {{--  END Footer Section  --}}

@endsection
