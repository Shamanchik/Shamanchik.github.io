<?php
	require "db.php";

	$data = $_POST;

	if(isset($data['do_login']))
	{
		$errors = array();
		$user = R::findOne('users', 'login = ?', array($data['login']));
		
		if($user){
			if(password_verify($data['password'], $user->password)){
				$_SESSION['logged_user'] = $user;
				if($_SESSION['logged_user']->login == "admin"){
					header('Location: admin.php');
				}
				header('Location: index.php');
			}else{
				$errors[] = 'Неверный пароль!';
			}

		}else{
			$errors[] = 'Пользователь с таким логином не найден';
		}

		if (! empty($errors))
		{
			echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
		}
	}

	echo "<link rel='stylesheet' href='style.css'>";
?>
<div class="logo"><p><strong>Логотип</strong></p></div>
<div class="form">
	<h1>Авторизация</h1>
	<p>Для просмотра содержимого, необходимо войти!</p>
	<form action="login.php" method="post">
		<p>
		<input type="text" name="login" placeholder="Введите логин" value="<?php echo @$data['login']; ?>">
	</p>
	<p>
		<input type="password" name="password" placeholder="Введите пароль">
	</p>
	<p>
		<button type="submit" name="do_login">Авторизоваться</button>
	</p>
	<p>
		Нет аккаунта? <a href="signup.php">Зарегистрируйтесь</a>
	</p>
	</form>
</div>
<div class="iu">
	<p>@IU-4</p>
</div>