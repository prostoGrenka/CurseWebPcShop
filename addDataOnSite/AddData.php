<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Обработка формы для вставки новых данных
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $category = $_POST["category"];
    $price = $_POST["price"];
    $description = $_POST["description"];

    // Проверка наличия загруженного файла
    if (isset($_FILES['image'])) {
        $image = file_get_contents($_FILES['image']['tmp_name']);
        $image = base64_encode($image);

        $sql = "INSERT INTO Computer (NamePC, Category, price, Description, Picture)
                VALUES ('$name', '$category', $price, '$description', '$image')";

        if ($conn->query($sql) === TRUE) {
            echo "Товар успешно добавлен!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
