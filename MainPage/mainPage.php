<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Петровский Магазинчик</title>
    <link rel="stylesheet" href="styleForMainPage.css">
</head>
<body>
<header>
    <h1>Петровский магазинчик</h1>
    <h2>Добро пожаловать в наш магазин</h2>
</header>

<nav>
    <a href="../MainPage/mainPage.php">Главная страница</a>
    <a href="../addDataOnSite/addData.html">Добавить товар</a>
    <a href="../PageSupport/aboutSite.html">О нас</a>
    <a href="../Account/account.html">Аккаунт</a>
    <a href="../Authorization/PageLogin.php">Выйти</a>
</nav>

<section>

    <h2>Главная страница</h2>
    <p>Добро пожаловать на главную страницу!</p>

    <div class="products-container">
        <?php include 'view_data.php'; ?>
    </div>

</section>

<footer>
    <p>&copy; Работу выполнил Ушаков Евгений Алексеевич  </p>
</footer>

</body>
</html>
