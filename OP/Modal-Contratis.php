<?php
session_start();
if ($_SESSION['CodUsu'] == 'Admin' || $_SESSION['TipoUsu'] == 1) {
    //echo '<script>alert(' . $_SESSION['CodUsu'] . ')</script>';
} else {
    echo '<script>alert(' . $_SESSION['CodUsu'] . ')</script>';

    echo '';
    die();
}

$conexion = new mysqli("localhost", "root", "", "op");

if ($conexion->connect_errno) {
    echo "Error de conexion de la base datos" . $conexion->connect_error;
    exit();
}
$sql2 = "select * from contratistas";
$resultado2 = $conexion->query($sql2);
$sql3 = "select * from contratistas where IdContratista = " . $_GET['IdContratista'];
//Se debe tener en cuenta que IdContratista es clave única
$resultado3 = $conexion->query($sql3);
if ($resultado3 != null) {
    $datos3 = $resultado3->fetch_array();
}
?>


<html>
    <head>
        <title>Información del contratista</title>

        <link rel="stylesheet" type="text/css" href="Styles/Style-G.css">
        <link rel="icon" href="Images/Icons/Logo.png">
       	<link rel="stylesheet" type="text/css" href="Styles/Style-Modal.css">
        <script src="Js/jquery3.4.1.js"></script>
    </head>
    <body>

        <header>
            <a onclick="window.close()" title="Cerrar Ventana"><img class="Logo" src="./Images/Icons/Logo.png"> </a>
            <p class="Title">EDITAR CONTRATISTA</p>
        </header>
        <div class="container">
            <div class="table-responsive table-hover">
                <div class="Tbl">
                    <table class="Tbls" >
                        <thead>
                        <th># Documento</th>
                        <th>Nombre(s)</th>
                        <th>Apellidos</th> 
                        <th>Celular</th>
                        <th>Correo</th>
                        <th>Editar</th>
                        </thead>   
                        <thead>
                        <td><?php echo $datos3['IdContratista'] ?></td>
                        <td><?php echo $datos3['Nombres'] ?></td>
                        <td><?php echo $datos3['Apellidos'] ?></td>
                        <td><?php echo $datos3['Celular'] ?></td>
                        <td><?php echo $datos3['Correo'] ?></td>
                        <td style="text-align: center"> <img width="40px" height="40px" 
                                                             src="Images/Icons/Editar.png" title="Editar"
                                                             id="btn-abrir-popup" 
                                                             class="btn-abrir-popup"> 
                        </td>
                        </thead>
                    </table>
                </div>
            </div>


        </div>

        <div class="overlay" id="overlay"> <!-- Overlay -->

            <div class="popup" id="popup"> <!-- Popup-->

                <a id="btn-cerrar-popup" class="btn-cerrar-popup" href="form_EditarContratista.php" ><img src="Images/Icons/Cerrar.png" style="width: 40px; height: 40px;"></a>
                <form action="form_EditarContratista.php" method="post" class="smart-green" ENCTYPE="multipart/form-data"> 

                    <div class="RegContratista">

                        <h1>Editar contratista</h1> 
                        
                            <input id="Camp0" type="hidden" name="IdContratista" value="<?php echo $datos3['IdContratista'] ?>">
                            <input id="Camp11" type="text" name="Nombres" value="<?php echo $datos3['Nombres'] ?>">
                            <input id="Camp1" type="text" name="Apellidos" value="<?php echo $datos3['Apellidos'] ?>"> 
                            <input id="Camp2" type="text" name="Celular" value="<?php echo $datos3['Celular'] ?>">
                            <input id="Camp3" type="text" name="Correo" value="<?php echo $datos3['Correo'] ?>">
                            <br>
                            <br>
                    </div> <!--Registrar Contratista-->

                    <label>
                        <input id="Btn-Edit" type="submit" class="Btn Btn-Edit" name="Btn-Edit" value="Editar" onclick="bloqued()"/> 
                    </label>  
                </form>
            </div> <!--popup-->
        </div> <!--Overlay-->

        <footer>
            <p> © 2019 By OP. </p>
        </footer>

        <script src="Js/popupModal.js"></script>
    </body>
</html>