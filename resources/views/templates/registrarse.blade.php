<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>Generic Page - Massively by HTML5 UP</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body class="is-loading">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header">
			<a href="{{ route('home') }}" class="logo">Massively</a>
		</header>

		<!-- Nav -->
		<nav id="nav">
			<ul class="links">
				<li><a href="{{ route('home') }}">This is Massively</a></li>
				<li><a href="generic.html">Generic Page</a></li>
				<li><a href="elements.html">Elements Reference</a></li>
				<li ><a href="{{ route('login') }}">Iniciar Sesion</a></li>
				<li class="active"><a href="{{ route('registrarse') }}">Registarse</a></li>
			</ul>
			<ul class="icons">
				<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
			</ul>
		</nav>

		<!-- Main -->
		<div id="main">

			<section>
				<h2>Form</h2>

				<form method="post" action="#" class="alt">
					<div class="row uniform">
						<div class="12u 12u$(xsmall)">
							<input type="text" name="demo-name" id="demo-name" value="" placeholder="Nombre" />
						</div>
						<div class="12u$ 12u$(xsmall)">
							<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
						</div>

						<div class="6u 12u$(xsmall)">
							<input type="text" name="demo-name" id="demo-name" value="" placeholder="Primer Apellido" />
						</div>
						<div class="6u$ 12u$(xsmall)">
							<input type="email" name="demo-email" id="demo-email" value="" placeholder="Segundo Apellido" />
						</div>

						<div class="6u 12u$(xsmall)">
							<input type="text" name="demo-name" id="demo-name" value="" placeholder="Contraseña" />
						</div>



						<div class="12u 12u$(small)">
							<input type="text" name="demo-name" id="demo-name" value="" placeholder="Telefono" />
						</div>
						
						<div class="4u 12u$(small)">
							<input type="radio" id="demo-priority-low" name="demo-priority" checked>
							<label for="demo-priority-low">Hombre</label>
						</div>
						<div class="4u 12u$(small)">
							<input type="radio" id="demo-priority-normal" name="demo-priority">
							<label for="demo-priority-normal">Mujer</label>
						</div>
						<div class="4u$ 12u$(small)">
							<input type="radio" id="demo-priority-high" name="demo-priority">
							<label for="demo-priority-high">Indefinido</label>
						</div>
						<div class="12u$">
							<ul class="actions">
								<li><input type="submit" value="Enviar" class="special" /></li>
								<li><input type="reset" value="Reset" /></li>
							</ul>
						</div>
					</div>
				</form>

				<hr />
			</section>


		</div>

		<!-- Footer -->
		<footer id="footer">
			<section>
				<form method="post" action="#">
					<div class="field">
						<label for="name">Name</label>
						<input type="text" name="name" id="name" />
					</div>
					<div class="field">
						<label for="email">Email</label>
						<input type="text" name="email" id="email" />
					</div>
					<div class="field">
						<label for="message">Message</label>
						<textarea name="message" id="message" rows="3"></textarea>
					</div>
					<ul class="actions">
						<li><input type="submit" value="Send Message" /></li>
					</ul>
				</form>
			</section>
			<section class="split contact">
				<section class="alt">
					<h3>Address</h3>
					<p>1234 Somewhere Road #87257<br />
						Nashville, TN 00000-0000</p>
				</section>
				<section>
					<h3>Phone</h3>
					<p><a href="#">(000) 000-0000</a></p>
				</section>
				<section>
					<h3>Email</h3>
					<p><a href="#">info@untitled.tld</a></p>
				</section>
				<section>
					<h3>Social</h3>
					<ul class="icons alt">
						<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
					</ul>
				</section>
			</section>
		</footer>

		<!-- Copyright -->
		<div id="copyright">
			<ul>
				<li>&copy; Untitled</li>
				<li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
				<li>Distributor: <a href="https://themewagon.com/">ThemeWagon</a></li>
			</ul>
		</div>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>