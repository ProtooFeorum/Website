<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require 'db.php';
    ?>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $result = mysqli_query($link,"SELECT * FROM 'based'");
    do{
        echo "ID - ".$myrow['id']."<br>";
        echo "Заголовок - ".$myrow['title']."<br>";
        echo "Текст - ".$myrow['text']."<br>";
    }while ($myrow = mysqli_fetch_array($result));    
?>
</body>
</html>