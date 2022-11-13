<!DOCTYPE html>
<html lang="ru">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="">
    <title>Форма реєстрації</title>

  </head>
  <body>

    <div class="container mt-4">

      <?php
      if ($_COOKIE['user'] == ''):
      ?>
      <div class="row">
        <div class="col">
          <h1>Форма реєстрації</h1>
          <form action="PHP/check.php" method="post">
            <input  type="text" class="form-control" name="login" id="login" placeholder="Введіть логін"><br>

            <input  type="email" class="form-control" name="gmail" id="gmail" placeholder="Введіть свою електронну пошту"><br>

            <input  type="password" class="form-control" name="pass" id="pass" placeholder="Введіть пароль"><br>

            <button type="submin" >Зареєструватись</button>
            <a title="GitHub" rel="noreferer" class="btn socials-item btn-github" href="/auth/github/login/?process=login">
  </a>
          </form>
        </div>
        <h1>Форма авторизации</h1>
        <form action="PHP/auth.php" method="post">

          <input  type="text" class="form-control" name="login" id="login" placeholder="Введіть логін"><br>

          <input  type="password" class="form-control" name="pass" id="pass" placeholder="Введіть пароль"><br>
          <button type="submin" >Авторизуватись</button>
          <h6>Всі данні тримаються тільки 30 днів,<br> після цього треба знову авторизуватися.</h6>
        </form>
      </div>
      <?php else: ?>
        <!-- <?=$_COOKIE['user']?> чтобы отобразить имя аккаунта  -->
        <p>Щоб вийти з аккаунту натисніть на кнопку знизу.</p>
        <form action="exit.php">
          <button>Вийти</button>
        </form>
      <?php endif; ?>
    </div>
  </body>
</html>
