<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>EDUSITE TUTORIALS</title>
    <style>
        .head1
        {
            padding-top:10px;
            
            height: 90px;
        }
        
.navibar{
    background-color:#ac7339;
    
}


      

    </style>
    
  </head>
  <body>
    
  <div class="head1">
        
        <h1 style="text-align:center;">EDUSITE TUTORIALS</h1>
    </div>
    <div class="navibar">
    <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" style="color:black;"href="homepage.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:black;"href="about.html">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:black;"href="courses.php">Courses</a>
  </li>
  <div class="contactus">
  <li class="nav-item">
    <a class="nav-link" style="color:black;"href="contact.html">Contact Us</a>
  </li>
  </div>
  <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" style="background-color:black;color:white;"type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Reviews
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="sreview.php">Student Reviews</a>
      <a class="dropdown-item" href="parentreview.php">Parents Reviews</a>
       
    </div>
  </div>
  
  <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" style="background-color:black;color:white;"type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      ADMIN SIGN IN
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="alogin.php">Update courses</a>
       
    </div>
  </div>
</ul>
    </div>
   <?php
        
$con=mysqli_connect("localhost","root","","tut") or die("Couldn't connect".mysqli_error());
        $s="select * from courses";
        $data=mysqli_query($con,$s);
   ?>
<div>
  
    <div class="row row-cols-1 row-cols-md-3">
    
        <?php
           while($row=mysqli_fetch_array($data,MYSQLI_ASSOC))
        {

        ?>
        <div class="col mb-4" >
          <div class="card h-100">
            
                    <div class="card-body"  style="background-image:url(lib.jpg);color:white;">
                         <h5 class="card-title"><?php echo $row["name"];?></h5>
             
                          <p>Price(Rs.):<?php echo $row["price"];?></p>
           
                    </div>
           </div>
        </div>
        <?php
        }
        ?>
        
    </div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>