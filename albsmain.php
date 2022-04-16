<?php 
function select($table, $where, $row){
$user = "root";
$password="root";
$host="localhost";
$db="Shop";
$dbh='mysql:host='.$host.';dbname='.$db.';charsest=utf8';
$pdo=new PDO($dbh, $user, $password);
$sql2 = $pdo->prepare("SELECT * FROM Albums
LEFT JOIN Singers on Singers.SingerName = Albums.SingerName
WHERE SoloMF = 'F'");
$sql2->execute();
$gg = $sql2->fetchAll(PDO::FETCH_OBJ);
//print_r($gg);

$sql = "SELECT $row FROM $table WHERE $where";

}
?>



<?php 
function selection($table, $where, $row)
{
    $conn =new mysqli("localhost", "root", "root", "Shop");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }

   
   $sql = "SELECT * FROM $table WHERE $where";

   if($result = $conn->query($sql)){
 
    foreach($result as $rows){
        echo "<tr>";
            echo "<td>" . $rows["$row"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css> <link
        rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="album">
        <p class="alb_name">
        <?php foreach($gg as $ggroup)
              $albname = selection("Albums", "AlbumID = 234", "AlbumID");
        ?>
        </p>
        <en>
        <?php
              selection("Albums", "AlbumID = 235", "ReliseDate");
        ?>
        </en>
        <p>
        <?php
              selection("Albums", "AlbumID = 235", "AlbDescription");
        ?>
        </p>
    </div>
</body>

</html>