<html>
<head>
	<link href="estilos/principal.css" rel="stylesheet">
</head>
<body style="background:#DAF6FE">
<form id="frmPrincipal" method="POST">  <!-- POST | GET -->

<center>	

	<table border="0" width="80%" cellspacing="0" cellpadding="5" class="sombreado">
		<tr>
			<td colspan="3" bgcolor="navy">
				<table width="100%" borde="0">
					<tr>
						<td align="left" width="20%">
							<img src="imagenes/computerBusiness.jpg" width="130px" height="80px"> 
						</td>
						<td align="middle" width="60%">
							<font class="fontTitulo" >
								<b>Captura Datos</b>
							</font>
						</td>
						<td align="right" width="20%">
							<font class="fontEtiqueta">
								<img src="imagenes/usuario.png" width="30px" height="30px" class="redondeo"> 
								<br>				
								Fecha:   <b>dd/mm/aaaa</b>
								<br>
								Usuario: <b>(nombre)</b>
							</font>													
						</td>				

					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td align="left" width="20%" bgcolor="#14BDE9">
				<br><br>
				<a href="http://www.000webhost.com" target="_self" class="fontVinculo">000webhost</a>
				<br><br>
				<a href="http://www.azure.com" target="_self" class="fontVinculo">azure</a>
				<br><br>
				<a href="http://www.amazon.com" target="_self" class="fontVinculo">amazon</a>
				<br><br>
			</td>
			
			<td bgcolor="white">

				<table border="0" width="100%">
				<tr>
					<td align="middle" colspan="2">
						<br>
						<font class="fontTitulo3" size="5" color="black"><b>Seleccion del Servicio</b></font>
						<br><br>
					</td>
				</tr>
				<tr>
					<td align="left" >

						<font class="fontTitulo2">Nombre:</font>
					</td>
					<td align="left">

						<input type="text" id="txtnombre" name="txtnombre">
					</td>
				</tr>
				<tr>
					<td align="left">
						<br>
							<br>
						<font class="fontTitulo2">Servicio:</font>
					</td>
					<td align="left" >
						<br>
							<br>
						<select size="1" id="selServicio" name="selServicio" >
							<option value="Internet Banda Ancha 2G" selected>Internet Banda Ancha 2G</option>
							<option value="IBA3G" >Internet Banda Ancha 3G</option>
							<option value="IBA4G" >Internet Banda Ancha 4G</option>
							<option value="I128" >Internet Dedicado 128kbps</option>
							<option value="IDADSL" >Internet Dedicado ADSL</option>
						</select>
					</td>
				</tr>
				<tr>
					<td align="left">
						<br>
							<br>
						<font class="fontTitulo2">Cobertura por Estado:</font>
					</td>
					<td align="left">
						<br>
							<br>
						<select size="1" id="selCobertura" name="selCobertura">

							<option value="Aguascalientes" selected>Aguascalientes</option>
							<option value="Baja California Norte" >Baja California Norte</option>
							<option value="Baja California Sur" >Baja California Sur</option>
							<option value="Campeche" >Campeche</option>
							<option value="Estado de Mexico" >Estado de Mexico</option>
							<option value="Guanajuato" >Guanajuato</option>
							<option value="Hidalgo" >Hidalgo</option>
							<option value="Michoacan" >Michoacan</option>
							<option value="Morelia" >Morelia</option>
						</select>
					</td>
				</tr>
				<tr>
					<td align="left">
						<font class="fontTitulo2">Forma de Pago Mensual:</font>
					</td>
					<td align="left">
						<font class="fontVin">
						<br>
						<br>
						<input type="radio" id="rbtPago" name="rbtPago" value="Efectivo" checked>Efectivo</option>
						<br>
						<input type="radio" id="rbtPago1" name="rbtPago" value="Cheque" >Cheque</option>
						<br>
						<input type="radio" id="rbtPago2" name="rbtPago" value="Deposito bancario" >Deposito Bancario</option>
						</font>
					</td>
				</tr>
				<tr>
					<td align="left">
						<font class="fontTitulo2">Tipo de dispositivo:</font>
					</td>
					<td align="left">
						<font class="fontVin">
							<br>
						<br>
							<input type="radio" id="rbtDispositivo" name="rbtDispositivo" value="USB ZTe" checked>USB ZTe</option>
							<br>
							<input type="radio" id="rbtDispositivo1" name="rbtDispositivo" value="USB Huawei" >USB Huawei</option>
							<br>
							<input type="radio" id="rbtDispositivo2" name="rbtDispositivo" value="Access Point WiFi" >Access Point WiFi</option>
						</font>
					</td>
				</tr>
				<tr>
					<td align="left">
						<font class="fontTitulo2">Aditamentos extra:</font>
					</td>
					<td align="left">
						<font class="fontVin">
							<br>
						<br>
							<input type="checkbox" id="chkExtra" name="chkExtra1[]" value="Cable RJ45" checked>Cable RJ45</checkbox>
							<br>
							<input type="checkbox" id="chkExtra1" name="chkExtra1[]" value="WebCam" >WebCam</checkbox>
							<br>
							<input type="checkbox" id="chkExtra2" name="chkExtra1[]" value="Microfono" >Microfono</checkbox>
						</font>
					</td>
				</tr>
				<tr>
					<td align="middle" colspan="2">
						<br><br>
						<input type="reset" value="limpiar">&nbsp;&nbsp;
						<input type="button" value="Registrar Servicio" name="enviar" onclick="doSubmit();">
						<br><br>
					</td>
				</tr>
				</table>
			
			</td>
			
			<td align="middle" width="30%" bgcolor="#14BDE9">
			<?php 
					// $_POST CONTENEDOR DE TODOS LOS DATOS AL HACER SUBMIT
					if(empty($_POST)){
					echo "Llene los campos solicitados " ;
					$dato="0";
				}
				else{
					$dato=$_POST["txtnombre"];
					echo "<br>  El valor recibido es:  <br> Nombre: ".$dato."<br>";
				}

						if (isset($_POST['selServicio'])) {
						$servicio = $_POST['selServicio'];
						echo "Servicio:   " .$servicio."<br>";
						}else{
							$servicio = "";
						}


						if (isset($_POST['selCobertura'])) {
						$cobertura = $_POST['selCobertura'];
						echo "Cobertura por Estado:   " .$cobertura."<br>";
						}else{
							$cobertura = "";
						}	

					if (isset($_POST['rbtPago'])) {
						$pago = $_POST['rbtPago'];
						echo "Forma de pago:   " .$pago."<br>";
						}else{
							$pago = "";
						}	

						if (isset($_POST['rbtDispositivo'])) {
						$dispositivo = $_POST['rbtDispositivo'];
						echo "Tipo de dispositivo:   " .$dispositivo."<br>";
						}else{
							$dispositivo = "";
						}	

				if (isset($_POST['chkExtra1'])) {
					foreach($_POST['chkExtra1'] as $seleccion) {
					echo "<p>".$seleccion ."</p>";
					}
				}

				?>				
			</td>
		</tr>
		<tr>
			<td colspan="3" align="middle" bgcolor="navy">
				<font class="fontEtiqueta">
					derechos reservados
				</font>
				&nbsp;
				<a href="http://www.facebook.com" target="_blank"><img src="imagenes/facebook.jpg" class="imgRedes"></a> 				
				&nbsp;
				<a href="http://www.instagram.com" target="_blank"><img src="imagenes/instagram.png" class="imgRedes"></a> 				
				&nbsp;
				<a href="http://www.twitter.com" target="_blank"><img src="imagenes/twitter.png" class="imgRedes"></a> 				
			</td>
		</tr>	
	</table>
