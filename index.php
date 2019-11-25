<?php
	require "db.php";
	echo "<link rel='stylesheet' href='style.css'>";
?>

<?php 
	if(isset($_SESSION['logged_user'])):
?>
<div class="logo" style="width: 80%;">Логотип</div>
<div class="exit">Привет, <?php echo $_SESSION['logged_user']->login; ?>!<br/>
<a href="logout.php">Выйти</a>
</div>
<div class="content">
	<p>Контент для авторизованных пользователей!</p>
	<img src="img.jpg" width="237" height="159">

	<p>Вы уже зашли как <?php echo $_SESSION['logged_user']->login; ?>. <a href="logout.php">Выйти и зарегистрироваться под другим именем?</a></p>
</div>

<div class="iu">
	<p>@IU-4</p>
</div>

<?php
	else:
		header('Location: login.php')
?>
<?php endif; ?>