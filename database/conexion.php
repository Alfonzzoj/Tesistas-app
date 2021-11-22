<?php
// include "../functions/helpers.php";

$nombreBaseDeDatos = "tesistas-app";
$user = "postgres";
$password = "admin";
// En el caso de Jesus es admin, cambiar la pw por la que usaron en la instalacion 
$rutaServidor = "localhost";
$puerto = "5432";
try {
    $conn = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$nombreBaseDeDatos", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo '<script>console.log("Conexion Exitosa")</script>';
} catch (Exception $e) {
    echo "Ocurrió un error con la base de datos: " . $e->getMessage();
}
