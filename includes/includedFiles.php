 <!-- THIS FILE CHECKS WHETHER THE CODE IS SEND THROUGH AJAX
  OR SIMPLY MANUALLY    FOR SEAMLESS TRANSITION FROM ONE PAGE TO 
  ANOTHER WITHOUT STOPPING THE MUSIC -->
<?php 

    if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])){
        // IF AJAX THEN THIS CODE WILL EXCEUTED
        include("includes/config.php");
        include("includes/classes/User.php");
        // include("includes/classes/Artist.php");
        // include("includes/classes/Album.php");
        // include("includes/classes/Song.php");
        // include("includes/classes/Playlist.php");

        if(isset($_GET['userLoggedIn'])){
            $userLoggedIn = new User($con, $_GET['userLoggedIn']);
        }
        else{
            echo "username variable was not passed into page. Check the
            openPage JS function";
        }


    }
    else{
        include("includes/header.php");
       // include("includes/footer.php");
        $url = $_SERVER['REQUEST_URI'];
        echo "<script>openPage('$url')</script>";
        exit();

    }

?>