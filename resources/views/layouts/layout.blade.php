<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    @yield('title')
    @yield('css')
    <style>
        .bg-orange{
            background: #d88a1d;
        }
        .sizeLogo{
            width: 100px;
            height: 50px;
        }
        .bg-red{
            background: #c91118;
        }
    </style>
    <link rel="icon" href="{{asset('images/NarutoLogo.png')}}">
    <header class="d-flex flex-wrap justify-content-center py-3 px-2 mb-4 border-bottom bg-dark">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <img src="{{asset('images/NarutoLogo.png')}}" class="sizeLogo" alt="">
        </a>

        <ul class="nav nav-pills ">
            <li class="nav-item"><a href="{{route('view.documentation')}}" class="btn bg-orange text-white " aria-current="page">Documentación</a></li>
        </ul>
        <ul class="nav nav-pills ">
            <li class="nav-item"><a href="{{route('view.register')}}" class="btn bg-red text-white mx-2 " aria-current="page">Registrarme</a></li>
        </ul>
    </header>
</head>
<body>
@yield('container')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
@yield('js')
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
        <span class="mb-3 mb-md-0 text-white">&copy; Ingenieria en software, 1922-IS.</span>
    </div>
</footer>
</body>
</html>
