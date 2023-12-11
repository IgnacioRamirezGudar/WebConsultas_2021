<?php
  session_start();
  include '../con-db.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send msg</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

  <?php

    if (isset($_GET['id'])){
      $query = "SELECT * FROM datos WHERE id = '".$_GET['id']."'";
      $result = mysqli_query($conection,$query);
      $row = mysqli_fetch_array($result);
  ?>

    <div class="container">
        <div class="title">
          Respuesta
        </div>
        <form method="POST" action="send_correo.php">
          <div class="input-container">
            <input name = "email" value = "<?php echo $_SESSION['email'] ?>" >
            <input name = "usuario" value = "<?php echo $row['usuario']?>" >
            <input name = "correo" value = "<?php echo $row['correo']?>" >
            <input name = "descripcion" value = "<?php echo $row['descripcion']?>">
            <textarea name="respuesta"placeholder="Tu Respuesta" required></textarea>
            <input type="submit" class="button" name="enviar" value="Enviar">
          </div>
        </form>
      </div>
  <?php
    }
  ?>

  <script src="change.js"></script>
</body>
</html>
