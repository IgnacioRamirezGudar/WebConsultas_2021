<?php
    include ("../con-db.php");
    $email = $_POST['email'];
    $password = $_POST['password'];
    session_start();
    $_SESSION['email'] = $email;
    $validacion = "SELECT * FROM `logueo` WHERE email = '$email' AND password = '$password' ";
    $con = mysqli_query($conection, $validacion);
    $user = mysqli_num_rows($con);

    if ($user){
        require "datos.php";

    }else{
        require "../index.php";
        echo '
        <div class="alert">
        <h4> Error al iniciar sesión </h4>
        </div>';
    }

    mysqli_free_result($con);

?>
