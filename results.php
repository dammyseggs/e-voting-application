<?php require_once "connect.php"; ?>
<!doctype html>
<html lang="en-US">
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
<title>Results</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="jquery.dataTables.min.css">
<link rel="stylesheet" href="dataTables.bootstrap4.min.css">
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

<div class="container mb-3 mt-3">
    <table class="table table-striped table-bordered" id="mydatatable">
    <thead>
      <th>POST</th>
      <th>Name</th>
      <th>DEPARTMENT</th>
      <th>LEVEL</th>
      <th>NO of VOTES</th>
    </thead>

    <tbody>
       <?php
          $sql = "SELECT * FROM nominees";
           if($result = mysqli_query($con, $sql)){
            while($row = mysqli_fetch_assoc($result)){
              echo"<tr>
                 <td>".$row['pos']."</td>
                 <td>".$row['name']."</td>
                 <td>".$row['department']."</td>
                 <td>".$row['level']."</td>
                 <td>".$row['votes']."</td>
               </tr>";
           }
           }
       ?>
    </tbody>

    <tfoot>
    </tfoot>

    </table>
</div>
  
  <div class="chart">
    <h4 class="font-weight-bold font-italic text-muted text-center mt-4">President Result
         <?php $sql = "SELECT name, MAX(votes) AS 'WINNER' FROM nominees WHERE pos='president' ";
         	if ($result = mysqli_query($con, $sql)) {
                while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='font-weight-bolder font-italic text-center'>WINNER: ".$row["name"]."</div>";
               }
           }
    ?></h4>
    <canvas id="mychart"></canvas>
</div> 
<div class="chart">
  <h4 class="font-weight-bold font-italic text-muted text-center mt-4">Vice-President Result
  <?php $sql = "SELECT name, MAX(votes) AS 'WINNER' FROM nominees WHERE pos='VP' ";
         	if ($result = mysqli_query($con, $sql)) {
                while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='font-weight-bolder font-italic text-center'>WINNER: ".$row["name"]."</div>";
               }
           }
    ?>
  </h4>
  <canvas id="thechart"></canvas>
</div>
<div class="chart">
  <h4 class="font-weight-bold font-italic text-muted text-center mt-4">Secretary Result
  <?php $sql = "SELECT name, MAX(votes) AS 'WINNER' FROM nominees WHERE pos='Secretary' ";
         	if ($result = mysqli_query($con, $sql)) {
                while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='font-weight-bolder font-italic text-center'>WINNER: ".$row["name"]."</div>";
               }
           }
    ?>
  </h4>
  <canvas id="dchart"></canvas>
</div>
        





<nav class="navbar navbar-dark bg-dark">
 <div class="container justify-content-center">
        <div class="navbar-text justify-content-center">
        <small> Copyright @ Famakinde Emmanuel</small>
        </div>
 </div>
	</nav>



<script src="js/jquery-3.4.1.js"></script>
<script src="js/Chart.js"></script>
<script src="js/app.js" type="text/javascript"></script>
<script src="jquery.dataTables.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="dataTables.bootstrap4.min.js"></script>


<script type="text/javascript"> 
  setTimeout(function () {
     $('.loader-bg').fadeToggle();
}, 1500);
</script>


<script>
  $('#mydatatable').DataTable();
</script>

</body>
</html>