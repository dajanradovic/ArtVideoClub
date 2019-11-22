<?php
session_start();
include_once 'databaseconnection.php';

$username=mysqli_real_escape_string($conn, $_POST['username']);
$password=mysqli_real_escape_string($conn, $_POST['password']);

if (empty($username) || empty($password)){

    header("Location: sign-up.php?login=errorpraznopolje" );
    exit();
}

else {

   $sql="SELECT * FROM users WHERE username='$username';";
   $result = mysqli_query($conn, $sql);
   $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1){

             header("Location: sign-up.php?login=errornijedoniorezultat" );
             exit();
        }
        
        else {
            if ($row = mysqli_fetch_assoc($result)){

                if(!$password === $row['password']){
                    header("Location: sign-up.php?login=errorkrivipass" );
                    exit();

                }

                else {
                    $_SESSION['ID'] = $row['ID'];
                    $_SESSION['name'] = $row['Name'];
                    $_SESSION['surname'] = $row['Surname'];
                    $_SESSION['username'] = $row['Username'];
                    $_SESSION['password'] = $row['Password'];
                    $_SESSION['email'] = $row['Email'];
                    $_SESSION['avatarstring'] = $row['avatarString'];

                    header("Location: userhomepage.php" );
                    exit();
                }
            }

        }
                    

}
?>