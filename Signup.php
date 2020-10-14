<?php
include("connect.php");
if($_SERVER["REQUEST_METHOD"]==="POST")
{
$name=$_POST["name"];
$date=$_POST["date"];
$email=$_POST["mail"];
$phone=$_POST["phone"];
$uid=$_POST["uname"];
$pwd=$_POST["pass"];

$che = "SELECT * FROM signup WHERE username=$uid";
$res = mysqli_query($con,$che);
$ins = "INSERT INTO signup(Name,Date,Email,Phoneno,username,password) VALUES ('$name','$date','$email','$phone','$uid','$pwd')";
$result = mysqli_query($con,$ins) or
die("Error querying the database");
if($che=="")
{
    echo '<script>alert("Succesfully Signed Up")</script>';
    echo '<script>window.location.href="login.html"</script>';
}
else
{
    echo '<script>alert("User aldready exits")</script>';
    echo '<script>window.location.href="login.html"</script>';
}

}
?>