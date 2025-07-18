<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Gestión Librería :v</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
      background-color: #fafafa;
    }
    form {
      background-color: #f0f0f0;
      padding: 20px 30px;
      border-radius: 8px;
      max-width: 500px;
      margin: auto;
      box-shadow: 2px 2px 12px rgba(0,0,0,0.1);
    }
    label {
      display: block;
      font-size: 1.1em;
      margin-bottom: 6px;
      color: #333;
      font-weight: bold;
    }
    input[type="text"] {
      width: 100%;
      padding: 8px 10px;
      font-size: 1em;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-bottom: 20px;
      box-sizing: border-box;
      transition: border-color 0.3s;
    }
    input[type="text"]:focus {
      border-color: #7e0505;
      outline: none;
    }
    input[type="submit"] {
      background-color: #7e0505;
      color: white;
      padding: 12px 25px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 1.1em;
      display: block;
      margin: auto;
      transition: background-color 0.3s;
    }
    input[type="submit"]:hover {
      background-color: #a00808;
    }
  </style>
</head>
<body>

<form action="actualizar.php" method="post">

  <label for="IDLIBRO">ID DEL LIBRO:</label>
  <input type="text" name="IDLIBRO" id="IDLIBRO" size="12" required>

  <label for="NOMBRE">NOMBRE DEL LIBRO:</label>
  <input type="text" name="NOMBRE" id="NOMBRE" size="40" required>

  <label for="EDITORIAL">EDITORIAL:</label>
  <input type="text" name="EDITORIAL" id="EDITORIAL" size="40" required>

  <label for="PRECIO">PRECIO:</label>
  <input type="text" name="PRECIO" id="PRECIO" size="3" required>

  <label for="CANTIDAD">CANTIDAD:</label>
  <input type="text" name="CANTIDAD" id="CANTIDAD" size="2" required>

  <label for="IDVENDEDOR">ID DEL VENDEDOR:</label>
  <input type="text" name="IDVENDEDOR" id="IDVENDEDOR" size="5" required>

  <input type="submit" value="ACTUALIZAR" name="btnactualizar">

</form>

</body>
</html>
