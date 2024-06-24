<?php
$conexion = mysqli_connect("localhost", "root", "pao140902GCH", "galeria_registro") or die("Problemas en la conexión");

$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

// Validación de datos (por ejemplo, verificar en la base de datos)
$consulta = "SELECT * FROM usuarios WHERE email='$email' AND contrasena='$contrasena'";
$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($resultado);

if ($filas > 0) {
    // Inicio de sesión exitoso, muestra una alerta y redirige a la página principal
    echo '<script type="text/javascript">';
    echo 'alert("Inicio de sesión exitoso.");';
    echo 'window.location.href = "Frida_Kahlo.html";'; // Cambia "tu_pagina_principal.html" por la página principal de tu sitio
    echo '</script>';
} else {
    // Datos de inicio de sesión incorrectos, muestra una alerta y redirige a la página de inicio de sesión nuevamente
    echo '<script type="text/javascript">';
    echo 'alert("Usuario o contraseña incorrectos. Intenta de nuevo.");';
    echo 'window.location.href = "login.html";';
    echo '</script>';
}

mysqli_close($conexion);
?>
