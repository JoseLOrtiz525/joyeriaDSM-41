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
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper">

            @include ('layouts.menu')
            
				<!-- Main -->
					<div id="main">

                    <section>
							<form method="post" action="#">
								
								<div class="field">
									<label for="email">Email</label>
									<input type="text" name="email" id="email" />
                                </div>
                                <div class="field">
									<label for="password">Name</label>
									<input type="text" name="password" id="password" />
								</div>
								<ul class="actions">
                                    <li><input type="submit" value="Send Message" /></li>
                                    <a href="{{ route('registrarse') }}" class="button special">Registrarse</a></li>
								</ul>
                            </form>
                            
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