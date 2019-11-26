<?php
session_start();

//require "conexion.php";

$conexion = new mysqli("localhost", "root", "", "op");

if ($conexion->connect_errno) {
    echo "Error de conexion de la base datos" . $conexion->connect_error;
    exit();
}
$sql = "select * from contrato";
$sql2 = "select * from obras";
$sql3 = "select * from contratistas";


$resultado = $conexion->query($sql);
$resultado2 = $conexion->query($sql2);
$resultado3 = $conexion->query($sql3);
$resultado4 = $conexion->query($sql2);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Contratos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Styles/Style-G.css">
        <link rel="stylesheet" type="text/css" href="Styles/Style-Contratos.css">
        <link rel="icon" href="Images/Icons/Logo.png">
        <script src="Js/jquery3.4.1.js"></script>
    </head>
    <body>
        <header>
            <a href="MenuP.php" title="Volver Al Menú Principal."> <img class="Logo" src="./Images/Icons/Logo.png"> </a>
            <img class="menu-bar" src="./Images/Icons/IconMenu.png">
            <p class="TitleContratos">CONTRATOS</p>
        </header>

        <div class="sidebar general">
            <h2>Menú</h2>
            <ul>
               	<li><a href="Obras.php">
                        Obras <br clear="right">
                        <img style="position: absolute; left: 180px; top: 52px;" class="menu-icon" src="./Images/Icons/Obras.png">
                    </a>
                </li>

               	<li><a href="Parametrizacion.php">
                        Parametrización
                        <img style="position: absolute; left: 180px; top: 92px;" class="menu-icon" src="./Images/Icons/Parametrizacion.png">
                    </a>
               	</li>

               	<li><a href="Contratistas.php">
                        Contratistas
                        <img style="position: absolute; left: 180px; top: 132px;" class="menu-icon" src="./Images/Icons/Contratistas.png">
                    </a>
               	</li>

               	<li><a href="Auditorias.php">
                        Auditorias
                        <img style="position: absolute; left: 180px; top: 170px;" class="menu-icon" src="./Images/Icons/Auditorias.png">
                    </a>
                </li>

               	<li><a href="Liquidaciones.php">
                        Liquidaciones
                        <img style="position: absolute; left: 180px; top: 209px;" class="menu-icon" src="./Images/Icons/Liquidaciones.png">
                    </a>
               	</li>

               	<li>
                    <a href="CerrarSesion.php">
                        <img style="position: absolute; left: 180px; top: 250px;" class="menu-icon" src="./Images/Icons/Exit.png">
                        Cerrar Sesión
                    </a>
               	</li>

            </ul>
        </div> <!--Sidebar-->

        <input type="text" class="myInput" onkeyup="myFunction()" 
               placeholder="Busqueda por # de Documento" title="Ingrese Documento a buscar">

        <a href="#">
            <button class="Btn Añ" name="Btn-CrearContra">
                <img src="Images/Icons/Agregar.png"
                     id="btn-abrir-popup"  
                     class="btn-abrir-popup"  width="40px" height="40px" title="Crear Nuevo Contrato">
            </button>
        </a>

        <div class="Gen">

            <table class="Tbls" >

                <tr style="position: relative;">
                    <th># Contrato</th>
                    <th>Nombre Contrato</th>
                        <!--<th>Celular</th>-->
                        <!--<th>Correo</th>-->
                        <!--<th>Dirección Obra</th>-->
                    <th>Estado Contrato</th>
                    <th>Acciones</th>
                </tr>

<?php
while ($datos = $resultado->fetch_array()) {
    ?>
                    <tr>
                        <td><?php echo $datos["IdContrato"] ?></td>
                        <td><?php echo $datos["NombreC"] ?></td>
                        <td><?php echo $datos["EstadoCon"] ?></td>
                        <td> <img width="40px" height="40px" 
                                  src="Images/Icons/Visualizar.png"
                                  id="btn-abrir-popup2" 
                                  class="btn-abrir-popup2"> 
                        </td>
                    </tr>
    <?php
}
?>

            </table>

        </div>


        <div class="overlay" id="overlay"> <!-- Overlay -->

            <div class="popup" id="popup"> <!-- Popup-->

                <a id="btn-cerrar-popup" class="btn-cerrar-popup" href="#" ><img src="Images/Icons/Cerrar.png" style="width: 40px; height: 40px;"></a>
                <form action="form_contra.php" method="post" class="smart-green" ENCTYPE="multipart/form-data"> 

                    <div class="CrearContra">

                        <h1>Crear Contrato</h1>

 <!--<input id="Camp1" type="text" name="NumContrato" placeholder="Numero de Contrato" required readonly="readonly">--> 
                        <input id="Camp2" type="text" name="NombreC" placeholder="Nombre del Contrato" required> 
                        <p class="Ob">Seleccione Obra:</p>
                        <select class="Slc-Obra" id="SelecOb" name="NombreObra">

<?php
while ($datos2 = $resultado2->fetch_array()) {
    ?>
                                <option>
                                <?php
                                //$nombreObra = $datos2["NombreObra"];
                                //echo $datos2["IdObra"]
                                echo $datos2["NombreObra"];
                                ?>

                                </option>
                                    <?php
                                }
                                ?>

                        </select>


                    </div> <!--Crear Contrato-->

                    <label>
                        <input id="Btn-CrearC" type="submit" class="Btn Btn-CrearC" name="Btn-CrearC" value="Crear" onclick="bloqued()"/> 
                    </label>  
                </form>
            </div> <!--popup-->
        </div> <!--Overlay-->





        <footer>
            <p> © 2019 By OP. </p>
        </footer>

        <script src="Js/pest.js"></script>
        <script src="Js/popupContra.js"></script>
        <script src="Js/abrir.js"></script> 
    </body>
</html>
