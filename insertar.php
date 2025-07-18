<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gestión Librería :v</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
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
    form { background: #f0f0f0; padding: 15px; margin: 20px; border-radius: 5px; }
    table, th, td { border: 1px solid black; border-collapse: collapse; padding: 5px; }
  </style>
  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    $insertar = "INSERT INTO libro VALUES ('$IDLIBRO','$NOMBRE','$EDITORIAL', '$PRECIO','$CANTIDAD', '$IDVENDEDOR')";

    $resultado = mysqli_query($conexion, $insertar)
        or die ("Error al insertar el registro");

    mysqli_close($conexion);

   echo '<div style="margin: 30px auto; max-width: 600px; background-color: #f9f9f9; padding: 20px; border: 2px solid #7e0505; border-radius: 8px; text-align: center; font-weight: bold; color: #7e0505;">';
echo '<p>___________________________________</p>';
echo '<p>SE INGRESÓ CORRECTAMENTE EL LIBRO VENDIDO</p>';
echo '<p>___________________________________</p>';
echo '<form action="index.php">';
echo '<input type="submit" value="REGRESAR" style="background-color: #7e0505; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">';
echo '</form>';
echo '</div>';

} else {
    echo "No se recibió información del formulario.";
}
?>
</BODY>
</html>