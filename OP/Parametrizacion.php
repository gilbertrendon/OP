<?php
session_start();
//$_SESSION['CodUsu'] == null || $_SESSION['CodUsu'] == '' || 
if ($_SESSION['CodUsu'] != 'Admin' && $_SESSION['TipoUsu'] != 1) {
    //echo '<script>alert('.$_SESSION['CodUsu'].')</script>';
} else {
    $conexion = new mysqli("localhost", "root", "", "op");

    if ($conexion->connect_errno) {
        echo "Error de conexion de la base datos" . $conexion->connect_error;
        exit();
    }

    $query1 = "Select * from parametrizacion";
    $resultado = $conexion->query($query1);
    $datos = $resultado->fetch_assoc();
    $porcDesf1 = $datos['Desface1'];
    $porcDesf2 = $datos['Desface2'];
    $porcDesf3 = $datos['Desface3'];
    ?> 
    <html>
        <head>
            <title>Parametrización</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="Styles/Style-Parame.css">
            <link rel="stylesheet" type="text/css" href="Styles/Style-G.css">
            <link rel="icon" href="Images/Icons/Logo.png">
            <script src="Js/jquery3.4.1.js"></script>
        </head>
        <body>
            <header>
                <a href="MenuP.php" title="Volver Al Menú Principal."> <img class="Logo" src="./Images/Icons/Logo.png"> </a>
                <img class="menu-bar" src="./Images/Icons/IconMenu.png">
                <p class="TitlePara">PARAMETRIZACIÓN</p>
            </header>

            <div class="sidebar general">
                <h2>Menú</h2>
                <ul>
                   	<li><a href="Obras.html">
                            Obras <br clear="right">
                            <img style="position: absolute; left: 180px; top: 52px;" class="menu-icon" src="./Images/Icons/Obras.png">
                        </a>
                    </li>

                   	<li><a href="Contratistas.php">
                            Contratistas
                            <img style="position: absolute; left: 180px; top: 92px;" class="menu-icon" src="./Images/Icons/Contratistas.png">
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

            <div class="General">
                <form action="form_parametrizacion.php" method="post" class="smart-green" ENCTYPE="multipart/form-data"> 

                    <input class="Inp" type="text" 
                           name="Desface1" value="<?php echo $porcDesf1 ?>" placeholder="Valor de Desface 1">
                    <!--      <br>
                          <h3 style="align-items: center; color: white" >Porcentaje desface 1:</h3>-->
                    <input class="Inp2" type="text"  
                           name="Desface2" value="<?php echo $porcDesf2 ?>" placeholder="Valor de Desface 2">
                    <!--      <br>
                          <h3 style="align-items: center; color: white" >Porcentaje desface 1:</h3>-->
                    <input class="Inp3" type="text" 
                           name="Desface3" value="<?php echo $porcDesf3 ?>" placeholder="Valor de Desface 3">  
                    <label>
                        <input id="Btn-Crear" type="submit" class="Btn Btn-Gu" name="Btn-Editar" value="Guardar cambios" onclick="bloqued()"/> 
                    </label>  



                </form>
            </div>



            <footer>
                <p> © 2019 By OP. </p>	
            </footer>

            <script src="Js/popup.js"></script>
            <script src="Js/abrir.js"></script>
        </body>
    </html>

    <?php
    echo '';
    die();
}
?>
