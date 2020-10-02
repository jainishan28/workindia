<?php 

    include("includes/config.php");
    include("includes/classes/User.php");

  if(isset($_SESSION['userLoggedIn'])){
    $userLoggedIn = new User($con, $_SESSION['userLoggedIn']);
    $username = $userLoggedIn->getUsername();
     echo "<script> userLoggedIn = '$username';</script>";
  }
  else{
      header("Location: register.php");
  }

?>

<html>
  <head>
    <title>
    Welcome
    </title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
<style>
body{background-color:black;}
input{color:black;}
</style>

  </head>
  <body>
 

<form method="post" action="process.php">
		<label>WEBSITE</label>
    <br>
		<input type="text" name="website">
		<br>
    <label>PASSWORD</label><br>
		<input type="password" name="password">
		<br>
	<br>
		<input style="color:black;" type="submit" name="save" value="submit">
	</form>


<?php

$servername='localhost';
$username='root';
$password='';
$dbname = "workindia";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}




$result = mysqli_query($conn,"SELECT * FROM passowrd");

  if (mysqli_num_rows($result) > 0) {
?>
  <table class="table">
  
  <tr>
    <td>Website</td>
    <td>Password</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["website"]; ?></td>
    <td><?php echo $row["passowrd"]; ?></td>
</tr>
<?php  } ?>
</table>
<?php } 

?>