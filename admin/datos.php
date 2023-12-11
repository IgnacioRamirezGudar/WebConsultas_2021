<?php
if (!isset($_SESSION['email'])){
header ('Location:../index.php');
exit;
}
?>

<!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <script
    src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="datos.css">
   </head>
   <body>

    <p>Welcome <?php echo $_SESSION['email']; ?> </p>

     <h1>Busqueda</h1>
     <label for="">Buscar: </label>

     <input type="text" name="busqueda" id="busqueda">

     <div class="datos" id="datos">
       
     </div>

     <script type="text/javascript" src="main.js"></script>

   </body>

 </html>