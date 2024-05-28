@extends('frontend.layouts.navbar')
@section('content')
    <div class="bg-image"></div>
    <div class="bg-text">
        <div class="contact">
            <h2>BSM-TRANS</h2>
            <p>
                Kami memudahkan proses penyewaan mobil di Banyuwangi, baik untuk sewa lepas kunci maupun dengan layanan
                sopir. Menyediakan kemudahan dalam layanan carter kendaraan, travel reguler dan jasa ekspedisi, kami hadir
                untuk
                memenuhi kebutuhan
                perjalanan Anda.
            </p>
        </div>
        <div class="container text-center mt-2 mb-3">
            <a href="https://api.whatsapp.com/send?phone={{ $kontaks[0]['no_hp'] }}&text=Saya%20ingin%20booking%20mobil"
                type="button" class="btn-wa"><i class="fa-brands fa-whatsapp"></i> Hubungi Kami</a>
        </div>
        <div class="container text-center">
            <a href="tel:{{ $kontaks[0]['no_hp'] }}" type="button" class="btn-telepon"><i class="fa-solid fa-phone"></i>
                Hubungi Via
                Telepon</a>
        </div>
    </div>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .bg-image {
            background-image: url("/carbook-master/images/cars.jpeg");
            /* filter: blur(5px); */
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .bg-text {
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            font-weight: bold;
            border-radius: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            width: 50%;
            padding: 20px;
            text-align: center;
        }

        .contact h2 {
            font-weight: 900;
            font-size: 40px;
            color: #10bc10;
            text-shadow: 1px 0px 0px #fff, -1px 0px 0px #fff, 0px 1px 0px #fff, 0px -1px 0px #fff, 1px 1px 2px #000;
        }

        .contact p {
            font-weight: 100;
        }

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
            -webkit-transform: scale(1.1);
            color: white;
            border-color: #10bc10;
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
            -webkit-transform: scale(1.1);
            color: white;
            border-color: #1b10bc;
        }

        @media screen and (max-width: 768px) {
            .bg-text {
                width: 80%;
                padding: 10px;
                font-size: 14px;
            }
        }
    </style>
@endsection
