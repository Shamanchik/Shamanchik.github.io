<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title> Комментарии/Отзывы </title>
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
   <p align="center"><a href="auth.php" style="color:#81BEF7;">Войдите</a> или <a href="reg.php" style="color:#81BEF7;">зарегистрируйтесь</a>, чтобы получить доступ к заказам, каталогу</p>
   </div>
  <div class="menu">
   <p align=center> <a href="index.php" style="padding: 10px 5% 10px;">Вернуться на главную страницу</a></p>
  </div>
   <div align=center>
   <p style="color:red;"><a href="auth.php" style="color:#81BEF7;">Войдите</a>, чтобы получить доступ к данной странице!</p>
   <img src="oops.jpg" style="border-radius: 25px;">
   </div>
   <div class="footer" align=center>
   <p> © Разработано на ИУ4-11Б  Алпатовым Артёмом </p>
   </div>
   <?php else: ?>
    <p align="center">Вы вошли как <?=$_COOKIE['user']?></br> <a href="exit.php" style="color:#81BEF7;">Выйти</a></p>
  </div>
  <div class="menu">
   <p align=center> 
	                <a href="index.php" style="padding: 10px 5% 10px;">Главная</a>
	                <a href="catalog.php" style="padding: 10px 5% 10px;">Каталог</a>
	                <a href="shop.php" style="padding: 10px 5% 10px 5%;">Купить</a>
					<b style="color:#BDBDBD;">Комментарии/Отзывы</b></p>
  </div>
  <div class="main">
 
  <?php
  $com = filter_var(trim($_POST['com']),
  FILTER_SANITIZE_STRING);
  $name=$_COOKIE['user'];
  $email=$_COOKIE['email'];
  
  $mysql = new mysqli('localhost','root','root','artemkalp');
  $query ="SELECT `name`,`com` FROM `comments`";
 
  $result = mysqli_query($mysql, $query); 
  if($result)
   $rows = "";
	echo "комментарии и отзывы пользователей";
    while($rows = $result->fetch_assoc()){
		
    echo "<table>";
		echo "<tr>";
		echo "<td><b>".$rows["name"].":</b></td>";
        echo "<td>".$rows["com"]."</td>";
		echo "</tr>"; 
        echo "</table>";				
	}
    mysqli_free_result($result);
mysqli_close($mysql);
?>
   <form action="commentsform.php" method="POST"  align=center>
   <label for="com">Ваш отзыв:</label>
   <textarea name="com" cols="60" rows="5"  required></textarea>
   <input type="submit" value="Подтвердить">
   </form>
  </div>
  <div class="footer" align=center>
  
  <?php 
    error_reporting(0);
   
    $mysql = new mysqli('localhost','root','root','artemkalp');
	
	$admin=$_COOKIE['admin'];
	if($name=='admin'):
    ?>
    <p><a href="deletecomments.php" style="color:#81BEF7;">Удаление комментариев</a></p>
   <?php else: ?>
   <p> © Разработано на ИУ4-11Б Алпатовым Артёмом </p>
      <?php endif; 
	   $mysql->close();?> 
  </div>
  <?php endif; ?>
 </body>
</html>
