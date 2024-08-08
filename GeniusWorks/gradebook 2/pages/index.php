<?
session_start();
if (!isset($_SESSION["name"])){	
	header('location: ../index.php');
	exit();
}
else{
	$username = $_SESSION["name"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Escritorio :: IQGradebook</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="../favico.ico" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="../img/gblogo_brand.png"></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <? session_start(); echo $username; ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <!--<li><a href="#"><i class="fa fa-user fa-fw"></i> Usuario </a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Preferencias</a>
                        </li>
                        <li class="divider"></li>-->
                        <li><a href="../php/logout.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">                        
                        <li>
                            <a href="index.php"><i class="fa fa-desktop fa-fw"></i> Escritorio </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-th-list fa-fw"></i> Organizar<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admins.php"><i class="fa fa-male fa-fw"></i> Administrativos</a>
                                </li>
                                <li>
                                    <a href="maestros.php"><i class="fa fa-apple fa-fw"></i> Maestros</a>
                                </li>
								<li>
                                    <a href="alumnos.php"><i class="fa fa-pencil-square fa-fw"></i> Alumnos</a>
                                </li>
								<li>
                                    <a href="usuarios.php"><i class="fa fa-user fa-fw"></i> Usuarios</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
                            <a href="#"><i class="fa fa-gears fa-fw"></i> Configuraciones<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="ciclos.php"><i class="fa fa-calendar fa-fw"></i> Ciclos</a>
                                </li>
                                <li>
                                    <a href="grupos.php"><i class="fa fa-group fa-fw"></i> Grupos</a>
                                </li>
								<li>
                                    <a href="roles.php"><i class="fa fa-key fa-fw"></i> Roles</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
							<a href="#"><i class="fa fa-tasks fa-fw"></i> Acciones<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
									<a href="captura_calif.php"><i class="fa fa-edit fa-fw"></i> Capturar calificaciones</a>									
								</li>
								<li>
									<a href="concentrados.php"><i class="fa fa-th fa-fw"></i> Generar concentrados</a>									
								</li>
								<li>
									<a href="formatos.php"><i class="fa fa-download fa-fw"></i> Descargar formatos</a>
								</li>
							</ul>
						</li>
                        <!--<li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>-->
                        
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Escritorio </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
		
	<!-- Validator Plugin JS -->
	<script src="../dist/js/validator.js"></script>

</body>

</html>

