<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Portafolio
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <h2>Agregar Proyecto</h2>
                <form action="guardar_proyecto.php" method="POST" enctype="multipart/form-data">
                    <label for="nombre_proyecto">Nombre del proyecto:</label><br>
                    <input type="text" id="nombre_proyecto" name="nombre_proyecto"><br>
                    <label for="imagen">Portada:</label><br>
                    <input type="file" id="imagen" name="imagen"><br>
                    <label for="descripcion_proyecto">Descripción:</label><br>
                    <textarea id="descripcion_proyecto" name="descripcion_proyecto"></textarea><br>
                    <label for="enlace"> Ingrese la URL:</label><br>
                    <input type="text" id="enlace_proyecto" name="enlace_proyecto"><br>
                    <input type="submit" value="Agregar Proyecto">
                </form>
            </div>

            <div class="col-md-6">
                <h2>Agregar certificado</h2>
                <form action="guardar_certificado.php" method="POST" enctype="multipart/form-data">
                    <label for="nombre_certf">Nombre del certificado:</label><br>
                    <input type="text" id="nombre_certf" name="nombre_certf"><br>

                    <label for="certificado"> Seleccione el documento:</label><br>
                    <input type="file" id="certificado" name="certificado"><br>
                    
                    <input type="submit" value="Agregar Proyecto">
                </form>
            </div>
            <hr>
            <div class="col-md-6">
                <h2>Eliminar Proyecto</h2>
                <form action="eliminar_proyecto.php" method="post">
                    ID del Proyecto a Eliminar: <input type="text" name="id_proyecto_eliminar"><br><br>
                    <input type="submit" value="Eliminar Proyecto">
                </form>
            </div>



        </div>
    </div>
    
    

    
</body>
</html>
