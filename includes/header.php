<?php

echo'
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link  rel="icon"   href="assets/img/logoEvolus.png" type="image/png" />
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/bootstrap-CSS/bootstrap.css">
</head>
<body>
<header>

<div class="container-fluid bg-light imgLogos">
  <div class="contenedorLogos ">
    <img src="assets/img/EvolusLogo.png" class="evolusLogo" alt="">
    <img src="assets/img/Intrajobbe.png" class="jobbeLogo" alt="">
  </div>
  <div class="float-right divIdiomasBotones">
    <button type="button" class="btn botonIdioma" id="es">ES</button>
    <button type="button" class="btn botonIdioma" id="eu">EU</button>
    <button type="button" class="btn botonIdioma" id="cat">CAT</button>
    <button type="button" class="btn botonIdioma" id="en">EN</button>
  </div>
</div>


<nav class="navbar navbar-expand-lg navbar-light bg-light barranavegacion">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Empleos<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../Trabajadores/curriculum.php">Curriculum</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Ofertas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Curriculum</a>
      </li>
    </ul>
  </div>
</nav>

</header>';

?>