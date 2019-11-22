<?php session_start();

unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['name']);
unset($_SESSION['surname']);
unset($_SESSION['email']);
unset($_SESSION['ID']);
 session_destroy();
 header('Location: index.php');


 ?>