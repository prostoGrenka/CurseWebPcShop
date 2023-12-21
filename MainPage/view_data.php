<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Вывод данных из базы в виде блоков товаров
$sql = "SELECT NamePC, Category, price, description, Picture FROM Computer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='product'>";
        echo "<div class='product-info'>";
        echo "<p>Название товара: " . $row["NamePc"] . "</p>";
        echo "<p>Цена: $" . $row["price"] . "</p>";
        echo "<p>Категория: " . $row["Category"] . "</p>";
        echo "<p>Описание: " . $row["description"] . "</p>";
        echo "</div>";
        echo "<img class='adaptive-image' src='data:image;base64," . $row["Picture"] . "' alt='Image'>";
        echo "<button onclick='addToCart(" . $row["id"] . ", \"" . $row["NamePc"] . "\", " . $row["price"] . ")'>Добавить в корзину</button>";
        echo "</div>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
