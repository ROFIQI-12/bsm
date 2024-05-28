@extends('frontend.layouts.navbar')
@section('content')
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('carbook-master/images/bg_2.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
                <div class="col-lg-8 ftco-animate">
                    <div class="text w-100 text-center mb-md-5 pb-md-5">
                        <h1 class="mb-4">Cara Cepat & Mudah Sewa Mobil</h1>
                        <p style="font-size: 18px;">Kepuasan anda adalah tujuan utama kami</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5 mt-5">
                    <span class="subheading">Apa yang kami tawarkan</span>
                    <h2 class="mb-2">Mobil Unggulan</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    @php
                        $showCarousel = $mobils->where('unggulan', 'Ya')->count() > 0;
                    @endphp

                    @if ($showCarousel)
                        <div class="carousel-car owl-carousel">
                            @foreach ($mobils as $mobil)
                                @if ($mobil->unggulan === 'Ya')
                                    <div class="item">
                                        <div class="car-wrap rounded ftco-animate">
                                            @if ($mobil->foto == null)
                                                <div class="img rounded d-flex align-items-end"
                                                    style="background-image: url('/foto/kosong.png')">
                                                </div>
                                            @else
                                                <div class="img rounded d-flex align-items-end"
                                                    style="background-image: url('{{ $mobil->foto }}')">
                                                </div>
                                            @endif
                                            <div class="text">
                                                <h2 class="mb-0"><a href="#">{{ $mobil->merk }}</a></h2>
                                                <div class="d-flex mb-3">
                                                    <span class="cat">{{ $mobil->jenis }}</span>
                                                    <p class="price ml-auto"><small
                                                            class="currency">Rp</small>&nbsp;{{ number_format($mobil->harga, 0, '.', '.') }}
                                                        <span>/day</span>
                                                    </p>
                                                </div>
                                                <p class="d-flex mb-0 d-block"><a
                                                        href="https://wa.me/{{ $kontaks[0]['no_hp'] }}?text=Halo%2C%20saya%20ingin%20booking%20Mobil : {{ $mobil->merk }} jenis : {{ $mobil->jenis }} sekarang!"
                                                        class="btn btn-primary py-2 mr-1">Pesan</a> <a
                                                        href="{{ url('detail', $mobil->slug) }}"
                                                        class="btn btn-secondary py-2 ml-1">Details</a></p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-about">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                    style="background-image: url(carbook-master/images/about.jpg);">
                </div>
                <div class="col-md-6 wrap-about ftco-animate">
                    <div class="heading-section heading-section-white pl-md-5">
                        <span class="subheading">About us</span>
                        <h2 class="mb-4">Welcome to BSM-TRANS</h2>

                        <p>Selamat datang di BSM-TRANS Rental Mobil, kami hadir untuk memberikan Anda pengalaman
                            perjalanan yang tak terlupakan. Dengan komitmen untuk menyediakan kenyamanan dan keamanan
                            dalam setiap perjalanan, BSM-TRANS siap menjadi rekan perjalanan setia Anda.</p>
                        <p>Dengan armada
                            berkualitas dan layanan prima, kami berkomitmen untuk memberikan solusi terbaik untuk
                            kebutuhan rental mobil Anda. Kami mengutamakan kepuasan pelanggan dan berusaha menjadikan
                            perjalanan Anda tanpa khawatir dengan pilihan kendaraan terbaik yang kami miliki. Temukan
                            kemudahan merencanakan perjalanan Anda bersama BSM-TRANS Rental Mobil, pilihan tepat untuk
                            mobilitas Anda dalam kenyamanan dan gaya.</p>
                        <p><a href="{{ url('cars') }}" class="btn btn-primary py-3 px-4">Cari Mobil</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter ftco-section img bg-light" id="section-counter">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="5">0</strong>
                            <span>Year <br>Experienced</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="{{ $jumlahData }}">0</strong>
                            <span>Total <br>Cars</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="2590">0</strong>
                            <span>Happy <br>Customers</span>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text d-flex align-items-center">
                            <strong class="number" data-number="67">0</strong>
                            <span>Total <br>Branches</span>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
@endsection
