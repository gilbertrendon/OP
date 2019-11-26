<?php
session_start();
if ($_SESSION['CodUsu'] == 'Admin' || $_SESSION['TipoUsu'] == 1) {
    echo '<script>alert(' . $_SESSION['CodUsu'] . ')</script>';
} else {
    echo '<script>alert(' . $_SESSION['CodUsu'] . ')</script>';

    $conexion = new mysqli("localhost", "root", "", "op");

    if ($conexion->connect_errno) {
        echo "Error de conexion de la base datos" . $conexion->connect_error;
        exit();
    }
    $sql = "select * from obras";
    $sql2 = "select * from contratistas";
    $resultado = $conexion->query($sql);
    $resultado2 = $conexion->query($sql2);
    ?>
    <!--Como Tipo De Usuario #2 (Operador)-->
    <html>
        <head>
            <title>Obras</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="Styles/Style-G.css">
            <link rel="stylesheet" type="text/css" href="Styles/Style-Ob.css">
            <link rel="icon" href="Images/Ico></script>        

                  </head>ns/Logo.png">
            <script src="Js/jquery3.4.1.js"></script>        

        </head>
        <body>
            <header>
                <a href="MenuP.php" title="Volver Al Menú Principal."> <img class="Logo" src="./Images/Icons/Logo.png"> </a>
                <img class="menu-bar" src="./Images/Icons/IconMenu.png">
                <p class="TitleOb">OBRAS</p>
            </header>

            <div class="sidebar general">
                <h2>Menú</h2>
                <ul>
                    <li><a href="Parametrizacion.php">
                            Parametrización <br clear="right">
                            <img style="position: absolute; left: 180px; top: 52px;" class="menu-icon" src="./Images/Icons/Parametrizacion.png">
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

            <input type="text" class="myInput" onkeyup="myFunction()" 
                   placeholder="Busqueda por Nombre de la Obra" title="Ingrese Nombre de la Obra a buscar">

            <a href="Obras.php">  
                <button class="Btn Actu">
                    <img src="Images/Icons/Actualizar.png"  width="40" height="35px" title="Actualizar">
                </button>
            </a>

            <a href="#">
                <button class="Btn Añ" name="Btn-CrearOb">
                    <img src="Images/Icons/Agregar.png"
                         id="btn-abrir-popup2"  
                         class="btn-abrir-popup2"  width="40px" height="35px" title="Crear Una Nueva Obra">
                </button>
            </a>


            <div class="Tbl"> <!--Tbl-->
                <table class="Tbls">

                    <tr style="position: relative;">
                        <th># Obra</th>
                        <th>Nombre Obra</th>
                        <th>Nombre contratista</th>
                        <th>Direccion</th>
                        <th>Estado</th>
                        <th>Valor Desface 1</th>
                        <th>Valor Desface 2</th>
                        <th>Valor Desface 3</th>
                        <th>Liquidar obra</th>

                    </tr>

                    <?php
                    while ($datos = $resultado->fetch_array()) {
                        $filaSql = 'SELECT * from op.contratistas where IdContratista = ' . $datos['IdContratista'];
                        $fila = $conexion->query($filaSql);
                        if ($fila != null) {
                            $fnombre = $fila->fetch_array();
                            $nombre = $fnombre["Nombres"];
                            $apellido = $fnombre["Apellidos"];
                        } else {
                            $nombre = "No";
                            $apellido = "asignado";
                        }

                        //$nombre = $fnombre["Nombres"];
                        ?>
                        <tr>
                            <td><?php echo $datos["IdObra"] ?></td>
                            <td><?php echo $datos["NombreObra"] ?></td>
                            <td><?php echo $nombre, " ", $apellido ?></td>
                            <td><?php echo $datos["DireccionOb"] ?></td>
                            <td><?php echo $datos["Estado"] ?></td>
                            <td><?php echo $datos["VDesf1"] ?></td>
                            <td><?php echo $datos["VDesf2"] ?></td>
                            <td><?php echo $datos["VDesf3"] ?></td>
                            <td style="text-align:center"><a href="_liquidacion.php?IdObraL=<?php echo $datos["IdObra"] ?>" 
                                                             > <img width="40px" height="40px" 
                                                       src="Images/Icons/Terminar.png" title="Liquidar"></a></td>
                        </tr>

                        <?php
                    }
                    ?>
                </table>
            </div> <!--Tbl-->

            <div class="overlay2" id="overlay2"> <!-- Overlay2 -->

                <div class="popup2" id="popup2"> <!-- Popup2-->

                    <a id="btn-cerrar-popup2" class="btn-cerrar-popup2" href="#" ><img src="Images/Icons/Cerrar.png" style="width: 40px; height: 40px;"></a>
                    <form action="form_ob.php" method="post" class="smart-green" ENCTYPE="multipart/form-data"> 

                        <div class="CrearOb">

                            <h1>Crear Nueva Obra</h1>

         <!--<input id="Camp1" type="text" name="IdObra" placeholder="ID Obra" readonly="readonly">--> 
                            <input id="Camp2" type="text" name="NombreObra" placeholder="Nombre De La Obra" required>
                            <input id="Camp3" type="text" name="DireccionOb" placeholder="Direccion De La Obra" required>
                            <p class="PContr">Contratista(s).</p>
                            <select class="Slc-C" id="Contratistas" name="Contratista">
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

                            <p class="Fech1"> Fecha De Inicio:</p>
                            <input class="SlcFe1" type="date" name="FecInicio" required>

                            <p class="Fech2"> Fecha De Finalizacion:</p>
                            <input class="SlcFe2" type="date" name="FecFin" required>
                            <p class="PContr">Costo</p>
                        <input id="Camp01" type="text" name="Costo" placeholder="Costo estimado" required>
                        </div> <!--Crear Obra-->

                        <label>
                            <input id="Btn-Crear" type="submit" class="Btn Btn-Save" name="Btn-Crear" value="Crear" onclick="bloqued()"/> 
                        </label>  
                    </form>
                </div> <!--popup2-->
            </div> <!--Overlay2-->

            <footer>
                <p> © 2019 By OP. </p>
            </footer>

        <!--<script src="Js/pest.js"></script>-->
            <script src="Js/popupOb.js"></script>
            <script src="Js/abrir.js"></script>
        </body>
    </html>


    <?php
    echo '';
    die();
}
// ------------------------------------------------------Como Tipo De Usuario #1 (Admnistrador)----------------------------------------------------

