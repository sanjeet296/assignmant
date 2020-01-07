<?php
session_start();
$db = mysqli_connect('localhost', 'phpmyadmin', 'java@123', 'hr_dev');

$query="select * from user_profile";
$run = mysqli_query($db,$query);
if($run==true){
	$data=mysqli_fetch_assoc($run);
	$_SESSION["id"]=$id;
	
	$userid=md5($data['user_Id']);
	
	$creation_timestamp = date('Y-m-d H:i:s');
	$creation_date_time=45;

	$sql="INSERT INTO `login_tokens`(`userid`, `token`, `creation_timestamp`,`creation_date_time`) VALUES (' $userid',' $token','$creation_timestamp','$creation_date_time')";
	echo $sql;

	$go=mysqli_query($db,$sql);

}
?>
<?php
if(isset($_SESSION["id"])) {
	header("Location:home.php");
	}
	
$db = mysqli_connect('localhost', 'phpmyadmin', 'java@123', 'hr_dev');
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  

  
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	 
  
  	  header('location: home.php');
  	}else {
  		echo "error password not matched";
  	}
  
}

?>
