<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title> Каталог </title>
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
   <p> © Разработано на ИУ4-11Б лпатовым Артёмом </p>
   </div>
   <?php else: ?>
    <p align="center">Вы вошли как <?=$_COOKIE['user']?></br> <a href="exit.php" style="color:#81BEF7;">Выйти</a></p>
  </div>
  <div class="menu">
   <p align=center>
                  <a href="index.php" style="padding: 10px 10% 10px 5%;">Главная</a>
                  <b style="color:#BDBDBD;">Каталог</b>
                  <a href="shop.php" style="padding: 10px 5% 10px 10%;">Купить</a>
            <a href="comments.php" style="padding: 10px 5% 10px;">Комментарии/Отзывы</a></p>
  </div>
  <div style="background-color: green; width: 80%; display: block;margin: auto; border-radius: 25px;" >
    <?php
  
$mysql = new mysqli('localhost','root','root','artemkalp');
$query ="SELECT `photo`,`namepr`,`gen`,`descr`,`cost50`,`cost200`,`cost500` FROM `catalog` ORDER BY `cost50` ";
 
$result = mysqli_query($mysql, $query); 
if($result)
 $rows = "";
    while($rows = $result->fetch_assoc()){
    echo '<table>';
    echo '<tr><td rowspan=5>';
    ?>
    <div>
    <?php
    echo '<img style="border-radius: 25px;" src=\'data:image/jpg;base64,'.base64_encode($rows['photo']).'\' />';
    ?>
    </div>
    <?php
    echo "</td>";
    echo "<td><b>".$rows["namepr"]."</b></td>";
    echo "</tr>";
        echo "<tr><td colspan=3> Производство: ".$rows["gen"]."</td></tr>";  
        echo "<tr><td colspan=3>".$rows["descr"]."</td></tr>"; 
    echo "<tr>";
        echo "<td> Цена(50гр): ".$rows["cost50"]." рублей</td>"; 
        echo "<td> Цена(200гр): ".$rows["cost200"]." рублей</td>";
        echo "<td> Цена(500гр): ".$rows["cost500"]." рублей</td>";
    echo "</tr>"; 
    echo '<hr align="center" width="80%" size="2" color="black" />';
        echo "</table>";  
  }
    mysqli_free_result($result);
mysqli_close($mysql);
?>
  </div>
  
  <div class="footer" align=center>
  
  <?php 
    error_reporting(0);
   
    $mysql = new mysqli('localhost','root','root','artemkalp');
  
  $admin=$_COOKIE['admin'];
  if($_COOKIE['user']=='admin'):
    ?>
    <p><a href="addcatalog.php" style="color:#81BEF7;">Добавление продукта</a></p>
  <p><a href="deletecatalog.php" style="color:#81BEF7;">Удаление продукта</a></p>
   <?php else: ?>
   <p> © Разработано на ИУ4-11Б Алпатовым Артёмом </p>
      <?php endif; 
     $mysql->close();?> 
  </div>
 </body>
 <?php endif; ?>
</html>