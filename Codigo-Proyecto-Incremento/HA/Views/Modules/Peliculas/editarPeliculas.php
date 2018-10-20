<?php 
	$conexion = new PDO('mysql:host=localhost;dbname=hoja_azul','root','');
	$conexion->exec('SET CHARACTER SET utf8');

	 if (!isset($_POST['editar_peli'])){
		$idpelicula= $_GET['idpelicula'];
	    $sql=$conexion->prepare("SELECT * FROM peliculas 
	     WHERE idpelicula = :idpelicula");
	    $sql->execute(array(':idpelicula'=> $idpelicula));
	    $result=$sql->fetchAll(PDO::FETCH_OBJ);
	 }else{
	 	$idpelicula=$_POST['idpelicula'];	 	
	 	$nombrepeli= $_POST['nombrepeli'];
	 	$detalle= $_POST['detalle'];	 	

	 			
	$update = $conexion->prepare( "UPDATE peliculas SET   nombrepeli = :nombrepeli , detalle = :detalle WHERE idpelicula = :idpelicula");
	$update->execute(array(':idpelicula' =>$idpelicula,		                   
		                   ':nombrepeli' =>$nombrepeli,
		                   ':detalle' =>$detalle		                  
		                    ));

		
	header('location:index.php?action=listadoPelis');
	 }
 ?>
<div class="container">
   <ol class="breadcrumb">
    <li class="breadcrumb-item active">Editar Carrera </li>
  </ol>
<form method="post">
<?php foreach ($result as $post): ?>
	

<div class="row">
	 <div class="col-md-6">
	  <div class="form-group">
	    <label for="nombrepeli"><i class="fa fa-user"> </i> Nombre de la Carrera</label>
	    <input type="text" class="form-control" name="nombrepeli" value="<?php echo $post->nombrepeli ?>" required="">
	  </div>
	 </div>
 <input type="hidden" class="form-control" name="idpelicula" value="<?php echo $post->idpelicula?>">
	 <div class="col-md-6">
	  <div class="form-group">
	    <label for="detalle"><i class="fa fa-unlock-alt"> </i> Detalle de la Carrera</label>
         <textarea class="form-control" name="detalle"  rows="3"  required=""> <?php echo $post->detalle ?></textarea>
	  </div>
	 </div>

<?php endforeach; ?>


	 <div class="col-md-12">
	  <div class="form-group"> 
	    <input type="submit" name="editar_peli" class="form-control btn btn-success" value="Actualizar Carrera">
	  </div>
	 </div>
 
</div>	
</form>
</div><br>
<?php 

ob_end_flush();
 ?>