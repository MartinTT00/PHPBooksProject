<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<style>
ul { text-align: center;}
li {
  display: inline;
  text-align: center;
}
</style>
<html>
	<head>
		<title>Дигитална Библиотека</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a class="logo" href="http://php-books-project.com">Дигитална библиотека</a>
				<nav>
					<a href="#menu">Меню</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<a href="http://php-books-project.com">Начална страница</a> </br> <hr>
					<a href="http://php-books-project.com/admin/dashboard" target="_blank">Админ</a>
				</ul>
			</nav>

		<!-- Heading -->
			<div id="heading" >
				<h1>библиотека</h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper">
			@yield('content')
			</section>

		<!-- Footer -->

						<section>
							<h2><center>Социални медии</center></h2>
							<ul>
								<li><a href="https://twitter.com/?lang=bg" target="_blank"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
								<li><a href="https://www.facebook.com" target="_blank"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
								<li><a href="https://www.instagram.com" target="_blank"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
								<li><a href="https://github.com/MartinTT00/PHPBooksProject" target="_blank"><i class="icon fa-github">&nbsp;</i>Github</a></li>
							</ul>
						</section>
					</div>
					<div class="copyright">
						&copy; Untitled. Photos <a href="https://unsplash.co">Unsplash</a>, Video <a href="https://coverr.co">Coverr</a>.
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>