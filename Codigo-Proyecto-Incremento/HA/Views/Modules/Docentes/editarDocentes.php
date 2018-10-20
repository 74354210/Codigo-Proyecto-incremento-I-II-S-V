
	<div class="container">
  
  
	   <ol class="breadcrumb">
	    <li class="breadcrumb-item active">Editar Docente</li>
	  </ol>
   
		<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Haga Click Para Editar al Docente Seleccionado.
</button>


<?php
 $cli=new MvcController();
 $cli->editarDocentesController();  
 $cli->actualizarDocentesController();  
?>	
</div>

