<?php
include("connect.php");
if($_SERVER["REQUEST_METHOD"]==="POST")
{
$uid=$_POST["uname"];
$pwd=$_POST["pass"];
$sql="SELECT * FROM signup WHERE username='$uid'";
    
    $res=mysqli_query($con,$sql)
    or
    die("Query Execution Error");
    while ($row = mysqli_fetch_array($res)){
        if($row['password']!=$pwd ){
            echo '<script>alert("Password Mismatch")</script>';
            echo '<script>window.location.href="login.html"</script>';
        }
        else{
            echo '<script>window.location.href=""</script>';
        }
        

}
}
?>