
<style>
	#card{
		width: 200px;
		height: 120px;
	}
	.prin{
		border:3px solid #9F9999;
		padding:40px;
        width: 600px;
		height: 250px;		
	}
	.jumbotron{
        
		height: 180px;
	}
    
</style>


<body>
    <div class="container-portada">
    <div class="capa-gradient"></div>
        <div class="container-details">
         <div class="details1">
            <h2>ESCUELA SUPERIOR DE GASTRONOMÍA “HOJA AZÚL” </h2><br>            
         </div>
        </div>
    <center>
      <div  class="prin">       	
	   <div class="row">
	     <div class="details"> <strong><h4 class="card-title">Total de Alumnos y Docentes </h4></strong></div>		          
		  	 <div class="details">
                 <button>
			     <strong>Alumnos Activos :</strong> <?php $vistaUsuario = new MvcController();
	                                            $vistaUsuario->totalAlumnosController(); ?> 
                 </button>
			 </div>
             <div class="details">
                 <button>		  	 
			     <strong>Docentes:</strong> <?php $vistaUsuario = new MvcController();
	                                            $vistaUsuario->totalDocentesController(); ?> 
                 </button>            
			 </div>
        </div>		  
	   </div> 
     </center>        
    </div>                  
 </body>
    