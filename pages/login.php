<?php
session_start();

// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "bd_portafolio");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Consultar el código de seguridad predeterminado almacenado en la base de datos
$sql = "SELECT default_code FROM security_codes LIMIT 1";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $default_security_code = $row["default_code"];
} else {
    // Si no se encuentra ningún código en la base de datos, se utiliza un código predeterminado
    $default_security_code = "123456";
}

// Verificar si el usuario está intentando iniciar sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entered_code = $_POST['security_code'];

    // Verificar si el código ingresado coincide con el código predeterminado
    if ($entered_code == $default_security_code) {
        // Código correcto, redirigir a la página protegida
        $_SESSION['authenticated'] = true;
        header("Location: index.php");
        exit;
    } else {
        // Código incorrecto, mostrar un mensaje de error
        $error_message = "Código incorrecto. Por favor, inténtelo de nuevo.";
    }
}

$conexion->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Ingrese el código de seguridad de 6 dígitos:</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text" name="security_code" maxlength="6" pattern="\d{6}" required>
        <input type="submit" value="Iniciar Sesión">
    </form>

    <?php if(isset($error_message)) { ?>
        <p><?php echo $error_message; ?></p>
    <?php } ?>
</body>
</html>

