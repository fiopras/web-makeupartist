@extends('layouts.master')

@section('title', 'Home')

@section('container')


    <!-- about part start-->
    <section class="about_part">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-4 col-lg-6">
                    <div class="about_img ">
                        <img src="img/about_us_1.png" class="about_img_1" alt="">
                        <img src="img/artist/artist_3.png" class="artist_3" alt="">
                        <img src="img/artist/artist_3.png" class="artist_3" alt="">
                    </div>
                </div>
                <div class="col-md-7 offset-md-1 col-lg-3 offset-lg-1">
                    <div class="about_text">
                        <h5>About us</h5>
                        <h2>What is Make Up?</h2>
                        <p>Make up menjadi salah satu hal yang sangat penting bagi kaum hawa. Selain mempercantik wajah, 
                            make up juga dapat digunakan untuk menutup bagian wajah yang lebih dan memperlengkap bagian wajah
                             yang kurang menjadi menarik. Untuk menyempurnakan penampilan tentu saja penggunaan make up harus 
                            disesuaikan dengan bentuk wajah agar terlihat pas dan sesuai. Tidak semua orang bisa melakukan Make Up 
                            yang sempurna karena kreatifitas masing-masing orang berbeda-beda. oleh karena itu, banyak orang yang
                            membuka jasa Make Up atau biasa disebut Make Up Artist untuk melakukan sebuah karya di wajah seseorang 
                            yang ingin di-Make Up.</p>
                        <h2>Make Up Artist</h2>
                        <p>Make Up Artist adalah seniman profesional yang menggunakan kulit, terutama wajah, sebagai medium karyanya 
                            dan produk makeup sebagai alatnya. Make Up Artist bisa memiliki fokus yang berbeda-beda, misalnya riasan 
                            untuk pengantin dan acara formal lainnya, rias tradisional dan adat, face and body painting, atau special 
                            effect seperti yang biasa digunakan pada film-film fiksi.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about part end-->


<!-- Service part start-->
<section class="service_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-lg-6 col-sm-10">
                    <div class="section_tittle">
                        <img src="img/section_tittle_icon.png" alt="icon">
                        <h2>Service Expectation</h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="single_service_part">
                        <img src="img/service/single_service_1.jpg" alt="">
                        <div class="single_service_text">
                            <h4>Make Up</h4>
                            <p>Pentingnya make up adalah untuk menambah kepercayaan diri.</p>
                            <a href="#" class="btn_3">Find Your MUA</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single_service_part">
                        <img src="img/service/single_service_2.jpg" alt="">
                        <div class="single_service_text">
                            <h4>Hair Do</h4>
                            <p>Untuk menyempurnakan keindahan make up, rias rambut juga berperan penting.
                            </p>
                            <a href="#" class="btn_3">Find Your MUA</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single_service_part">
                        <img src="img/service/single_service_3.jpg" alt="">
                        <div class="single_service_text">
                            <h4>Dresses</h4>
                            <p>Salah satu hal yang penting dalam pernikahan adalah menyiapkan 
                            gaun pengantin, terutama bagi calon mempelai wanita.</p>
                            <a href="#" class="btn_3">Find Your MUA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service part end-->




@endsection