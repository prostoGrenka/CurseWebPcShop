<?php
require_once('../ConnectDB.php');

$login = $_POST['login'];
$pass = $_POST['pass'];

if(empty($login) || empty($pass))
{
    echo "Заполните все поля";
}
else{
    $sql = "SELECT * FROM `Users` WHERE login = '$login' AND pass = '$pass'";
    $result = $conn->query($sql);
    if($result -> num_rows > 0)
    {
        while($row = $result -> fetch_assoc())
        {
            header("Location: ../MainPage/mainPage.php");
        }
    }
    else
    {
        echo "Нет такого пользователя"; 
    }
}