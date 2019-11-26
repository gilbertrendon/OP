<?php
session_start();
$conexion = new mysqli("localhost", "root", "", "op");

if ($conexion->connect_errno) {
    echo "Error de conexion de la base datos" . $conexion->connect_error;
    exit();
}
$sql = "select * from contratistas";

$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Contratistas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Styles/Style-G.css">
        <link rel="stylesheet" type="text/css" href="Styles/Style-Contra.css">
        <link rel="icon" href="Images/Icons/Logo.png">
        <script src="Js/jquery3.4.1.js"></script>
    </head>
    <body>
  
        <header>
            <a href="MenuP.php" title="Volver Al Menú Principal."> <img class="Logo" src="./Images/Icons/Logo.png"> </a>
            <img class="menu-bar" src="./Images/Icons/IconMenu.png">
            <p class="TitleCon">CONTRATISTAS</p>
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

               	<li><a href="Contratos.php">
                        Contratos
                        <img style="position: absolute; left: 180px; top: 132px;" class="menu-icon" src="./Images/Icons/Contratos.png">
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
            <button class="Btn Añ" name="Btn-RegContratista">
                <img src="Images/Icons/Agregar.png"
                     id="btn-abrir-popup"  
                     class="btn-abrir-popup"  width="40px" height="40px" title="Crear Nuevo Contratista">
            </button>
        </a>

        <div class="overlay" id="overlay"> <!-- Overlay -->

            <div class="popup" id="popup"> <!-- Popup-->

                <a id="btn-cerrar-popup" class="btn-cerrar-popup" href="#" ><img src="Images/Icons/Cerrar.png" style="width: 40px; height: 40px;"></a>
                <form action="form_contratis.php" method="post" class="smart-green" ENCTYPE="multipart/form-data"> 

                    <div class="RegContratista">

                        <h1>Registrar Contratista</h1>

                        <input id="Camp1" type="text" name="NumDoc" placeholder="Documento Identidad" required> 
                        <input id="Camp2" type="text" name="Nombres" placeholder="Nombre(s)" required>
                        <input id="Camp3" type="text" name="Apellidos" placeholder="Apellidos" required>
                        <input id="Camp4" type="text" name="Celular" placeholder="Celular" required>
                        <input id="Camp5" type="email" name="Correo" placeholder="Correo" required>

                    </div> <!--Registrar Contratista-->

                    <label>
                        <input id="Btn-Reg" type="submit" class="Btn Btn-Reg" name="Btn-Reg" value="Registrar" onclick="bloqued()"/> 
                    </label>  
                </form>
            </div> <!--popup-->
        </div> <!--Overlay-->


        <div class="Tbl-C">

            <table class="Tbls" >

                <tr style="position: relative;">
                    <th># Documento</th>
                    <th>Nombre(s)</th>
                    <th>Apellidos</th>
                    <!--<th># Contrato</th>-->
                    <th>Celular</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>

                <?php
                while ($datos = $resultado->fetch_array()) {
                    ?>
                    <tr>
                        <td><?php echo $datos["IdContratista"] ?></td>
                        <td><?php echo $datos["Nombres"] ?></td>
                        <td><?php echo $datos["Apellidos"] ?></td>
                        <td><?php echo $datos["Celular"] ?></td>
                        <td><?php echo $datos["Correo"] ?></td>
                        <td style="text-align:center"><a href="Modal-Contratis.php?id=<?php echo $datos['IdObra'] ?>&IdContratista=<?php echo $datos['IdContratista'] ?>" 
                                                         > <img width="40px" height="40px" 
                                                   src="Images/Icons/Visualizar.png" title="Más Informacion del contratista"></a></td>

                    </tr>
                    <?php
                }
                ?>

            </table>
        </div> <!--Tbl-->

    </div>






    <footer>
        <p> © 2019 By OP. </p>
    </footer>

    <script src="Js/pest.js"></script>
    <script src="Js/popupContratistas.js"></script>
    <script src="Js/abrir.js"></script>	
</body>
</html>
