<?php
  session_start();
  $name = $_SESSION['name'];
  $new_name = $_SESSION['name']="Napat Maspansa";
  $_SESSION['age']=80;
  echo $new_name;
?>
<a href="page3.php">Next--></a>