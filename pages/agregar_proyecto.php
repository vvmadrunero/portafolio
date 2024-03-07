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
                <h1>Agregar Proyecto</h1>
                <form action="guardar_proyecto.php" method="POST" enctype="multipart/form-data">
                    <label for="nombre">Nombre de la imagen:</label><br>
                    <input type="text" id="nombre" name="nombre"><br>
                    <label for="imagen">Imagen:</label><br>
                    <input type="file" id="imagen" name="imagen"><br>
                    <label for="descripcion">Descripción:</label><br>
                    <textarea id="descripcion" name="descripcion"></textarea><br><br>
                    <input type="submit" value="Agregar Proyecto">
                </form>
            </div>

            <div class="col-md-6">
                <h1>Agregar certificado</h1>
                <form action="guardar_certificado.php" method="POST" enctype="multipart/form-data">
                    <label for="nombre_certf">Nombre del certificado:</label><br>
                    <input type="text" id="nombre_certf" name="nombre_certf"><br>
                    <label for="certificado">documento:</label><br>
                    <input type="file" id="certificado" name="certificado"><br>
                    <label for="descripcion_certf">Descripción:</label><br>
                    <textarea id="descripcion_certf" name="descripcion_certf"></textarea><br><br>
                    <input type="submit" value="Agregar Proyecto">
                </form>
            </div>


        </div>
    </div>
    
    

    
</body>
</html>
