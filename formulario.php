<?php
include("con-db.php");

if(isset($_POST['enviar'])){ 
    if(strlen($_POST['usuario']) >= 1 
    && strlen($_POST['correo']) >= 1
    && strlen($_POST['telefono']) >= 1 
    && strlen($_POST['descripcion']) >= 1){
        $usuario = $_POST['usuario'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $descripcion = $_POST['descripcion'];
        $registrar = "INSERT INTO datos(usuario, telefono, correo, descripcion)
        VALUES ('$usuario','$telefono','$correo','$descripcion')";
        $resultado = mysqli_query($conection,$registrar);
        echo '
        <p class="alert" id="sendtext" style="display: block;">Gracias por enviarnos tu consulta.</p>
        <script>
        var timeout;
        delayedAlert();
        function delayedAlert() {
            timeout = window.setTimeout(slowAlert, 6000);
        }
        function slowAlert() {
         document.getElementById("sendtext").style.display = "none";
         window.location= "../WebConsultas";
        }
        </script>';
        
    }
    //echo '<script> window.onload = slowAlert(); </script>';
}
?>