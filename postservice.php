<?php
session_start();
include_once 'databaseconnection.php';




$message = mysqli_real_escape_string($conn,$_GET['komentar']);
$userId = mysqli_real_escape_string($conn,$_GET['userId']);
$movieId = mysqli_real_escape_string($conn,$_GET['movieId']);
echo $message;
echo $userId;
echo $movieId;
$sql = "INSERT INTO posts (message, userId, movieId) VALUES ('$message', '$userId', '$movieId');";

mysqli_query($conn, $sql);


header("Location: prikazfilma.php?" . $_SESSION['naziv'] );



?>