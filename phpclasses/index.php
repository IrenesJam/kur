<!DOCTYPE html>
<html>
<head>
<title>Reviews</title>
<meta charset="utf-8" />
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"href=https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"href="css/style.css">
</head>
<body>

    <div class="page page-light">
        <div class="wrapper">
            <header class="header">
                <nav>
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link" href="mg.html">Мужские группы</a></li>
                        <li class="nav-item"><a class="nav-link" href="gg.html">Женские группы</a></li>
                        <li class="nav-item"><a class="nav-link" href="solo.html">Соло исполнители</a></li>
                    </ul>
                </nav>
                <img src="img/moonsunsmall.png" alt="Logo">
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="aboutus.html">О нас</a></li>
                    <li class="nav-item"><a class="nav-link" href="phpclasses/index.php">Отзывы</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Личный кабинет</a></li>
                </ul>
                <div class="cart">
                    <span class="cart-count">5</span>
                </div>
            </header>

            <div class="line"></div>
		</div>
    </div>





<h2>Список пользователей</h2>
<?php
$conn =new mysqli("localhost", "root", "root", "Shop");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "SELECT AlbumID, AlbName, SingerName  FROM Albums";
if($result = $conn->query($sql)){
    $rowsCount = $result->num_rows; // количество полученных строк
    echo "<p>Получено объектов: $rowsCount</p>";
    echo "<table><tr><th>Id</th><th>Название альбома</th><th>Исполнтель</th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["AlbumID"] . "</td>";
            echo "<td>" . $row["AlbName"] . "</td>";
            echo "<td>" . $row["SingerName"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>
</body>
</html>