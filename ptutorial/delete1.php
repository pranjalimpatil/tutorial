<?php

$con=mysqli_connect("localhost","root","","tut") or die("Couldn't connect".mysqli_error());

$cid=$_POST["cid"];

$s="delete from courses where cid='$cid'";

$result=mysqli_query($con,$s);

if($result)
{
    
    echo "<script>document.location='admincourse.php';alert('Course deleted successfully')</script>";

}
else
{
    
    echo "<script>document.location='delete.php';alert('Deletion failed.Please try again')</script>";

}




?>