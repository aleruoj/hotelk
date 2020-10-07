<?php
session_start();

//Si la variable sesión está vacía
if (!isset($_SESSION['administrador'])) {
    header("location:index.php");
} else {
    $usuario = $_SESSION['administrador'];
}
include "conexion.php";


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Hello, world!</title>
</head>

<body class="bodydash">

    <!-- Button trigger modal -->
    <div class="box-check">
        <img class="logo" src="img/logo.png" alt="">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Nuevo Huesped
        </button>
        <br> </br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModaldos">
            Check-in
        </button>
    </div>
    <!-- Modal registrar huesped -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear nuevo huesped</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-12 personal-info">
                                <form role="form" action="crear-huesped.php" method="post">

                                    <div class="form-group d-flex">
                                        <label class="col-lg-3 control-label">Nombres:</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" name="nombres" type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex">
                                        <label class="col-lg-3 control-label">Apellidos:</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" name="apellidos" type="text" required>
                                        </div>
                                    </div>

                                    <div class="form-group d-flex">
                                        <label class="col-lg-3 control-label">Tipo de Documento:</label>
                                        <div class="col-lg-8">
                                            <div class="ui-select">
                                                <select id="user" class="form-control" name="t_documento" required>
                                                    <option value="">Seleccione..</option>
                                                    <option value="CC">CC</option>
                                                    <option value="CE">CE</option>
                                                    <option value="PA">Pasaporte</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group d-flex">
                                        <label class="col-lg-3 control-label">Documento:</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" name="documento" type="number" required>
                                        </div>
                                    </div>

                                    <div class="form-group d-flex">
                                        <label class="col-lg-3 control-label">Email:</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" type="email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex">
                                        <label class="col-lg-3 control-label">Celular:</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" name="telefono" type="number" required>
                                        </div>
                                    </div>



                                    <div class="form-group d-flex">
                                        <label class="col-lg-3 control-label">Tipo Convenio</label>
                                        <div class="col-lg-8">
                                            <div class="ui-select">
                                                <select id="user" class="form-control" name="convenio" required>
                                                    <option value="">Seleccione..</option>
                                                    <option value="C-144">C-144
                                                    </option>
                                                    <option value="C-166">C-166</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Registrar huesped</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal registrar huesped -->



    <!-- Modal registrar check-->

    <div class="modal fade" id="exampleModaldos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear nuevo huesped</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-12 personal-info">
                                <form role="form" action="crear-huesped.php" method="post">



                                    <div class="form-group d-flex">
                                        <label class="col-lg-3 control-label">Tipo de Documento:</label>
                                        <div class="col-lg-8">
                                            <div class="ui-select">
                                                <select id="user" class="form-control" name="t_documento" required>
                                                    <option value="">Seleccione..</option>
                                                    <option value="CC">CC</option>
                                                    <option value="CE">CE</option>
                                                    <option value="PA">Pasaporte</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group d-flex">
                                        <label class="col-lg-3 control-label">Documento:</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" name="documento" type="number" required>
                                        </div>
                                    </div>

                                    <div class="form-group d-flex">
                                        <label class="col-lg-3 control-label">Email:</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" type="email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex">
                                        <label class="col-lg-3 control-label">Celular:</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" name="telefono" type="number" required>
                                        </div>
                                    </div>



                                    <div class="form-group d-flex">
                                        <label class="col-lg-3 control-label">Tipo Convenio</label>
                                        <div class="col-lg-8">
                                            <div class="ui-select">
                                                <select id="user" class="form-control" name="convenio" required>
                                                    <option value="">Seleccione..</option>
                                                    <option value="C-144">C-144
                                                    </option>
                                                    <option value="C-166">C-166</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Registrar huesped</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal registrar check -->








            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>