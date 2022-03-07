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

				<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h1>Hola :D</h1>
							<p>Esta Es Nuestra Plantilla Elejida...</p>
						</header>
						<ul class="actions">
							<li><a onclick="Hola()" class="button big">Integrantes</a></li>
						</ul>
						<h3>La programacion cliente-servidor se trata de la estructura encargada del traspaso de recursos o servicios por medio de un servidor a un usuario.
							Esto significa que se centra en la gestión de la información y las acciones por lo que facilita y aclarando el diseño del sistema.
						</h3>
					</div>
					<span class="image object">
						<img src="https://aprendiendoaprogramar.es/wp-content/uploads/2021/03/Arquitectura-cliente-servidor-definicion-tipos-ejemplos-ventajas-y-desventajas.png" alt="" />
					</span>
				</section>
				<section>
					<header class="major">
						<h2>Articulos Por Unidad...</h2>
					</header>
					<div class="posts">
						<article>
							<a href="#" class="image"><img src="https://definicion.de/wp-content/uploads/2008/06/informacion.jpg" alt="" /></a>
							<h2>Unidad 1</h2>
							<li><a href="/introducion">Introducción A La Arquitectura Cliente/Servidor</a></li>
							<li><a href="/componente">Componentes Y Características Del Cliente/Servidor</a></li>
						</article>
						<article>
							<a href="#" class="image"><img src="https://gamerpc.es/wp-content/uploads/2021/10/sistema-de-informacion-770x445.jpeg" alt="" /></a>
							<h2>Unidad 2</h2>
							<li><a href="/reparto">Estrategias De Reparto De Complejidad</a></li>
							<li><a href="/multinivel">Modelos Multinivel</a></li>
							<li><a href="/vcontrol">Modelo Vista Controlador</a></li>
							<li><a href="/sockets">Sockets</a></li>
						</article>
						<article>
							<a href="#" class="image"><img src="https://www.tecnologias-informacion.com/ecom2.jpeg" alt="" /></a>
							<h2>Unidad 3</h2>
							<li><a href="/transaciones">Tipos De Transaciones</a></li>
							<li><a href="/ACID">Modelo ACID</a></li>
						</article>
						<br>
					</div>
				</section>

			</div>
		</div>

		<!-- Sidebar -->

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