<header id="header" class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <a href="{{route("web.index")}}"><img src="img/dietalogomini.png" alt="logomini" class="navbar-brand"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" style="color:#fff" href="index.php?seccion=home">Inicio
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    @foreach ($nav as $navitem => $url):

                    <li class="nav-item">
                        <a class="nav-link" style="color:#fff;" href=<?php echo $navitem["ruta"]; ?> ><?php echo $navitem["nav"] ?> </a>
                    </li>
                     @endforeach;

                </ul>
            </div>
        </div>
    </nav>
</header>