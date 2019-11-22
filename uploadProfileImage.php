<?php
session_start();
include_once 'databaseconnection.php';
$id = $_SESSION['ID'];
//print_r ($id);

if (isset($_POST['submit'])){

        //getting all the needed data from the file we want to upload
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    //dijeljenja fajla u točki da se dobije naziv i extenzija
    $fileExt = explode ('.', $fileName);
    //sve u mala slova i uzimanje extenzije kao zadnji dio arraya
    $fileActualExt = strtolower(end($fileExt));

    //koje fajlove dozvoljavamo
    $allowed = array('jpg', 'jpeg', 'png');

             if (in_array($fileActualExt, $allowed)){
                    if ($fileError === 0){
                            if ($fileSize>10000){
                                $fileNameNew = uniqid('', true). "." . $fileActualExt; //kreira unikatno ime slike da se ne desi da ima dva ista imena
                                $fileDestination = 'uploads/' . $fileNameNew; //zadajemo konacnu destinaciju filea
                               move_uploaded_file($fileTmpName, $fileDestination); //funkcija kopira fajl iz temporary foldera u konacni folder
                               
                              $sql = "UPDATE users SET avatarString = '$fileNameNew' WHERE id='$id';";

                                mysqli_query($conn, $sql);
                               $_SESSION['avatarstring'] = $fileNameNew;
                               header("Location: userhomepage.php?upload=success");


                                
                            }
                            else{

                                echo("Your file is too big");
                            }

                    }
                    else {

                        echo ("There was an error uploading your file");
                    }



                    }

             else {

                    echo ("You cannot upload files of this type");
                }
    

}