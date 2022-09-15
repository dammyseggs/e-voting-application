<?php 
  session_start();
  require_once "connect.php";
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Voters login</title>
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
<div class="login_form">
<!-- Material form login -->
    <form class="text-center border border-light p-5 " action="" method="post">
    
    <p class="h4 mb-4">Voter login</p>
       
       <?php
    if(isset($_POST['sign_in'])){
	    $matric_no = $_POST['matric_no'];
	    $password = $_POST['password'];
		
		$sql = "SELECT * FROM voters WHERE matric_no='".$matric_no."' AND password='".$password."' AND voted= 'NO' ";
		
		
		
$result = mysqli_query($con, $sql) or die(mysqli_error($con));
$count = mysqli_num_rows($result);

if ($count == 1){
	 while ($row = mysqli_fetch_assoc($result)) {
	  $_SESSION['student'] = $row['ID'];
	 }
	 
	 
 
	//echo "Login Credentials verified";
	 header("Location: VotingPage.php");

}else{
echo '<div class="alert alert-danger">Invalid Login Credentials OR Already voted</div>';
}
		
	}
?>

    <!-- Email -->
    <input type="text" id="matric_no" class="form-control mb-4" placeholder="Matric-no" name="matric_no">

    <!-- Password -->
    <input type="password" id="password" class="form-control mb-4" placeholder="Password" name="password">

    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4" type="submit" name="sign_in" id="sign_in">Sign in</button>
</form>
</div>

	<div class="p-5"></div>
    <div class="p-5"></div>
    <nav class="navbar navbar-dark bg-dark">
       <div class="container justify-content-center">
        <div class="navbar-text justify-content-center">
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