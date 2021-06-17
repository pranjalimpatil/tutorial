<?php
$con=mysqli_connect("localhost","root","","tut") or die("Couldn't connect".mysqli_error());
session_start();
$name=$_SESSION["email1"];
$cmt=$_POST["comment"];


$q="select * from parent where email='$name'";
$data=mysqli_query($con,$q);
 
$name1=mysqli_fetch_array($data,MYSQLI_ASSOC);
$name2=$name1["name"];





$s="insert into preview values('$name2','$cmt')";
$result=mysqli_query($con,$s);



if($result)
{
    
    echo "<script>document.location='parentreview.php';alert('Your review is added successfully')</script>";
}
else{


    echo "<script>document.location='cmt.php';alert('Addition of your review is failed.Please try again.')</script>";
}


?>