<?php
	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$gmail = filter_var(trim($_POST['gmail']), FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
	if (mb_strlen($login) < 4 || mb_strlen($login) > 20) {
		echo "Недопустимая длина логина";
		exit();
	}else if (mb_strlen($gmail) < 1 || mb_strlen($gmail) > 30) {
		echo "Недопустимая длина електронной почты";
		exit();
	}else if (mb_strlen($pass) < 8 || mb_strlen($pass) > 16) {
		echo "Недопустимая длина пароля";
		exit();
	}
	$pass = md5($pass."janskdngsdhj");

	$mysql = new mysqli('localhost', 'root', 'root', 'register-bd','3306');
	$mysql->query("INSERT INTO `users` (`login`, `gmail`, `pass`) VALUES('$login', '$gmail', '$pass')");
	$login2 = $mysql->query("SELECT * FROM `users`  WHERE `login` = '$login'");
	$user = $login2->fetch_assoc();
	if(count($user) != 0) {
		echo "Такой пользователь уже занят.";
		exit();
	}
	$gmail2 = $mysql->query("SELECT * FROM `users`  WHERE `gmail` = '$gmail'");
	$user2 = $gmail2->fetch_assoc();
	if(count($user2) != 0) {
		echo "Такая електронная почта уже занята.";
		exit();
	}

	$mysql->close();

	header('Location: /')

?>