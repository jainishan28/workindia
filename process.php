<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "workindia";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}

if(isset($_POST['save']))
{	 
	 $website = $_POST['website'];
	 $password = $_POST['password'];
	 $sql = "INSERT INTO passowrd (website,passowrd)
	 VALUES ('$website',MD5('$password'))";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

?>
<h1>Password stored</h1>