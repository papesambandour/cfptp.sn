

@extends('layout.main')
@section("title","Home")
@section('content')
    <div class="row hauteurImageAccueil">
        <div class="row">
            <h2 class="h2" style="margin: 55px 0">Bienvenue au CFPTP! </h2>
        </div>
        <div class="row">
            <img src="{{asset("img/cftpdevant.jpg")}} "  class="img-fluid img-thumbnail rounded float-left" alt="Responsive image">
            <span class="h3"> Centre agréé par le FONDEF</span>
        </div>


    </div>
@endsection