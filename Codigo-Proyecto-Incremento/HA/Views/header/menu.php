<!DOCTYPE html>
<html lang="en" ng-app="universidadApp">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="assets/css/bootstrap.css"> 
  <link rel="stylesheet" href="assets/css/estilos.css"> 
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/chosen/chosen.min.css">
  <script src="angular/angular.min.js"></script>
  <script src="angular/app.js"></script> 

      <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/main.css">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">  
    
  <title>Administrador</title>    
</head>
<body>                  
<?php if ($_SESSION['nomusuario'] == 'ADMINISTRADOR' OR $_SESSION['nomusuario'] == 'administrador'): ?>
<nav class="navbar navbar-dark bg-primary">
  <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
  <div class="collapse navbar-toggleable-md" id="navbarResponsive">
    <a class="navbar-brand" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
    <ul class="nav navbar-nav">
      <li class="nav-item dropdown nav-item active">
        <a class="nav-link dropdown-toggle" href="#" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-youtube-play" aria-hidden="true"></i> Carreras</a>
        <div class="dropdown-menu" id="sub" aria-labelledby="responsiveNavbarDropdown">
          <a id="sub" class="dropdown-item" href="listadoPelis"><i class="btn btn-primary btn-sm  fa fa-list-ol"></i> Listado Carreras</a>
          <a class="dropdown-item" href="peliculas"><i class="btn btn-primary btn-sm  fa fa-cart-plus"></i> Agregar Nueva Carrera</a>
        </div>
      </li>
      <li class="nav-item dropdown nav-item active">
        <a class="nav-link dropdown-toggle" href="#" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-universal-access" aria-hidden="true"></i> Alumnos</a>
        <div class="dropdown-menu" id="sub" aria-labelledby="responsiveNavbarDropdown">
          <a id="sub" class="dropdown-item" href="listadoAlumnos"><i class="btn btn-primary btn-sm  fa fa-list-ol"></i> Listado de Alumnos</a>
          <a class="dropdown-item" href="agregarAlumnos"><i class="btn btn-primary btn-sm  fa fa-cart-plus"></i> Agregar Alumno</a>
        </div>
      </li> 
      <li class="nav-item dropdown nav-item active">
        <a class="nav-link dropdown-toggle" href="#" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-universal-access" aria-hidden="true"></i>Docentes</a>
        <div class="dropdown-menu" id="sub" aria-labelledby="responsiveNavbarDropdown">
          <a id="sub" class="dropdown-item" href="listadoDocentes"><i class="btn btn-primary btn-sm  fa fa-list-ol"></i> Listado de Docentes</a>
          <a class="dropdown-item" href="agregarDocentes"><i class="btn btn-primary btn-sm  fa fa-cart-plus"></i> Agregar Docente</a>
        </div>
       </li><!--
       <li class="nav-item dropdown nav-item active">
        <a class="nav-link dropdown-toggle" href="#" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-usd" aria-hidden="true"></i> Alquileres</a>
        <div class="dropdown-menu" id="sub" aria-labelledby="responsiveNavbarDropdown">
          <a id="sub" class="dropdown-item" href="alquilar"><i class="btn btn-primary btn-sm  fa fa-list-ol"></i> Alquilar Películas</a>
          <a class="dropdown-item" href="listaAlquiler"><i class="btn btn-primary btn-sm  fa fa-cart-plus"></i> Listado Alquileres Clientes</a>
          <a class="dropdown-item" href="devoluciones"><i class="btn btn-primary btn-sm  fa fa-video-camera"></i> Devoluciones de Películas </a>
        </div> 
      </li> -->
     <!--  <li class="nav-item active">
        <a class="nav-link" href="index.php?action=alquilar">Alquilar Películas</a>
      </li> -->
     
       <li class="nav-item dropdown  nav-item active" id="sesion">
         <a class="nav-link dropdown-toggle" href="#" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-windows" aria-hidden="true"></i> Bienvenido ! <?php echo  ' ' .strtoupper($_SESSION[ 'nomusuario']); ?></a>
         <div class="dropdown-menu" aria-labelledby="responsiveNavbarDropdown">
          <a class="dropdown-item" href="salir"><i class="btn btn-primary btn-sm fa fa-window-close-o"> </i> Cerrar Sesión</a>
          <a class="dropdown-item" href="config"><i class="btn btn-primary btn-sm fa fa-wrench"> </i> Configuracion</a>
          <a class="dropdown-item" href="usuarios"><i class="btn btn-primary btn-sm fa fa-address-book"></i> Usuarios</a>
        </div>            
      </li>   
    </ul>            
  </div>    
