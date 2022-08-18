<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verifica tu correo Electronico</title>
</head>
<body>
<p>Hola buen dia {{$user->name}} {{$user->last_name_f}}, sentimos mucho que hayas perdido tu contraseña</p>
<p>te hemos mandado una contraseña de repuesto que deberas cambiar al instante</p>
<p> <h1>{{$newPassword}}</h1></p>


</body>
</html>
