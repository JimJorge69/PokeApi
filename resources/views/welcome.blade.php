@extends('layouts.layout')

@section('title')
    <title>API Naruto</title>
@endsection

@section('container')
    <style>
        .bg-container{
            background:rgba(0,0,0,0.51);
        }
    </style>
    <body style="background-image: url({{asset('images/FondoNaruto.jpg')}}); background-attachment:fixed; background-size: cover"   >
    <div>
        <div class="container bg-container col-10 my-5 text-white p-5">
            <h1 class="text-center">API NARUTO</h1>
            <h5 class="text-center">En esta api podras encontrar algunos personajes que aparecen en el anime de naruto</h5>
            <img class=" rounded img-thumbnail" src="{{asset('images/Naruto.jpg')}}" alt="">
        </div>
    </div>
    </body>
@endsection


