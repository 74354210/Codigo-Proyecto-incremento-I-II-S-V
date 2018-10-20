<?php
ob_start();
class MvcController{
	#LLAMADA A LA PLANTILLA
	#----------------------------------------------

	public function plantilla(){

		#include() Se utiliza para invocar el archivo que contiene código html.
		include "views/template.php";
	}

	#INTERACCIÓN DEL USUARIO
	#----------------------------------------------
	public function enlacesPaginasController(){

		if(isset($_GET["action"])){

		  $enlacesController = $_GET["action"];

		}else{

		   $enlacesController = "index";
			
		}
      // le pide al modelo y que conecte con :: al método y asi heredo la clase y sus metodos y atributos..
		 $respuesta = Paginas::enlacesPaginasModel($enlacesController);
		 require $respuesta;

	}

	public function enlacesPaginasControllerAplicacion(){

		if(isset($_GET["action"])){

		  $enlacesController = $_GET["action"];

		}else{

		   $enlacesController = "index";
			
		}
      // le pide al modelo y que conecte con :: al método y asi heredo la clase y sus metodos y atributos..
		 $respuesta = Paginas::enlacesPaginasModel($enlacesController);
		 require $respuesta;

	}
#--------------------------------------------------
 	public function registroUsuariosController(){
 		if (isset($_POST['nomusuario'])) {
 			$datosController = array("nomusuario"=>$_POST['nomusuario'],
 				                     "password"=>$_POST['password']);
 			#pedir la informacion al modelo.
 		$respuesta= Datos::registrarUsuarioModel($datosController,'usuarios');
 			if ($respuesta == 'success') {
 				header('location:ok');
 			}else{
                header('location:inicio');
 			}
 		}
 	}

 	public function getUsuariosController(){
 		$respuesta = Datos::getUsuariosModel('usuarios');
 		foreach ($respuesta as $row) {
 			echo '<tr>
				<td>'.$row["nomusuario"].'</td>
				<td>'.$row["password"].'</td>
				<td><a href="index.php?action=editar&idusuario='.$row["idusuario"].'"<i class="fa fa-edit btn btn-primary btn-sm"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
				    <a href="index.php?action=borrar&idusuario='.$row["idusuario"].'"<i class="fa fa-trash-o btn btn-danger btn-sm"></i></a></td>
			    </tr>';

 		}
 	}

 	   // editar usurios
      public function editarUsuariosController(){
      	$datosController= $_GET['idusuario'];

	    $respuesta =Datos::editarUsuariosModel($datosController, 'usuarios');
	   echo ' <div class="col-md-6">
		  <div class="form-group">
		    <label for="nomusuario"><i class="fa fa-user"> </i> Nombre del Usuario</label>
		    <input type="text" class="form-control" name="nomusuario" placeholder="Ingresar el Nombre de Usuario " value="'.$respuesta['nomusuario'].'">
		  </div>
		 </div>

		 <div class="col-md-6">
		  <div class="form-group">
		    <label for="password"><i class="fa fa-unlock-alt"> </i> Contraseña del Usuario</label>
		    <input type="text" class="form-control" name="password" placeholder="Ingresar la Contraseña" value="'.$respuesta['password'].' ">
		  </div>
		 </div>

		 <div class="col-md-12">
		  <div class="form-group"> 
		    <input type="submit" class="form-control btn btn-success" value="Agregar Usuario Nuevo" name="editarUsuarios">
		  </div>
	    <input type="hidden" value="'.$respuesta['idusuario'].'" name="idusuario"
		 </div>';
      }

