<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MainPage</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"href=https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
.search {
  width: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  position: relative;
}

.searchTerm {
  width: 100%;
  border: 3px solid #D78398;
  border-right: none;
  padding: 5px;
  height: 20px;
  border-radius: 5px 0 0 5px;
  outline: none;
}

.searchTerm:focus {
  color: #212121;
}

.searchButton {
  width: 40px;
  height: 36px;
  border: 1px solid #D78398;
  background: #D78398;
  text-align: center;
  color: #eeeeee;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}
  </style>
</head>



<body>
<div class="wrap">
                <div class="wrapper">
                <form action="<?= $_SERVER['SCRIPT_NAME'] ?>">
                    <div class="search">
                      <input type="text" name="search" class="searchTerm" placeholder="Нажмите чтобы перейти на страницу поиска" onClick='location.href="searchpage.php"'>
                      <button type="submit" class="searchButton">
                      <i class="fa fa-search"></i>
                      </button>
                      </form>
                    </div>
                </div>


</div>
</body>
</html>