<?php
include('conexion.php');
if(!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['genero']) && !empty($_POST['contraseña']) && !empty($_POST['comentario']) && !empty($_POST['ciudad'])) {

  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $genero = $_POST['genero'];
  $contraseña = $_POST['contraseña'];
  $comentario = $_POST['comentario'];
  $ciudad = $_POST['ciudad'];
  
    // Verificar si 'interesa' está definido, si no, asignar valor por defecto 0
    $interesaValue = isset($_POST['interesa']) && $_POST['interesa'] === 'on' ? 1 : 0;

    //--- Aplicable a Sentencias INSERT, UPDATE, DELETE ---//
    $sql = "INSERT INTO usuarios (nombre, correo, genero, contraseña, comentario, ciudad, interesa)
            VALUES ('$nombre', '$correo', '$genero', '$contraseña', '$comentario', '$ciudad', '$interesaValue')";
    // Utilizar exec() dado que no se regresan resultados
    $conn->exec($sql);

    header("Location: index.php");

}  

?>