      //Actualizar  Usuarios
      public function actualizarUsuarios(){
      	if (isset($_POST['editarUsuarios'])) {
      		$datosController=array('nomusuario'=>$_POST['nomusuario'],
      			                   'password'=>$_POST['password'],
      			                    'idusuario'=>$_POST['idusuario']);
      		$respuesta=Datos::actualizarUsuariosModel($datosController, 'usuarios');
      		if ($respuesta == 'success') {
      				  header('location:cambioUsuario');
      		}
      	}
      } 
#------------------------------------------------------+}
#busqueda de totales de Alumnos Activos
 	public function totalAlumnosController(){
 		$respuesta = Datos::totalAlumnosModel('alumnos');
 		foreach ($respuesta as $key ) {
 			echo $key['total'];
 		}

 	}
#------------------------------------------------------+}
#busqueda de totales de Docentes Activos
 	public function totalDocentesController(){
 		$respuesta = Datos::totalDocentesModel('docentes');
 		foreach ($respuesta as $key ) {
 			echo $key['total'];
 		}

 	}    
#__________________________________________________
#busqueda de totales de peliculas activas
#
 	public function totalPeliculasController(){
 		$respuesta = Datos::totalPeliculasModel('peliculas');
 		foreach ($respuesta as $key ) {
 			echo $key['total'];
 		}

 	}


#-------------------------------------------------------------
#insertar peliculas
    public function registroPeliculasController(){
 		if(isset($_POST['nombrepeli'])) {
 			$datosController = array("nombrepeli"=>$_POST['nombrepeli'], 				                     
 				                      "detalle"=>$_POST['detalle'],
 				                     	              
 				                     );
 			#pedir la informacion al modelo.
 		
 		$respuesta= Datos::registrarPeliculasModel($datosController,'peliculas');
 			if ($respuesta == 'success') {
 				header('location:okpelis');
 			}else{
                header('location:index.php');
 			}
 		}
 	}

 #---------------------------------------------------------------
 #obtener Peliculas
    
     public function getPeliculasController(){
 		$respuesta = Datos::getPeliculasModel('peliculas');
 		foreach ($respuesta as $row) {
 			echo '<tr>
				<td>'.$row["nombrepeli"].'</td>				
				<td>'.$row["detalle"].'</td>				
				<td><a href="index.php?action=editarPelis&idpelicula='.$row["idpelicula"].'"<i class="fa fa-edit btn btn-primary btn-sm"></i></a>&nbsp;&nbsp;
				    <a href="index.php?action=borrarPelis&idpelicula='.$row["idpelicula"].'"<i class="fa fa-trash-o btn btn-danger btn-sm"></i></a></td>
			    </tr>';

 		}
 	}	


 	#-------------------------------------------------------------
#insertar alquiler
    public function registroAquilerController(){
 		if(isset($_POST['alquilar'])) {
 			$datosController = array("idcliente"=>$_POST['cliente'],
 				                     "idpelicula"=>$_POST['pelicula'],
 				                      "precio"=>$_POST['precio'],
 				                      "fechaalquiler"=>$_POST['fechaalquiler']
 				                                    
 				                     );
 			#pedir la informacion al modelo.
 		
 		$respuesta= Datos::registrarAlquilerModel($datosController,'alquileres');
 			if ($respuesta == 'success') {
 				header('location:okalquiler');
 			}else{
                header('location:index.php');
 			}
 		}
 	}

 	#---------------------------------------------------------------
 #obtener Peliculas
    
     public function getAlquilerController(){
 		$respuesta = Datos::getAlquilerModel('alquileres');
 		foreach ($respuesta as $row) {
 			echo '<tr> 
				<td>'.$row["nombre"].'</td>
				<td>'.$row["nombrepeli"].'</td>
				<td>'.'$ '.$row["precio"].'</td>
				<td>'.$row["fechaalquiler"].'</td>
				<td><a href="index.php?action=alquilar"<button id="boton" class="btn btn-outline-primary btn-sm">+</button></a>
				    </td>
			    </tr>';

 		}
 	}	

 // obtener todos los alumnos
   
   public function getAlumnosController(){
   	$respuesta= Datos::getAlumnosModel('alumnos');
   	foreach ($respuesta as $row) {
   		echo '<tr>
  				<td>'.$row['nombre'] .'</td>
  				<td>'.$row['apellido'] .'</td>
  				<td>'.$row['telefono'] .'</td>
  				<td>'.$row['direccion'] .'</td>
  				<td>'.$row['dni'] .'</td>
                <td>'.$row['correo'] .'</td>
  				<td class="alert-success">'.$row['estado'] .'</td>
  				<td><a href="index.php?action=editarAlumnos&idalumno='.$row['idalumno'] .'"
  				 <i class="fa fa-edit btn btn-primary btn-sm"></i></a>
  				    <a href="index.php?action=bajaLogica&idalumno='.$row['idalumno'] .' "
  				 <i class="fa fa-trash-o btn btn-danger btn-sm"> </i></a></td>
  			</tr>';
   	}
   }

 // registrar alumnos nuevos
       
