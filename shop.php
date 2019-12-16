<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title> Купить </title>
  <link rel="stylesheet" href="style.css">
 </head>
 <body>
  <div class="header">
   <h1><em> TeaTime </em></h1>
  </div>
  <div class="register">
  <?php 
   error_reporting(0);
   if($_COOKIE['user'] == ''):
     ?>
   <p align="center"><a href="auth.php" style="color:#81BEF7;">Войдите</a> или <a href="reg.php" style="color:#81BEF7;">зарегистрируйтесь</a>, чтобы получить доступ к заказам и каталогу</p>
   </div>
  <div class="menu">
   <p align=center> <a href="index.php" style="padding: 10px 5% 10px;">Вернуться на главную страницу</a></p>
  </div>
   <div align=center>
   <p style="color:red;"><a href="auth.php" style="color:#81BEF7;">Войдите</a>, чтобы получить доступ к данной странице!</p>
   <img src="oops.jpg" style="border-radius: 25px;">
   </div>
   <div class="footer" align=center>
   <p> © Разработано на ИУ4-11Б Алпатовым Артёмом </p>
   </div>
   <?php else: ?>
    <p align="center">Вы вошли как <?=$_COOKIE['user']?></br> <a href="exit.php" style="color:#81BEF7;">Выйти</a></p>
  </div>
  <div class="menu">
   <p align=center> 
                  <a href="index.php" style="padding: 10px 5% 10px 5%;">Главная</a>
                  <a href="catalog.php" style="padding: 10px 10% 10px 5%;">Каталог</a>
                  <b style="color:#BDBDBD;">Купить</b>
          <a href="comments.php" style="padding: 10px 5% 10px 10%;">Комментарии/Отзывы</a></p>
  </div>
  <div class="main" style="text-align:center">

   <p> Укажите вид чая, его массу и время, к которому его доставить. Закажите чай сегодня и заберите его в указанное время!</p>
   <form action="shopform.php" method="POST">
    <p>Тип чая: 
     <select name="tea" size="1">
   <?php
$mysql = new mysqli('localhost','root','root','artemkalp');
$query ="SELECT `namepr` FROM `catalog`";
$result = mysqli_query($mysql, $query); 
if($result)
 $rows = "";
    while($rows = $result->fetch_assoc()){
    echo "<option value=".$rows["namepr"].">".$rows["namepr"]."</option>";
        
  }
    mysqli_free_result($result);
mysqli_close($mysql);
?>
     </select></p>
    <p>Масса: 
     <select name="size" size="1">
      <option value="50гр">Маленькая(50гр)</option>
      <option value="200гр">Средная(200гр)</option>
      <option value="500гр">Большая(500гр)</option>
     </select></p>
    <p>Количество: 
     <select name="count" size="1">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
     </select></p>
     <p>Время: <input type="time" name="time" min="05:15" max="22:45" required/></p>
    <input type="submit" value="Подтвердить">
   </form> </br>
  </div>
  <div class="footer"  align=center>
   <p> © Разработано на ИУ4-11Б Алпатовым Артёмом </p>
  </div>
  <?php endif; ?>
 </body>
</html>