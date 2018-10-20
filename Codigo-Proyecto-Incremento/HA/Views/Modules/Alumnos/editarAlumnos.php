
	<div class="container">
  
  
	   <ol class="breadcrumb">
	    <li class="breadcrumb-item active">Editar Alumno</li>
	  </ol>
   
		<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Haga Click Para Editar al Alumno Seleccionado.
</button>


<?php
 $cli=new MvcController();
 $cli->editarAlumnosController();  
 $cli->actualizarAlumnosController();  
?>	
</div>