       public function registrarAlumnosController(){

       	  if(isset($_POST['agregar'])) {
 			$datosController = array("nombre"=>$_POST['nombre'],
 				                     "apellido"=>$_POST['apellido'],
 				                      "telefono"=>$_POST['telefono'],
 				                      "direccion"=>$_POST['direccion'],
 				                      "dni"=>$_POST['dni'],
                                      "correo"=>$_POST['correo']
 				                                    
 				                     );
 			#pedir la informacion al modelo.
 		
 		$respuesta= Datos::registrarAlumnosModel($datosController,'alumnos');
 			if ($respuesta == 'success') {
 				header('location:okModiAlumnos');
 			}else{
                header('location:index.php');
 			}
 		}
       }

       public function editarAlumnosController(){
       	 	$datosController= $_GET['idalumno'];

	    $respuesta =Datos::editarAlumnosModel($datosController, 'alumnos');
	    echo '<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
       <ol class="breadcrumb">
	    <li class="breadcrumb-item active">Editar Al Alumno</li>
	  </ol>
   
      </div>
      <div class="modal-body">
        <!-- body del  modal formulario -->
		           
		<form method="post">
		<div class="row">
			 <div class="col-md-6">
			  <div class="form-group">
			    <label for="nombre"><i class="fa fa-user"> </i> Nombre del Alumno</label>
			    <input type="text" class="form-control" name="nombre" value="'.$respuesta['nombre'].'" required="">
			  </div>
			 </div>

			 <div class="col-md-6">
			  <div class="form-group">
			    <label for="apellido"><i class="fa fa-unlock-alt"> </i> Apellido del Alumno</label>
			    <input type="text" class="form-control" name="apellido" value="'.$respuesta['apellido'].'" required="">
			  </div>
			 </div>

			 <div class="col-md-6">
			  <div class="form-group">
			    <label for="telefono"><i class="fa fa-user"> </i> Teléfono del Alumno</label>
			    <input type="text" class="form-control" name="telefono"value="'.$respuesta['telefono'].'" required="">
			  </div>
			 </div>
            <div class="col-md-6">
			  <div class="form-group">
			    <label for="direccion"><i class="fa fa-user"> </i> Dirección del Alumno</label>
			    <input type="text" class="form-control" name="direccion" value="'.$respuesta['direccion'].'" required="">
			  </div>
			 </div>
		
            <div class="col-md-6">
			  <div class="form-group  ">
			    <label for="dni" class="text-center"><i class="fa fa-user"> </i> D.n.i del Alumno</label>
			    <input type="text" class="form-control" name="dni" value="'.$respuesta['dni'].'"required="">
			  </div>
			 </div>
             
             <div class="col-md-6 ">
			  <div class="form-group  ">
			    <label for="correo" class="text-center"><i class="fa fa-user"> </i> Correo del Alumno</label>
			    <input type="text" class="form-control" name="correo" value="'.$respuesta['correo'].'"required="">
			  </div>
			 </div>
   

			 <div class="col-md-12">
			  <div class="form-group"> 
			    <input type="submit" name="editarAlumno" class="form-control btn btn-success" value="Actualizar">
			  </div>
			 </div>
           <input type="hidden" name="idalumno" value="'.$respuesta['idalumno'].'">
		</form>
        <!-- Fin del formulario -->
      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-danger" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>';
       }

       public function actualizarAlumnosController(){
       	  	if (isset($_POST['editarAlumno'])) {
      		$datosController=array('nombre'=>$_POST['nombre'],
      			                   'apellido'=>$_POST['apellido'],
      			                   'telefono'=>$_POST['telefono'],
      			                   'direccion'=>$_POST['direccion'],
      			                   'dni'=>$_POST['dni'],
                                   'correo'=>$_POST['correo'],
      			                    'idalumno'=>$_POST['idalumno']
      			                    );
      		$respuesta=Datos::actualizarAlumnosModel($datosController, 'alumnos');
      		if ($respuesta == 'success') {
      				  header('location:cambioAlumnos');
      		}
      	}
       }
    
 // obtener todos los Docentes
   
   public function getDocentesController(){
   	$respuesta= Datos::getDocentesModel('docentes');
   	foreach ($respuesta as $row) {
   		echo '<tr>
  				<td>'.$row['nombre'] .'</td>
  				<td>'.$row['apellido'] .'</td>
  				<td>'.$row['telefono'] .'</td>
  				<td>'.$row['direccion'] .'</td>
  				<td>'.$row['dni'] .'</td>
                <td>'.$row['correo'] .'</td>
  				<td class="alert-success">'.$row['estado'] .'</td>
  				<td><a href="index.php?action=editarDocentes&iddocente='.$row['iddocente'] .'"
  				 <i class="fa fa-edit btn btn-primary btn-sm"></i></a>
  				    <a href="index.php?action=bajaLogica&iddocente='.$row['iddocente'] .' "
  				 <i class="fa fa-trash-o btn btn-danger btn-sm"> </i></a></td>
  			</tr>';
   	}
   }

