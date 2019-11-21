<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
	
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/estilos.login.css">
	<title>Login Sistema Restaurante</title>
</head>

<body>

<div class="row">
	<div class="col-md-12">
    <div class="conta">
       <h1>Restaurante<i class="fa fa-cutlery"></i> UAN</h1>
		<form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		<hr>
	  <div class="form-group">
		 <i class="fa fa-user"></i> <label for="nombreusuario"><b> Nombre de Usuario</b></label>	    
		<input type="text" name="nombreusuario" class="form-control" placeholder="Nombre Usuario ">
	  </div>
	  <div class="form-group">
	      <i class="fa fa-unlock-alt"></i> <label for="password"><b> Clave de Usuario</b></label> 
		<input type="password" name="password" class="form-control" placeholder="Clave Usuario">
	  </div><br>


       <?php  if(!isset($_SESSION['nombreusuario'])){
                 require 'btn.php'; }?>
             <?php if (!empty($enviar)): ?>
                 <div class="enviar">
                     <?php echo $enviar;  ?>
                 </div>
              <?php echo $enviado; ?> 
            <?php endif; ?>
            <br>
            <?php if(!empty($error)): ?>
            	<br>
                <div class="error">                
                     <?php echo $error ?>
               </div>
            <?php endif; ?>
		</form>
    </div>
	</div>
</div>
</body>
</html>