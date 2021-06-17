<?php
$con=mysqli_connect("localhost","root","","tut") or die("Couldn't connect".mysqli_error());
session_start();
$name=$_POST["email"];
$pwd=$_POST["pwd"];
$_SESSION["email"]=$name;







$s="select * from student";
$result=mysqli_query($con,$s);

while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
if($row["email"]==$name && $row["pwd"]==$pwd)
{
    header('Location:cmts.php');
}
}


    echo "<script>document.location='slogin.php';alert('Wrong password or email id .Please try again.')</script>";



?>