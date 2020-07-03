
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/gijgo.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/all.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('about')}}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('service')}}">Service</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('contact')}}">MUA's</a>
                                </li>
                            </ul>
                            <form class="form-inline my-2 my-lg-0" method="get" action="{{url('search')}}">
                                <input class="form-control mr-sm-2" type="text" name="q" placeholder="Kata Kunci" aria-label="Search">
                                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Cari</button>
                                </form>
                        </div>

                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Welcome to</h5>
                            <h1>MUAsrc</h1>
                            <p>Anda kesulitan mencari Make Up Artist yang sesuai 
                            dengan kriteria anda? Disini akan kami sediakan berbagai 
                            macam referensi Make Up Artist Untuk anda!</p>
                            <div class="banner_btn">
                                <a href="/service" class="btn_1">Book Now</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->
    @yield('container')

    <!-- our_offer part start-->
    <section class="our_offer">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-lg-12">
                    <div class="single_offer_part">
                        <div class="single_offer">
                            <img src="img/offer_img_1.jpg" alt="offer_img_1">
                            <div class="hover_text">
                                <img src="img/icon/cutter.svg" alt="#">
                                <h2>Natural</h2>
                                <p>Make up natural ini tidak akan membuat wajah Anda terlihat menor</p>
                                <a href="/contact" class="offer_btn"><span class="flaticon-slim-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="single_offer_part">
                        <div class="single_offer">
                            <img src="img/offer_img_2.jpg" alt="offer_img_1">
                            <div class="hover_text">
                                <img src="img/icon/cutter.svg" alt="#">
                                <h2>Bold</h2>
                                <p>Make Up dengan warna eyeshadow bold atau eyeliner dramatis dan bibir yang <i>nude. </i></p>
                                <a href="/contact" class="offer_btn"><span class="flaticon-slim-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="single_offer_part">
                        <div class="single_offer">
                            <img src="img/offer_img_3.jpg" alt="offer_img_1">
                            <div class="hover_text">
                                <img src="img/icon/cutter.svg" alt="#">
                                <h2>Soft</h2>
                                <p>Soft make up ini cenderung kalem, dengan menggunakan warna-warna yang lembut pada eyeshadow dan bibir</p>
                                <a href="/contact" class="offer_btn"><span class="flaticon-slim-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="single_offer_part">
                        <div class="single_offer">
                            <img src="img/offer_img_4.jpg" alt="offer_img_1">
                            <div class="hover_text">
                                <img src="img/icon/cutter.svg" alt="#">
                                <h2>Glass</h2>
                                <p>Glass-skin atau Dewy make up : <br>
                                tipe make up yang memiliki kesan glowy pada muka,<br>
                                dengan sentuhan higlighter yang sempurna</p>
                                <a href="/contact" class="offer_btn"><span class="flaticon-slim-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our_offer part end-->


    

    

    <!-- jquery plugins here-->

    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- swiper js -->
    <script src="js/slick.min.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- contact js -->
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>