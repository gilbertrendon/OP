<?php

defined("DS") ? NULL : define("DS", DIRECTORY_SEPARATOR);

//Dcoumento de identificacion para crear carpeta 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mysqli = new mysqli("localhost", "root", "", "op");
//         echo '<script>alert("conectado a bd")</script>';
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
        echo '<script>alert("fallo conexión bd")</script>';
    }


    $codusu = $_POST['CodUsu'];
    $contrasena = $_POST ['Contraseña'];

    $query1 = "Select * from usuarios where CodUsu = '$codusu '";
    echo $query1;
    $resultado = $mysqli->query($query1);
    $fila = $resultado->fetch_assoc();
    $resulNombre = $fila['CodUsu'];
    $resulContrasena = $fila['Contrasena'];
    $resulTipoUsu = $fila['TipoUsu'];

    if ($resulNombre == $codusu) {
        if ($resulContrasena == $contrasena) {
            session_start();
            //PARA LAS VARIABLES DE SESIÓN
            //$codusu = $_SESSION['CodUsu'];
            $_SESSION['CodUsu'] = $_POST['CodUsu'];
            $_SESSION['TipoUsu'] = $resulTipoUsu;
            //FIN VARIABLES DE SESIÓN
            header('Location: MenuP.php');
        } else {
            echo"<script type=\"text/javascript\">alert('Contraseña Incorrecta'); window.location='IniSes.php';</script>";
        }
    } else {
        echo"<script type=\"text/javascript\">alert('Usuario Incorrecto'); window.location='IniSes.php';</script>";
    }
}

if (!$mysqli->query($query1)) {
    //echo "Table creation failed: (". $mysqli->errno.")".$mysqli->error;
    //echo '<script>alert(','$query1',')</script>';
}

mysqli_free_result($result);
mysqli_close($conexion);
?>










