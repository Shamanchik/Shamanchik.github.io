<html>
 <head>
  <meta charset="utf-8">
  <title> Удаление продукта </title>
  <link rel="stylesheet" href="style.css">
 </head>
 <body>
  <div class="header">
   <h1><em> TeaTime </em></h1>
  </div>
  <div class="menu">
   <p align=center> <a href="main.php" style="padding: 10px 5% 10px;">Вернуться на главную страницу</a></p>
  </div>
  <div class="main" style="text-align:center">
   <form action="deletecatalogform.php" method="POST">
    <p>Наименование удаляемого продукта: <input type="text" name="namepr" required></p>
    <input type="submit" value="Подтвердить">
   </form> 
   <img src="areyou.jpg">
  </div>
 <div class="footer" align=center>
   <p> © Разработано на ИУ4-11Б  Алпатовым Артёмом </p>
  </div>
 </body>
</html>