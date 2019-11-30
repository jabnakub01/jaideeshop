<?php
    session_start();
    $name = $_SESSION["name"];
    $age = $_SESSION["age"];
    session_destroy(); //การทำลาย Session ทิ้ง ลบทุกตัว
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>page 3</title>
</head>
<body>
    <p>Name : <?php echo $name; ?></p>
    <p>Age : <?php echo $age; ?></p>
    <a href="page4.php">Next--></a>
</body>
</html>