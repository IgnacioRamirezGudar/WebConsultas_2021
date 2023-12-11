<?php

  session_start();


  include '../con-db.php';
  $query = "SELECT * FROM datos ORDER By id";
  $salida = "";
  if(isset($_POST['consulta'])){
    $q = ($_POST['consulta']);

    $query = "SELECT id, usuario, correo, telefono, descripcion FROM datos WHERE usuario like '%$q%' or id like '%$q%' or usuario like '$q'";
  }

$result = mysqli_query($conection,$query);

if($result -> num_rows > 0){
  $salida.="<table>
  <thead>
  <tr>
  <td>ID</td>
  <td>Nombre</td>
  <td>Correo</td>
  <td>Teléfono</td>
  <td>Descripción</td>
  </tr>
  </thead>
  <tbody>";

  while ($row = $result->fetch_assoc()){
    $salida.="<tr>
    <td>" .$row['id']. "</td>
    <td>".$row['usuario']." </td>
    <td>" .$row['correo']." </td>
    <td> ".$row['telefono']." </td>
    <td> ".$row['descripcion']." </td>
    <td><a href = ../send_msg/send.php?id=".$row['id'].">Responder</a></td>
    </td>
    </tr>
    ";
    }
    $salida.= "</tbody></table>";


} else {
  $salida.= "<table>
  <thead>
  <tr>
  <td>NO HAY DATOS</td>
  </tr>
  </thead>
  <tbody>";

}

  echo '<form action="../send_msg/send.php">';
  echo $salida;
  echo '</form>';
 ?>
