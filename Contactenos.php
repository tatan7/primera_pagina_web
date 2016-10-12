<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
		<title>NOMBRE DE LA WEB</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto&subset=latin-ext,vietnamese" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&subset=gujarati,latin-ext,vietnamese" rel="stylesheet"> 
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/css.css" />
	</head>
	<body>
		<?php include("menu.php") ?>

		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<h1 class="text-center">Contactenos</h1>
					<p  class="text-center centrarBienvenidos">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					</p>
                                                <form action ="enviar.php" method="post">
                                                <h2> CONTACTO </h2>
                                                <input type ="text" name="nombre" placeholder="nombre" required>
                                                <input type ="text" name="correo" placeholder="correo" required>
                                                <input type ="text" name="telefono" placeholder="telefono"required>
                                                <textarea name="mensaje" placeholder="Escriba qui su mensaje"required=""></textarea> 
                                                            
                                                            <input type="submit" value="ENVIAR" id="eBoton">
                                                   </form>
       					</div>
			</div>
		</div>
		<?php include("pie.php"); ?>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript">
			
		</script>
	</body>
</html>