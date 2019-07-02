
@extends("web.layout")

@section("contenido")
<?php

if(!defined("ACCESO")){
    header("Location:../index.php?seccion=contacto");
}

?>
<section id="contacto">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center tit">Contactanos</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php
                if(isset($_GET["error"]) && $_GET["error"] == "true"):
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>Error!</strong> Los campos <b>Nombre</b> y <b>Email</b> son obligatorios.
                </div>
                <?php
                endif;
                ?>
                <form action="procesar-registro.php" method="POST">
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp" placeholder="Ingrese nombre">
                    </div>
                    <div class="form-group">
                        <label for="">Apellido</label>
                        <input type="text" class="form-control" name="apellido" placeholder="Ingrese apellido">
                    </div>
                    <div class="form-group">
                        <label for="">E-mail</label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Ingrese e-mail">
                    </div>
                    <div class="form-group">
                        <label for="">Consulta:</label>
                        <textarea class="form-control" name="consulta" placeholder="Ingrese aqui su consulta..." rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tipo de Consulta</label>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="tipoconsul[]"  value="infodieta">
                                Informacion Dieta Light
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="tipoconsul[]"  value="infonutri">
                                Informacion nutricionista
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="tipoconsul[]"  value="turnoconsu">
                                Turno consultorio
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="tipoconsul[]"  value="consumedi">
                                Consulta médica
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="tipoconsul[]"  value="otra">
                                Otra
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</section>
    @endsection