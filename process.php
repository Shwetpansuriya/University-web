<?php
$server="localhost";
$username="root";
$password="";
$dbname="inquiryform";
$con = mysqli_connect($server, $username, $password, $dbname);
if(!$con)
{
    echo "not connected";
}

$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$email= $_POST['email'];
$mobile= $_POST['mobile'];
$message= $_POST['msg'];



$sql = "INSERT INTO `inquiry-data`(`Firstname`, `Lastname`, `Email`, `Mobile`, `Message`) VALUES ('$firstname','$lastname','$email','$mobile','$message')";
$result = mysqli_query($con , $sql);

if($result)
{
    echo "Data Submitted";
    header("location:index.html");
}
else
{
    echo "Query faild.....";
}
// $num = mysqli_num_rows($result);
// if($num == 1)
// {
//   header("location:index.html");
// }
// else
// {
//     echo "Faield";
// }
?>