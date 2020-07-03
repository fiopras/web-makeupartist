@extends('layouts.master')

@section('title', 'Service')

@section('container')

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
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="single_service_part">
                        <img src="img/service/single_service_1.jpg" alt="">
                        <div class="single_service_text">
                            <h4>Make Up</h4>
                            <p>Mempercantik dan menyempurnakan bentuk wajah agar terlihat <i>fresh</i> dan menawan.</p>
                            <a href="/contact" class="btn_3">Find Your MUA</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single_service_part">
                        <img src="img/service/single_service_2.jpg" alt="">
                        <div class="single_service_text">
                            <h4>Hair Do</h4>
                            <p>Tata rias rambut dipadukan dengan <i>Make Up</i> yang indah adalah kesempurnaan. </p>
                            <a href="/contact" class="btn_3">Find Your MUA</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Service part end-->

    



@endsection