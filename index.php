<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Trabajo PHP</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
   <div class="box-login">
      <img class="logo" src="img/logo.png" alt="">
      <h1 class="titulo">Iniciar sesión</h1>

      <form action="validar.php" method="POST">

         <label class="label" for="username">Documento</label>
         <input class="input" type="text" name="documento" placeholder="Ingresa tu documento">

         <label class="label" for="contrasena">Contraseña</label>
         <input class="input" type="password" name="contrasena" placeholder="Ingresa tu contraseña">
         <button type="submit" class="btn btn-dark">Ingresar</button>

      </form>
      <?php
      if (isset($_GET["error"]) && $_GET["error"] == 1) {
         echo "<div style='color:red'>Documento o contraseña invalido </div>";
      }
      ?>
   </div>
<!-- JS -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>