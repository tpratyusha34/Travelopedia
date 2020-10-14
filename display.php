<?php
include("connect.php");
if($_SERVER["REQUEST_METHOD"]==="GET")
{
$ins = "Select * from travel";
$result = mysqli_query($con,$ins) or
die("Error querying the database");
while ($row = mysqli_fetch_assoc($result)){
  
 echo "<br> Destination: ". $row["Destination"]. " on  ". $row["Date"];
}
}
?>