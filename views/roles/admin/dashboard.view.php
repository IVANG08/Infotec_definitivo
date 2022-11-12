<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<script src="https://kit.fontawesome.com/ae713951db.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="assets/css/styles-dashboard.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
</head>
<body id="body">
	
		<nav class="navbar-expand-lg navbar-light nav navbar-nav navbar-right sticky-top" id="barra">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="bi bi-three-dots-vertical text-white m-4" id="btn_open"> Menu
			</div>
			<div class="nav" id="navbarNavAltMarkup">
				<div class="collapse navbar-collapse text-white ml-2">
					
				</div>
				<div class="justify-content-center barra_nav">
				  <a class="btn barra_nav_items" aria-current="page" href="inicio.html"><i class="bi bi-envelope-fill "></i>Correo</a>
				  <a class="btn barra_nav_items" href="#"><i class="bi bi-calendar3"></i>Calendario</a>
				  <a class="btn barra_nav_items" href="#"><i class="bi bi-ui-checks"></i>Tareas</a>
				  <a class="btn dropdown-toggle barra_nav_items" type="button" data-toggle="dropdown" aria-expanded="false">
					<i class="bi bi-person-circle"></i>Administrador
				  </a>
				  <div class="dropdown-menu dropdown-menu-right">
					<a class="dropdown-item" href="#">Perfil</a>
					<a class="dropdown-item" href="#">Configuracion</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item text-danger" href="inicio.html">Cerrar Sesión</a>
				  </div>
				</div>
		</nav>
		<div class="menu_side" id="side_menu" >
			<div class="name_page">
				<img src="assets/img/logosinf.png" class="rounded">
				<hr>
				Logo
			</div>
			<div class="options_menu" id="">
				<a href="index.html">
					<div class="option">
						<i class= "fas fa-home" title="Productos"></i>
						<h4 class="text-center">Inicio</h4>
					</div>
				</a>
				<a href="modules/1_users/user_principal.html">
					<div class="option">
						<i class="fa-solid fa-users" title="Usuario"></i>
					<h4>Ususario</h4>
					</div>
				</a>
				<a href="#">
					<div class="option">
						<i class= "bi bi-archive-fill align-self-center" title="Productos"></i>
						<h4>Productos</h4>
					</div>
				</a>
				<a href="#">
					<div class="option">
						<i class="fas fa-cash-register" ></i>
					<h4>Compras</h4>
				</div>
				</a>
				<a href="#">
					<div class="option">
						<i class="bi bi-stack" title="Inventario"></i>
					<h4>Inventario</h4>
				</div>
				</a>
				<a href="#">
					<div class="option">
						<i class="bi bi-clipboard2-data-fill" title="Reportes"></i>
					<h4>Reportes</h4>
				</div>
				</a>

			</div>

		</div>

		<!-- Contenido -->
		
		<div class="row">     
		
			<main class="col-12 p-0 m-0">
				<!-- Carga de Páginas -->
				<iframe name="area-trabajo" src="modules/1_users/user_new.html"  width="100%" height="100%" frameborder="0"></iframe>				
			</main>
		</div>





		
	<script src="assets/js/jquery.slim.min.js"></script>	
	<script src="assets/js/popper.min.js"></script>	
	<script src="assets/js/bootstrap.js"></script>	
	<script src="assets/js/main.js" charset="utf-8"></script>
</body>
</html>