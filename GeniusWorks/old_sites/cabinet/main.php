<!DOCTYPE html>
<head>
	<!--meta-->
	<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	
	<!--css-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<!--javascript-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</head>

<body>	
	<div id="top_bar">
		<div id="encabezado">
			<div id="cablogo">
				<img src="img/cabinet_logo.png" align="absmiddle">&nbsp;&nbsp;Future Foundation, A.C.
			</div>
			<div id="datosusuario">
				<img src="img/usuario.jpg" align="absmiddle" border="0">
				Israel Capetillo Sánchez
			</div>
		</div>
	</div>
	
	<div id="contenedor">
		<div id="lateral">			
			<div id="accordion">
				<dl class="accordion" id="slider">
					<dt><img src="img/catalogos.png" align="absmiddle">Catálogos</dt>
					<dd>
						<span>
							<ul class="submenu">						
								<li><a href="#"><img src="img/student.png" border="0" align="absmiddle"><div style="display:inline;margin-left:5px;">Alumnos</div></a></li>
								<li><a href="#"><img src="img/teacher.png" border="0" align="absmiddle"><div style="display:inline;margin-left:5px;">Maestros</div></a></li>
								<li><a href="#"><img src="img/books.png" border="0" align="absmiddle"><div style="display:inline;margin-left:5px;">Materias</div></a></li>
								<li><a href="#"><img src="img/groups.png" border="0" align="absmiddle"><div style="display:inline;margin-left:5px;">Grupos</div></a></li>
								<li><a href="#"><img src="img/aula.png" border="0" align="absmiddle"><div style="display:inline;margin-left:5px;">Aulas</div></a></li>
							</ul>
						</span>
					</dd>
					<dt>Acciones</dt>
					<dd>
						<span>To initialize an accordion use the following code:<br /><br />
							<code>
								var mySlider=new accordion.slider("mySlider");
								<br />mySlider.init("slider",0,"open");
							</code><br /><br />
							The init function takes 3 parameters: the id of the "dl", the location of the initially expanded section (optional) and the class for the active header (optional).
						</span>
					</dd>
					<dt>Licensing &amp; Support</dt>
					<dd>
						<span>This script is provided as-is with no warranty or guarantee. It is available at no cost for any project, non-commercial or commercial. Paid support is available by <a href="http://www.leigeber.com/contact/">clicking here</a>.</span>
					</dd>
				</dl>
			</div>

			<script type="text/javascript">	
				var mySlider=new accordion.slider("mySlider"); 
				mySlider.init("slider",0,"open");
			</script>
		</div>

		<div id="contenido">
			Hola
		</div>


	</div>
	
	<div id="pie">
		<div align="center"><a href="http://www.geniusworksmexico.com" target="_blank" class="smalltext">GeniusWorks, 2012</a></div>
	</div>
</body>
</html>