@extends('app')
@section('title')
Acceuil

@endsection

@section('content')


    <section class="banner d-flex justify-content-center align-items-center pt-5"
        style="background-image: url('{{ asset('image/imges/paysage/e9523c3a3c8b4a139d07032b01eb2956.webp') }}'); background-repeat:no-repeat; background-size:cover">
        <div class="container my-5 py-5">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <h1 class="text-capitalize py-3 redressed banner-desc">Lorem ipsum amet consectetur adipisicing <br>
                        elit. Quas sapiente fuga itaque!</h1>
                    <!--<p>
                        <button class="btn btn-order btn-lg me-5 rounded-0 merriweather">Commander maintenant</button>
                        <button class="btn btn-outline-info btn-lg rounded-0 merriweather">Réserver</button>
                    </p>-->
                </div>
            </div>
        </div>
    </section>
<div class="container"></div>
    <section class="available merriweather py-5">
        <div class="container">
            <div class="row">
                <div class="card mb-3 border-0 rounded-0">
                    <div class="row ">
                        <div class="col-md-6">
                            <img src="{{ asset('image/imges/restaurants-indiens-benin.jpg') }}" class="img-fluid  "
                                alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Samoussas</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional
                                    content. This content is a little bit longer.</p>
                                <p class="card-text"><a href="#" class="text-muted btn">Last updated 3 mins
                                        ago</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="card my-5 border-0 rounded-0">
                    <div class="row ">
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional
                                    content. This content is a little bit longer.</p>
                                <p class="card-text"><a href="#" class="text-muted btn">Last updated 3 mins
                                        ago</a></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="carouselExampleIndicators" class="carousel slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="0" class="active" aria-current="true"
                                        aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('image/imges/Pepperoni-Pizza_5-SQjpg.jpg') }}"
                                            class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('image/imges/paysage/ataxipois.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('image/img/image3.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="card mb-3 border-0 rounded-0">
                    <div class="row ">
                        <div class="col-md-6">
                            <img src="{{ asset('image/img/image9.jpg') }}" class="img-fluid  " alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional
                                    content. This content is a little bit longer.</p>
                                <p class="card-text"><a href="#" class="text-muted btn">Last updated 3 mins
                                        ago</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="menu py-5 merriweather ">
        <div class="container">
            <div class="row">
                <h3 class="text-center merriweather">Nos variétés</h3>
                <div class="card bg-transparent text-center mb-4">
                    <div class="card-header redressed fs-4">
                        <ul class="nav nav-tabs justify-content-center card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="true" href="#">Active</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text ">Disabled</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('image/imges/igname.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to additional
                                content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('image/imges/84612_w1024h1024c1cx300cy223.webp') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to additional
                                content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col d-sm-none d-md-block">
                    <div class="card">
                        <img src="{{ asset('image/imges/tartare-de-thon.jpg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tarte de thon</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to additional
                                content.</p>
                        </div>
                    </div>
                </div>
                <div class="col d-sm-none d-md-block">
                    <div class="card">
                        <img src="{{ asset('image/img/carousel3.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to additional
                                content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cc-carousel merriweather bg-dark text-light text-center py-5">
        <div class="container">
            <div class="row">
                <h1 class="text-uppercase">Les délices interdits</h1>
                <div class="col pb-4">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit molestiae
                    aut minima minus eaque totam doloribus, perferendis, dicta fugit nihil facilis
                    modi voluptate cupiditate. Possimus illum ut reiciendis non sapiente.
                </div>
            </div>
            <div id="carouselExampleFade" class="carousel slide carousel-fade">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('image/imges/1649848525_854_Decouvrez-les-meilleurs-plats-du-continent-europeen.jpg') }}"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('image/imges/Couscous.webp') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('image/imges/1649848524_649_Decouvrez-les-meilleurs-plats-du-continent-europeen.jpg') }}"
                            class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
    </section>


    @endsection



