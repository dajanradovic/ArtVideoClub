<?php 
session_start();
include_once 'databaseconnection.php';
header('Content-type: text/html; charset=utf-8');
if (empty ($_SESSION['ID'])){
      $userId="";}

      else{
$userId = $_SESSION['ID'];}
global $movieId;
global $komentator;
global $postedon;
$_SESSION['naziv'] = $_SERVER['QUERY_STRING'];

    ?>

<!DOCTYPE html>
<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"/>
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">

     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <link rel="stylesheet" type="text/css" href="style.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    
    <title>VideoClub</title>
    </head>

<body  class="#bdbdbd grey lighten-1">

<?php

 if (empty ($_SESSION['username'])){
   
  include ("includes/headernormalversion.php");
            }


      else {

        include ("includes/headerloginversion.php");
      }
?>
      <?php

$naziv = $_GET['title'];
$sql="SELECT id, title, director, actors, year, genre, runningtime, rating, posteraddress, plot, trailerlink  FROM listafilmova where title=?;";
$stmt= mysqli_stmt_init ($conn);
mysqli_set_charset($conn,"utf8");
if (!mysqli_stmt_prepare($stmt, $sql)){
    echo ("SQL statement failed");

    }

    else {
//bind parameter to the placeholder

  mysqli_stmt_bind_param($stmt, "s", $naziv);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);

    }



    ?>
   <?php 
      while ($row = mysqli_fetch_assoc($result)){
        $GLOBALS['movieId']= $row['id'];
?>



        
 <div class="row mojwrapper pocetnaslika3" style="overflow:auto;">
    <div class="col m3 s12 " style="text-align:center;">
    <img class="responsive-img"  style="width:100%; height:auto;" src="<?php  echo $row['posteraddress'] ?>" >
    
    </div>
    <div col m2></div>
   
    <div class="col m7 s12">
    <table class="table" id="tablicaspodacima" style="width: 100%;">
           <tbody>

         
       
          <tr>
            <td>Title:</td>
            <td><?php echo $row['title'] ?></td>
            </tr>

            <tr>
            <td>Director:</td>
            <td><?php echo $row['director'] ?></td>
            </tr>
             
            <tr>
            <td>Actors:</td>
            <td><?php echo $row['actors'] ?></td>
            </tr>

            <tr>
            <td>Year:</td>
            <td><?php echo $row['year'] ?></td>
            </tr>

            <tr>
            <td>Genre:</td>
            <td><?php echo $row['genre'] ?></td>
            </tr>

            <tr>
            <td>Running time:</td>
            <td><?php echo $row['runningtime'] ?></td>
            </tr>

            <tr>
            <td>Rating:</td>
            <td><?php echo $row['rating'] ?></td>
            </tr>
         
            
        
           
     
        </tbody>
      </table>
            


    

<div class="col m12 s 12">
   
      <p class="sadrzaj"><u>Synopsis:</u></p>

      <p class="sadrzaj"><i><?php echo $row['plot'];  ?></i></p>
     
      </div>
 
 
 
 
       
 
 
      </div>
      </div>
      
      

     
     
      

      <div class="row" id="frameRow" >
        <div class="col m6 offset-m3 s12 mt-1" >
        <iframe  width="100%" height="315" src="https://www.youtube.com/embed/<?php echo $row['trailerlink'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <?php } ?>
      </div>
        </div>

       

      <div class="row" >
        <div class="col s12 ">
          <p class="sadrzaj" style="color:black"><u>Comments:</u></p>
        </div>
        </div>

        <div class="row" style="min-height:100px; margin-top: 60px;">
        <div class="col s12">
          <ul style="list-style-type: circle;">
        <?php 

        $sql = "SELECT * FROM posts where movieId= '$movieId';";
        $result2 = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result2)){
                $userid = $row['userId'];
                $GLOBALS['postedon'] = $row['postedOn'];
                $sql2= "SELECT username FROM users where id= '$userid';";
                  $result3 = mysqli_query($conn, $sql2);
                  while ($row2 = mysqli_fetch_assoc($result3)){
                    $GLOBALS['komentator'] = $row2['username'];}

        echo  ('<li style="font-size: 16px; font-family: Arial; color: black;">- ' . $row['message'] .'<span "><i style="color:black;"> added by:<b>    ' . $komentator . '</b> on: <b>' . $postedon .'</b></i></span></li>');
          } ?>
          </ul>
        </div>
        </div>
        
       

          <?php 

        if (empty ($_SESSION['username'])){

          echo ('<div class="row" style="margin-top: 20px;">
                    <span style="color:black;">Log in to post comments</span>
          
          </div>');}

          else {
  
            include ("postcommentsection.php");
      
          }
  ?>
        
        <?php
   include ('includes/footer.php');

   ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
	
	
	</script>
	
	<script> 
	
	$(document).ready(function(){

    
    $('.sidenav').sidenav();
  });
    
   /* $('#submitbutton').on('click', function(){
           
          $('#form3').submit();
          
    });*/
    
			
  </script>
</body>




</html>