@extends('frontend.layouts.navbar')
@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('carbook-master/images/image_1.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Pricing <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Pricing</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="car-list">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th class="bg-primary heading">Tarif Per Jam</th>
                                    <th class="bg-dark heading">Tarif Per Hari</th>
                                    <th class="bg-black heading">Sewa</th>
                                </tr>
                            </thead>
                            @foreach ($data as $mobil)
                                <tbody>
                                    <tr class="price">
                                        <td class="car-image">
                                            @if ($mobil->mobil_assets->isEmpty())
                                                <div class="img" style="background-image: url('/foto/kosong.png')"></div>
                                            @else
                                                <div class="img"
                                                    style="background-image:url('/storage/mobil/{{ $mobil->merk }}/{{ $mobil->mobil_assets[0]['foto'] }}')">
                                                </div>
                                            @endif
                                        </td>
                                        <td class="product-name">
                                            <h3>{{ $mobil->merk }}</h3>
                                            <p class="mb-0 rated">
                                                <span>rated:</span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                            </p>
                                        </td>

                                        <td class="price">
                                            <p class="btn-custom"><a
                                                    href="https://wa.me/{{ $kontaks[0]['no_hp'] }}?text=Halo%2C%20saya%20ingin%20booking%20Mobil : {{ $mobil->merk }} dengan Nopol : {{ $mobil->nopol }} dengan sewa per jam sekarang!">Pesan
                                                    Sekarang</a></p>
                                            <div class="price-rate">
                                                <h3>
                                                    <span class="num"><small class="currency">Rp</small>&nbsp;
                                                        {{ number_format($mobil->harga_jam, 0, ',', '.') }}
                                                    </span>
                                                    <span class="per">/per jam</span>
                                                </h3>
                                                {{-- <span class="subheading">IDR 15K/jam biaya tambahan BBM</span> --}}
                                            </div>
                                        </td>

                                        <td class="price">
                                            <p class="btn-custom"><a
                                                    href="https://wa.me/{{ $kontaks[0]['no_hp'] }}?text=Halo%2C%20saya%20ingin%20booking%20Mobil : {{ $mobil->merk }} dengan Nopol : {{ $mobil->nopol }} dengan sewa per hari sekarang!">Pesan
                                                    Sekarang</a></p>
                                            <div class="price-rate">
                                                <h3>
                                                    <span class="num"><small class="currency">Rp</small>&nbsp;
                                                        {{ number_format($mobil->harga_hari, 0, ',', '.') }}
                                                    </span>
                                                    <span class="per">/per hari</span>
                                                </h3>
                                                {{-- <span class="subheading">$3/hour fuel surcharges</span> --}}
                                            </div>
                                        </td>

                                        <td class="price">
                                            <p class="btn-custom"><a
                                                    href="https://wa.me/{{ $kontaks[0]['no_hp'] }}?text=Halo%2C%20saya%20ingin%20booking%20Mobil : {{ $mobil->merk }} dengan Nopol : {{ $mobil->nopol }} dengan sewa bulanan sekarang!">Pesan
                                                    Sekarang</a></p>
                                            <div class="price-rate">
                                                <h3>
                                                    <span class="num"><small class="currency">Rp</small>&nbsp;
                                                        {{ number_format($mobil->harga_bulan, 0, ',', '.') }}
                                                    </span>
                                                    <span class="per">/per bulan</span>
                                                </h3>
                                                {{-- <span class="subheading">$3/hour fuel surcharges</span> --}}
                                            </div>
                                        </td>
                                    </tr><!-- END TR-->
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            {{ $data->links() }}
        </div>
    </section>
@endsection
