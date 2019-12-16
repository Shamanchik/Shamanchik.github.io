<html>
 <head>
  <meta charset="utf-8">
  <title> Регистрация </title>
  <link rel="stylesheet" href="style.css">
 </head>
 <body>
  <div class="header">
   <h1><em> TeaTime </em></h1>
  </div>
  <div class="menu">
   <p align=center> <a href="index.php" style="padding: 10px 5% 10px;">Вернуться на главную страницу</a></p>
  </div>
  <div class="main" style="text-align:center">
   <h3>Регистрация</h3>
   <form action="check.php" method="POST">
    <p>E-Mail: <input type="email" name="email" required/></p>
    <p>Имя: <input type="text" name="name" required pattern="[A-Za-z]{2,16}" 
     title="Имя должно содержать от 2 до 16 символов, включая большие и маленькие буквы."/><br>
    <p>Пароль: <input type="password" name="password" required pattern="\S{8,}"
     title="Пароль должен содержать не менее 8 символов, включая большие и маленькие латинские буквы, а также цифры." /></p>
    <p>Подтверждение пароля: <input type="password" name="confpass" /></p>
    <input type="submit" value="Подтвердить">
   </form> 
   <p> Зарегистрированы? <a href="auth.php" style="color:#81BEF7;"> Войти </a> </p>
   <img style="display: block; margin: auto; width: 30%;height: 40%; border-radius: 25px;" src="Registration.jpg">
  </div>
  <div class="footer">
   <p align=center> © Разработано на ИУ4-11Б Алпатовом Артёмом </p>
  </div>
 </body>
</html>
