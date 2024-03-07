<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "bd_portafolio");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];

// Manejar la subida de la imagen
$directorio_destino = 'uploads/'; // Directorio donde se guardarán las imágenes
$nombre_archivo = $_FILES['imagen']['name'];
$ruta_archivo = $directorio_destino . $nombre_archivo;

if (move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta_archivo)) {
    // Insertar proyecto en la base de datos
    $sql = "INSERT INTO proyectos (nombre_imagen, ruta_imagen, descripcion) VALUES ('$nombre', '$ruta_archivo', '$descripcion')";
    if ($conexion->query($sql) === TRUE) {
        echo "Proyecto agregado exitosamente";
    } else {
        echo "Error al agregar el proyecto: " . $conexion->error;
    }
} else {
    echo "Error al subir la imagen";
}

// Cerrar conexión
$conexion->close();
?>
