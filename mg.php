<?php 
$user = "root";
$password="root";
$host="localhost";
$db="Shop";
$dbh='mysql:host='.$host.';dbname='.$db.';charsest=utf8';
$pdo=new PDO($dbh, $user, $password);
$sql2 = $pdo->prepare("SELECT * FROM Albums
LEFT JOIN Singers on Singers.SingerName = Albums.SingerName
WHERE SoloMF = 'M'");
$sql2->execute();
$mg = $sql2->fetchAll(PDO::FETCH_OBJ);
print_r($res);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BoyGroups</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"href=https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"href="css/mgstyle.css">
</head>
<body>
    <div class="page page-light">
        <div class="wrapper">
            <header class="header">
                <nav>
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link" href="index.php">Главная страница</a></li>
                        <li class="nav-item"><a class="nav-link" href="gg.php">Женские группы</a></li>
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

            <?php
            require_once "search.php";
            ?>
        
            <div class="page">
                <div class="wrapper">
                <h2 class="title-h2">Релизы мужских групп</h2>

                <div class="sort">

                <a href='?desc=1'>Отсортировать альбомы от самых новых к самым старым</a>
                <br>
                <br>
                <a href='?desc=0'>Отсортировать альбомы от самых старых к самым новым</a>
                <br>
                </div>
                <?php if(isset($_GET['desc']) AND $_GET['desc']==1)
                {
                $sql2 = $pdo->prepare("SELECT * FROM Albums
                LEFT JOIN Singers on Singers.SingerName = Albums.SingerName
                WHERE SoloMF = 'M' ORDER BY ReliseDate");
                $sql2->execute();
                $mg = $sql2->fetchAll(PDO::FETCH_OBJ);
                }else{
                $sql2 = $pdo->prepare("SELECT * FROM Albums
                LEFT JOIN Singers on Singers.SingerName = Albums.SingerName
                WHERE SoloMF = 'M' ORDER BY ReliseDate DESC");
                $sql2->execute();
                $mg = $sql2->fetchAll(PDO::FETCH_OBJ);
                }
                ?>

                <div class="latest-releases">
                    <?php foreach($mg as $mgroup):?>
                    <div class="release">
                        <img src="img/mgroup/<?php echo $mgroup->ImgName?>" alt="Release">
                        <p class="release-title"><?php echo $mgroup->SingerName?> - <?php echo $mgroup->AlbName?></p>
                        <p class="release-price"><?php echo $mgroup->AlbPrice?> BYN</p>
                        <br>
                    </div>
                    <?php endforeach?>
               </div>
            </div>
        </div>
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