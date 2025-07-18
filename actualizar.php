<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gestión Librería :v</title>
  <style>
    body { 
      font-family: Arial, sans-serif; 
      margin: 20px;          /* margenes para no pegar al borde */
      background-color: #f9f9f9;
      color: #333;
    }
    .mensaje {
      background: #fff;
      border: 2px solid #7e0505;
      padding: 20px;
      max-width: 600px;
      margin: 40px auto;
      border-radius: 8px;
      text-align: center;
      font-size: 1.2em;
      box-shadow: 2px 2px 10px rgba(0,0,0,0.1);
    }
    input[type="submit"] {
      background-color: #7e0505;
      color: white;
      padding: 10px 25px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 1em;
      margin-top: 20px;
    }
  </style>
</head>
<body>
<?php

$server = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "GESTION_LIBRERIA";

$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
    or die ("Error de conexión");

$IDLIBRO = $_POST['IDLIBRO'];
$NOMBRE = $_POST['NOMBRE'];
$EDITORIAL = $_POST['EDITORIAL'];
$PRECIO = $_POST['PRECIO'];
$CANTIDAD = $_POST['CANTIDAD'];
$IDVENDEDOR = $_POST['IDVENDEDOR'];

// Actualiza sólo los campos que se pueden modificar
$query = "UPDATE LIBRO SET NOMBRE='$NOMBRE', EDITORIAL='$EDITORIAL', PRECIO='$PRECIO', CANTIDAD='$CANTIDAD' WHERE IDLIBRO='$IDLIBRO'";
mysqli_query($conexion, $query) or die ("Error al actualizar");

mysqli_close($conexion);
?>

<div class="mensaje">
  <hr>
  <p>Datos actualizados correctamente</p>
  <hr>

  <form action="index.php">
    <input type="submit" value="REGRESAR">
  </form>
</div>

</body>
</html>
