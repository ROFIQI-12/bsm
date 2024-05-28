<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="carbook-master/images/logi.png">
    <title>BSM-TRANS</title>
    <meta name="description" content="Sewa Mobil Banyuwangi, Lepas Kunci">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('carbook-master/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('carbook-master/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('carbook-master/css/search.css') }}">

    <link rel="stylesheet" href="{{ asset('carbook-master/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('carbook-master/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('carbook-master/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('carbook-master/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('carbook-master/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('carbook-master/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('carbook-master/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('carbook-master/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('carbook-master/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('carbook-master/css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
    <!-- Bootstrap JavaScript dan jQuery (pastikan jQuery sudah dimuat) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FT25W7FVR5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-FT25W7FVR5');
    </script>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="/carbook-master/images/logi.png"
                    alt="logo bsmtrans" width="150" height="50"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a href="{{ url('/') }}"
                            class="nav-link">Home</a></li>
                    <li class="nav-item {{ request()->is('cars') ? 'active' : '' }}"><a href="{{ url('cars') }}"
                            class="nav-link">Cars</a></li>
                    <li class="nav-item {{ request()->is('expedisi') ? 'active' : '' }}"><a
                            href="{{ url($slug = 'expedisi') }}" class="nav-link">Expedisi</a></li>
                    {{-- <li class="nav-item {{ request()->is('pricing') ? 'active' : '' }}"><a href="{{ url('pricing') }}"
                            class="nav-link">Pricing</a></li> --}}
                    <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}"><a href="{{ url('contact') }}"
                            class="nav-link">Contact</a></li>
                </ul>
            </div>

        </div>
    </nav>
    <!-- END nav -->

    @yield('content')

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2"><a href="#" class="logo"><img
                                    src="/carbook-master/images/logi.png" alt="logo bsmtrans" width="150"
                                    height="50"></a></h2>
                        <p>Flexible and Reliable Car <br>Rental Solutions, <br>Find the Best Driving <br> Experience
                            with Us.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="{{ $kontaks[0]['fb'] }}"><span
                                        class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="{{ $kontaks[0]['ig'] }}"><span
                                        class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Customer Support</h2>
                        <ul class="list-unstyled">
                            <li><a href="https://wa.me/{{ $kontaks[0]['no_hp'] }}?text=Halo%saya%mau%bertanya?"
                                    class="py-2 d-block">FAQ</a></li>
                            <li><a href="https://wa.me/{{ $kontaks[0]['no_hp'] }}?text=Halo%saya%mau%bertanya?"
                                    class="py-2 d-block">Payment Option</a></li>
                            <li><a href="https://wa.me/{{ $kontaks[0]['no_hp'] }}?text=Halo%saya%mau%bertanya?"
                                    class="py-2 d-block">Booking Tips</a></li>
                            <li><a href="{{ url('contact') }}" class="py-2 d-block">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text"><a
                                            href="https://www.google.com/maps/search/BSMTRANS.NET,%20Lingkungan%20Cuking%20Rawa,%20Mojopanggung,%20Kabupaten%20Banyuwangi,%20Jawa%20Timur"
                                            target="_blank">BSMTRANS.NET, Lingkungan Cuking Rawa, Mojopanggung,
                                            Kabupaten Banyuwangi, Jawa Timur</a></span>
                                </li>
                                <li><a href="https://wa.me/{{ $kontaks[0]['no_hp'] }}?text=Halo%saya%mau%bertanya?"><span
                                            class="icon icon-phone"></span><span
                                            class="text">{{ $kontaks[0]['no_hp'] }}</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">{{ $kontaks[0]['email'] }}</span></a></li>
                                <li class="nav-item {{ request()->is('logout') ? 'active' : '' }}"><a
                                        href="{{ route('logout') }}" class="nav-link">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> bsmtrans.com
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('carbook-master/js/jquery.min.js') }}"></script>
    <script src="{{ asset('carbook-master/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('carbook-master/js/popper.min.js') }}"></script>
    <script src="{{ asset('carbook-master/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('carbook-master/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('carbook-master/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('carbook-master/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('carbook-master/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('carbook-master/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('carbook-master/js/aos.js') }}"></script>
    <script src="{{ asset('carbook-master/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('carbook-master/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('carbook-master/js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('carbook-master/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('carbook-master/js/google-map.js') }}"></script>
    <script src="{{ asset('carbook-master/js/main.js') }}"></script>

</body>

</html>
