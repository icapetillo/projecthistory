<!DOCTYPE html>
<head>
	<!--meta-->
	<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	
	<!--css-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<!--javascript-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</head>

<body>	
	<div id="welcome">
		<div id="welcome_left">
			<div id="welcome_pic"><img src="img/pic.jpg"></div>
			<div id="welcome_text">
				<h2>Bienvenido</h2> 
				Por favor proporcione sus datos de ingreso para acceder al sistema.<br>
				<div class="cabinet_logo_small">
					<img src="img/cabinet_logo.png">
				</div>
			</div>
		</div>
		<div id="welcome_right">
			<div id="info_escuela">				
				<center><img src="img/school1.png" border="0" align="absmiddle"></center>			
			</div>
			<div id="form_login">
				<form>
					<table width="350px" border="0">
						<tr height="50px">
							<td width="150px" align="right">Nombre de Usuario: </td>
							<td width="200px"><input type="text" placeholder="escriba su nombre de usuario" class="inputdata"></td>
						</tr>
						<tr height="50px">
							<td width="150px" align="right">Contraseña:</td>
							<td width="200px"><input type="password" placeholder="escriba su contraseña" class="inputdata"></td>
						</tr>
						<tr height="50px">
							<td colspan="2" align="right">
								<a href="main.php" class="loginbutton">Iniciar sesión</a>
							</td>							
						</tr>
						<tr height="50px">
							<td colspan="2" align="center">
								<a href="#" class="enlaces">¿Usuario nuevo? ¡Regístrese aquí!</a><br>
								<a href="#" class="enlaces">¿Olvidó su nombre de usuario o contraseña?</a>								
							</td>							
						</tr>
						<tr height="50px">
							<td width="150px" align="left"><a href="#" class="enlaces mini">Manual en línea</a></td>
							<td width="200px" align="right"><a href="#" class="enlaces mini">Comentarios y sugerencias</a></td>
						</tr>						
					</table>				
				</form>
				<div align="center" style="border-bottom:1px silver solid;"><a href="http://www.geniusworksmexico.com" target="_blank" class="smalltext">GeniusWorks, 2012</a></div>
			</div>			
		</div>
	</div>
</body>
</html>