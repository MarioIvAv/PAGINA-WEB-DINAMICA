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
    .formulario-container {
  background: #fff;
  border: 2px solid #7e0505;
  padding: 20px;
  max-width: 600px;
  margin: 30px auto;
  border-radius: 8px;
  text-align: left;
  box-shadow: 2px 2px 10px rgba(0,0,0,0.1);
}

.formulario-container form input[type="text"],
.formulario-container form input[type="submit"],
.formulario-container form input[type="reset"] {
  width: 100%;
  padding: 10px;
  margin-top: 5px;
  margin-bottom: 15px;
  font-size: 1em;
  border-radius: 5px;
  border: 1px solid #ccc;
}

.formulario-container form input[type="submit"],
.formulario-container form input[type="reset"] {
  background-color: #7e0505;
  color: white;
  border: none;
  cursor: pointer;
}
  </style>
</head>
<body>

<header>
  <div>
    <img src="logo.jpg" alt="Logo">
    <strong>Gestión Librería :v</strong>
    <p>Gestiona tu librería</p>
  </div>
  <nav>
    <a href="home.html">Home</a> >
    <a href="ventas.html">Ventas</a> >
    <a href="productos.html">Productos</a> >
    <a href="index.html">Libros</a>
  </nav>
</header>

<div class="momentos">
  <h2>VENTAS</h2>

  <div class="formulario-container">
    <form action="insertar.php" method="post">
      <label>ID DEL LIBRO:</label><br>
      <input type="text" name="IDLIBRO" required><br><br>

      <label>NOMBRE DEL LIBRO:</label><br>
      <input type="text" name="NOMBRE" required><br><br>

      <label>EDITORIAL:</label><br>
      <input type="text" name="EDITORIAL" required><br><br>

      <label>PRECIO:</label><br>
      <input type="text" name="PRECIO" required><br><br>

      <label>CANTIDAD:</label><br>
      <input type="text" name="CANTIDAD" required><br><br>

      <label>ID DEL VENDEDOR:</label><br>
      <input type="text" name="IDVENDEDOR" required><br><br>

      <input type="submit" value="INSERTAR">
      <input type="reset" value="LIMPIAR FORMULARIO">
    </form>
  </div>

  <div class="formulario-container">
    <form action="eliminar.php" method="post" onsubmit="return confirmarEliminacion()">
      <label>ID DEL LIBRO:</label><br>
      <input type="text" name="IDLIBRO" required><br><br>
      <input type="submit" value="ELIMINAR">
    </form>
  </div>

  <div class="formulario-container">
    <form action="mostrar.php">
      <input type="submit" value="MOSTRAR REGISTROS">
    </form>
  </div>

  <div class="formulario-container">
    <form action="actualizacion.php">
      <input type="submit" value="ACTUALIZAR">
    </form>
  </div>
</div>


<footer>
  <div class="info">
    
    <p><img src="direccion.png" alt="icon"> Dirección: Av. Revolucion  #123</p>
    <p><img src="Telefono.png" alt="icon"> Teléfono: 55-1234-5678</p>
    <p><img src="Email.png" alt="icon"> Email: LibrosyMas@hotmail.com</p>
  </div>
  <div class="info">
    <h4>Acerca de la tienda</h4>
    <p>Especialistas en literatura, textos escolares y más.</p>
    <div class="social">
      <img src="face.png" alt="Facebook">
      <img src="insta.png" alt="Instagram">
      <img src="tw.png" alt="Twitter">

      <form id="formulario">
  <h3>Contáctanos</h3>
  <label>Nombre: <input type="text" name="nombre"></label><br><br>
  <label>Email: <input type="email" name="email"></label><br><br>
  <label>Mensaje:<br>
    <textarea name="mensaje" rows="4" cols="30"></textarea>
  </label><br><br>
  <input type="submit" value="Enviar" style="background-color: #7e0505ff; color: white; padding: 10px; border: none; border-radius: 5px;">
</form>

<div id="mensaje-gracias" style="padding: 10px; margin-left: 20px; color: green; font-weight: bold;"></div>

<script>
  document.getElementById("formulario").addEventListener("submit", function(event) {
    event.preventDefault(); 
    document.getElementById("mensaje-gracias").innerText = "Gracias por- tus comentarios ";
    this.reset(); 
  });
</script>   
    </div>
  </div>
</footer>

</body>
</html>
