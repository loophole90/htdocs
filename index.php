<!DOCTYPE html>
<html lang="ru">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="">
    <title>Форма регистрации</title>

  </head>
  <body>

    <div class="container mt-4">

      <?php
      if ($_COOKIE['user'] == ''):
      ?>
      <div class="row">
        <div class="col">
          <h1>Форма регистрации</h1>
          <form action="PHP/check.php" method="post">
            <input  type="text" class="form-control" name="login" id="login" placeholder="Введіть логін"><br>

            <input  type="email" class="form-control" name="gmail" id="gmail" placeholder="Введіть свою електронну пошту"><br>

            <input  type="password" class="form-control" name="pass" id="pass" placeholder="Введіть пароль"><br>
            <button type="submin" >Зарегистрировать</button>
          </form>
        </div>
        <h1>Форма авторизации</h1>
        <form action="PHP/auth.php" method="post">

          <input  type="text" class="form-control" name="login" id="login" placeholder="Введіть логін"><br>

          <input  type="password" class="form-control" name="pass" id="pass" placeholder="Введіть пароль"><br>
          <button type="submin" >Авторизоваться</button>
          <h6>Все данные содержаються всего 30 дней,<br> после чего нужно заново авторизоруваться.</h6>
        </form>
      </div>
      <?php else: ?>
        <p><?=$_COOKIE['user']?>, Чтобы перейти на сайт нажмите на кнопу снизу.</p>
        <form action="site.php">
        <button>Перейти</button>
      </form>
      <?php endif; ?>
    </div>
  </body>
</html>
