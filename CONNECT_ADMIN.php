<?php
      include 'connectDB.php'; 

$user = $_POST['username'];
$pass = $_POST['password'];

$user = stripslashes($user);
$pass = stripslashes($pass);

$user = mysqli_real_escape_string($conn,$user);
$pass = mysqli_real_escape_string($conn,$pass);



$result = mysqli_query($conn,"SELECT *from administrator where username ='$user' and password ='$pass'")
or die("failed to query database".mysqli_error());
$row = mysqli_fetch_array($result);
if ($row['username'] == $user && $row['password'] == $pass){
  
  header("Location: index.php");
  
} else {
  echo "Login Failed! Please try again";
}
?>