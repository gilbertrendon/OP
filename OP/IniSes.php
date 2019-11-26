<?php
//esion = $_SESSION['CodUsu'];
//if($codusu == null || $codusu = '') { 
//  echo 'Acceso NO Permitido';
//die();
//}
?>



<!DOCTYPE html>
<html>
    <head>
        <title>Inicio De Sesion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Styles/Style-G.css">
        <link rel="stylesheet" type="text/css" href="Styles/Style-IniSes.css">
        <link rel="icon" href="Images/Icons/Logo.png">
    </head>
    <body>
        <header>
            <img class="Logo" src="./Images/Icons/Logo.png">
        </header>
        <form action="form_inits.php" method="post" class="smart-green" ENCTYPE="multipart/form-data">
            <div class="LadoIzq">
                <p class="Text"> Codigo de Usuario: </p>
                <input id="usuario" type="text"  name="CodUsu" placeholder="Codigo de Usuario:" required>
                <p class="Text"> Contraseña: </p>
                <input id="Contrasena" type="password" name="Contraseña" placeholder="Contraseña:" required>

                <label>
                    <input id="Btn-IniSes" type="submit" class="Btn" name="Btn-IniSes" id="Btn-IniSes" value="Enviar" onclick="bloqued()"/> 
                </label> 



            </div>

        </form>
        <div class="LadoDer">

            <img src="./Images/Img1.jpeg">

        </div>


        <footer>
            <p> © 2019 By OP. </p>
        </footer>
    </body>
</html>
