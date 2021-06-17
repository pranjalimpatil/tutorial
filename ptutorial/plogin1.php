<?php
$con=mysqli_connect("localhost","root","","tut") or die("Couldn't connect".mysqli_error());
session_start();
$name=$_POST["email"];
$pwd=$_POST["pwd"];
$_SESSION["email1"]=$name;







$s="select * from parent";
$result=mysqli_query($con,$s);

while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
if($row["email"]==$name && $row["pwd"]==$pwd)
{
    header('Location:cmt.php');
}
}


    echo "<script>document.location='plogin.php';alert('Wrong password or email id .Please try again.')</script>";



?>