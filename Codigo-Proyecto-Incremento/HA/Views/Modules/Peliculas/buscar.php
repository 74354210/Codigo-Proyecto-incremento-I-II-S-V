<?php 

 $conexion = new PDO('mysql:host=localhost;dbname=hoja_azul','root','');
	$conexion->exec('SET CHARACTER SET utf8');
	if (isset($_POST['submit'])) {
		$buscar = $_POST['buscar'];

		$sql = $conexion->prepare("SELECT * FROM peliculas WHERE nombrepeli LIKE :dni");
		$resultado = $sql->execute(array(':dni'=> "%$buscar%"));
		$resultado = $sql->fetchAll(PDO::FETCH_OBJ);
	if (empty($resultado)) {
		$titulo = 'No se encontraron Carreras  : ' .$buscar;
	} else {
		$titulo = 'La Carrera Buscada es : ' . $buscar;
	}
	
}

 ?>

<div class="container">
	
<ol class="breadcrumb">
	<h1><li class="breadcrumb-item active"> <?php echo $titulo ;?></li> </h1>
</ol>

<table class="table table-bordered">
<thead class="font">
	<th>NOMBRE</th>
	<th>ESTADO</th>
	<th>VOLVER AL LISTADO</th>
</thead>
<?php foreach($resultado as $resultados): ?>
	
<tbody>
	<td><?php echo $resultados->nombrepeli; ?></td>
	<td class="alert-info"><?php echo $resultados->estado; ?></td>
	<td>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
		<a href="index.php?action=listadoPelis"><i class="fa fa-edit btn btn-primary "></i>
		</a>
   </td>
</tbody>
<?php endforeach; ?>
</table>
</div>