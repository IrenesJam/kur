<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AboutUs</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"href=https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"href="css/style.css">
    <link rel="stylesheet"href="css/about.css">
</head>
<body>
    <div class="page page-light">
        <div class="wrapper">
            <header class="header">
                <nav>
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link" href="mg.php">Мужские группы</a></li>
                        <li class="nav-item"><a class="nav-link" href="gg.php">Женские группы</a></li>
                        <li class="nav-item"><a class="nav-link" href="solo.php">Соло исполнители</a></li>
                    </ul>
                </nav>
                <img src="img/moonsunsmall.png" alt="Logo">
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="index.php">Главная страница</a></li>
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

            <div class="article">
                <div class="wrapper">
                    <div class="a-text">
                        <p class="text">
                            На этой странице мы подробнее расскажем о системе работы нашего магазина ответив на интересующие вас вопросы
                            <br>
                            <br>
                        </p>
                        <p class="question">
                            ВЫ ПРОДАЕТЕ ОРИГИНАЛЬНУЮ ПРОДУКЦИЮ?
                        </p>
                        <p class="answer">
                            В нашем магазине продается только оригинальная продукция. Убедиться в этом вы можете проверив наклейку KOMCA на обратной стороне каждого альбома. 
                            KOMCA — это аббревиатура Korea Music Copyright Association (Корейская ассоциация авторского права на музыку). 
                            Данная ассоциация защищает права интеллектуальной собственности — она отмечает специальной наклейкой с этой самой надписью "KOMCA" большинство подлинных корейских альбомов.
                            <br>
                        </p>
                        <p class="question">
                            ЦЕНА НА АЛЬБОМЫ ФИКСИРОВАННАЯ?
                        </p>
                        <p class="answer">
                            Мы закупаем альбомы в Южной Корее в их валюте(вонах), поэтому цена альбома напрямую зависит от курса валюты. Мы стараемся находить поставщиков с минимальными ценами, чтобы 
                            вы смогли поддержать своих любимых исполнителей за наименьшую плату.
                        </p>
                        <p class="question">
                            КАК Я МОГУ УЗНАТЬ, КОГДА ПРИЕДЕТ МОЙ ЗАКАЗ?
                        </p>
                        <p class="answer">
                            В нашем магазине есть возможность сделать предзаказ продукции, что, с одной стороны, позволит вам получить дополнительные подарки, а с другой,
                             увеличит время ожидания после оформления заказа. Мы всегда стараемся доставить все в кратчайшие сроки, но доставка идет из самой Кореи, поэтому сроки могут варьироваться от 1,5 до 2 месяцев без предзаказа 
                             и достигать до 3 месяцев с предзаказом(с момента оформления заказа). Для каждого вашего заказа мы выдаем номер отслеживания, чтобы вы в любой момент могли проверить, где ваша посылка.
                            Также вы всегда можете уточнить, есть ли желаемый альбом/альбомы в наличии на нашем сайте и посетив физический магазин приобрести его 
                             уже в тот же день.
                        </p>
                        <p class="question">
                            ЧТО ДЕЛАТЬ, ЕСЛИ МОЙ ЗАКАЗ ПРИШЕЛ С ДЕФЕКТОМ?
                        </p>
                        <p class="answer">
                            Во-первых, мы хотели бы уточнить, что наши сотрудники очень бережно упаковывают каждый заказ с целью не повредить его. Если к вам посылка пришла уже с дефектом можете все равно обращаться
                            к нам, мы постараемся уладить вопрос. 
                        </p>
                        <p class="question">
                            АЛЬБОМА, КОТОРЫЙ Я БЫ ХОТЕЛ ПРИОБРЕСТИ, НЕТ В ПРОДАЖЕ? КАК БЫТЬ?
                        </p>
                        <p class="answer">
                            Для решения этого вопроса вы можете написать нам в поддержку(контакты указаны ниже). Мы постараемся учитывая ваши просьбы и пожелания посмотреть, сможем ли мы приобрести желаемыйвами товар.
                        </p>
                    </div>
                    <div class="a-line"></div>
                    <li class="a-item"><a class="a-link" href="https://vk.com/idirenemartus">Поддержка ВКонтакте</a></li>
                    <li class="a-item"><a class="a-link" href="https://www.instagram.com/peach_beach13/">Поддержка Instagram</a></li>
                    <li class="a-item"><a class="a-link" href="https://open.spotify.com/playlist/7FV0qEBnKZ1yp6Jz1dYuLT">Плейлист наших любимых песен</a></li>
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

            </div>
            </div>
        </div>
    </div>
</body>
</html>