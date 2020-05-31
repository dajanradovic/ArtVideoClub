
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8" />
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <title>VideoClub</title>
</head>

<body style="background-color:rgba(0,0,0,0.87)">
   
<?php

    if (empty ($_SESSION['username'])){
      
     include ("includes/headernormalversion.php");
               }
    
    
         else {
    
           include ("includes/headerloginversion.php");
         }
?>

    <div class="row" style="background-color: #282525;">

    <div class="row">
    <div class="col s5" >
        <h6 class="natpis"><u>Please login to your account</u>
        </h6>
    </div>
</div>

<div class="row">
<div id="signupforma" class="col s5 ">
    <form id="form2" action="loginform.php" method="POST">

       
        <div class="row">
            <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                <input id="username" type="text" name="username" class="validate" style="color: white">
                <label for="username">Username</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                <input id="password" type="password" name="password" class="validate" style="color: white">
                <label for="password">Password</label>
               
            </div>
                     
        </div>
        <div class="row">
            <div class="col s12">

            <?php if ($_SERVER['QUERY_STRING']=="login=errorpraznopolje"){
                        echo ('<p style="color:red; font-size:10px; margin-top:-80px; text-align:left;">You need to fill out all the field</p>');
            }

            if ($_SERVER['QUERY_STRING']=="login=errorkrivipass"){
                echo ('<p style="color:red; font-size:10px; margin-top:-80px; text-align:left;">Wrong password</p>');
    }

    if ($_SERVER['QUERY_STRING']=="login=errornijedoniorezultat"){
        echo ('<p style="color:red; font-size:10px; margin-top:-80px; text-align:left;">Wrong username</p>');
}
                ?>
            </div>
        </div>
      
        <div class="row">
                <div class="input-field col s12" >
                      
                        <button id="loginbutton" class="btn waves-effect waves-light">Submit
                                <i class="material-icons right">send</i>
                              </button>
                   
                </div>
            </div>
    </form>
</div>

<div class="col s7 ">

<img id="thumbsup" class="responsive-img" src="images/thumbs-up.png" />
</div>
</div>




    </div>
    <?php
   include ('includes/footer.php');

   ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">


    </script>

    <script>
        $(document).ready(function () {
            M.updateTextFields();

            $(document).ready(function(){
    $('.sidenav').sidenav();
  });


        $('#loginbutton').click(function(e){
            e.preventDefault();
            $('#form2').submit();

        });
        });
    </script>
</body>

</html>