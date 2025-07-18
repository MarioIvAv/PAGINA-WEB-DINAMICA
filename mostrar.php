<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gestión Librería :v</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 20px; padding: 0; background: #f9f9f9; }
    header { background-color: #ccc; padding: 10px; display: flex; align-items: center; justify-content: space-between; }
    header img { width: 80px; height: 80px; }
    nav a { margin: 0 5px; text-decoration: none; color: blue; }
    .banner img { width: 100%; max-width: 960px; height: 200px; display: block; margin: auto; }
    .momentos { background: #eee; padding: 10px; }
    .momentos h2 { margin-left: 10px; }
    .libros { display: flex; justify-content: space-around; flex-wrap: wrap; }
    .libro { width: 200px; margin: 10px; background: white; padding: 10px; border: 1px solid #ccc; }
    .libro img { width: 200px; height: 100px; }
    footer { background: #ddd; display: flex; justify-content: space-between; padding: 20px; }
    .info { width: 45%; }
    .info img { width: 40px; height: 40px; vertical-align: middle; }
    .social img { width: 40px; height: 40px; margin: 5px; }
    .btn-ver { background: red; color: white; padding: 8px; text-decoration: none; float: right; margin-right: 20px; }
    form { background: #f0f0f0; padding: 15px; margin: 20px 0; border-radius: 5px; max-width: 400px; }
    table {
      border: 2px solid #7e0505;
      border-collapse: collapse;
      width: 100%;
      max-width: 900px;
      margin: 20px auto;
      background: white;
    }
    th, td {
      border: 1px solid #7e0505;
      padding: 8px;
      text-align: center;
    }
    th {
      background-color: #7e0505;
      color: white;
    }
    input[type="submit"] {
      background-color: #7e0505;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
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

$consulta = mysqli_query($conexion, "SELECT * from LIBRO")
or die ("Error al mostrar los datos");

echo '<table>';
echo '<tr>';
echo '<th>ID DEL LIBRO</th>';
echo '<th>NOMBRE</th>';
echo '<th>EDITORIAL</th>';
echo '<th>PRECIO</th>';
echo '<th>CANTIDAD</th>';
echo '<th>ID DEL VENDEDOR</th>';
echo '</tr>';

while ($extraido = mysqli_fetch_array($consulta))
{
  echo '<tr>';
  echo '<td>'.htmlspecialchars($extraido['IDLIBRO']).'</td>';
  echo '<td>'.htmlspecialchars($extraido['NOMBRE']).'</td>';
  echo '<td>'.htmlspecialchars($extraido['EDITORIAL']).'</td>';
  echo '<td>'.htmlspecialchars($extraido['PRECIO']).'</td>';
  echo '<td>'.htmlspecialchars($extraido['CANTIDAD']).'</td>';
  echo '<td>'.htmlspecialchars($extraido['IDVENDEDOR']).'</td>';
  echo '</tr>';
}

mysqli_close($conexion);
echo '</table>';
?>

<form action="index.php">
  <input type="submit" value="REGRESAR">
</form>

</body>
</html>
