<?php
      $destino = "jonathanlopezmedina@gmail.com";          
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $telefono = $_POST["telefono"];
        $mensaje = $_POST["mensaje"];
        $contenido = "nombre:". $nombre ."\ncorreo:" .$correo . "\ntelefono" . "\nmensaje:". $mensaje;
        mail($destino,"contacto",$contenido);
        header ("location:Gracias.html");
        
      

		