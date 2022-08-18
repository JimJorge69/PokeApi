@extends('layouts.layout')

@section('title')
    <title>Documentación</title>
@endsection

@section('container')
    <style>
        .bg-gray{
            background: rgba(46,46,46,0.47);
        }
    </style>
   <body class="bg-black">
   <div class="container bg-gray text-white py-4">
       <h1 class="text-center">DOCUMENTACIÓN</h1>
       <hr>
       <h3 class="text-center"> HOST:</h3>
       <h4 >http://tfkofgop.lucusvirtual.es/</h4>
       <hr>
       <h3 class="mt-4 text-center"> RUTAS:</h3>
       <h4>api/register</h4>
       <h5 class="">parametros:</h5>
       <div class="table text-white border">
           <div class="row mx-auto bg-white text-dark">
               <div class="col-6 border"><h4>parameter</h4></div>
               <div class="col-6 border"><h4>data type</h4></div>
           </div>
           <div class="row mx-auto">
               <div class="col-6 border"><h5>name</h5></div>
               <div class="col-6 border"><h5>string</h5></div>
           </div>
           <div class="row mx-auto">
               <div class="col-6 border"><h5>last_name_f</h5></div>
               <div class="col-6 border"><h5>string</h5></div>
           </div>
           <div class="row mx-auto">
               <div class="col-6 border"><h5>last_name_m</h5></div>
               <div class="col-6 border"><h5>string</h5></div>
           </div>
           <div class="row mx-auto">
               <div class="col-6 border"><h5>date_born</h5></div>
               <div class="col-6 border"><h5>date</h5></div>
           </div>
           <div class="row mx-auto">
               <div class="col-6 border"><h5>email</h5></div>
               <div class="col-6 border"><h5>string</h5></div>
           </div>
           <div class="row mx-auto">
               <div class="col-6 border"><h5>password</h5></div>
               <div class="col-6 border"><h5>string</h5></div>
           </div>
           <div class="row mx-auto">
               <div class="col-6 border"><h5>verify_password</h5></div>
               <div class="col-6 border"><h5>string</h5></div>
           </div>
       </div>

       <h4 class="mt-5">api/login</h4>
       <h5 class="">parametros:</h5>
       <div class="table text-white border">
           <div class="row mx-auto bg-white text-dark">
               <div class="col-6 border"><h4>parameter</h4></div>
               <div class="col-6 border"><h4>data type</h4></div>
           </div>
           <div class="row mx-auto">
               <div class="col-6 border"><h5>email</h5></div>
               <div class="col-6 border"><h5>string</h5></div>
           </div>
           <div class="row mx-auto">
               <div class="col-6 border"><h5>password</h5></div>
               <div class="col-6 border"><h5>string</h5></div>
           </div>
       </div>

       <h4 class="mt-5">api/validate_account</h4>
       <h5 class="">parametros:</h5>
       <div class="table text-white border">
           <div class="row mx-auto bg-white text-dark">
               <div class="col-6 border"><h4>parameter</h4></div>
               <div class="col-6 border"><h4>data type</h4></div>
           </div>
           <div class="row mx-auto">
               <div class="col-6 border"><h5>email</h5></div>
               <div class="col-6 border"><h5>string</h5></div>
           </div>
           <div class="row mx-auto">
               <div class="col-6 border"><h5>code</h5></div>
               <div class="col-6 border"><h5>string</h5></div>
           </div>
       </div>

       <h4 class="mt-5">api/safe_password</h4>
       <h5 class="">parametros:</h5>
       <div class="table text-white border">
           <div class="row mx-auto bg-white text-dark">
               <div class="col-6 border"><h4>parameter</h4></div>
               <div class="col-6 border"><h4>data type</h4></div>
           </div>
           <div class="row mx-auto">
               <div class="col-6 border"><h5>email</h5></div>
               <div class="col-6 border"><h5>string</h5></div>
           </div>
       </div>
       <hr>

       <div class="mt-5 bg-white text-dark p-2 text-center">
           <h4> para poder acceder a las siguientes rutas deberas estar logueado de lo contrareo no podras acceder a ellas.</h4>
       </div>
       <h4 class="mt-5">api/index</h4>
       <div class="table text-white border">
           <div class="row mx-auto bg-white text-dark">
               <div class="col-6 border"><h4>parameter</h4></div>
               <div class="col-6 border"><h4>data type</h4></div>
           </div>
           <div class="row mx-auto">
               <div class="col-6 border"><h5>token</h5></div>
               <div class="col-6 border"><h5>string</h5></div>
           </div>
       </div>
       <h4 class="mt-5">api/logout</h4>
       <div class="table text-white border">
           <div class="row mx-auto bg-white text-dark">
               <div class="col-6 border"><h4>parameter</h4></div>
               <div class="col-6 border"><h4>data type</h4></div>
           </div>
           <div class="row mx-auto">
               <div class="col-6 border"><h5>token</h5></div>
               <div class="col-6 border"><h5>string</h5></div>
           </div>
       </div>
       <h4 class="mt-5">api/edit_password</h4>
       <div class="table text-white border">
           <div class="row mx-auto bg-white text-dark">
               <div class="col-6 border"><h4>parameter</h4></div>
               <div class="col-6 border"><h4>data type</h4></div>
           </div>
           <div class="row mx-auto">
               <div class="col-6 border"><h5>token</h5></div>
               <div class="col-6 border"><h5>string</h5></div>
           </div>
           <div class="row mx-auto">
               <div class="col-6 border"><h5>new_password</h5></div>
               <div class="col-6 border"><h5>string</h5></div>
           </div>
       </div>

       <h4 class="mt-5">api/register_character</h4>
       <div class="table text-white border">
           <div class="row mx-auto bg-white text-dark">
               <div class="col-6 border"><h4>parameter</h4></div>
               <div class="col-6 border"><h4>data type</h4></div>
           </div>
           <div class="row mx-auto">
               <div class="col-6 border"><h5>token</h5></div>
               <div class="col-6 border"><h5>string</h5></div>
           </div>
           <div class="row mx-auto">
               <div class="col-6 border"><h5>name</h5></div>
               <div class="col-6 border"><h5>string</h5></div>
           </div>
           <div class="row mx-auto">
               <div class="col-6 border"><h5>clan</h5></div>
               <div class="col-6 border"><h5>string</h5></div>
           </div>
           <div class="row mx-auto">
               <div class="col-6 border"><h5>village</h5></div>
               <div class="col-6 border"><h5>string</h5></div>
           </div>
           <div class="row mx-auto">
               <div class="col-6 border"><h5>jutsu</h5></div>
               <div class="col-6 border"><h5>string</h5></div>
           </div>
       </div>

   </div>
   </body>
@endsection
