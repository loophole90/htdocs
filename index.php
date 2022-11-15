<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="CSS/Style2.css">
	<link href="https://fonts.googleapis.com/css?famili=Kaushan+Script|Montserrat:400,700&amp;subset=cyrillic-ext" rel="stylesheet">
	<title></title>
</head>
<?php
if ($_COOKIE['user'] == ''):
?>
<body class="background">
	<header class="header">
		<div class="conteiner">
			<div class="header_inner">
				<div class="header__logo">MoGo</div>
				<nav>
					<a class="nav__link" href="#">ABOUT</a>
					<a class="nav__link" href="#">SERVICE</a>
					<a class="nav__link" href="#">WORK</a>
					<a class="nav__link" href="#">BLOG</a>
					<a class="nav__link" href="#">CONTACT</a>
					<a class="nav__link" href="registration.php">REGISTRATION/AUTHORIZATION</a>
				</nav>

			</div>
		</div>
	<?php else: ?>
		<!-- <?=$_COOKIE['user']?> чтобы отобразить имя аккаунта  -->

	</form>
	<body class="background">
		<header class="header">
			<div class="conteiner">
				<div class="header_inner">
					<div class="header__logo">MoGo</div>
					<nav>
						<a class="nav__link" href="#">ABOUT</a>
						<a class="nav__link" href="#">SERVICE</a>
						<a class="nav__link" href="#">WORK</a>
						<a class="nav__link" href="#">BLOG</a>
						<a class="nav__link" href="#">CONTACT</a>
						<a class="nav__link" href="exit.php">EXIT</a>

					</nav>

				</div>
			</div>
	<?php endif; ?>
	</header>
	<div class="intro">
		<div class="conteiner">
		</div>
	</div>
</body>
</html>
