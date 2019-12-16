<!DOCTYPE html>
<html>
<head>
	<title>Добавление продукта</title>
	<meta charset="utf-8">
</head>
<body>
	<div style="text-align: center; background-color:#006400; width: 80%; border-radius: 25px; height: 17%; margin: auto;">
		<h1 align="center"><em>Добавление товара</em></h1>
	</div>
	<div align="center" style="text-align: center; margin: auto;">
		<p align="center"><a href="index.php">На главную страницу</a></p>
	</div>
	<div align="center" style="text-align: center; background-color:#006400; width: 80%; border-radius: 25px; height: 17%; margin: auto;">
		<form action="addcatalogform.php" method="POST" enctype="multipart/form-data">
			<p>Тип продукта:
				<select name="type" size="1">
					<option value="Чай">Чай</option>
					<option value="Прочее">Прочее</option>
				</select>
			</p>
			<p>Наименование продукта: <input type="text" name="namepr" required></p>
			<p>Кратокое описание: <input type="text" name="descr" style="width: 300px; height: 150px;" required></p>
			<p>Производитель:
				<select name="gen" size="1">
					<option value="Магазин">Магазин</option>
					<option value="Покупное">Покупное</option>
				</select>
			</p>
			<p>Цена(50г): <input type="text" name="cost50" required></p>
			<p>Цена(200г): <input type="text" name="cost200" required></p>
			<p>Цена(500г): <input type="text" name="cost500" required></p>
			<p>Фото товара: <input type="file" name="photo"></p>
			<input type="submit" value="Подтвердить">
		</form>
	</div>
</body>
</html>