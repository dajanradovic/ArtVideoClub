<?php
include_once 'databaseconnection.php';


$name = mysqli_real_escape_string($conn,$_POST['name']);
$surname = mysqli_real_escape_string($conn,$_POST['surname']);
$username = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$email = mysqli_real_escape_string($conn,$_POST['email']);

echo ($name);
$sql = "INSERT INTO users (name, surname, username, password, email) VALUES ('$name', '$surname', '$username', '$password', '$email');";

mysqli_query($conn, $sql);


header ("Location: sign-up.php?signup=success")
?>