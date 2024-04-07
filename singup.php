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
// $username=$_POST['username'];
// $password=$_POST['password'];
// $cpassword=$_POST['cpassword'];
// $exists=false;
// if($password == $cpassword)
// {
//   $sql = "INSERT INTO `signdata`(`username`, `password`, `cpassword`) VALUES ('$username','$password','$cpassword')";
// }
// $result = mysqli_query($con , $sql);
// if($result)
// {
//     echo "Signup successfully";
// }
// else
// {
//     echo "Query faild.....";
// }
  // $showelert =false;
  // $showError =false;
  
  // if($_SERVER["REQUEST_METHOD"] == "POST")
  // {
  
  //   $username = $_POST["username"];
  //   $password = $_POST["password"];
  //   $cpassword = $_POST["cpassword"];
    // $exists =false;

  //   if(($password == $cpassword) && $exists == false)
  //   {
  //     $sql = "INSERT INTO `users`(`username`, `password`) VALUES ('$username','$password')";
  //     $result = mysqli_query($conn,$sql);
  //     if($result)
  //     {
  //       $showelert = true;
  //     }
  //   }
  //   else
  //   {
  //     $showError = "passwords do not match";
  //   }

  // }
?>
