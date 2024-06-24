<?php 
//Inserción de datos 
	$conexion = mysqli_connect("localhost","root","pao140902GCH","galeria_registro") or die ("Problemas en la conexion");
		mysqli_query($conexion,"insert into usuarios(email,contrasena)
			values('$_REQUEST[email]','$_REQUEST[contrasena]')") or die("Problemas en el slect").mysqli_error($conexion);

	mysqli_close($conexion);

//Script para dar de alta los datos
echo'<script type="text/javascript">
    alert("El usuario fue dado de alta");
    window.location.href = "login.html"; // Cambia "otra_pagina.html" por la URL de la página a la que deseas redirigir.
    </script>';
?>
