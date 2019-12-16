<?php
 $name = filter_var(trim($_POST['name']),
 FILTER_SANITIZE_STRING);
 $password = filter_var(trim($_POST['password']),
 FILTER_SANITIZE_STRING);
 $date = date("Y-m-d");
 
 $mysql = new mysqli('localhost','root','root','artemkalp');
 
 $result = $mysql->query("SELECT * FROM `users` WHERE `login`='$name' AND `password`='$password'");
 $user = $result->fetch_assoc();
 error_reporting(0);
 if(count($user) == 0) {
	 echo "Неверно введёная почта и/или пароль!";
	 echo '<p><a href="aut.php">'."Попробуйте снова".'</a></p>';
	 exit();
 } 
  
 
 setcookie('user', $user['login'], time() + 28800, "/");
 setcookie('email', $user['email'], time() + 28800, "/");
 setcookie('admin', $user['admin'], time() + 28800, "/");
 
 $mysql->close();
 header('Location:index.php');
?>