<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/TiendaVirtual/css/navbar.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<!--Barra de navegacion-->
<nav class="navbar navbar-expand-lg fixed-top p-0 navbar-light">
	<div class="container-fluid">
<!--Logo de la pagina web-->
	<a class="navbar-brand" href="/TiendaVirtual">
	<img src="/TiendaVirtual/images/Logo.png" height="60px">
	</a>
<!--Boton hamburguesa-->
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
<!--Lista de enlaces de la barra de navegacion-->
<div class="collapse navbar-collapse" id="menu">
	<ul class="navbar-nav me-auto mb-2 mb-lg-0">
		<li class="nav-item"><a class="nav-link text-dark" href="#">Productos</a></li>
		<li class="nav-item"><a class="nav-link text-dark"  href="#">Mis compras</a></li>
		<li class="nav-item"><a class="nav-link text-dark"  href="#">Mi Perfil</a></li>
	</ul>
	<ul class="navbar-nav">
		<li class="nav-item"><a class="nav-link reg"  href="/TiendaVirtual/view/login.php">Iniciar sesion</a></li>
		<li class="nav-item"><a class="nav-link reg"   class="Reg" href="/TiendaVirtual/view/registro.php">Registrarse</a></li>
	</ul>
	</div>
	</div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

