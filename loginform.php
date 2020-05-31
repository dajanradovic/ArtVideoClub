<?php
session_start();
include_once 'databaseconnection.php';

$username=mysqli_real_escape_string($conn, $_POST['username']);
$password=mysqli_real_escape_string($conn, $_POST['password']);

if (empty($username) || empty($password)){

    header("Location: login.php?login=errorpraznopolje" );
    exit();
}

else {

   $sql="SELECT * FROM users WHERE username='$username';";
   $result = mysqli_query($conn, $sql);
   $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1){

             header("Location: login.php?login=errornijedoniorezultat" );
             exit();
        }
        
        else {
            if ($row = mysqli_fetch_assoc($result)){

                if(!$password === $row['password']){
                    header("Location: login.php?login=errorkrivipass" );
                    exit();

                }

                else {
                    $_SESSION['ID'] = $row['id'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['surname'] = $row['surname'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['password'] = $row['password'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['avatarstring'] = $row['avatarString'];

                    header("Location: userhomepage.php" );
                    exit();
                }
            }

        }
                    

}
?>