<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adm.Consultas</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300;1,600;1,700&display=swap" rel="stylesheet">

</head>
<body>
     <div class="container">
      <div class="title">
        Consultas
      </div>
      <div class="subtitle">
        Complete los siguientes datos
      </div>
      <form method="POST">
        <div class="input-container">
          <input class="nombre" type="text" placeholder="Nombre y Apellido" name="usuario" required>
          <input class="email" type="email" placeholder="Correo electronico" name="correo" required> 
          <input class="telefono" type="phone" placeholder="Telefono" name="telefono" required>
          <textarea name="descripcion"placeholder="Ingrese su consulta..." required></textarea>
          <input type="submit" class="button" name="enviar" value="Enviar">
        </div>
      </form>
    </div>
    
<?php
include("formulario.php");
?>
</body>
</html>
