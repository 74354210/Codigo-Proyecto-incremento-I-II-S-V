<?php 

	$conexion = new PDO('mysql:host=localhost;dbname=hoja_azul','root','');
	$conexion->exec('SET CHARACTER SET utf8');

	if (isset($_GET['action'])) {

		$id_alumno = $_GET['idalumno'];
			

		  $sql = $conexion->prepare("UPDATE alumnos SET estado = 'ACTIVO' WHERE idalumno = $id_alumno ");
		  $sql->execute();
		  
	  header('location:listadoAlumnos');
		 
	}

 ?>