<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "bd_portafolio");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener datos del formulario
$nombre_certf = $_POST['nombre_certf'];
$descripcion_certf = $_POST['descripcion_certf'];

// Manejar la subida de la imagen
$directorio_destino = 'uploads/'; // Directorio donde se guardarán las imágenes
$nombre_archivo = $_FILES['certificado']['name'];
$ruta_archivo = $directorio_destino . $nombre_archivo;

if (move_uploaded_file($_FILES['certificado']['tmp_name'], $ruta_archivo)) {
    // Insertar proyecto en la base de datos
    $sql = "INSERT INTO Certificados (nombre_certf, ruta_certf, descripcion_certf) VALUES ('$nombre_certf', '$ruta_archivo', '$descripcion_certf')";
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
