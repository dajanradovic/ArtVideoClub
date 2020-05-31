
<nav>
        <div class="nav-wrapper black" id="vrh">
            <a href="index.php" class="brand-logo " style="font-family: 'Permanent Marker', cursive;">VideoClub<small> - for all
                    the real movie lovers<small></a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

            <ul id="navbarul" id="nav-mobile" class="right hide-on-med-and-down">
                <li class="navbarli" id="directors"> <a href="directors.php">Directors</a></li>
                <li  class="navbarli"><a style="display:inline-block;" href="./userhomepage.php">Hi, <?php echo  $_SESSION['username']; ?> </a>
                <li class="navbarli"><a class="waves-effect waves-light btn-small" href="logout.php">Log-out</a></li>
            </ul>

        </div>

    </nav>

    <ul class="sidenav" id="mobile-demo"style="background-color:black;">
    <li class="navbarli" id="directors"> <a style="color:white; padding:0 32px;" href="directors.php">Directors</a></li>
                <li  class="navbarli"><a style="display:inline-block; color:white; padding: 0 32px;" href="./userhomepage.php">Hi, <?php echo  $_SESSION['username']; ?> </a>
                <li class="navbarli"><a class="waves-effect waves-light btn-small" href="logout.php">Log-out</a></li>
  </ul>

  