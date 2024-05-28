@extends('frontend.layouts.navbar')
@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/foto_expedisi/bg_expedisi.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Expedisi <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Expedisi</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-car-details">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="car-details">
                        <div class="text text-center">
                            <h1>{{ $expedisi->judul }}</h1>
                            <a href="https://api.whatsapp.com/send?phone={{ $kontaks[0]['no_hp'] }}&text=Saya%20ingin%20booking%20mobil"
                                type="button" class="btn-wa mb-2"><i class="fa-brands fa-whatsapp"></i> Hubungi Kami</a>
                            <a href="tel:{{ $kontaks[0]['no_hp'] }}" type="button" class="btn-telepon"><i
                                    class="fa-solid fa-phone"></i> Hubungi Via Telepon</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 pills">
                    <div class="bd-example bd-example-tabs">
                        <div class="d-flex justify-content-center">
                            <ul class="nav nav-pills mb-2" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-description-tab" data-toggle="pill"
                                        href="#pills-description" role="tab" aria-controls="pills-description"
                                        aria-expanded="true">Deskripsi</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-description" role="tabpanel"
                                aria-labelledby="pills-description-tab">
                                <p>{!! $expedisi->deskripsi !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .btn-wa {
                font-weight: 500;
                font-size: 16px;
                display: inline-block;
                padding: 2px 25px;
                border-radius: 20px;
                border: 2px solid #10bc10;
                text-decoration: none;
                -webkit-transition: all 0.5s ease-in-out;
                color: white;
                background: #10bc10;
            }

            .btn-wa:hover {
                color: #10bc10;
                border-color: #10bc10;
                background: white;
            }

            .btn-telepon {
                font-weight: 500;
                font-size: 16px;
                display: inline-block;
                padding: 3px 25px;
                border-radius: 20px;
                border: 2px solid #1b10bc;
                text-decoration: none;
                -webkit-transition: all 0.5s ease-in-out;
                color: white;
                background: #1b10bc;
                touch-action: manipulation;
                user-select: none;
            }

            .btn-telepon:hover {
                color: #1b10bc;
                border-color: #1b10bc;
                background: white;
            }
        </style>
    </section>
@endsection
