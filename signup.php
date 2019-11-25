<?php
	require "db.php";

	$data = $_POST;
	if(isset($data['do_signup'])){
		if(trim($data['login']) == ''){
			$errors[] = 'Введите логин!';
		}
		if(trim($data['email']) == ''){
			$errors[] = 'Введите почту!';
		}
		if($data['password'] == ''){
			$errors[] = 'Введите пароль!';
		}
		if($data['password_2'] != $data['password']){
			$errors[] = 'Повторный пароль введен не верно!';
		}
		if(R::count('users',"login = ?", array($data['login'])) >0 ){
			$errors[] = 'Пользователь с таким логином уже существует!';
		}
		if(R::count('users',"email = ?", array($data['email'])) >0 ){
			$errors[] = 'Пользователь с таким email уже существует!';
		}

		if (empty($errors)){
			$user = R::dispense('users');
			$user->login = $data['login'];
			$user->email = $data['email'];
			$user->password = password_hash($data['password'], PASSWORD_DEFAULT);
			R::store($user);
			echo '<div style="color: green;">Регистрация успешна!</div><hr>';
		}else{
			echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
		}
	}
	echo "<link rel='stylesheet' href='style.css'>";
?>

<div class="logo"><p>Логотип</p></div>

<div class="form">
<h1>Регистрация</h1>
<form action="signup.php" method="post">
	<p>
		<input type="text" name="login" placeholder="Введите логин" value="<?php echo @$data['login']; ?>">
	</p>
	<p>
		<input type="email" name="email" placeholder="Введите email" value="<?php echo @$data['email']; ?>">
	</p>
	<p>
		<input type="password" name="password" placeholder="Введите пароль">
	</p>
	<p>
		<input type="password" name="password_2" placeholder="Введите пароль еще раз">
	</p>
	<p>
		<button type="submit" name="do_signup">Зарегистрироваться</button>
	</p>
</form>
<p>Уже есть аккаунт? <a href="login.php">Авторизуйтесь</a></p>
</div>
<div class="iu">
	<p>@IU-4</p>
</div>