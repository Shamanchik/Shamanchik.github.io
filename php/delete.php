<html>
 <head>
  <meta charset="utf-8">
  <title> Удаление аккаунта </title>
  <link rel="stylesheet" href="style.css">
 </head>
 <body>
  <div class="header">
   <h1><em> TeaTime </em></h1>
  </div>
  <div class="menu">
   <p align=center> <a href="index.php" style="padding: 10px 5% 10px;">Вернуться на главную страницу</a></p>
  </div>
  <div class="main" align=center>
 <?php
  $mysql = new mysqli('localhost','root','root','artemkalp');
  $query ="SELECT * FROM `users`";
 
  $result = mysqli_query($mysql, $query); 
  if($result)
   $rows = "";
		echo "<table><tr><th>ID пользователя</th><th>Имя пользователя</th><th>E-mail пользователя</th></tr>";
    while($rows = $result->fetch_assoc()){
		echo "<tr>";
		echo "<td>".$rows["id"]."</td>";
		echo "<td>".$rows["login"]."</td>";
		echo "<td>".$rows["email"]."</td>";
		echo "</tr>"; 			
	}
	    echo "</table>";
    mysqli_free_result($result);
    mysqli_close($mysql);
?>
   <form action="deleteform.php" method="POST">
    <p>Введите ID пользователя, которого вы хотите удалить: <input type="text" name="iddelacc" required></p>
   <input type="submit" value="Подтвердить">
   </form>
  </div>
  <div class="footer">
   <p align=center> © Разработано на ИУ4-11Б Еловским Никитой </p>
  </div>
 </body>
</html>
