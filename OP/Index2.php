<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Wenas</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<!-- <script src="https://cdn.rawgit.com/matmancini/html5form/master/dist/html5form.min.js"></script> -->
<link rel="stylesheet" href="css-form/form_style.css">
<script src="jquery-ui/jquery-ui.min.js"></script>
<script src="validaciones.js"></script>
<script src="jquery.min.js"></script>     
<script src="validCampoFranz.js"></script>
<script type="text/javascript">
            $(function(){
                //Para escribir solo letras
				$('#nombre').validCampoFranz('" "abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZ');
				$('#apellidos').validCampoFranz('" "abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZ');
				$('#lnacimiento').validCampoFranz('" "abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZ');
				//$('#fnacimiento').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéiouABCDEFGHIJKLMNÑOPQRSTUVWXYZ');
				$('#sexo').validCampoFranz('" "abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZ');
				$('#factorrh').validCampoFranz('" "abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZ');
				$('#gsanguineo').validCampoFranz('" "abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZ');
				$('#tipodocumento').validCampoFranz('" "abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZ');
				$('#gsanguineo').validCampoFranz('" "abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZ');
				$('#ciudadres').validCampoFranz('" "abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZ');
				$('#facultadorigen').validCampoFranz('" "abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZ');
                $('#progacademico').validCampoFranz('" "abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZ');
				$('#sede').validCampoFranz('" "abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZ');
				$('#jefedepto').validCampoFranz('" "abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZ');
				$('#nombredestino').validCampoFranz('" "abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZ');
				$('#sededestino').validCampoFranz('" "abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZ');
				$('#facultaddestino').validCampoFranz('" "abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZ');
				$('#progacademico1').validCampoFranz('" "abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZ');
				$('#semestreAcademico').validCampoFranz('" "abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZ');
				$('#udean1').validCampoFranz('" "abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZ');
				$('#udean2').validCampoFranz('" "abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZ');
				$('#udean3').validCampoFranz('" "abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZ');
				$('#udean4').validCampoFranz('" "abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZ');
				$('#udean5').validCampoFranz('" "abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZ');
				$('#udean6').validCampoFranz('" "abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZ');
				$('#anfitrionan1').validCampoFranz('" "abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZ');
				$('#anfitrionan2').validCampoFranz('" "abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZ');
				$('#anfitrionan3').validCampoFranz('" "abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZ');
				$('#anfitrionan4').validCampoFranz('" "abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZ');
				$('#anfitrionan5').validCampoFranz('" "abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZ');
				$('#anfitrionan6').validCampoFranz('" "abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZ');
				$('#direccionres').validCampoFranz('" "abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZ0123456789#-_');
				//Para escribir solo numeros
                $('#tel').validCampoFranz('0123456789'); 
				$('#identificacion').validCampoFranz('0123456789');
				$('#cel').validCampoFranz('0123456789');
				$('#nivel').validCampoFranz('0123456789');
				$('#proacumulado').validCampoFranz('0123456789.');
				$('#teljefe').validCampoFranz('0123456789');
				$('#udeac1').validCampoFranz('0123456789');
				$('#udeac2').validCampoFranz('0123456789');
				$('#udeac3').validCampoFranz('0123456789');
				$('#udeac4').validCampoFranz('0123456789');
				$('#udeac5').validCampoFranz('0123456789');
				$('#udeac6').validCampoFranz('0123456789');
				$('#anfitrionac1').validCampoFranz('0123456789');
				$('#anfitrionac2').validCampoFranz('0123456789');
				$('#anfitrionac3').validCampoFranz('0123456789');
				$('#anfitrionac4').validCampoFranz('0123456789');
				$('#anfitrionac5').validCampoFranz('0123456789');
				$('#anfitrionac6').validCampoFranz('0123456789');
				//$('#teljefe').validCampoFranz('0123456789');
				 
            });
</script>  
<script>
function bloqueo(){
	}
</script>

<style>
body{
  background-color:#CCC;
}

#div_form{
}

#div_fondo{
  background-color:#CCC;
}

#div_cuerpo{
  width:80%;
  margin: 50px auto;
  max-width:550px;
  -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);  
}

#encabezado{
  max-width:550px;
  margin: auto; 
}
</style>
</head>

<body>
<div id="div_fondo">
<div id="div_cuerpo">
<div align="center" id="encabezado">
    <img src="imagenes/Encabezado.jpg"  width="100%" border="0"/>
</div> 
<div id="div_form">

