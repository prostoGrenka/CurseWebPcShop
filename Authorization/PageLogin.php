<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <form action = "login.php" method = "post">

        <input type="text" placeholder = "Введите свой логин" name = "login">
        <input type="password" placeholder = "Введите пароль" name = "pass">

        <button type = "sudmit">Войти</button>
        <p>У меня еще нет аккаунта - <a href="PageRegister.php"> Зарегистрироваться</a></p>
    </form>

</body>
</html>