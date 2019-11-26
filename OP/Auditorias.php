<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Auditorias</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Styles/Style-G.css">
        <link rel="stylesheet" type="text/css" href="Styles/Style-Audi.css">
        <link rel="icon" href="Images/Icons/Logo.png">
        <script src="Js/jquery3.4.1.js"></script>
    </head>
    <body>
        <header>
            <a href="MenuP.php" title="Volver Al Menú Principal."> <img class="Logo" src="./Images/Icons/Logo.png"> </a>
            <img class="menu-bar" src="./Images/Icons/IconMenu.png">
            <p class="TitleAu">AUDITORIAS</p>
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

               	<li><a href="Contratos.php">
                        Contratos
                        <img style="position: absolute; left: 180px; top: 170px;" class="menu-icon" src="./Images/Icons/Contratos.png">
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

        <div class="Gene">

            <table class="Tbls" >

                <tr style="position: relative;">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Hecha Por</th>
                    <th>Fecha Reporte</th>
                    <th>Descripción</th>
                </tr>

                <tr>
                    <td>8753</td>
                    <td>Operario #1</td>  
                    <td>Parque</td>
                    <td>13/10/2019</td>
                    <td>Cambio de materiales</td>
                </tr>

                <tr>
                    <td>9268</td>
                    <td>Administrador</td> 
                    <td>Centro Comercial</td>
                    <td>29/07/2019</td>
                    <td>Cambio de fecha de finalizacion</td>
                </tr>

            </table>

        </div>



        <footer>
            <p> © 2019 By OP. </p>
        </footer>

        <script src="Js/pest.js"></script>
        <script src="Js/popup.js"></script>
        <script src="Js/abrir.js"></script> 
    </body>
</html>
