<?php
//defined("DS") ? NULL : define("DS", DIRECTORY_SEPARATOR);

//Dcoumento de identificacion para crear carpeta 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$mysqli = new mysqli("localhost", "root", "", "op");
         echo '<script>alert("conectado a bd")</script>';
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
    echo '<script>alert("fallo conexión bd")</script>';
}	


        $porcDesf1 = $_POST['Desface1'];
        $porcDesf2 = $_POST['Desface2'];
        $porcDesf3 = $_POST['Desface3'];
	
	
      $query = "UPDATE parametrizacion SET Desface1='$porcDesf1', Desface2='$porcDesf2',Desface3='$porcDesf3'";

	//echo $query1;
    //echo '<script>alert('.$query1.')</script>';
    //echo"<script type=\"text/javascript\">alert('Contraseña Incorrecta'); window.location='IniSes.php';</script>";

    //echo"<script type=\"text/javascript\">alert('.$query.'); window.location='IniSes.php';</script>";

       // INSERT INTO `usuarios` VALUES ('asdf', 'asdf', '1111111111', 'asdf@asdf', 'asdf', '1');
        
        
    if (!$mysqli->query($query)){
    echo "Table creation failed: (". $mysqli->errno.")".$mysqli->error;
    echo"<script type=\"text/javascript\">alert('.$query.'); window.location='Parametrizacion.php';</script>";
	}
    header('Location: MenuP.php');






//if ($error) {
//    echo '<script>alert("Ocurrio un error al subir los archivos")</script>';
//    //echo '<script>location.href="index.php";</script>';
//} else {
//    echo '<script>alert(','$query1',')</script>';
//    //echo '<script>location.href="index.php";</script>';
//}

}
?>










