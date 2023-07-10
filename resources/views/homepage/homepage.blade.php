@extends('navbar.navbar')

@section('additional-css')
    <link rel="stylesheet" href="{{ asset('css/homepage/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homepage/search.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homepage/btgroup.css') }}">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endsection

@section('content')
    <section id=topSection>
        {{-- Welcome --}}
        <div class="container">
            <div class="row">
                <div class="col d-flex align-items-center">
                    <h2 id=welcome>Welcome!</h2>
                </div>
                <div class="col d-flex align-items-end justify-content-end">
                    <div class="circle">
                        <h2 id=noTable>1</h2>
                    </div>
                </div>
            </div>

            {{-- Promo / unggulan --}}
            <div class="row">
                <div class="col">
                    <h3 id=promotions>Promo / unggulan</h3>
                </div>
                <div class="w-100"></div>
                <div class="col">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/img/banner/burger.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/banner/burger.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/banner/pizza.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            {{-- Search --}}
            <div class="container">
                <div class="row height d-flex justify-content-center align-items-center">
                    <div class="col-md-6">
                        <div class="form">
                            <i class="fa fa-search"></i>
                            <input type="text" class="form-control form-input" placeholder="Search">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Button Group / Filter --}}
    <ul class="nav nav-pills mb-3 horizontal-scroll flex-nowrap overflow-auto" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-makanan-tab" data-bs-toggle="pill" data-bs-target="#pills-makanan"
                type="button" role="tab" aria-controls="pills-makanan" aria-selected="true">Makanan</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-pastry-tab" data-bs-toggle="pill" data-bs-target="#pills-pastry"
                type="button" role="tab" aria-controls="pills-pastry" aria-selected="false">Pastry</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-bread-tab" data-bs-toggle="pill" data-bs-target="#pills-bread" type="button"
                role="tab" aria-controls="pills-bread" aria-selected="false">Bread</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-minuman-tab" data-bs-toggle="pill" data-bs-target="#pills-minuman"
                type="button" role="tab" aria-controls="pills-minuman" aria-selected="false">Minuman</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-camilan-tab" data-bs-toggle="pill" data-bs-target="#pills-camilan"
                type="button" role="tab" aria-controls="pills-camilan" aria-selected="false">Camilan</button>
        </li>
    </ul>

    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-makanan" role="tabpanel" aria-labelledby="pills-makanan-tab"
            tabindex="0">
            {{-- Cardview --}}
            <div class="card-container">
                <div class="card">
                    <img src="assets/img/banner/burger.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Burger Bangor</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Burger terenak satu korpri</h6>
                        <h5 class="card-text">Rp 25.000</h5>
                        <div style="display: flex; justify-content: center;">
                            <a id=addButton href="#" class="btn btn-success">Tambah</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img src="assets/img/banner/pizza.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pizza Tasty</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Pizza lezat dengan berbagai pilihan topping</h6>
                        <h5 class="card-text">Rp 30.000</h5>
                        <div style="display: flex; justify-content: center;">
                            <a id=addButton href="#" class="btn btn-success">Tambah</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img src="assets/img/banner/pizza.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pizza Tasty</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Pizza lezat dengan berbagai pilihan topping</h6>
                        <h5 class="card-text">Rp 30.000</h5>
                        <div style="display: flex; justify-content: center;">
                            <a id=addButton href="#" class="btn btn-success">Tambah</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img src="assets/img/banner/burger.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Burger Bangor</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Burger terenak satu korpri</h6>
                        <h5 class="card-text">Rp 25.000</h5>
                        <div style="display: flex; justify-content: center;">
                            <a id=addButton href="#" class="btn btn-success">Tambah</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-pastry" role="tabpanel" aria-labelledby="pills-pastry-tab"
                tabindex="0">
                ...</div>
            <div class="tab-pane fade" id="pills-bread" role="tabpanel" aria-labelledby="pills-bread-tab"
                tabindex="0">
                ...</div>
            <div class="tab-pane fade" id="pills-minuman" role="tabpanel" aria-labelledby="pills-minuman-tab"
                tabindex="0">...</div>
            <div class="tab-pane fade" id="pills-camilan" role="tabpanel" aria-labelledby="pills-camilan-tab"
                tabindex="0">...</div>
        </div>

        {{-- Apa aja --}}
        <section>
            ini section 2
        </section>
    @endsection