 // registrar Docentes nuevos
       
       public function registrarDocentesController(){

       	  if(isset($_POST['agregar'])) {
 			$datosController = array("nombre"=>$_POST['nombre'],
 				                     "apellido"=>$_POST['apellido'],
 				                      "telefono"=>$_POST['telefono'],
 				                      "direccion"=>$_POST['direccion'],
 				                      "dni"=>$_POST['dni'],
                                      "correo"=>$_POST['correo']
 				                                    
 				                     );
 			#pedir la informacion al modelo.
 		
 		$respuesta= Datos::registrarDocentesModel($datosController,'docentes');
 			if ($respuesta == 'success') {
 				header('location:okModiDocentes');
 			}else{
                header('location:index.php');
 			}
 		}
       }

       public function editarDocentesController(){
       	 	$datosController= $_GET['iddocente'];

	    $respuesta =Datos::editarDocentesModel($datosController, 'docentes');
	    echo '<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
       <ol class="breadcrumb">
	    <li class="breadcrumb-item active">Editar Al Docente</li>
	  </ol>
   
      </div>
      <div class="modal-body">
        <!-- body del  modal formulario -->
		           
		<form method="post">
		<div class="row">
			 <div class="col-md-6">
			  <div class="form-group">
			    <label for="nombre"><i class="fa fa-user"> </i> Nombre del Docente</label>
			    <input type="text" class="form-control" name="nombre" value="'.$respuesta['nombre'].' ">
			  </div>
			 </div>

			 <div class="col-md-6">
			  <div class="form-group">
			    <label for="apellido"><i class="fa fa-unlock-alt"> </i> Apellido del Docente</label>
			    <input type="text" class="form-control" name="apellido" value="'.$respuesta['apellido'].'" required="">
			  </div>
			 </div>

			 <div class="col-md-6">
			  <div class="form-group">
			    <label for="telefono"><i class="fa fa-user"> </i> Teléfono del Docente</label>
			    <input type="text" class="form-control" name="telefono"value="'.$respuesta['telefono'].'" required="">
			  </div>
			 </div>
            <div class="col-md-6">
			  <div class="form-group">
			    <label for="direccion"><i class="fa fa-user"> </i> Dirección del Docente</label>
			    <input type="text" class="form-control" name="direccion" value="'.$respuesta['direccion'].'" required="">
			  </div>
			 </div>
		
            <div class="col-md-6">
			  <div class="form-group  ">
			    <label for="dni" class="text-center"><i class="fa fa-user"> </i> D.n.i del Docente</label>
			    <input type="text" class="form-control" name="dni" value="'.$respuesta['dni'].'"required="">
			  </div>
			 </div>
             
             <div class="col-md-6">
			  <div class="form-group  ">
			    <label for="correo" class="text-center"><i class="fa fa-user"> </i> Correo del Docente</label>
			    <input type="text" class="form-control" name="correo" value="'.$respuesta['correo'].'"required="">
			  </div>
			 </div>
   

			 <div class="col-md-12">
			  <div class="form-group"> 
			    <input type="submit" name="editarDocente" class="form-control btn btn-success" value="Actualizar">
			  </div>
			 </div>
           <input type="hidden" name="iddocente" value="'.$respuesta['iddocente'].'">
		</form>
        <!-- Fin del formulario -->
      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-danger" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>';
       }

       public function actualizarDocentesController(){
       	  	if (isset($_POST['editarDocente'])) {
      		$datosController=array('nombre'=>$_POST['nombre'],
      			                   'apellido'=>$_POST['apellido'],
      			                   'telefono'=>$_POST['telefono'],
      			                   'direccion'=>$_POST['direccion'],
      			                   'dni'=>$_POST['dni'],
                                   'correo'=>$_POST['correo'],
      			                    'iddocente'=>$_POST['iddocente']
      			                    );
      		$respuesta=Datos::actualizarDocentesModel($datosController, 'docentes');
      		if ($respuesta == 'success') {
      				  header('location:cambioDocentes');
      		}
      	}
       }    
    

}

?>
