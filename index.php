<?php
session_start();
    $name = "Noraseat Panawong";
    echo $name;
    $_SESSION['name']=$name;
?>
<a href="page2.php">Next--></a>