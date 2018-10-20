<?php 

	$conexion = new PDO('mysql:host=localhost;dbname=hoja_azul','root','');
	$conexion->exec('SET CHARACTER SET utf8');

	if (isset($_GET['action'])) {

		$id_docente = $_GET['iddocente'];
			

		  $sql = $conexion->prepare("UPDATE docentes SET estado = 'NO ACTIVO' WHERE iddocente = $id_docente ");
		  $sql->execute();
		  
	  header('location:listadoDocentes');
		 
	}


 ?>