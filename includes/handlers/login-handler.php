<?php

if(isset($_POST['loginButton'])){
    // LOGIN BUTTON PRESSED
    $username = $_POST['loginUsername'];
    $password = $_POST['loginPassword'];

    $result = $account->login($username,$password);

    if($result== true){
        $_SESSION['userLoggedIn'] = $username;
        header("location: index.php");
    }
 }

?>