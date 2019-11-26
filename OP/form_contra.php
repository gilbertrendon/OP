<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$mysqli = new mysqli("localhost", "root", "", "op");
//         echo '<script>alert("conectado a bd")</script>';
        if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
    echo '<script>alert("fallo conexión bd")</script>';
}
//     $numcontrato = $_POST['NumContrato'];
     $nombrec = $_POST['NombreC'];
     //$estadocon = "Inactivo";
     $nombreObra = $_POST['NombreObra'];
     //$IdObra

     //Para extraer el id de la obra seleccionada
     $sql = "Select * from Obras";
     $resultado = $mysqli->query($sql);
     while($datos=$resultado->fetch_array()){
            if($nombreObra == $datos["NombreObra"]){
                $IdContrato = $datos["IdContrato"];
                $IdContratista = $datos["IdContratista"];
                $estadocon = "Activo";
            }
            //$nombreObra = $datos2["NombreObra"];
            //echo $datos2["IdObra"]
            //echo $datos2["NombreObra"];   
        }
        
        
        if($IdContrato == NULL || $IdContrato == ''){
                $estadocon = "Inactivo";
                $IdContratista = "NULL";
                $IdContrato = "NULL";
        }

      $query = "INSERT INTO `contrato` VALUES(DEFAULT,'$nombrec','$estadocon',$IdContratista,$IdContrato,1)";
	//echo $query;
    header('Location: Contratos.php');

        //echo"<script type=\"text/javascript\">alert('.$query.'); window.location='IniSes.php';</script>";
    //header('Location: Contratos.php');

    
    if (!$mysqli->query($query)){
        echo $query;
    echo "Insertion failed: (". $mysqli->errno.")".$mysqli->error;
            echo"<script type=\"text/javascript\">alert('$query;'); window.location='Contratos.php';</script>";
	}
}
        ?>