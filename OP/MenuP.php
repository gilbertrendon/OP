<?php
session_start();
if ($_SESSION['CodUsu'] == 'Admin' || $_SESSION['TipoUsu'] == 1) {
    echo '<script>alert(' . $_SESSION['CodUsu'] . ')</script>';
} else {
    echo '<script>alert(' . $_SESSION['CodUsu'] . ')</script>';
    ?> 
    <html>
        <head>
            <title>Menú</title>

            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="Styles/Style-G.css">
            <link rel="stylesheet" type="text/css" href="Styles/Style-MenuP.css">
            <link rel="icon" href="Images/Icons/Logo.png">
            <script src="Js/jquery3.4.1.js"></script>
        </head>
        <body>
            <header>
                <img class="Logo" src="./Images/Icons/Logo.png">
                <img class="menu-bar" src="./Images/Icons/IconMenu.png">
                <h2 class="Bienve">Bienvenido: <?php echo $_SESSION['CodUsu'] ?> </h2>
            </header>

            <div class="sidebar general">
                <h2>Menú</h2>
                <ul>
                    <li><a href="Obras.php">
                            Obras
                            <img style="position: absolute; left: 180px; top: 47px;" class="menu-icon" src="./Images/Icons/Obras.png">
                        </a>
                    </li>

                   	<li><a href="Contratistas.php">
                            Contratistas <br clear="right">
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
                            <img style="position: absolute; left: 180px; top: 170px;" class="menu-icon" src="./Images/Icons/Actualizar.png">
                        </a>
                   	</li>

                   	<li><a href="Liquidaciones.php">
                            Liquidaciones
                            <img style="position: absolute; left: 180px; top: 209px;" class="menu-icon" src="./Images/Icons/Liquidaciones.png">
                        </a>
                    </li>

                    <li><a href="CerrarSesion.php">
                            Cerrar Sesión
                            <img style="position: absolute; left: 180px; top: 250px;" class="menu-icon" src="./Images/Icons/Exit.png">
                        </a>
                   	</li>

                </ul>
            </div> <!--Sidebar-->



            <p class="Titulo">Menú Principal.</p>


            <a href="Obras.php"> 
                <button class="Btn Btn-GM" id="Btn-ObP"  name="Btn-Ob">
                    <img class="Icon-Btn" src="./Images/Icons/Obras.png">
                    <p class="Text-Btn">Obras</p>
                </button> 
            </a>



            <a href="Contratistas.php">
                <button class="Btn Btn-GM" id="Btn-ConP" name="Btn-Contratistas">
                    <img class="Icon-Btn" src="./Images/Icons/Contratistas.png">
                    <p class="Text-Btn">Contratistas</p> 
                </button>
            </a>

            <a href="Contratos.php">
                <button class="Btn Btn-GM"  id="Btn-TraP" name="Btn-Contratos">
                    <img class="Icon-Btn" src="./Images/Icons/Contratos.png">
                    <p class="Text-Btn">Contratos</p>
                </button>
            </a>

            <a href="Auditorias.php">
                <button class="Btn Btn-GM"  id="Btn-AudP" name="Btn-Audi">
                    <img class="Icon-Btn" src="./Images/Icons/Auditorias.png">
                    <p class="Text-Btn">Auditorias</p>
                </button>
            </a>

            <a href="Liquidaciones.php">
                <button class="Btn Btn-GM"  id="Btn-LiqP" name="Btn-Liqui">
                    <img class="Icon-Btn" src="./Images/Icons/Liquidaciones.png">
                    <p class="Text-Btn">Liquidaciones</p>
                </button>
            </a>

            <footer>
                <p> © 2019 By OP. </p>
            </footer>

            <script src="js/abrir.js"></script> 
        </body>
    </html>



    <?php
    echo '';
    die();
}

$conexion = new mysqli("localhost", "root", "", "op");

