<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
		<meta charset="utf-8"/>
		<style>
			input, button {
				width: 150px;
				margin: 5px;
				text-align: center;
			}
		</style>
</head>
<body>
    <a href="index1.html">Home Page</a>
    <h1>Регистрация нового пользователя </h1>

    
    <form method="POST" action="add_user.php">
        <a>Введите имя:</a></br>
        <input type="text" name="newName"/> </br>
        <a>Ваш e-mail:</a></br>
        <input type="text" name="newEmail"/> </br>
        <a>Логин:</a></br>
        <input type="text" name="newUser"/> </br>
        <a>Пароль:</a></br>
        <input type="password" name="newPwd"/> </br>
        <a>Повторите пароль:</a></br>
        <input type="password" name="chkPwd"/> </br>
        <button>Go</button> </br>
        </br>
        <a>Автор: Скорин Владислав (CYB-4)</a>
    </form>



</body>
</html>