<?php
// Usuario y contraseña predeterminados
$usuario_correcto = "Misuk";
$contrasena_correcta = "12345";

// Obtener los datos del formulario
$usuario = $_POST['username'];
$contrasena = $_POST['password'];

// Verificar si el usuario y contraseña coinciden
if ($usuario === $usuario_correcto && $contrasena === $contrasena_correcta) {
    // Si coinciden, mostrar mensaje de bienvenida
    echo "Bienvenido, $usuario!";
} else {
    // Si no coinciden, redirigir al formulario con un parámetro de error
    header("Location: login.html?error=1");
    exit();
}
?>