</center>

</form>
</body>
</html>

<!-- BLOQUE DE CÓDIGO JAVASCRIPT (cliente)  -->

<script language="javascript">
function doSubmit(){

objText = document.getElementById("txtnombre");
alert("Nombre del Servicio: " + objText.value );

objText = document.getElementById("selServicio");
alert("Servicio seleccionado: " + objText.value );

objText = document.getElementById("selCobertura");
alert("Cobertura seleccionada: " + objText.value );

// VALIDACIONES DE LOS  RADIOS ...

// VALIDACION PARA HACER SUBMIT ...
objText = document.getElementById("txtnombre");
if(objText.value == "")
   alert("No has capturado el nombre del Servicio ...");
else
   document.forms["frmPrincipal"].submit();
   // AL HACER SUBMIT, LA PAGINA SE ENVIA AL SERVIDOR, PARA QUE EN PHP PUEDAS ACCEDER A LOS VALORES DE LOS CONTROLES HTML ...
   // CHECA EL CODIGO DE PHP HASTA ARRIBA, OBTENDRA EL VALOR DE UN CONTROL Y ASIGNARLO A UNA VARIABLE DE PHP ...

var rd1 = document.getElementById("rbtPago");
var rd2 = document.getElementById("rbtPago1");
var rd3 = document.getElementById("rbtPago2");

if (rd1.checked==true)
	alert("El tipo de pago es: " + rd1.value);
else if(rd2.checked==true)
	alert("El tipo de pago es: " + rd2.value);
else if (rd3.checked==true) 
	alert("El tipo de pago es: " + rd3.value);


var r1 = document.getElementById("rbtDispositivo");
var r2 = document.getElementById("rbtDispositivo1");
var r3 = document.getElementById("rbtDispositivo2");
if (r1.checked==true)
	alert("Tipo de dispositivo: " + r1.value);
else if(r2.checked==true)
	alert("Tipo de dispositivo: " + r2.value);
else if(r3.checked==true)
	alert("Tipo de dispositivo: " + r3.value);

var a = document.getElementById("chkExtra");
var b = document.getElementById("chkExtra1");
var c = document.getElementById("chkExtra2");
	
	 if (a.checked == true && b.checked == true && c.checked == true) 
	 	alert("Aditamentos extra: " + a.value + ", " + b.value + ", " + c.value);
	 else if (a.checked == true && b.checked == true) 
	 	alert("Aditamentos extra: " + a.value + ", " + b.value);
	 else if (a.checked == true && c.checked == true) 
	 	alert("Aditamentos extra:" + a.value + ", " + c.value);
	 else if (b.checked == true && c.checked == true) 
	 	alert("Aditamentos extra: " + b.value + ", " + c.value);
	 else if (a.checked == true) 
	 	alert("Aditamentos extra: " + a.value );
	 else if (b.checked == true ) 
	 	alert("Aditamentos extra: " + b.value);
	 else if (c.checked == true ) 
	 	alert("Aditamentos extra: " + c.value );

}


</script>








