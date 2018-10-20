<?php
require_once "conexion.php";

   class Datos extends Conexion {
 	 	 	
 	 	 	public function registrarUsuarioModel($datosModel,$tabla){

   			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nomusuario,password) VALUES(:nomusuario,:password)");

   			$stmt->bindParam(':nomusuario',$datosModel['nomusuario'], PDO::PARAM_STR);
   			$stmt->bindParam(':password',$datosModel['password'], PDO::PARAM_STR);

   			if ($stmt->execute()) {
   				return 'success';
   			}else{
                return 'error';
   			}
   			$stmt->close();
 	 	 }
#-----------------------------------------------------------
#obtener usuarios
 	 	public function getUsuariosModel($tabla){
 	 		$sql=Conexion::conectar()->prepare("SELECT *  FROM $tabla");
 	 		$sql->execute();
 	 		return $sql->fetchAll();
 	 		$sql->close();
 	 	} 
#-----------------------------------------------------------------
#total de Alumnos
      public function totalAlumnosModel($tabla){
         $sql=Conexion::conectar()->prepare("SELECT * , COUNT(*) as total FROM $tabla");
         $sql->execute();
         return $sql->fetchAll();
         $sql->close();
      }
#---------------------------------------------------------------------
#total de Docentes
      public function totalDocentesModel($tabla){
         $sql=Conexion::conectar()->prepare("SELECT * , COUNT(*) as total FROM $tabla");
         $sql->execute();
         return $sql->fetchAll();
         $sql->close();
      }
#---------------------------------------------------------------------      
#total de peliculas
        public function totalPeliculasModel($tabla){
         $sql=Conexion::conectar()->prepare("SELECT estado , COUNT(*) as total FROM $tabla WHERE estado = 'ALQUILADA'");
         $sql->execute();
         return $sql->fetchAll();
         $sql->close();
      }
