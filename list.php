<?php
include("connect.php");
if($_SERVER["REQUEST_METHOD"]==="POST")
{
    $dis=$_POST["mem"];
    $date=$_POST["date"];
$ins = "Select * from travel";
$result = mysqli_query($con,$ins) or
die("Error querying the database");
while ($row = mysqli_fetch_assoc($result)){
   echo "{$row['Destination']}";
  echo "{$row['Date']}
 ";
}
}
?>