<form action="form_c.php" method="post" class="smart-green" ENCTYPE="multipart/form-data">
    <h1>
    <sub>Solicitud de movilidad estudiantil</sub>
    </h1> 
    <ul>
  	<sub>REQUISITOS</sub>
    <br></br>
	<li>Estar matriculado, por lo menos en tercer (o en segundo año en el caso de programas anuales).</li>
	<li>No estar en prueba académica, ni matricula condicional, ni tener en curso ninguna sanción académica o disciplinaria.</li>
	<li>Tener un promedio acumulado mínimo de 3.5.</li>
	</ul>
    
    <br></br>
	
    <strong>DATOS PERSONALES: </strong>
          
    <label>
        <span>Nombre(s):</span>
        <input type="text" name="nombre(s)" value="" maxlength="100" id="nombre" placeholder="Nombre(s)" required /> 
    </label>
   
    <label> 
        <span>Apellidos:</span>
        <input id="apellidos" type="text" name="apellidos" placeholder="Apellidos" required />
    </label>
    
    <label> 
        <span>Contraseña:</span>
        <input id="Contrasena" type="text" name="Contrasena" placeholder="Contrasena" required />
    </label>
    
    <label> 
        <span>Correo:</span>
        <input id="Correo" type="email" name="Correo" placeholder="Correo" required />
    </label>
    
    <label> 
        <span>Documento Identidad:</span>
        <input id="DocId" type="text" name="DocId" placeholder="Documento Identidad" required />
    </label>
    
     <label> 
        <span>Tipo Usuario:</span>
        <input id="TipoUsu" type="text" name="TipoUsu" placeholder="TipoUsu" required />
    </label>
    
    
     
<!--    <strong>DATOS DE LA UNIVERSIDAD DE ANTIOQUIA: </strong>
  
     <label> 
     <span>Facultad:</span>
     <input id="facultadorigen" type="text" name="facultadorigen" placeholder="Facultad" required />
     </label>
     
     <label> 
     <span>Programa académico:</span>
     <input id="progacademico" type="text" name="progacademico" placeholder="Programa académico" required />
     </label>
     
     <label> 
     <span>Sede:</span>
     <input id="sede" type="text" name="sede" placeholder="Sede" required />
     </label>
     
      <label> 
        <span>Nivel académico:</span>
        <input id="nivel" type="text" name="nivel" placeholder="Nivel" required onChange="validacionNumero(this.value)"/>
    </label>
     
     <label> 
     <span>Promedio acumulado:</span>
     <input id="proacumulado" type="text" name="proacumulado" placeholder="Promedio acumulado" required onChange="validacionNumero(this.value)"/>
     </label>
     
     <label> 
     <span>Jefe de departamento:</span>
     <input id="jefedepto" type="text" name="jefedepto" placeholder="Jefe de departamento" onChange="validacionTexto(this.value)" required />
     </label>
     
     <label> 
     <span>Teléfono del jefe:</span>
     <input id="teljefe" type="text" name="teljefe" placeholder="Teléfono del jefe" required onChange="validacionNumero(this.value)"/>
     </label>
     
     <label> 
     <span>E-mail del jefe:</span>
     <input id="emailjefe" type="email" name="emailjefe" placeholder="Correo electrónico del jefe" required />
     </label>
     <br></br>
     <strong>DATOS DE LA INSTITUCIÓN DE DESTINO: </strong>
     <br></br>
     <label> 
     <span>Nombre:</span>
     <input id="nombredestino" type="text" name="nombredestino" placeholder="Nombre" onChange="validacionTexto(this.value)" required />
     </label>

     <label> 
     <span>Sede:</span>
     <input id="sededestino" type="text" name="sededestino" placeholder="Sede de destino" onChange="validacionTexto(this.value)" required />
     </label>
     
     <label> 
     <span>Facultad:</span>
     <input id="facultaddestino" type="text" name="facultaddestino" placeholder="Facultad de destino" onChange="validacionTexto(this.value)" required />
     </label>
     
     <label> 
     <span>Programa académico:</span>
     <input id="progacademico1" type="text" name="progacademico1" placeholder="Programa académico" onChange="validacionTexto(this.value)" required />
     </label>
     <br></br> 
     <Strong>ASIGNATURAS Y SEMESTRE ACADÉMICO</Strong>
   	
   
   
    
   
-->    <label>
        <span>&nbsp;</span> 
        <input type="submit" class="button" value="Enviar" onclick="bloqued()"/> 
    </label> 
  
    <ul>
	Finalmente, cualquier consulta o procedimiento excepcional, relacionados con el Convenio de 
	movilidad MARCO, será atendida en la oficina 16-332, en el teléfono 219 51 03, o en el correo 
	electrónico: movilidadnacional@udea.edu.co
	</ul> 
</form>
</div>
</div>
</div>
</body>
</html>