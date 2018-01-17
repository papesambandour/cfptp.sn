

@extends('layout.main')
@section("title","Home")
@section('content')
    <div class="row">
        <div class="row headBienvenu ">
            <span class="h2">Bienvenue au  CFPTP ! </span>
            <span class="h3"> Centre agréé par le  <a href="http://www.fondef.gouv.sn/"
                                                      class="a"> FONDEF</a></span>
        </div>
        <div class="row slideImgContainer">
            <div class="img-circle" >
                <img src="img/cftpdevant.jpg" class="imgslide active" >
                <img src="img/logo.jpg" class="imgslide" >
                <img src="img/logo2.jpg" class="imgslide" >
                <img src="img/logo3.jpg" class="imgslide" >
            </div>


            <span class="arrowSlideLeft" onclick="ClickArrowLelf()">
                <
            </span>
                <span class="arrowSlideRight" onclick="ClickArrowRight()">
                    >
                </span>

        </div>

    </div>
@endsection