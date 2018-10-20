<?php 

class Paginas{
	
	public function enlacesPaginasModel($enlaces){
		// =============================================================
		// enlaces del peliculas
		// =============================================================

		if(  $enlaces == "peliculas" || $enlaces == 'listadoPelis' || $enlaces=='alquilar' || $enlaces=='listaAlquiler' || $enlaces== 'devoluciones' || $enlaces=='buscar'){

			$module =  "views/modules/Peliculas/".$enlaces.".php";
		
		}
		
		else if($enlaces == "borraralquiler"){

			$module =  "views/borrar/borrar.php";
		
		}

		else if($enlaces == "devol"){

			$module =  "views/borrar/devol.php";
		
		}
		else if($enlaces == "ok"){

			$module =  "views/modules/Usuarios/usuarios.php";
		
		}

		else if($enlaces == "okalquiler"){

			$module =  "views/modules/Peliculas/listaAlquiler.php";
		
		}

		else if($enlaces == "okpelis"){

			$module =  "views/modules/Peliculas/listadoPelis.php";
		
		}

		else if($enlaces == "error"){

			$module =  "views/Modules/Peliculas/usuarios.php";
		
		}


		else if($enlaces == "borrarPelis"){

			$module =  "views/borrar/borrar.php";
		
		}

		else if($enlaces == "borrar"){

			$module =  "views/borrar/borrar.php";
		
		}

		else if($enlaces == "editarPelis"){

			$module =  "Views/Modules/Peliculas/editarPeliculas.php";
		
		}
		
		
        // =============================================================
		// enlaces del Alumnos
		// =============================================================

		else if($enlaces == "buscarAlumnos"){

			$module =  "Views/Modules/Alumnos/buscarAlumnos.php";
		
		}


		else if($enlaces == "editarAlumnos"){

			$module =  "Views/Modules/Alumnos/editarAlumnos.php";
		
		}
		else if($enlaces == "listadoAlumnos"){

			$module =  "views/modules/Alumnos/listadoAlumnos.php";
		
		}

		else if($enlaces == "bajaLogica"){

			$module =  "views/modules/Alumnos/bajaLogica.php";
		
		}

		else if($enlaces == "alta"){

			$module =  "views/modules/Alumnos/alta.php";
		
		}
        
        else if($enlaces == "okModiAlumnos"){

			$module =  "views/modules/Alumnos/listadoAlumnos.php";
		
		}

		else if($enlaces == "cambioAlumnos"){

			$module =  "views/modules/Alumnos/listadoAlumnos.php";
		
		}


		else if($enlaces == "agregarAlumnos"){

			$module =  "views/modules/Alumnos/agregarAlumnos.php";
		
		}

		else if($enlaces == "okalumnos"){
			$module = "views/modules/Alumnos/agregarAlumnos.php";
		}
        
        // =============================================================
		// enlaces del Docentes
		// =============================================================

		else if($enlaces == "buscarDocentes"){

			$module =  "Views/Modules/Docentes/buscarDocentes.php";
		
		}


		else if($enlaces == "editarDocentes"){

			$module =  "Views/Modules/Docentes/editarDocentes.php";
		
		}
		else if($enlaces == "listadoDocentes"){

			$module =  "views/modules/Docentes/listadoDocentes.php";
		
		}

		else if($enlaces == "bajaLogica"){

			$module =  "views/modules/Docentes/bajaLogica.php";
		
		}

		else if($enlaces == "alta"){

			$module =  "views/modules/Docentes/alta.php";
		
		}
        
        else if($enlaces == "okModiDocentes"){

			$module =  "views/modules/Docentes/listadoDocentes.php";
		
		}

		else if($enlaces == "cambioDocentes"){

			$module =  "views/modules/Docentes/listadoDocentes.php";
		
		}


		else if($enlaces == "agregarDocentes"){

			$module =  "views/modules/Docentes/agregarDocentes.php";
		
		}

		else if($enlaces == "okdocentes"){
			$module = "views/modules/Docentes/agregarDocentes.php";
		}        

// =============================================================
// enlaces del usuarios
// =============================================================
		else if($enlaces == "config"){

			$module =  "Views/Modules/Usuarios/config.php";
		
		}
		else if($enlaces == "editar"){

			$module =  "Views/Modules/Usuarios/editarUsuarios.php";
		
		}

		else if($enlaces == "usuarios"){

			$module =  "Views/Modules/Usuarios/usuarios.php";
		
		}

		else if($enlaces == "cambioUsuario"){

			$module =  "Views/Modules/Usuarios/usuarios.php";
		
		}


		// enlaces del inicio y salir
		// ===========================================================
		else if($enlaces == "index"){

			$module =  "views/modules/App/inicio.php";
		
		}
		else if($enlaces == "salir"){

			$module =  "views/modules/App/salir.php";
		
		}


		else{

			$module =  "views/modules/App/inicio.php";

		}
		
		return $module;

	}
	#--------------------------------------------------------
	#enlaces de la aplicacion 
    
    


}

?>