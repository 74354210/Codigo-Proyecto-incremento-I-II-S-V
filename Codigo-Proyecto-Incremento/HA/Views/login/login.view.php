<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.min.css">
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/css/main.css">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> 
    
	<title>Login Sistema Instituto Hoja Azul</title>
</head>
<style>
	h1,label{
		
		text-align: center;
	}
	.conta{
		width: 500px;
		margin:auto;
		border: 5px solid #c9c9c9;
		padding: 30px 50px 60px;
		background: #D5DBDB;
        opacity: 0.99;
		border-radius: 7px;
	}
	body{
	background-image: url('');
	opacity: 0.9;
	}
	.error{
		color: #E74C3C;
	}
	.enviar{
		background: #36D05E;
		color: #fff;
		border-radius:8px;
		height: 50px;
	}
	
</style>
<body>
    <div class="container-portada1">
            <div class="capa-gradient1"></div>
                <div class="container-details">
                    <div class="details">
                    <br>
                         
                </div>
                    <br>
                
                
                 
<div class="container-portada"><br><br>
    <div class="conta">
        <center><h2>Bienvenido al Sistema Instituto Hoja Azul</h2></center>
       
		<form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
	  <div class="form-group">
		 <i class="fa fa-user"></i> <label for="nomusuario"> Nombre del Usuario</label>	    
		<input type="text" name="nomusuario" class="form-control" placeholder="Nombre Usuario ">
	  </div>
	  <div class="form-group">
	      <i class="fa fa-unlock-alt"></i> <label for="password"> Contraseña del  Usuario</label> 
		<input type="password" name="password" class="form-control" placeholder="Contraseña Usuario">
	  </div>


       <?php  if(!isset($_SESSION['nomusuario'])){
                 require 'btn.php'; }?>
             <?php if (!empty($enviar)): ?>
                 <div class="enviar">
                     <?php echo $enviar;  ?>
                 </div>
              <?php echo $enviado; ?> 
            <?php endif; ?>
            <?php if(!empty($error)): ?>
                <div class="error">                
                     <?php echo $error ?>
               </div>
            <?php endif; ?>
		</form>
    </div>
    </div>
                    
            
    </div> 
        
 </div> 
</body>
</html>