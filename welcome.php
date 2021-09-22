<?php

session_start();
echo "Welcome " . $_SESSION['email'];

echo "<br> Click here to  <a href='logout.php'> LogOut </a> " ;


?>