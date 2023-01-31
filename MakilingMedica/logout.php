<?php

session_start();


unset($_SESSION['id']);

session_unset();
session_destroy();
echo"LOGGING OUT.... PLEASE WAIT.....";
header('REFRESH: 2;url=index.php');
exit();