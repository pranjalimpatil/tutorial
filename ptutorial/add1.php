





<?php


$con=mysqli_connect("localhost","root","","tut") or die("Couldn't connect".mysqli_error());
$cid=$_POST["cid"];
$name=$_POST["name"];
$price=$_POST["price"];

$s="insert into courses values('$cid','$name','$price')";

$result=mysqli_query($con,$s);

if($result)
{
    
    
    
    echo "<script>document.location='admincourse.php';alert('Course added successfully')</script>";
    
    
}
else{
    
    echo "<script>document.location='add.php';alert('Addition of course failed.Please try again')</script>";
}

?>