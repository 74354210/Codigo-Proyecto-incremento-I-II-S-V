	<div class="container">
   <?php 
    if(isset($_GET['action'])) {
      if($_GET['action'] == 'okdocentes'){
      
        echo ' <center><div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Exitos!! </strong> El Docente fue agragado Satifactoriamente al sistema.
          </div>
        </center>';
      }
    }
   ?>
	   <ol class="breadcrumb">
	    <li class="breadcrumb-item active">Agregar Docentes</li>
	  </ol>
   
		<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Agregar Alumnos Nuevos
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
       <ol class="breadcrumb">
	    <li class="breadcrumb-item active">Agregar Nuevos Docentes</li>
	  </ol>
   
      </div>
      <div class="modal-body">
        <!-- body del  modal formulario -->
		           
		<form method="post">
		<div class="row">
			 <div class="col-md-6">
			  <div class="form-group">
			    <label for="nombre"><i class="fa fa-user"> </i> Nombre del Docente</label>
			    <input type="text" class="form-control" name="nombre" placeholder="Nombre del Docente"required="">
			  </div>
			 </div>

			 <div class="col-md-6">
			  <div class="form-group">
			    <label for="apellido"><i class="fa fa-unlock-alt"> </i> Apellido del Docente</label>
			    <input type="text" class="form-control" name="apellido" placeholder="Apellido del Docente" required="">
			  </div>
			 </div>

			 <div class="col-md-6">
			  <div class="form-group">
			    <label for="telefono"><i class="fa fa-user"> </i> Teléfono del Docente</label>
			    <input type="text" class="form-control" name="telefono" placeholder="telefono del Docente" required="">
			  </div>
			 </div>
            <div class="col-md-6">
			  <div class="form-group">
			    <label for="direccion"><i class="fa fa-user"> </i> Dirección del Docente</label>
			    <input type="text" class="form-control" name="direccion" placeholder="direccion del Docente" required="">
			  </div>
			 </div>
		
            <div class="col-md-6">
			  <div class="form-group  ">
			    <label for="dni" class="text-center"><i class="fa fa-user"> </i> D.n.i del Docente</label>
			    <input type="text" class="form-control" name="dni" placeholder="dni del Docente" required="">
			  </div>
			 </div>
            
            <div class="col-md-6">
			  <div class="form-group  ">
			    <label for="correo" class="text-center"><i class="fa fa-user"> </i> Correo del Docente</label>
			    <input type="text" class="form-control" name="correo" placeholder="correo del Docente"  required ="">
			  </div>
			 </div>
            
            <div class="col-md-6  offset-md-3">
			  <div class="form-group  ">
			    <label for="" class="text-center"><i class="fa fa-user"> </i>Especialidad del Docente</label>
			    <input type="text" class="form-control" name="" placeholder="Especialidad" required="">
			  </div>
			 </div>        
                                       
			 <div class="col-md-12">
			  <div class="form-group"> 
			    <input type="submit" name="agregar" class="form-control btn btn-success" value="Agregar Nuevo Docente">
			  </div>
			 </div>
		 
            </div>
            </form>
        <!-- Fin del formulario -->
      
      <div class="modal-footer">
        <button type="button"  class="btn btn-danger" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>

<?php
 $cli=new MvcController();
 $cli->registrarDocentesController();    
?>	

















   </div>