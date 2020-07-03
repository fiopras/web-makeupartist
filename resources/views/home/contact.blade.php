@extends('layouts.app_dash')

@section('title', 'Contact')

@section('container')


<!--::chefs_part start::-->
<section class="artist_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-lg-6 col-sm-10">
                    <div class="section_tittle">
                        <img src="img/section_tittle_icon.png" alt="icon">
                        <h2>Find Your Favorite Make Up Artist</h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
            @foreach( $mua as $ma)
                <div class="col-sm-6 col-lg-4 mb-5 mt-5">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="{{url('img')}}/{{$ma->gambar}}" alt="artist">
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text text-center">
                                <h3>{{$ma->nama}}</h3>
                                <p> {{ $ma->instagram}}</p>
                                <P>Kawasan : {{ $ma->kawasan}}</p>
                                <p>Provinsi : {{$ma->provinsi}}</p>
                                <div class="social_icon">
                                    <a href="https://www.instagram.com/{{$ma->instagram}}/">
                                        <i class="fab fa-instagram fab-5x"></i>
                                    </a>
                                    <a href="https://wa.me/{{$ma->contact}}">
                                        <i class="fab fa-whatsapp fab-5x"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               @endforeach
                    </div>
                </div>
            </div>
            <div class="mt-5">
            <div class="row justify-content-center">
                {{$mua->links()}}
            </div>
            </div>
        </div>
    </section>
    <!--::chefs_part end::-->


@endsection
