<!DOCTYPE HTML>
<html>

<head>
	<title>Plantilla Blog</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="/css/main.css" />
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Main -->
		<div id="main">
			<div class="inner">

				<!-- Header -->
				<header id="header">
					<a class="logo"><strong>Programación</strong> Cliente-Servidor</a>
					<ul class="icons">
						<li><a href="https://twitter.com/EmKsode" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/juanignacio.lopez.9828" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
					</ul>
				</header>
				<!-- Section -->
				<section>
					@yield('content')
				</section>

			</div>
		</div>

		<!-- Sidebar -->
		<div id="sidebar">
			<div class="inner">

				<!-- Menu -->
				<nav id="menu">
					<header class="major">
						<h2>Menu</h2>
					</header>
					<ul>						
							<center><h2><a href="/home">Home <img src="https://fasican.org/wp-content/uploads/2015/05/home-icon.png" alt="" height="30" width="30"></a></h2></center>
						<nav>
							<h4>Unidad 1</h4>
							<li><a href="/introducion">Introduccion A Cliente Servidor</a></li>
							<li><a href="/componente">Componentes Y Caracteristicas</a></li>
						</nav>
						<nav>
							<h4>Unidad 2</h4>
							<li><a href="/reparto">Estrategias De Reparto</a></li>
							<li><a href="/multinivel">Modelos Multinivel</a></li>
							<li><a href="/vcontrol">Modelo Vista Controlador</a></li>
							<li><a href="/sockets">Sockets</a></li>
						</nav>
						<nav>
							<h4>Unidad 3</h4>
							<li><a href="/transaciones">Tipos De Transaciones</a></li>
							<li><a href="/ACID">Modelo ACID</a></li>
						</nav>
						<h4>temas</h4>
						@yield('temas')
					</ul>
				</nav>
			</div>
		</div>

	</div>

	<!-- Scripts -->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="/js/jquery.min.js"></script>
	<script src="/js/browser.min.js"></script>
	<script src="/js/breakpoints.min.js"></script>
	<script src="/js/util.js"></script>
	<script src="/js/main.js"></script>
	<script>
		function Hola() {
			Swal.fire({
				title: 'Integrantes',
				html: '<h7 style="color: black">Juan Ignacio López Zepeda</h7><br><h7 style="color: black">José David Vite Bautista</h7>',
				width: 600,
				padding: '3em',
				color: '#716add',
				background: '#fff url(https://sweetalert2.github.io/#frameworks-integrationsimages/trees.png)',
				backdrop: `
    rgba(0,0,123,0.4)
    url("https://i.gifer.com/4FB4.gif")
    left top
    no-repeat
  `
			})
		}
	</script>

</body>

</html>