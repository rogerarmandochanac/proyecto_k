<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/home/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Azeret+Mono:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="{{asset('js/home/script.js')}}"></script>
    <title>Proyecto K</title>
</head>
<body>
    <div class="container">
        @include('snipets.navbar')
        @include('snipets.encabezado')
        @include('snipets.caracteristicas')
        @include('snipets.equipment')
        @include('snipets.beneficios')
        @include('snipets.ubicaciones')
        @include('snipets.department')
        @include('snipets.contacto')
        @include('snipets.schedules')
        @include('snipets.footer')
    </div>
</body>
</html>