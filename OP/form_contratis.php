<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$mysqli = new mysqli("localhost", "root", "", "op");
//         echo '<script>alert("conectado a bd")</script>';
        if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
    echo '<script>alert("fallo conexión bd")</script>';
}
     $numdoc = $_POST['NumDoc'];
     $nombres = $_POST ['Nombres'];
     $apellidos = $_POST ['Apellidos'];
     $celular = $_POST ['Celular'];
     $correo = $_POST ['Correo'];

     
      $query = "INSERT INTO `contratistas` VALUES('$numdoc','$nombres','$apellidos','$celular','$correo',1,1)";
      //Los dos unos al final indican la obra y el contrato por defecto
	echo $query;
        

    header('Location: Contratistas.php');

    
    
    if (!$mysqli->query($query)){
    echo "Insertion failed: (". $mysqli->errno.")".$mysqli->error;
            echo"<script type=\"text/javascript\">alert('$query;'); window.location='Contratistas.php';</script>";
	}



}
        ?>