<?php 
	$conexion = new PDO('mysql:host=localhost;dbname=hoja_azul','root','');
	$conexion->exec('SET CHARACTER SET utf8');
 ?>
<div class="container">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active">Agregar nueva Carrera</li>
  </ol>
<form method="post">
<div class="row">
	 <div class="col-md-6 offset-md-3">
	  <div class="form-group">
	    <label for="nombrepeli"><i class="fa fa-user"> </i> Nombre de la Carrera</label>
	    <input type="text" class="form-control" name="nombrepeli" placeholder="Nombre de la Carrera" required="">
	  </div>
	 </div>	 
    

	 <div class="col-md-5 offset-md-3">
	  <div class="form-group">
	    <label for="detalle"><i class="fa fa-unlock-alt"> </i> Detalles de la Carrera</label>
         <textarea class="form-control" name="detalle"  rows="1" placeholder="Detalle de la Carrera" required=""></textarea>
	  </div>
	 </div>
    
	 <div class="col-md-3 offset-md-3" >
	  <div class="form-group"> 
	    <center> <input type="submit" class="form-control btn btn-success" value="Agregar Nueva Carrera"></center>
	  </div>
	 </div>
 

</div>	
</form>
</div><br>
<?php 
$regisPeli= new MvcController();
$regisPeli->registroPeliculasController();
ob_end_flush();
 ?>