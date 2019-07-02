<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dieta light</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include("web.partials.css")
    @yield("css")

    <?php include("arrays.php");
    include("configuraciones.php");
    include("funciones.php");
    require_once 'vendor/autoload.php';

    ?>

</head>
<body class="col-bg">

@php
    $navbar = [
        "Inicio" => "web.index",
        "Menu Semanal" => "web.menusemanal",
        "Opciones Saludables" => "web.opciones"
        "Contacto" => "web.contacto"
    ];
@endphp

@include("web.partials.header",["secciones" => $navbar])



<!-- CONTENIDO BODY -->

@yield("contenido")


@include("web.partials.footer")

@include("web.partials.js")

@yield("js")
</body>
</html>
