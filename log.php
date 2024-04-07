<?php
$server="localhost";
$username="root";
$password="";
$dbname="signup";
$con = mysqli_connect($server, $username, $password, $dbname);
if(!$con)
{
  echo "Not connected";
}
else
{
  echo "connected";
}
$username=$_POST['name'];
$password=$_POST['pass'];

$sql = "SELECT * FROM `signdata` WHERE username='$username' AND password='$password' ";
$result = mysqli_query($con,$sql);
$num = mysqli_num_rows($result);
      if($num == 1)
      {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location:index.html");
      }
      else
      {
        echo "Failed";
      }
?>