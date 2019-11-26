<?php

session_start();
$conexion = new mysqli("localhost", "root", "", "op");
if ($conexion->connect_errno) {
    echo "Error de conexion de la base datos" . $conexion->connect_error;
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $mysqli = new mysqli("localhost", "root", "", "op");
//         echo '<script>alert("conectado a bd")</script>';
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
        echo '<script>alert("fallo conexión bd")</script>';
    }

    $query2 = "Select * from obras where IdObra = " . $_GET['IdObraL'];
    //echo $query2;

    $resultado = $mysqli->query($query2);
    $fila = $resultado->fetch_assoc();

    $IdObraL = $fila['IdObra'];
    $NombreObraL = $fila['NombreObra'];
    $DireccionObL = $fila['DireccionOb'];
    $EstadoL = $fila['Estado'];
    $IdContratistaL = $fila['IdContratista'];
    $FecInicioL = $fila['FecInicio'];
    $FecFinL = $fila['FecFin'];
    $DurazcionDiasL = $fila['DuracionDias'];
    $IdParmetrizacionL = $fila['IdParametrizacion'];
    if ($fila['IdContrato'] == NULL || $fila['IdContrato'] == '') {
        $IdContratoL = "NULL";
    } else {
        $IdContratoL = "'" . $fila['IdContrato'] . "'";
    }
    $CostoL = $fila['Costo'];
    $VDesf1L = $fila['VDesf1'];
    $VDesf2L = $fila['VDesf2'];
    $VDesf3L = $fila['VDesf3'];

    //Para obtener la fecha en la que se liquidó la obra

    $hoy = getdate();
    $dia = $hoy['mday'];
    $mes = $hoy['mon'];
    $anio = $hoy['year'];
    
    $fechaHoy = $anio."-".$mes."-".$dia;
    echo $fechaHoy;
    //IdObra
//Para crear el registro en la tabla de liquidaciones(sería la obra liquidada)
    $query0 = "INSERT INTO `liquidaciones` VALUES(DEFAULT,NULL,'"
            . $IdObraL . "','"
            . $NombreObraL . "','"
            . $DireccionObL . "','"
            . "Finalizada" . "','"
            . $IdContratistaL . "','"
            . $FecInicioL . "','"
            . $FecFinL . "','"
            . $DurazcionDiasL . "','"
            . $IdParmetrizacionL . "',"
            . $IdContratoL . ",'"
            . $CostoL . "','"
            . $VDesf1L . "','"
            . $VDesf2L . "','"
            . $VDesf3L ."','"
            .$fechaHoy."')";
    echo $query0;
    //Para eliminar la obra de la tabla

    $query1 = "DELETE  FROM `obras` WHERE IdObra = " . $_GET['IdObraL'];
    echo $query1;
    //echo"<script type=\"text/javascript\">alert('errorrrrr'); window.close();window.location='Liquidaciones.php';</script>";
    if (!$mysqli->query($query1)) {
        echo "DELETE failed: (" . $mysqli->errno . ")" . $mysqli->error;
        //echo"<script type=\"text/javascript\">alert('$query1;'); window.location='Contratistas.php';</script>";
    }

    if (!$mysqli->query($query0)) {
        echo "INSERTION failed: (" . $mysqli->errno . ")" . $mysqli->error;
        //echo"<script type=\"text/javascript\">alert('$query0;'); window.location='Contratistas.php';</script>";
    }
    echo"<script type=\"text/javascript\">alert('" ."¿Está seguro que desea liquidar la obra?(De no ser así cierre esta pestaña)". "');window.location='Liquidaciones.php'; window.close();</script>";
}
?>

