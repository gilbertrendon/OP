<?php

session_start();

$conexion = new mysqli("localhost", "root", "", "op");

if ($conexion->connect_errno) {
    echo "Error de conexion de la base datos" . $conexion->connect_error;
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mysqli = new mysqli("localhost", "root", "", "op");
//         echo '<script>alert("conectado a bd")</script>';
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
        echo '<script>alert("fallo conexión bd")</script>';
    }
    $idContratista = $_POST['IdContratista'];
    $nombres = $_POST ['Nombres'];
    $apellidos = $_POST ['Apellidos'];
    $celular = $_POST['Celular'];
    $correo = $_POST['Correo'];
    //$IdObra = $_POST['IdObra'];

    

    //UPDATE contratistas SET IdContratista='$nombre', NombreObra='$nombre',FecInicio='$FechaInicio', FecFin='$FechaFin'
    $query = "UPDATE Contratistas SET  Nombres='$nombres', Apellidos='$apellidos',Celular='$celular',Correo='$correo' where IdContratista='$idContratista' ";
    //Los dos unos al final indican la obra y el contrato por defecto
    echo $query;
//echo"<script type=\"text/javascript\">alert('errorrrrr'); window.location='IniSes.php';</script>";

    //header("Location.close");
    echo "<script languaje='javascript' type='text/javascript'> window.location='Contratistas.php';</script>";
    echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";


    if (!$mysqli->query($query)) {
        echo "Insertion failed: (" . $mysqli->errno . ")" . $mysqli->error;
        echo"<script type=\"text/javascript\">alert('$query;'); window.location='Contratistas.php';</script>";
    }
}
?>