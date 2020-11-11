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

	@include ('layouts.menu')

		<!-- Main -->
		<div id="main">

			<section>
				<h2>Registrarse</h2>

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

		@include ('layouts.footer')

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