<?php
  $tea = filter_var(trim($_POST['tea']),
  FILTER_SANITIZE_STRING);
  $size = filter_var(trim($_POST['size']),
  FILTER_SANITIZE_STRING);
  $count = filter_var(trim($_POST['count']),
  FILTER_SANITIZE_STRING);
  $time = filter_var(trim($_POST['time']),
  FILTER_SANITIZE_STRING);
  $email = $_COOKIE['email'];
  $name = $_COOKIE['user'];
  $dateorder = date("Y-m-d");
  $mysql = new mysqli('localhost','root','root','artemkalp');
 
  $mysql->query("INSERT INTO `shop` (`tea`,`size`,`count`,`time`,`dateorder`,`email`,`name`)
  VALUES('$tea','$size','$count','$time','$dateorder','$email','$name')"); 
 
  $mysql->close();
  header('Location:congshop.php');
?>