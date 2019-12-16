<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title> Вход </title>
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
   <form action="checkauth.php" method="post">
    <p>Ваше имя: <input type="text" name="name" required><br></p>
    <p>Ваш пароль: <input type="password" name="password" required><br></p>
    <input type="submit" name="submit">
   </form></br>
   <img style="border-radius: 25px; display: block; margin: auto;" src="who.jpg">
   <p> Еще не зарегистрированы? <a href="reg.php" style="color:#81BEF7;"> Зарегистрироваться </a></p>
  </div>
  <div class="footer">
   <p align=center> © Разработано на ИУ4-11Б Алпатовым Артёмом </p>
  </div>
 </body>
</html>
