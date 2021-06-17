<?php
$con=mysqli_connect("localhost","root","","tut") or die("Couldn't connect".mysqli_error());
session_start();
$name=$_SESSION["email"];
$cmt=$_POST["comment"];



$q="select name from student where email='$name'";
$data=mysqli_query($con,$q);

 
$name1=mysqli_fetch_array($data,MYSQLI_ASSOC);
$name2=$name1["name"];






$s="insert into sreview values('$name2','$cmt')";
$result=mysqli_query($con,$s);



if($result)
{
    
    echo "<script>document.location='sreview.php';alert('Your review is added successfully')</script>";
}
else{


    echo "<script>document.location='cmts.php';alert('Addition of your review is failed.Please try again.')</script>";
}


?>