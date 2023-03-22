<?php
		$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
		$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

	  $pass = md5($pass."janskdngsdhj");

	  $mysql = new mysqli('localhost', 'root', 'root', 'register-bd','8889');
	  $result = $mysql->query("SELECT * FROM `users`  WHERE `login` = '$login'");
	  $user = $result->fetch_assoc();
		$result2 = $mysql->query("SELECT * FROM `users`  WHERE `pass` ='$pass'");
	  $user2 = $result2->fetch_assoc();
	  if(count($user) == 0) {
	    echo "Такий логін не найдений.";
	    exit();
	  }
		if(count($user2) == 0) {
	    echo "Такий пароль не найдений.";
	    exit();
	  }

	  setcookie('user', $user['login'], time() + 3600 * 24 * 30, "/");


	  $mysql->close();
	  header('Location: /')

  ?>
