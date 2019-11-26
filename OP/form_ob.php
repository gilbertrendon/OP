<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$mysqli = new mysqli("localhost", "root", "", "op");
//         echo '<script>alert("conectado a bd")</script>';
        if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
    echo '<script>alert("fallo conexión bd")</script>';
}
//     $idobra = $_POST['IdObra'];
     $nombreobra = $_POST ['NombreObra'];
     $direccionob = $_POST ['DireccionOb'];
     $costo = $_POST ['Costo'];
     $contratista = $_POST ['Contratista'];
     $fecinicio = $_POST ['FecInicio'];
     $fecfin = $_POST ['FecFin'];

     //Para la diferencia de las fechas
    date_default_timezone_set('America/Bogota');
    $diff = abs(strtotime($fecfin) - strtotime($fecinicio)); 

    $years   = floor($diff / (365*60*60*24)); 
    $months  = floor(($diff - $years * 365*60*60*24) / (30*60*60*24)); 
    $days    = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
     //Fin diferencia de las fechas
     
     
     if($contratista == '' || $contratista == NULL){
         $estado = "Inactiva";
     }else{
         $estado = "Activa";
     }
     
      //Para extraer el id de el contratista en vez del nombre
     $sqlc = "Select * from Contratistas";
     $resultadoc = $mysqli->query($sqlc);
     $IdContratista = "";
     while($datosc=$resultadoc->fetch_array()){
     //echo"<script type=\"text/javascript\">alert('Estamos comparando el que es : ".$contratista." con este:".$datosc["Nombres"]." ".$datosc["Apellidos"]." ')';</script>";
     //echo"Estamos comparando el que es : ".$contratista." con este:".$datosc["Nombres"]." ".$datosc["Apellidos"];
            if($contratista == $datosc["Nombres"]." ".$datosc["Apellidos"]){
                //echo "encontrado el que es";
                $IdContratista = $datosc["IdContratista"];  
                //echo $IdContratista;
            }
            //$nombreObra = $datos2["NombreObra"];
            //echo $datos2["IdObra"]
            //echo $datos2["NombreObra"];   
        }
        
        $query16 = "Select * from parametrizacion";
        $resultado16 = $mysqli->query($query16);
        $fila16 = $resultado16->fetch_assoc();
        
        //Para los valores de desface 
         $VDesf1 = $fila16['Desface1']*$costo;
         $VDesf2 = $fila16['Desface2']*$costo;
         $VDesf3 = $fila16['Desface3']*$costo;
        
        //echo $VDesf1;
        //echo $VDesf2;
        //echo $VDesf3;
        
      $query = "INSERT INTO `obras` VALUES(DEFAULT,'$nombreobra','$direccionob','$estado','$IdContratista','$fecinicio','$fecfin','$days',NULL,1,$costo,$VDesf1,$VDesf2,$VDesf3)";
	//echo $query;
        

        
    //echo"<script type=\"text/javascript\">alert('Error'); window.location='IniSes.php';</script>";

    //echo"<script type=\"text/javascript\">alert(".$query."); window.location='IniSes.php';</script>";

    header('Location: Obras.php');

    
    
    if (!$mysqli->query($query)){
    echo "Insertion failed: (". $mysqli->errno.")".$mysqli->error;
        echo"<script type=\"text/javascript\">alert(".$query."); window.location='Obras.php';</script>";

            //echo"<script type=\"text/javascript\">alert('$query;'); window.location='Obras.php';</script>";
	}



}
        ?>