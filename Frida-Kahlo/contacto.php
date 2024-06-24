<?php
// Incluye el archivo de conexión a la base de datos
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO contactos (nombre, correo, telefono) VALUES ('$nombre', '$correo', '$telefono')";

    if (mysqli_query($conexion, $sql)) {
        // Redirigir a una página de confirmación o hacer lo que necesites
        echo '<script type="text/javascript">';
        echo 'alert("¡Gracias por ponerse en contacto con nosotros!");';
        echo 'window.location.href = "Frida_Kahlo.html";'; // Cambia "pagina_de_confirmacion.html" por la URL deseada.
        echo '</script>';
    } else {
        echo "Error al insertar en la base de datos: " . mysqli_error($conexion);
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
}
?>
