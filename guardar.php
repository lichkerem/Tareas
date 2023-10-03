<?php
// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];
$ocupacion = $_POST['ocupacion'];
$contacto = $_POST['contacto'];
$nacionalidad = $_POST['nacionalidad'];
$ingles = $_POST['ingles'];
$lenguajes = $_POST['lenguajes'];
$aptitudes = $_POST['aptitudes'];
$habilidades = $_POST['habilidades'];
$perfil = $_POST['perfil'];

// Conectar a la base de datos (reemplaza con tus propios datos de conexión)
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "nombre_de_la_base_de_datos";
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Insertar los datos en la base de datos
$sql = "INSERT INTO cv (nombre, fecha, ocupacion, contacto, nacionalidad, ingles, lenguajes, aptitudes, habilidades, perfil)
        VALUES ('$nombre', '$fecha', '$ocupacion', '$contacto', '$nacionalidad', '$ingles', '$lenguajes', '$aptitudes', '$habilidades', '$perfil')";

if ($conn->query($sql) === TRUE) {
    echo "Los datos se han guardado correctamente.";
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>