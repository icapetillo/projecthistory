<?
session_start();
if (!isset($_SESSION['name'])){		
	header('location: index.html');
	exit();
}
else{
	$username = $_SESSION["name"];
	$userid = $_SESSION["id"];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>TDBExplorer</title>

	<link href="assets/css/styles.css" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<meta http-equiv="cache-control" content="no-cache" />

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="main.php"><img src="assets/img/logo.jpg" class="main_logo" /></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<!-- <li class="nav-item active">
					<a class="nav-link">Blog <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Dropdown
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Disabled</a>
				</li> -->		
			</ul>
			
			<span class="navbar-text uname">
				<span class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<? session_start(); echo utf8_encode($username); ?>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="scripts/logout.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión</a></a>						
						</div>
				</span>
				<!-- <a href="scripts/logout.php" class="logout"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión</a>			 -->
			</span>
		</div>
	</nav>


	<div class="filemanager">
		<!-- <div>
			<img src="assets/img/logo_lr_vectorized.jpg">
		</div> -->

		<div class="search">
			<input type="search" placeholder="Buscar un archivo o carpeta..." />
		</div>

		<div class="breadcrumbs"></div>

		<ul class="data"></ul>

		<div class="nothingfound">
			<div class="nofiles"></div>
			<span>Carpeta vacía.</span>
		</div>
		
		<!--upload button-->
		<div id="upload" class="upload" data-toggle="modal" data-target="#modalSubirArchivo">		
			<a class="float">
				<i class="fa fa-cloud-upload my-float"></i>
			</a>
			<div class="label-container">
			<div class="label-text">Subir un archivo aquí</div>
			<i class="fa fa-play label-arrow"></i>
			</div>
		</div>


	</div>

	<footer>
		<input id="userid" type="hidden" value="<? echo $userid ?>">		
		<div>
			TDBExplorer - <span id="location"></span>			
			<span class="pull-right"><strong><a href="https://techdebatdb.blogspot.mx/" target="_blank">Blog</a></strong></span>
		</div>		
	</footer>

	<!-- Modal -->
	<div class="modal fade" id="modalSubirArchivo" tabindex="-1" role="dialog" aria-labelledby="modalSubirArchivoTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalSubirArchivoTitle">Subir un archivo</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="subirArchivo" action="" method="post" enctype="multipart/form-data">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="file" name="file" lang="es">
							<label class="custom-file-label" id="custom-file-label" for="file">Seleccionar Archivo</label> 							
							<input name= "cLoc" id="cLoc" type="hidden">							
						</div>
						<span id="loading" class="loading"><i class="fa fa-spinner fa-pulse"></i></span>
						<button name="submit" id="submit" type="submit" class="btn btn-success form-control">Subir</button>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>					
				</div>
			</div>
		</div>
	</div>

	<!-- Include our script files -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>    
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="assets/js/script.js"></script>
	<script src="scripts/upload.js"></script>

	<script>
		$('#file').on('change', function(){
			var fileName = $(this).val();
			fileName = fileName.replace("C:\\fakepath\\", "");
			$(this).next('.custom-file-label').html(fileName);
		});
	
	</script>

	

</body>
</html>