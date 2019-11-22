

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

<body class="#bdbdbd grey lighten-1">
    <nav>
        <div class="nav-wrapper black">
            <a href="#" class="brand-logo " style="font-family: 'Permanent Marker', cursive;">VideoClub<small> - for all
                    the real movie lovers<small></a>
            <ul id="navbarul" id="nav-mobile" class="right hide-on-med-and-down">
                <li class="navbarli" id="directors"> <a href="directors.html">Directors</a></li>
                <div id="crta"></div>
                <li class="navbarli"><a class="waves-effect waves-light btn-small" href="login.html">Log-in</a></button>
                <li class="navbarli"><a class="waves-effect waves-light btn-small" href="sign-up.php">Sign-up</a></li>
            </ul>

        </div>

    </nav>

    <div class="row" style="background-color: #282525;">

    <?php

 


if ($_SERVER ['QUERY_STRING'] == "signup=success"){

    echo('<div class="row">
    <div class="col s5" >
        <h6 class="natpis">Your registration has been successful.
        </h6>
    </div>
</div>');
    include ("logininclude.html");
                    }
     

    else {

     echo ('



        <div class="row">
        <div class="col s5" >
            <h6 class="natpis"><u>Sign-in to our page so you can get access to all the movies in our database, watching, writin posts...</u>
            </h6>
        </div>
    </div>

       

        <div class="row">
            <div id="signupforma" class="col s5 ">
                <form id="form" action="forma.php" method="POST">

                    <div class="row">
                        <div class="input-field col s12">
                                <i class="material-icons prefix">account_circle</i>
                            <input name="name" id="first_name" type="text" class="validate" style="color: white">
                            <label for="first_name">First Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                                <i class="material-icons prefix">account_circle</i>
                            <input id="last_name" name="surname" type="text" class="validate" style="color: white">
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>
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
                        <div class="input-field col s12">
                                <i class="material-icons prefix">email</i>
                            <input id="email" type="email" class="validate" name="email" style="color: white">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                            <div class="input-field col s12" >
                                  
                                    <button id="submitbutton" class="btn waves-effect waves-light">Submit
                                            <i class="material-icons right">send</i>
                                          </button>
                               
                            </div>
                        </div>
                </form>
            </div>

            <div class="col s7 ">

            <img id="thumbsup" class="responsive-img" src="images/thumbs-up.png" />
            </div>
        </div>');}
        ?>


    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">


    </script>

    <script>
        $(document).ready(function () {
            M.updateTextFields();


        $('#submitbutton').click(function(e){
            e.preventDefault();
            $('#form').submit();

        });
        });
    </script>
</body>

</html>