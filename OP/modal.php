<?php
session_start();
if ($_SESSION['CodUsu'] == 'Admin' || $_SESSION['TipoUsu'] == 1) {
    echo '<script>alert(' . $_SESSION['CodUsu'] . ')</script>';
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
$sql = "select * from obras where IdObra = " . $_GET['id'];
$resultado = $conexion->query($sql);
$datos = $resultado->fetch_array();
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
        <title>Información de la Obra</title>

        <link rel="stylesheet" type="text/css" href="Styles/Style-G.css">
        <link rel="icon" href="Images/Icons/Logo.png">
       	<link rel="stylesheet" type="text/css" href="Styles/Style-Modal.css">
        <script src="Js/jquery3.4.1.js"></script>
    </head>
    <body>

        <header>
            <a onclick="window.close()" title="Cerrar Ventana"><img class="Logo" src="./Images/Icons/Logo.png"> </a>
            <p class="Title">EDITAR OBRAS</p>
        </header>
        <div class="container">
            <div class="table-responsive table-hover">
                <div class="Tbl">
                    <table class="Tbls" >
                        <thead>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Documento contratista</th> 
                        <!--Toca poner luego el nombre del contratista-->
                        <th>Fecha inicio</th>
                        <th>Fecha Fin</th>
                        <th>Editar</th>
                        <th>Liquidar Obra</th>
                        </thead>                


                        <?php
                        $id = $_GET['id'];
// do something


                        $sql = "SELECT * from obras WHERE IdObra = " . $id;
                        $result = mysqli_query($conexion, $sql) or die(mysql_error());

                        while ($mostrar = mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                                <td><?php echo $mostrar['NombreObra'] ?></td>
                                <td><?php echo $mostrar['DireccionOb'] ?></td>
                                <td><?php echo $mostrar['IdContratista'] ?></td>
                                <td><?php echo $mostrar['FecInicio'] ?></td>
                                <td><?php echo $mostrar['FecFin'] ?></td>
                                <td style="text-align: center"> <img width="40px" height="40px" 
                                                                     src="Images/Icons/Editar.png" title="Editar"
                                                                     id="btn-abrir-popup" 
                                                                     class="btn-abrir-popup"> 
                                </td>
                                <td style="text-align:center"><a href="_liquidacion.php?IdObraL=<?php echo $mostrar['IdObra'] ?>" 
                                                                 target="_blank" > <img width="40px" height="40px" 
                                                           src="Images/Icons/Terminar.png" title="Liquidar"></a></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                </div>
            </div>


        </div>

        <div class="overlay" id="overlay"> <!-- Overlay -->

            <div class="popup" id="popup"> <!-- Popup-->

                <a id="btn-cerrar-popup" class="btn-cerrar-popup" href="#" ><img src="Images/Icons/Cerrar.png" style="width: 40px; height: 40px;"></a>
                <form action="form_edcontratis.php" method="post" class="smart-green" ENCTYPE="multipart/form-data"> 

                    <div class="RegContratista">

                        <h1>Editar Obra</h1>
                        <input id="Camp11" type="hidden" name="IdObra" value="<?php echo $datos['IdObra'] ?>"> 
                        <input id="Camp0" type="hidden" name="IdContratista" value="<?php echo $_GET['IdContratista'] ?>">
                        <input id="Camp1" type="text" name="Edit-Nombre" value="<?php echo $datos['NombreObra'] ?>"> 
                        <input id="Camp2" type="text" name="Edit-Direcc" value="<?php echo $datos['DireccionOb'] ?>">
                        <br>
                        <br>

                        <label class="PContr">Contratista(s):
                            <select class="Slc-C" id="Contratistas" name="Contratista" value="<?php echo $datos3["Nombres"], " ", $datos3["Apellidos"] ?>">
                                <?php
                                while ($datos2 = $resultado2->fetch_array()) {
                                    ?>
                                    <option>
                                        <?php echo $datos2["Nombres"], " ", $datos2["Apellidos"] ?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select> 
                        </label>
                        <br>
                        <input id="Camp4" type="date" name="Edit-FecInic" value="<?php echo $datos['FecInicio'] ?>">
                        <input id="Camp5" type="date" name="Edit-FecFin" value="<?php echo $datos['FecFin'] ?>">

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