if ($conexion->connect_errno) {
    echo "Error de conexion de la base datos" . $conexion->connect_error;
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Menú</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Styles/Style-G.css">
        <link rel="stylesheet" type="text/css" href="Styles/Style-MenuP.css">
        <link rel="icon" href="Images/Icons/Logo.png">
        <script src="Js/jquery3.4.1.js"></script>
    </head>
    <body>
        <header>
            <img class="Logo" src="./Images/Icons/Logo.png">
            <img class="menu-bar" src="./Images/Icons/IconMenu.png">
            <h2 class="Bienve">Bienvenido: <?php echo $_SESSION['CodUsu'] ?> </h2>
        </header>

        <div class="sidebar general">
            <h2>Menú</h2>
            <ul>
                <li><a href="Obras.php">
                        Obras
                        <img style="position: absolute; left: 180px; top: 47px;" class="menu-icon" src="./Images/Icons/Obras.png">
                    </a>
                </li>

               	<li><a href="Parametrizacion.php">
                        Parametrización <br clear="right">
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

               	<li><a href="Liquidaciones.php">
                        Liquidaciones
                        <img style="position: absolute; left: 180px; top: 250px;" class="menu-icon" src="./Images/Icons/Liquidaciones.png">
                    </a>
               	</li>

               	<li>
                    <a href="CerrarSesion.php">
                        <img style="position: absolute; left: 180px; top: 288px;" class="menu-icon" src="./Images/Icons/Exit.png">
                        Cerrar Sesión
                    </a>
               	</li>

            </ul>
        </div> <!--Sidebar-->



        <p class="Titulo">Menú Principal.</p>


        <a href="Obras.php"> 
            <button class="Btn Btn-GM" id="Btn-Ob"  name="Btn-Ob">
                <img class="Icon-Btn" src="./Images/Icons/Obras.png">
                <p class="Text-Btn">Obras</p>
            </button> 
        </a>

        <a href="Parametrizacion.php">
            <button class="Btn Btn-GM" id="Btn-Par" name="Btn-Parame">
                <img class="Icon-Btn" src="./Images/Icons/Parametrizacion.png">
                <p class="Text-Btn" >Parametrización </p>
            </button>
        </a>

        <a href="Contratistas.php">
            <button class="Btn Btn-GM" id="Btn-Con" name="Btn-Contratistas">
                <img class="Icon-Btn" src="./Images/Icons/Contratistas.png">
                <p class="Text-Btn">Contratistas</p> 
            </button>
        </a>

        <a href="Contratos.php">
            <button class="Btn Btn-GM"  id="Btn-Tra" name="Btn-Contratos">
                <img class="Icon-Btn" src="./Images/Icons/Contratos.png">
                <p class="Text-Btn">Contratos</p>
            </button>
        </a>

        <a href="Auditorias.php">
            <button class="Btn Btn-GM"  id="Btn-Aud" name="Btn-Audi">
                <img class="Icon-Btn" src="./Images/Icons/Auditorias.png">
                <p class="Text-Btn">Auditorias</p>
            </button>
        </a>

        <a href="Liquidaciones.php">
            <button class="Btn Btn-GM"  id="Btn-Liq" name="Btn-Liqui">
                <img class="Icon-Btn" src="./Images/Icons/Liquidaciones.png">
                <p class="Text-Btn">Liquidaciones</p>
            </button>


            <a href="#">
                <button class="Btn ManUsu" name="Btn-ManualUsu">
                    <img src="Images/Icons/ManualUsu.png"
                         id="btn-abrir-popupM"  
                         class="btn-abrir-popupM"  width="40px" height="35px" title="Ver Manual De Usuario">

                </button>
            </a>

            <div class="overlayM" id="overlayM"> <!-- Overlay Manual Usuario -->

                <div class="popupM" id="popupM"> <!-- Popup Manual Usuario-->

                    <a id="btn-cerrar-popupM" class="btn-cerrar-popupM" href="#" ><img src="Images/Icons/Cerrar.png" style="width: 40px; height: 40px;"></a>


                    <div class="ManualUsu">

                        <h1>Manual De Usuario</h1>
                        <p>Wenas</p>


                    </div> <!--Crear Obra-->

                    </form>
                </div> <!--popup Manual Usuario-->
            </div> <!--Overlay Manual Usuario-->


            <a href="#">
                <button class="Btn ManTec" name="Btn-ManualTec">
                    <img src="Images/Icons/ManualTec.png"
                         id="btn-abrir-popupMT"  
                         class="btn-abrir-popupMT"  width="40px" height="35px" title="Ver Manual Del Tecnico">

                </button>
            </a>

            <div class="overlayMT" id="overlayMT"> <!-- Overlay Manual Del Tecnico-->

                <div class="popupMT" id="popupMT"> <!-- Popup Manual Del Tecnico-->

                    <a id="btn-cerrar-popupMT" class="btn-cerrar-popupMT" href="#" ><img src="Images/Icons/Cerrar.png" style="width: 40px; height: 40px;"></a>


                    <div class="ManualTec">

                        <h1>Manual Del Tecnico</h1>
                        <p>Wenas Noches :v</p>


                    </div> <!--Manual Del Tecnico-->

                    </form>
                </div> <!--popup Manual Del Tecnico-->
            </div> <!--Overlay Manual Del Tecnico-->
            <footer>
                <p> © 2019 By OP. </p>
            </footer>
            <script src="Js/popupManualTec.js"></script>        
            <script src="Js/popupManualUs.js"></script>
            <script src="js/abrir.js"></script> 
    </body>
</html>