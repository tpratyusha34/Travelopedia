<?php
include("connect.php");
if($_SERVER["REQUEST_METHOD"]==="GET")
{
$ins = "Select * from signup";
$result = mysqli_query($con,$ins) or
die("Error querying the database");

echo "<h2  style='font-family: Georgia, serif ;margin-top: 20px'>List of Users</h2>";
echo "<table><tr><th> Name </th> 
 <th>Date</th>
 <th>Email</th>
 <th>Phone No</th>
 <th>Username</th></tr>";
while ($row = mysqli_fetch_assoc($result)){
  
 
 echo "<tr>";

 echo "<td>" . $row['Name'] . "</td>";

 echo "<td>" . $row['Date'] . "</td>";
 echo "<td>" . $row['Email'] . "</td>";
 echo "<td>" . $row['Phoneno'] . "</td>";
 echo "<td>" . $row['username'] . "</td>";

 echo "</tr>";


}
}
?>