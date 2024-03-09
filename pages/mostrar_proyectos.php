<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificados</title>
</head>
<body>
    <h1>Certificados</h1>
    <?php
    // Conexión a la base de datos
    $conexion = new mysqli("localhost", "root", "", "bd_portafolio");

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Consultar certificados
    $consulta = "SELECT id, nombre_certf, ruta_documento FROM certificados";
    $resultado = $conexion->query($consulta);

    // Mostrar certificados
    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            echo '<div class="col-lg-4 ml-auto">';
            echo '<a href="javascript::"><div class="card justify-content-center mb-3"><div class="card-body p-3"><div class="author">';
            echo '<img src="../assets/img/draft.svg" alt="team-3" class="avatar avatar-sm shadow me-2 border-radius-lg" loading="lazy">';
            echo '<h6 class="my-auto">' . $fila['nombre_certf'] . '</h6>';
            echo '</div></div><div class="position-absolute end-0 me-3 "><i class="fas fa-angle-right text-purple" aria-hidden="true"></i></div></div>';
            echo '</a>';
            echo '</div>';
            echo '<a href="' . $fila['ruta_documento'] . '" target="_blank">Ver Certificado</a>';
            
        }
    } else {
        echo "No hay certificados para mostrar";
    }

    // Cerrar conexión
    $conexion->close();
    ?>
</body>
</html>
<div class="col-lg-4 ml-auto">
<a href="javascript::"><div class="card justify-content-center mb-3"><div class="card-body p-3"><div class="author">
    <img src="../assets/img/draft.svg" alt="team-3" class="avatar avatar-sm shadow me-2 border-radius-lg" loading="lazy">
    <h6 class="my-auto">Atencion al cliente</h6>
    </div></div><div class="position-absolute end-0 me-3 "><i class="fas fa-angle-right text-purple" aria-hidden="true"></i></div></div>
</a>
</div>
