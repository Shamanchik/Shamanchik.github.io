<?php
  $namepr = filter_var(trim($_POST['namepr']),
  FILTER_SANITIZE_STRING);
 
  $mysql = new mysqli('localhost','root','root','artemkalp');
 
  $mysql->query("DELETE FROM `catalog` WHERE `namepr`='$namepr'");
  $mysql->close();
  header('Location:index.php');
?>