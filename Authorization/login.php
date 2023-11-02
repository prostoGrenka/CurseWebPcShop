<?php
require_once('../ConnectDB.php');

$login = $_POST['login'];
$pass = $_POST['pass'];

if(empty($login) || empty($pass))
{
    echo "Заполните все поля";
}
else{
    $sql = "SELECT * FROM `User` WHERE login = '$login' AND pass = '$pass'";
    $result = $conn->query($sql);
    if($result -> num_rows > 0)
    {
        while($row = $result -> fetch_assoc())
        {
            header("Location: ../MainPage/mainPage.html");
        }
    }
    else
    {
        echo "Нет такого пользователя"; 
    }
}