<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"href=https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet"href="css/style.css">
    <title>Cabinet</title>
</head>
<body>

            <?php
            require_once "albsheader.php";
            ?>

    <div class="container mt-4">
        <?php
          if($_COOKIE['user'] == ''):
        ?>
      <div class="row">
          <div class="col">
          <h1>Форма регистрации</h1>
       <form action="check.php" method="post">
           <input type="text" class="form-control" name="CusLogin" id="CusLogin" placeholder="Введите логин">
           <br>
           <input type="text" class="form-control" name="CusName" id="CusName" placeholder="Введите имя">
           <br>
           <input type="password" class="form-control" name="CusPass" id="CusPass" placeholder="Введите пароль">
           <br>
           <input type="text" class="form-control" name="Country" id="Country" placeholder="Введите страну проживания">
           <br>
           <input type="text" class="form-control" name="CusEmail" id="CusEmail" placeholder="Введите почту">
           <br>
           <button class="btn btn-success" type="submit">Зарегистрироваться</button>
       </form>
          </div>
          <div class="col">
          <h1>Форма авторизации</h1>
       <form action="auth.php" method="post">
           <input type="text" class="form-control" name="CusLogin" id="CusLogin" placeholder="Введите логин">
           <br>
           <input type="password" class="form-control" name="CusPass" id="CusPass" placeholder="Введите пароль">
           <br>
           <button class="btn btn-success" type="submit">Авторизоваться</button>
       </form>
          </div>
          <?php else: ?>
            <p>Приятных покупок <?=$_COOKIE['user']?>. Чтобы вернуться на главную страницу нажмите 
        <a href="/"> здесь </a> 
        </p>
        <p>Чтобы выйти из своего аккаунта нажмите 
        <a href="/exit.php"> здесь </a> 
        </p>
          <?php endif;?>
      </div>
    </div>

</body>
</html>