#----------------------------------------------------------------------------
#insertar peliculas#	

         public function registrarPeliculasModel($datosModel,$tabla){

            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombrepeli,detalle)VALUES(:nombrepeli,:detalle)");

            
            $stmt->bindParam(':nombrepeli',$datosModel['nombrepeli'], PDO::PARAM_STR);
            $stmt->bindParam(':detalle',$datosModel['detalle'], PDO::PARAM_STR);
           

            if ($stmt->execute()) {
               return 'success';
            }else{
                return 'error';
            }
            $stmt->close();
       }


       


 #--------------------------------------------------------------------------
 #obtenet peliculas
     #tabla para mostrar carreras
      public function getPeliculasModel($tabla){
         $sql = Conexion::conectar()->prepare("SELECT * FROM peliculas pe JOIN peliculas ge ON    
            ge.idpelicula = pe.idpelicula");
         $sql->execute();
         return $sql->fetchAll();
         $sql->close();

      }  

     

      #insertar peliculas# 
// -----------------------------------------------------
// -----------------------------------------------------
         public function registrarAlquilerModel($datosModel,$tabla){

            $stmt=Conexion::conectar()->prepare("UPDATE peliculas SET estado = 'ALQUILADA' WHERE idpelicula= :idpelicula ");
            $stmt->bindParam(':idpelicula',$datosModel['idpelicula'], PDO::PARAM_STR);
            $stmt->execute();

            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(idcliente,idpelicula,precio)VALUES(:idcliente,:idpelicula,:precio)");

            $stmt->bindParam(':idcliente',$datosModel['idcliente'], PDO::PARAM_INT);
            $stmt->bindParam(':idpelicula',$datosModel['idpelicula'], PDO::PARAM_STR);
            $stmt->bindParam(':precio',$datosModel['precio'], PDO::PARAM_STR);
           
            if ($stmt->execute()) {
               return 'success';
            }else{
                return 'error';
            }

            $stmt->close();
       }

        #--------------------------------------------------------------------------
 #obtenet alquiler de peliculas
  
      public function getAlquilerModel($tabla){
         $sql = Conexion::conectar()->prepare("SELECT cli.nombre,pe.nombrepeli,al.precio,al.fechaalquiler,al.idalquiler  FROM clientes cli JOIN alquileres al ON cli.idcliente=al.idcliente
             join peliculas pe ON pe.idpelicula= al.idpelicula");
        
         $sql->execute();
         return $sql->fetchAll();
         $sql->close();

      }  

       // obtener todos los Alumnos
       public function getAlumnosModel($tabla){
        $sql=Conexion::conectar()->prepare("SELECT * FROM alumnos WHERE estado = 'ACTIVO'");
        $sql->execute();
        return $sql->fetchAll();

        $sql->close();
       }
       
       // obtener todos los Docentes
       public function getDocentesModel($tabla){
        $sql=Conexion::conectar()->prepare("SELECT * FROM docentes WHERE estado = 'ACTIVO'");
        $sql->execute();
        return $sql->fetchAll();

        $sql->close();
       }




      #insertar alumnos# 
// -----------------------------------------------------
// -----------------------------------------------------
         public function registrarAlumnosModel($datosModel,$tabla){

           

            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre,apellido,telefono,direccion,dni,correo)VALUES(:nombre,:apellido,:telefono,:direccion,:dni,:correo)");

            $stmt->bindParam(':nombre',$datosModel['nombre'], PDO::PARAM_STR);
            $stmt->bindParam(':apellido',$datosModel['apellido'], PDO::PARAM_STR);
            $stmt->bindParam(':telefono',$datosModel['telefono'], PDO::PARAM_STR);
            $stmt->bindParam(':direccion',$datosModel['direccion'], PDO::PARAM_STR);
            $stmt->bindParam(':dni',$datosModel['dni'], PDO::PARAM_STR);
             $stmt->bindParam(':correo',$datosModel['correo'], PDO::PARAM_STR);
                       
            if ($stmt->execute()) {
               return 'success';
            }else{
                return 'error';
            }

            $stmt->close();
       }
       
       
        #insertar docentes# 
// -----------------------------------------------------
// -----------------------------------------------------
         public function registrarDocentesModel($datosModel,$tabla){

           

            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre,apellido,telefono,direccion,dni,correo)VALUES(:nombre,:apellido,:telefono,:direccion,:dni,:correo)");

            $stmt->bindParam(':nombre',$datosModel['nombre'], PDO::PARAM_STR);
            $stmt->bindParam(':apellido',$datosModel['apellido'], PDO::PARAM_STR);
            $stmt->bindParam(':telefono',$datosModel['telefono'], PDO::PARAM_STR);
            $stmt->bindParam(':direccion',$datosModel['direccion'], PDO::PARAM_STR);
            $stmt->bindParam(':dni',$datosModel['dni'], PDO::PARAM_STR);
            $stmt->bindParam(':correo',$datosModel['correo'], PDO::PARAM_STR);
           
            if ($stmt->execute()) {
               return 'success';
            }else{
                return 'error';
            }

            $stmt->close();
       }
       

       // ==========================================================
       // editar usuarios
       // =============================================

       function editarUsuariosModel($datosModel,$tabla){
            $stmt=Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE idusuario = :id");
            $stmt->bindParam(':id',$datosModel, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch();
             $stmt->close();
    }

    // actualizar Usuarios
    function actualizarUsuariosModel($datosModel,$tabla){
      $stmt=Conexion::conectar()->prepare("UPDATE $tabla SET nomusuario = :nomusuario,
       password = :password WHERE idusuario = :idusuario");

      $stmt->bindParam(':nomusuario',$datosModel['nomusuario'], PDO::PARAM_STR);
      $stmt->bindParam(':password',$datosModel['password'], PDO::PARAM_STR);
      $stmt->bindParam(':idusuario',$datosModel['idusuario'], PDO::PARAM_STR);
           
      if($stmt->execute()){

             return "success";
      }else{
    
       return  "error";
      }

      $stmt->close();
    }


      // ==========================================================
       // editar alumnos
       // =============================================

       function editarAlumnosModel($datosModel,$tabla){
            $stmt=Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE idalumno = :id");
            $stmt->bindParam(':id',$datosModel, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch();
             $stmt->close();
    }
   
      // ==========================================================
       // actualizar alumnos
       // =
    function actualizarAlumnosModel($datosModel,$tabla){
       $stmt=Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre,
       apellido = :apellido , telefono=:telefono,direccion=:direccion,dni=:dni,correo=:correo WHERE idalumno = :idalumno");

      $stmt->bindParam(':nombre',$datosModel['nombre'], PDO::PARAM_STR);
      $stmt->bindParam(':apellido',$datosModel['apellido'], PDO::PARAM_STR);
      $stmt->bindParam(':telefono',$datosModel['telefono'], PDO::PARAM_STR);
      $stmt->bindParam(':direccion',$datosModel['direccion'], PDO::PARAM_STR);
      $stmt->bindParam(':dni',$datosModel['dni'], PDO::PARAM_STR);
      $stmt->bindParam(':correo',$datosModel['correo'], PDO::PARAM_STR);
      $stmt->bindParam(':idalumno',$datosModel['idalumno'], PDO::PARAM_STR);
           
      if($stmt->execute()){

             return "success";
      }else{
    
       return  "error";
      }

      $stmt->close();
    }
       
       
      // ==========================================================
       // editar docentes
       // =============================================

       function editarDocentesModel($datosModel,$tabla){
            $stmt=Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE iddocente = :id");
            $stmt->bindParam(':id',$datosModel, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch();
             $stmt->close();
    }
   
      // ==========================================================
       // actualizar docentes
       // =
    function actualizarDocentesModel($datosModel,$tabla){
       $stmt=Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre,
       apellido = :apellido , telefono=:telefono,direccion=:direccion,dni=:dni,correo=:correo WHERE iddocente = :iddocente");

      $stmt->bindParam(':nombre',$datosModel['nombre'], PDO::PARAM_STR);
      $stmt->bindParam(':apellido',$datosModel['apellido'], PDO::PARAM_STR);
      $stmt->bindParam(':telefono',$datosModel['telefono'], PDO::PARAM_STR);
      $stmt->bindParam(':direccion',$datosModel['direccion'], PDO::PARAM_STR);
      $stmt->bindParam(':dni',$datosModel['dni'], PDO::PARAM_STR);
      $stmt->bindParam(':correo',$datosModel['correo'], PDO::PARAM_STR);
      $stmt->bindParam(':iddocente',$datosModel['iddocente'], PDO::PARAM_STR);
           
      if($stmt->execute()){

             return "success";
      }else{
    
       return  "error";
      }

      $stmt->close();
    }       

}


?>