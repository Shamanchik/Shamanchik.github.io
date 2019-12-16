<?php
	$type = filter_var(trim($_POST['type']), FILTER_SANITIZE_STRING);
	$namepr = filter_var(trim($_POST['namepr']), FILTER_SANITIZE_STRING);
	$descr = filter_var(trim($_POST['descr']), FILTER_SANITIZE_STRING);
	$gen = filter_var(trim($_POST['gen']), FILTER_SANITIZE_STRING);
	$cost50 = filter_var(trim($_POST['cost50']), FILTER_SANITIZE_STRING);
	$cost200 = filter_var(trim($_POST['cost200']), FILTER_SANITIZE_STRING);
	$cost500 = filter_var(trim($_POST['cost500']), FILTER_SANITIZE_STRING);
	$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));

	$mysql = new mysqli('localhost','root','root','artemkalp');
	$mysql->query("INSERT INTO `catalog` (`type`, `namepr`, `descr`, `gen`, `cost50`, `cost200`, `cost500`, `photo`)
		VALUES('$type','$namepr','$descr','$gen','$cost50','$cost200','$cost500','$photo')");
	$mysql->close();
	header('Location: index.php');
?>