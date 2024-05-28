@extends('frontend.layouts.navbar')
@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('carbook-master/images/image_4.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Pilih Mobilmu</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light pt-5">
        <div class="container">
            <form action="{{ url('/cars') }}" method="get">
                <div class="input-group mb-2 me-5">
                    <input type="text" name="search" class="form-control" placeholder="Cari mobilmu">
                    <button type="submit" class="btn btn-primary ms-2">Search</button>
                </div>
            </form>
            <div class="row">
                @foreach ($data as $mobil)
                    <div class="col-md-4">
                        <div class="car-wrap rounded ftco-animate">
                            <div class="img rounded d-flex align-items-end"
                                style="background-image: url('{{ asset($mobil['foto']) }}')" alt="Foto Mobil"></div>
                            <div class="text">
                                <h2 class="mb-0"><a href="{{ url('detail', $mobil->id) }}">{{ $mobil->merk }}</a>
                                </h2>
                                <div class="d-flex mb-3">
                                    <span class="cat">{{ $mobil->jenis }}</span>
                                    <p class="price ml-auto"><small
                                            class="currency">Rp</small>&nbsp;{{ number_format($mobil->harga, 0, '.', '.') }}
                                        <span>/day</span>
                                    </p>
                                </div>
                                <p class="d-flex mb-0 d-block"><a
                                        href="https://wa.me/{{ $kontaks[0]['no_hp'] }}?text=Halo%2C%20saya%20ingin%20booking%20Mobil : {{ $mobil->merk }} dengan Nopol : {{ $mobil->nopol }} sekarang!"
                                        class="btn
                                        btn-primary py-2 mr-1">Pesan</a>
                                    <a href="{{ url('detail', $mobil->slug) }}"
                                        class="btn btn-secondary py-2 ml-1">Details</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $data->links() }}


            {{-- <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
@endsection
