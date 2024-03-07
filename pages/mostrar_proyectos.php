<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
</head>
<body>
    <h1>Proyectos</h1>
    <?php
    // Conexión a la base de datos
    $conexion = new mysqli("localhost", "root", "", "bd_portafolio");

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Consultar proyectos
    $consulta = "SELECT nombre_imagen, ruta_imagen, descripcion FROM proyectos";
    $resultado = $conexion->query($consulta);

    // Mostrar proyectos
    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            echo '<div class="col-lg-3 col-sm-6">';
            echo '<div class="card card-plain">';
            echo '<div class="card-header p-0 position-relative">';
            echo '<a class="d-block blur-shadow-image">';
            echo '<img src="' . $fila['ruta_imagen'] . '" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">';
            echo '</a>';
            echo '</div>';
            echo '<div class="card-body px-0">';
            echo '<h5>';
            echo '<a href="javascript:;" class="font-weight-bold text-purple">' . $fila['nombre_imagen'] . '</a>';
            echo '</h5>';
            echo '<p>';
            echo $fila['descripcion'];
            echo '</p>';
            echo '<a href="javascript:;" class="text-info text-sm icon-move-right">';
            echo '<button type="button" class="btn btn-sm btn-outline-purple text-nowrap mb-0">Ver</button>';
            echo '</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo "No hay proyectos para mostrar";
    }

    // Cerrar conexión
    $conexion->close();
    ?>
</body>
</html>
