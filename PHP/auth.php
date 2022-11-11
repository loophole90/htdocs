<?php
		$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
		$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

	  $pass = md5($pass."janskdngsdhj");

	  $mysql = new mysqli('localhost', 'root', 'root', 'register-bd','3306');
	  $result = $mysql->query("SELECT * FROM `users`  WHERE `login` = '$login' AND `pass` ='$pass'");
	  $user = $result->fetch_assoc();
	  if(count($user) == 0) {
	    echo "Такой пользователь/пароль не найден.";
	    exit();
	  }

	  setcookie('user', $user['login'], time() + 3600, "/");


	  $mysql->close();
	  header('Location: /')

  ?>
