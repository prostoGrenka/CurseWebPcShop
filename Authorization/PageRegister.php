<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <form action = "register.php" method = "post">
        <input type="text" placeholder = "Придумайте себе логин" name = "login">
        <input type="text" placeholder = "Придумайте пароль" name = "pass">
        <input type="password" placeholder = "Повторите пароль" name = "repeatpass">
        <input type="text" placeholder = "Введите вашу почту" name = "email">
        <button type = "sudmit">Зарегистрироваться</button>
        <p> У меня уже есть аккаунт - <a href="PageLogin.php"> Войти</a> </p>
    </form>
</body>
</html>