</nav>
<?php else: ?>

  <!-- #----------------------------------------------------------- -->
<nav class="navbar navbar-dark bg-primary">
  <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
  <div class="collapse navbar-toggleable-md" id="navbarResponsive">
    <a class="navbar-brand" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
    <ul class="nav navbar-nav">
      <li class="nav-item dropdown nav-item active">
        <a class="nav-link dropdown-toggle" href="#" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-youtube-play" aria-hidden="true"></i> Carreras</a>
        <div class="dropdown-menu" id="sub" aria-labelledby="responsiveNavbarDropdown">
          <a id="sub" class="dropdown-item" href="listadoPelis"><i class="btn btn-primary btn-sm  fa fa-list-ol"></i> Listado Carreras</a>
          <a class="dropdown-item" href="peliculas"><i class="btn btn-primary btn-sm  fa fa-cart-plus"></i> Agregar Carreras</a>
        </div>
      </li>
      <li class="nav-item dropdown nav-item active">
        <a class="nav-link dropdown-toggle" href="#" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-universal-access" aria-hidden="true"></i>Alumnos</a>
        <div class="dropdown-menu" id="sub" aria-labelledby="responsiveNavbarDropdown">
          <a id="sub" class="dropdown-item" href="listadoAlumnos"><i class="btn btn-primary btn-sm  fa fa-list-ol"></i> Listado Alumnos</a>
          <a class="dropdown-item" href="agregarAlumnos"><i class="btn btn-primary btn-sm  fa fa-cart-plus"></i> Agregar Alumno</a>
        </div>
      </li> 
      <li class="nav-item dropdown nav-item active">
        <a class="nav-link dropdown-toggle" href="#" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-universal-access" aria-hidden="true"></i>Docentes</a>
        <div class="dropdown-menu" id="sub" aria-labelledby="responsiveNavbarDropdown">
          <a id="sub" class="dropdown-item" href="listadoDocentes"><i class="btn btn-primary btn-sm  fa fa-list-ol"></i> Listado de Docentes</a>
          <a class="dropdown-item" href="agregarDocentes"><i class="btn btn-primary btn-sm  fa fa-cart-plus"></i> Agregar Docente</a>
        </div>
       </li>
       <!--<li class="nav-item dropdown nav-item active">
        <a class="nav-link dropdown-toggle" href="#" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-usd" aria-hidden="true"></i> Alquileres</a>
        <div class="dropdown-menu" id="sub" aria-labelledby="responsiveNavbarDropdown">
          <a id="sub" class="dropdown-item" href="alquilar"><i class="btn btn-primary btn-sm  fa fa-list-ol"></i> Alquilar Películas</a>
          <a class="dropdown-item" href="listaAlquiler"><i class="btn btn-primary btn-sm  fa fa-cart-plus"></i> Listado Alquileres Clientes</a>
          <a class="dropdown-item" href="devoluciones"><i class="btn btn-primary btn-sm  fa fa-video-camera"></i> Devoluciones de Películas </a>
        </div>
      </li> 
     <!--  <li class="nav-item active">
        <a class="nav-link" href="index.php?action=alquilar">Alquilar Películas</a>
      </li> -->
     
       <li class="nav-item dropdown  nav-item active" id="sesion">
         <a class="nav-link dropdown-toggle" href="#" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-windows btn btn-warning btn-sm" aria-hidden="true"></i> Bienvenido ! <?php echo  ' ' .strtoupper($_SESSION[ 'nomusuario']);  ?></a>
         <div class="dropdown-menu" aria-labelledby="responsiveNavbarDropdown">
          <a class="dropdown-item" href="salir"><i class="btn btn-primary btn-sm fa fa-window-close-o"> </i> Cerrar Sesión</a>
       

        </div>
      </li>
    </ul>
  </div>
</nav>
    
<?php endif ?>
