<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Galleras TV Jarabacoa</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link href="https://vjs.zencdn.net/7.5.4/video-js.css" rel="stylesheet">
        <script src='https://vjs.zencdn.net/7.5.4/video.js'></script>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.php" class="logo">
									<span class="symbol"><img src="images/logo.png" alt="" /></span><span class="title"><h1>Galleras TV Jarabacoa</h1></span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="index.php">Inicio</a></li>
							<li><a href="#suscribirte">Suscribite</a></li>

						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<video id="video"  class="video-js vjs-default-skin"  controls preload="none">
							<source src="http://192.168.1.36:8080/livestream/stream.m3u8" type="application/x-mpegURL" />
                            </video>
							<script>
                            var video = videojs('#video')
                            </script>

							<p>Comentar de face book</p>

						</div>
					</div>


					<footer id="footer">
						<div class="inner">
              <section id="suscribirte" >
								<h2>Suscribete</h2>

								<form method="post" action="admin/registrar_subcritore.php">
									<div class="fields">
										<div class="field half">
											<input id="textbox"   type="text" name="nombre" id="name" placeholder="Nombre" />
										</div>
										<div class="field half">
											<input type="text" name="telefono" id="name" placeholder="Telefono" />
										</div>
										<div class="field half">
											<input type="email" name="correo" id="email" placeholder="Correo" />
										</div>

									</div>
									<ul class="actions">
										<li><input type="submit" value="Enviar" class="primary" /></li>
									</ul>
								</form>
							</section>
							<section>
								<h2>Compartir</h2>
								<ul class="icons">
									<li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>

								</ul>
							</section>

						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
