<?php 
$servername = "localhost"; // Адрес сервера
$username = "root"; // Имя пользователя
$password = "root"; // Пароль
$BDname = "Shop"; // Название БД
 
// Подключение к БД
$mysqli = new mysqli($servername, $username, $password, $BDname); 
 
// Проверка на ошибку
if ($mysqli->connect_error) {
    printf("Соединение не удалось: %s\n", $mysqli->connect_error);
    exit();
}

// Получаем запрос
$inputSearch = $_REQUEST['search']; 
 
// Создаём SQL запрос
$sql = "SELECT * FROM `Albums` WHERE `AlbName` = '$inputSearch' || `SingerName` = '$inputSearch'";
 
// Отправляем SQL запрос
$result = $mysqli -> query($sql);

function doesItExist(array $arr) {
    // Создаём новый массив
    $data = array(
        'AlbName' => $arr['AlbName'] != false ? $arr['AlbName'] : 'Нет данных',
    );
    return $data; // Возвращаем этот массив
}

function countPeople($result) { 
    // Проверка на то, что строк больше нуля
    if ($result -> num_rows > 0) {
        // Цикл для вывода данных
        while ($row = $result -> fetch_assoc()) {
            // Получаем массив с строками которые нужно выводить
            $arr = doesItExist($row);
            // Вывод данных
            echo "Название альбома: ". $row['AlbName'] ."<br> <br>
            Исполнитель: ". $row['SingerName'] ."<br> <br>
            Описание альбома: ". $row['AlbDescription'] ."<br> <br>
            Цена: ". $row['AlbPrice'] ."<br> <br>
            Наличие: ". $row['Stock'] ."<br> <br>
            Количество в наличии: ". $row['ProQuantity'] ."<br> <br>
            Дата релиза: ". $row['ReliseDate'] ."<br> <br>
            "?> <img src="img/<?php echo $row['ImgName']?>" <?php echo ""."<br>";
        }
        
    // Если данных нет
    } else {
        echo "Никто не найден";
    }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GirlGroups</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css> <link
        rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/mgstyle.css">
</head>

<body>
    <div class="page page-light">
        <div class="wrapper">
            <header class="header">
                <nav>
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link" href="mg.php">Мужские группы</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php">Главная страница</a></li>
                        <li class="nav-item"><a class="nav-link" href="solo.php">Соло исполнители</a></li>
                    </ul>
                </nav>
                <img src="img/moonsunsmall.png" alt="Logo">
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="aboutus.php">О нас</a></li>
                    <li class="nav-item"><a class="nav-link" href="reviews.php">Отзывы</a></li>
                    <li class="nav-item"><a class="nav-link" href="cabinet.php">Личный кабинет</a></li>
                </ul>
                <div class="cart">
                    <span class="cart-count">5</span>
                </div>
            </header>

            <div class="line"></div>
<br>
<br>
            <form action="<?= $_SERVER['SCRIPT_NAME'] ?>">
                    <div class="search">
                        <input type="text" name="search" class="searchTerm"
                            placeholder="Введите имя исполнителя или название альбома">
                        <button type="submit" class="searchButton">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
            </form>
            <br>
<br>
            <?php
            countPeople($result); // Функция вывода пользователей
            ?>

        </div>


        <div class="page-dark">
            <div class="wrapper">
                <footer class="footer">
                    <div class="line"></div>
                    <div class="footer-logo">
                        <img src="img/moonsunsmall.png" alt="logo">
                        <h2 class="logo-title">The MoonSun Store</h2>
                    </div>
                </footer>
            </div>
        </div>
</body>

</html>