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
    $nContratista = $_POST['Contratista'];
    $idContratista = $_POST ['IdContratista'];
    $nombre = $_POST ['Edit-Nombre'];
    $FechaInicio = $_POST['Edit-FecInic'];
    $FechaFin = $_POST['Edit-FecFin'];
    $IdObra = $_POST['IdObra'];

    //Para sacar el id del contratista en el caso de que haya seleccionado uno nuevo
    $query0 = "SELECT * from contratistas";
    $resultado0 = $conexion->query($query0);
    while ($datos0 = $resultado0->fetch_array()) {
        if ($datos0["Nombres"] . " " . $datos0["Apellidos"] == $nContratista) {
            //echo"<script type=\"text/javascript\">alert('".$datos0["Nombres"]." ".$datos0["Apellidos"]."====?".$nContratista."');</script>";

            $idContratista = $datos0["IdContratista"];
            //echo"<script type=\"text/javascript\">alert('".$datos0['IdContratista']."');</script>";
        } else {
            //echo"<script type=\"text/javascript\">alert('".$datos0["Nombres"]." ".$datos0["Apellidos"]."====?".$nContratista."');</script>";
        }
    }



    if ($idContratista != NULL || $idContratista != '') {
        $estado = "Activa";
    }

    //UPDATE contratistas SET IdContratista='$nombre', NombreObra='$nombre',FecInicio='$FechaInicio', FecFin='$FechaFin'
    $query = "UPDATE obras SET IdContratista='$idContratista', Estado='$estado', NombreObra='$nombre',FecInicio='$FechaInicio', FecFin='$FechaFin' where IdObra='$IdObra' ";
    //Los dos unos al final indican la obra y el contrato por defecto
    echo $query;
//echo"<script type=\"text/javascript\">alert('errorrrrr'); window.location='IniSes.php';</script>";

    header("Location.close");
    echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";


    if (!$mysqli->query($query)) {
        echo "Insertion failed: (" . $mysqli->errno . ")" . $mysqli->error;
        echo"<script type=\"text/javascript\">alert('$query;'); window.location='Contratistas.php';</script>";
    }
}
?>