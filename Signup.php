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
$ins = "INSERT INTO signup(Name,Date,Email,Phoneno,username,password) VALUES ('$name','$date','$email','$phone','$uid','$pwd')";
$result = mysqli_query($con,$ins) or
die("Error querying the database");
echo "operation success, pls refresh your database";
}
?>