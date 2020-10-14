<?php
include("connect.php");
if($_SERVER["REQUEST_METHOD"]==="POST")
{
    $dis=$_POST["mem"];
    $date=$_POST["date"];

$add = "INSERT INTO travel(Destination,Date) VALUES ('$dis','$date')";
$result = mysqli_query($con,$add) or
die("Error querying the database");
echo '<script>alert("Entry added now click on display to view your table")</script>';
echo '<script>window.location.href="list.html"</script>';

}
?>