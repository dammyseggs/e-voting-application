<?php 
   require_once "connect.php";
?>

<!doctype html>
<html>
<head>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Voting completed</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/styles.css">
<link rel="icon" href="images/jabu2.png" type="image/gif" sizes="16x16"> 
</head>
<body>

<div class="loader-bg">
	<div class="sk-folding-cube">
      <div class="sk-cube1 sk-cube"></div>
  	  <div class="sk-cube2 sk-cube"></div>
  	  <div class="sk-cube4 sk-cube"></div>
 	  <div class="sk-cube3 sk-cube"></div>
   </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <img src="images/naija decides.png" width="50" height="50" class="d-inline-block align-top col-2 img-fluid" alt="" > 
  <a class="navbar-brand" href="index.php">DAMI's E-voting system</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> 
  <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="voters_registration.php">Voters Registration</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="student_login.php">Voting</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Other options
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Nominees</a>
          <a class="dropdown-item" href="#">Voting page</a>
          <a class="dropdown-item" href="#">Administrator</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

      <h4 class="font-weight-bold font-italic text-muted text-center mt-4">YOUR VOTES COUNT</h4>
 
  <div class="container justify-content-center mt-5 bg-primary">
       <p> THANK YOU </p> 
       <p> VOTED SUCCESSFULLY </p>
  </div>

  <nav class="navbar navbar-dark bg-dark">
 <div class="container justify-content-center">
        <div class="navbar-text">
        <small> Copyright @ Famakinde Emmanuel</small>
        </div>
 </div>
	</nav>
      
       
        
         
          
           
            
  <script src="js/jquery-3.4.1.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/sweetalert2.all.js"></script>

  <script type="text/javascript"> 
      setTimeout(function () {
         $('.loader-bg').fadeToggle();
	 }, 1500);
  </script>
  
  </body>
  </html>