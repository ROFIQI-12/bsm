@extends('frontend.layouts.navbar')
@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/carbook-master/images/bg_3.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Car details <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Car Details</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-car-details">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="car-details">
                        {{-- <div class="img rounded" style="background-image: url(images/bg_1.jpg);"></div> --}}
                        <div id="carouselExample" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="img rounded" style="background-image: url('{{ asset($data->foto) }}')">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="img rounded" style="background-image: url('{{ asset($data->foto) }}')">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="img rounded" style="background-image: url('{{ asset($data->foto) }}')">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="img rounded" style="background-image: url('{{ asset($data->foto) }}')">
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                        <div class="text text-center">
                            <span class="subheading">{{ $data->merk }}</span>
                            <h2>{{ $data->merk }}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-car"></span></div>
                                <div class="text">
                                    <h3 class="heading mb-0 pl-3">
                                        Warna
                                        <span>{{ $data->warna }}</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-pistons"></span></div>
                                <div class="text">
                                    <h3 class="heading mb-0 pl-3">
                                        Transmisi
                                        <span>{{ $data->jenis }}</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-pistons"></span></div>
                                <div class="text">
                                    <h3 class="heading mb-0 pl-3">
                                        No rangka
                                        <span>{{ $data->no_rangka }}</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-car-seat"></span></div>
                                <div class="text">
                                    <h3 class="heading mb-0 pl-3">
                                        Penumpang
                                        <span>{{ $data->penumpang }}</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-wedding-car"></span></div>
                                <div class="text">
                                    <h3 class="heading mb-0 pl-3">
                                        Tahun
                                        <span>{{ $data->tahun }}</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-diesel"></span></div>
                                <div class="text">
                                    <h3 class="heading mb-0 pl-3">
                                        BBM
                                        <span>{{ $data->bbm }}</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex align-self-stretch ftco-animate ms-5">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-rent"></span></div>
                                <div class="text">
                                    <h3 class="heading mb-0 pl-3">
                                        Harga Sewa
                                        <span>Rp. {{ $data->harga }}</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 pills">
                    <div class="bd-example bd-example-tabs">
                        <div class="d-flex justify-content-center">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-description-tab" data-toggle="pill"
                                        href="#pills-description" role="tab" aria-controls="pills-description"
                                        aria-expanded="true">Deskripsi</a>
                                </li>
                                <li class="nav-item">
                                    {{-- <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill"
                                        href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer"
                                        aria-expanded="true">Description</a> --}}
                                </li>
                                <li class="nav-item">
                                    {{-- <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review"
                                        role="tab" aria-controls="pills-review" aria-expanded="true">Review</a> --}}
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-description" role="tabpanel"
                                aria-labelledby="pills-description-tab">
                                <p>{!! $data->deskripsi !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
