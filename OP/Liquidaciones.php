<?php
session_start();


$conexion = new mysqli("localhost", "root", "", "op");
if ($conexion->connect_errno) {
    echo "Error de conexion de la base datos" . $conexion->connect_error;
    echo '<script>alert("fallo conexión bd")</script>';

    exit();
}

$query0 = "Select * from liquidaciones";

$resultado0 = $conexion->query($query0);
//$fila = $resultado0->fetch_assoc();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Liquidaciones</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Styles/Style-G.css">
        <link rel="stylesheet" type="text/css" href="Styles/Style-Liqui.css">
        <link rel="icon" href="Images/Icons/Logo.png">
        <script src="Js/jquery3.4.1.js"></script>

    </head>
    <body>
        <header>
            <a href="MenuP.php" title="Volver Al Menú Principal."> <img class="Logo" src="./Images/Icons/Logo.png"> </a>
            <img class="menu-bar" src="./Images/Icons/IconMenu.png">
            <p class="TitleLiq">LIQUIDACIONES</p>
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

               	<li><a href="Auditorias.php">
                        Auditorias
                        <img style="position: absolute; left: 180px; top: 209px;" class="menu-icon" src="./Images/Icons/Auditorias.png">
                    </a>
               	</li>

               	<li>
                    <a href="CerrarSesion.php">
                        <img style="position: absolute; left: 180px; top: 250px;" class="menu-icon" src="./Images/Icons/Exit.png">
                        Cerrar Sesión
                    </a>
               	</li>

            </ul>
        </div> <!--Sidebar -->

        <a href="Liquidaciones.php">  
            <button class="Btn Actu">
                <img src="Images/Icons/Actualizar.png"  width="40" height="35px" title="Actualizar">
            </button>
        </a>

        <h1>OBRAS FINALIZADAS</h1>

        <div class="GeneraLiq">  <!--Div General -->
            <table class="Tbls">
                <tr style="position: relative;">
                    <th># Obra</th>
                    <th>Nombre Obra</th>
                    <th>Nombre contratista</th>
                    <th># Contrato</th>
                    <th>Valor inicial</th>
                    <th>Multa</th>
                    <th>Días obra</th>
                    <th>Días exedidos</th>
                </tr>
                  <?php
                    while ($datos = $resultado0->fetch_array()) {
                        $filaSql = 'SELECT * from op.contratistas where IdContratista = ' . $datos['IdContratistaL'];
                        $fila = $conexion->query($filaSql);
                        if ($fila != null) {
                            $fnombre = $fila->fetch_array();
                            $nombre = $fnombre["Nombres"];
                            $apellido = $fnombre["Apellidos"];
                        } else {
                            $nombre = "No";
                            $apellido = "asignado";
                        }
                        //Para calcular los días de la obra FecFin - FecInicio
                        $datetime1 = new DateTime($datos['FecInicioL']);
                        $datetime2 = new DateTime($datos['FecFinL']);
                        $intervalo = $datetime2->diff($datetime1);
                        
                       //Para calcular los días que se exedió la obra
                        $datetime3 = new DateTime($datos['FecFinL']);
                        $datetime4 = new DateTime($datos['FecFinObra']);
                        $intervalo2 = $datetime4->diff($datetime3);
                        $diasIntervalo2 =  $intervalo2->days;
                        
                        if($diasIntervalo2 < 1){
                            $diasIntervalo2 = 1;
                        }
                        
                        //Para calcular si hay multa y cuanto es el valor
                        if($diasIntervalo2>0 &&$diasIntervalo2<30){
                        $multa = $datos["CostoL"]*$datos["VDesf1L"];
                        }else if($diasIntervalo2>30){
                            $multa = $datos["CostoL"]*$datos["VDesf1L"] +   $datos["CostoL"]*$datos["VDesf3L"]*intval($diasIntervalo2/30);
                        }else{
                             $multa = 0;
                        }
                        ////intval
                        //80  2 20  
                        ?>
                        <tr>
                            <td><?php echo $datos["IdObraL"] ?></td>
                            <td><?php echo $datos["NombreObraL"] ?></td>
                            <td><?php echo $nombre, " ", $apellido ?></td>
                            <td><?php echo $datos["IdContratoL"] ?></td>
                            <td><?php echo $datos["CostoL"] ?></td>
                            <td><?php echo $multa ?></td>
                            
                            <td><?php echo $intervalo->days?></td>
                            <td><?php echo $diasIntervalo2-1 ?></td>
                            

                        <?php
                    }
                    ?>

            </table>
        </div>                 <!--Div General -->


        <footer>
            <p> © 2019 By OP. </p>
        </footer>

        <script src="Js/abrir.js"></script>
    </body>
</html>