$conexion = new mysqli("localhost", "root", "", "op");

if ($conexion->connect_errno) {
    echo "Error de conexion de la base datos" . $conexion->connect_error;
    exit();
}
$sql = "select * from obras";
$sql2 = "select * from contratistas";
$resultado = $conexion->query($sql);
$resultado2 = $conexion->query($sql2);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Obras</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Styles/Style-G.css">
        <link rel="stylesheet" type="text/css" href="Styles/Style-Ob.css">
        <link rel="icon" href="Images/Icons/Logo.png">
        <script src="Js/jquery3.4.1.js"></script>        

    </head>
    <body>
        <header>
            <a href="MenuP.php" title="Volver Al Menú Principal."> <img class="Logo" src="./Images/Icons/Logo.png"> </a>
            <img class="menu-bar" src="./Images/Icons/IconMenu.png">
            <p class="TitleOb">OBRAS</p>
        </header>

        <div class="sidebar general">
            <h2>Menú</h2>
            <ul>
               	<li><a href="Parametrizacion.php">
                        Parametrización <br clear="right">
                        <img style="position: absolute; left: 180px; top: 52px;" class="menu-icon" src="./Images/Icons/Parametrizacion.png">
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
                    <a href="Index.php">
                        <img style="position: absolute; left: 180px; top: 250px;" class="menu-icon" src="./Images/Icons/Exit.png">
                        Cerrar Sesión
                    </a>
               	</li>

            </ul>
        </div> <!--Sidebar-->

        <input type="text" class="myInput" onkeyup="myFunction()" 
               placeholder="Busqueda por Nombre de la Obra" title="Ingrese Nombre de la Obra a buscar">

        <a href="Obras.php">  
            <button class="Btn Actu">
                <img src="Images/Icons/Actualizar.png"  width="40" height="35px" title="Actualizar">
            </button>
        </a>

        <a href="#">
            <button class="Btn Añ" name="Btn-CrearOb">
                <img src="Images/Icons/Agregar.png"
                     id="btn-abrir-popup2"  
                     class="btn-abrir-popup2"  width="40px" height="35px" title="Crear Una Nueva Obra">
            </button>
        </a>


        <div class="Tbl"> <!--Tbl-->
            <table class="Tbls">

                <tr style="position: relative;">
                    <th># Obra</th>
                    <th>Nombre Obra</th>
                    <th>Nombre contratista</th>
                    <th>Direccion</th>
                    <th>Estado</th>
                    <th>Valor Desface 1</th>
                    <th>Valor Desface 2</th>
                    <th>Valor Desface 3</th>
                    <th>Acciones</th>
                </tr>

                <?php
                while ($datos = $resultado->fetch_array()) {
                    $filaSql = 'SELECT * from op.contratistas where IdContratista = ' . $datos['IdContratista'];
                    $fila = $conexion->query($filaSql);
                    if ($fila != null) {
                        $fnombre = $fila->fetch_array();
                        $nombre = $fnombre["Nombres"];
                        $apellido = $fnombre["Apellidos"];
                    } else {
                        $nombre = "No";
                        $apellido = "asignado";
                    }

                    //$nombre = $fnombre["Nombres"];
                    ?>
                    <tr>
                        <td><?php echo $datos["IdObra"] ?></td>
                        <td><?php echo $datos["NombreObra"] ?></td>
                        <td><?php echo $nombre, " ", $apellido ?></td>
                        <td><?php echo $datos["DireccionOb"] ?></td>
                        <td><?php echo $datos["Estado"] ?></td>
                        <td><?php echo $datos["VDesf1"] ?></td>
                        <td><?php echo $datos["VDesf2"] ?></td>
                        <td><?php echo $datos["VDesf3"] ?></td>
                        <td style="text-align:center"><a href="modal.php?id=<?php echo $datos['IdObra'] ?>&IdContratista=<?php echo $datos['IdContratista'] ?>" 
                                                         target="_blank" > <img width="40px" height="40px" 
                                                   src="Images/Icons/Visualizar.png" title="Más Informacion de la Obra"></a></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div> <!--Tbl-->


        <!--    <div class="overlay" id="overlay"> Overlay
        
          <div class="popup" id="popup"> Popup
        
            <a id="btn-cerrar-popup" class="btn-cerrar-popup" href="#" ><img src="Images/Icons/Cerrar.png" style="width: 40px; height: 40px;"></a>
        
            <h3>Informacion De La Obra</h3>
        
              <div class="wrap"> wrap
        
                  <ul class="tabs">
        
                    <li><a href="#tab1"><span><img src="Images/Icons/Editar.png"
                    style="width: 30px;"></span>
                    <span class="tab-Text">Editar Obra</span></a></li>
        
                    <li><a href="#tab2"><span><img src="Images/Icons/Multas.png"
                    style="width: 30px;">
                   </span> <span class="tab-Text">Multas</span></a></li>
        
                  </ul>
        
              <div class="secciones">
                <article class="tab1" id="tab1">
                  
                  <table class="Tbls" >
                            
                    <tr style="position: relative;">
                      <th># Contrato</th>
                        <th>Nombre</th>
                        <th>Celular</th>
                        <th>correo</th>
                        <th>Direccion</th>
                        <th>Estado</th>
                    </tr>
        
                </table>
        
                </article>
        
                <article class="tab2" id="tab2">
                  <p>Noches</p>
                </article>
              </div> Secciones
        
               </div> wrap 
          </div> popup
        </div> Overlay-->


        <div class="overlay2" id="overlay2"> <!-- Overlay2 -->

            <div class="popup2" id="popup2"> <!-- Popup2-->

                <a id="btn-cerrar-popup2" class="btn-cerrar-popup2" href="#" ><img src="Images/Icons/Cerrar.png" style="width: 40px; height: 40px;"></a>
                <form action="form_ob.php" method="post" class="smart-green" ENCTYPE="multipart/form-data"> 

                    <div class="CrearOb">

                        <h1>Crear Nueva Obra</h1>

 <!--<input id="Camp1" type="text" name="IdObra" placeholder="ID Obra" readonly="readonly">--> 

                        <input id="Camp2" type="text" name="NombreObra" placeholder="Nombre De La Obra" required>
                        <input id="Camp3" type="text" name="DireccionOb" placeholder="Direccion De La Obra" required>
                        <p class="PContr">Contratista(s).</p>
                        <select class="Slc-C" id="Contratistas" name="Contratista">
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

                        <p class="Fech1"> Fecha De Inicio:</p>
                        <input class="SlcFe1" type="date" name="FecInicio" required>

                        <p class="Fech2"> Fecha De Finalizacion:</p>
                        <input class="SlcFe2" type="date" name="FecFin" required>
                        <p class="PContr">Costo</p>
                        <input id="Camp01" type="text" name="Costo" placeholder="Costo estimado" required>

                    </div> <!--Crear Obra-->

                    <label>
                        <input id="Btn-Crear" type="submit" class="Btn Btn-Save" name="Btn-Crear" value="Crear" onclick="bloqued()"/> 
                    </label>  
                </form>
            </div> <!--popup2-->
        </div> <!--Overlay2-->

        <footer>
            <p> © 2019 By OP. </p>
        </footer>

<!--<script src="Js/pest.js"></script>-->
        <script src="Js/popupOb.js"></script>
        <script src="Js/abrir.js"></script>
    </body>
</html>