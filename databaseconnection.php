<?php

$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "dajanova_baza";

$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);
mysqli_set_charset($conn,"utf8");
