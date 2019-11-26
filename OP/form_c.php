<?php
defined("DS") ? NULL : define("DS", DIRECTORY_SEPARATOR);

//Dcoumento de identificacion para crear carpeta 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$mysqli = new mysqli("localhost", "root", "", "op");
         echo '<script>alert("conectado a bd")</script>';
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
    echo '<script>alert("fallo conexión bd")</script>';
}	


        $nombre = $_POST['nombre(s)'];
	$apellidos = $_POST['apellidos'];
        $contrasena = $_POST ['Contrasena'];
        $email = $_POST['Correo'];
        $docid = $_POST['DocId'];
         $tipousu = $_POST['TipoUsu'];
	

	$query1 = "INSERT INTO `usuarios` VALUES('$nombre','$apellidos','$docid','$email','$contrasena','$tipousu')";
	echo $query1;

       // INSERT INTO `usuarios` VALUES ('asdf', 'asdf', '1111111111', 'asdf@asdf', 'asdf', '1');
        
        
    header('Location: index.php');
}


if (!$mysqli->query($query1)){
    echo "Table creation failed: (". $mysqli->errno.")".$mysqli->error;
    echo '<script>alert(','$query1',')</script>';
	}


if ($error) {
    echo '<script>alert("Ocurrio un error al subir los archivos")</script>';
    //echo '<script>location.href="index.php";</script>';
} else {
    echo '<script>alert(','$query1',')</script>';
    //echo '<script>location.href="index.php";</script>';
}
?>










