<?php
  $com = filter_var(trim($_POST['com']),
  FILTER_SANITIZE_STRING);
  $name=$_COOKIE['user'];
  $email=$_COOKIE['email'];
  $mysql = new mysqli('localhost','root','root','artemkalp');
  $mysql->query("INSERT INTO `comments` (`name`,`com`)
  VALUES('$name', '$com')"); 
 
  $mysql->close();
  header('Location:comments.php');
?>