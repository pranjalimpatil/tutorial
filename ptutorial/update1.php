<?php

$con=mysqli_connect("localhost","root","","tut") or die("Couldn't connect".mysqli_error());
$cid=$_POST["cid"];

$name=$_POST["name"];
$price=$_POST["price"];

$s="update courses set name='$name',price='$price' where cid='$cid'";
$result=mysqli_query($con,$s);
if($result)
{
    
    echo "<script>document.location='admincourse.php';alert('Course updated successfully')</script>";
    
}
else
{
    
    echo "<script>document.location='update.php';alert('Upadation failed.Please try again')</script>";
   
}




?>