<?php 
session_start();
require_once "connect.php";

   if(!isset($_SESSION['student'])){
	 header("Location: student_login.php");
	 }
      

$sql = "SELECT matric_no FROM voters WHERE ID='".$_SESSION['student']."' ";
   if ($result = mysqli_query($con, $sql)) {
	 while ($row = mysqli_fetch_assoc($result)) {
	   $matric = $row['matric_no'];
	 }
   } 
?>


<!doctype html>
<html>
<head>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Voting page</title>
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

	<h3 class="font-weight-bold font-italic text-muted text-center mt-4">CAST YOUR VOTE !!!</h3>
  
 <div class="accordion mt-4" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          President
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
         <?php 
  

	 $sql = "SELECT * FROM nominees WHERE pos = 'president' "; 
	echo '<form id="myform">';
	    if ($result = mysqli_query($con, $sql)) {
			 while ($row = mysqli_fetch_assoc($result)) {
				 $id = $row['id'];
				 $name = $row['name'];
				 $department = $row['department'];
				 $level = $row['level'];
			     $image = $row['images'];
				 echo'
				 
				 <div class="d-flex bd-highlight mb-3">
				 <div class="p-2 bd-highlight">
				     <img src="images/'.$image.'"/> 
					  
			     </div>
				 <div class="mr-auto p-2 bd-highlight">
					  <h4>'.$name.'</h3>
					  <h4>'.$department.'</h4>
					  <h4>'.$level.'</h4>
		     	 </div>	 
				 <div class="ml-auto p-2 bd-highlight">
				 <input id="'.$id.'" name="presi" type="radio" class="form-radio" value="'.$id.'"/>
				 </div>
				</div>';
				     
				 
			 }
		}else{
				echo "Bad";
		}
	
	   echo '</form>';
	
	
	?>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Vice-President
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <?php 
  

	 
  $sql = "SELECT * FROM nominees WHERE pos = 'VP' "; 
  echo '<form id="myform">';
	  if ($result = mysqli_query($con, $sql)) {
		   while ($row = mysqli_fetch_assoc($result)) {
			   $id = $row['id'];
			   $name = $row['name'];
			   $department = $row['department'];
			   $level = $row['level'];
			   $image = $row['images'];
			   echo'
			   
			   <div class="d-flex bd-highlight mb-3">
			   <div class="p-2 bd-highlight">
				   <img src="images/'.$image.'"/> 
					
			   </div>
			   <div class="mr-auto p-2 bd-highlight">
					<h4>'.$name.'</h3>
					<h4>'.$department.'</h4>
					<h4>'.$level.'</h4>
				</div>	 
			   <div class="ml-auto p-2 bd-highlight">
			   <input id="'.$id.'" name="presi" type="radio" class="form-radio" value="'.$id.'"/>
			   </div>
			  </div>';
				   
			   
		   }
	  }else{
			  echo "Bad";
	  }
  
	 echo '</form>';
  
	
	?>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Secretary
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <?php 
  

	 $sql = "SELECT * FROM nominees WHERE pos = 'secretary' "; 
	echo '<form id=""myform>';
	    if ($result = mysqli_query($con, $sql)) {
			 while ($row = mysqli_fetch_assoc($result)) {
				 $id = $row['id'];
				 $name = $row['name'];
				 $department = $row['department'];
				 $level = $row['level'];
			     $image = $row['images'];
				 echo'
				 
				 <div class="d-flex bd-highlight mb-3">
				 <div class="p-2 bd-highlight">
				     <img src="images/'.$image.'"/> 
					  
			     </div>
				 <div class="mr-auto p-1 bd-highlight">
					  <h3>'.$name.'</h3>
					  <h4>'.$department.'</h4>
					  <h4>'.$level.'</h4>
		     	 </div>	 
				 <div class="ml-auto p-1 bd-highlight">
				 <input id="'.$id.'" name="secke" type="radio" class="form-radio" value="'.$id.'"/>
				 </div>
				</div>';
				     
				 
			 }
		}else{
				echo "Bad";
		}
	
	   echo '</form>';
	
	
	?>
      </div>
    </div>
  </div>
</div>
	  

<div class="d-flex flex-row-reverse">
  <button type="button" id="sub_btn" class="mt-4 mb-3 p2 mr-5">SUBMIT Votes</button>
	</div>
    
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
  
  <script type="text/javascript">
	  
        $(document).ready(function () {
          $("#sub_btn").on('click', function (e) {
			  e.preventDefault();

            var vote;
			var votes = [];
			var matric = <?php echo $matric; ?>

            $.each($("input[name='presi']:checked"), function(){

                vote = $(this).val();

            });
			  
			  
			votes.push(vote);
			  
			$.each($("input[name='vp']:checked"), function(){

                vote = $(this).val();

            });
			  
			votes.push(vote); 
			  
			$.each($("input[name='secke']:checked"), function(){

                vote = $(this).val();

            });
			  
			votes.push(vote); 

            //alert("my votes are: " + votes);
			  
			
			   $.ajax({
				  url: 'stud_register.php',
				  type: 'POST',
				  dataType: 'html',
				   data: {
					  votes: votes,
					  matric_no: matric,
					  votepage : 'votepage'
					   
				   },
				   success: function(response){
					if(response.indexOf('Logging') >=0){
							 Swal.fire(
							  'Voted successfully',
							   response,
							  'success'
							);
                               window.location.replace("votes.php");
                               setTimeout("pageRedirect()", 5000);
						 }else{
							 Swal.fire(
							  'Working',
							   response,
							  'error'
							);
						 }
					   
					  /* var votes = response.votes;
					   var matric_no = response.matric_no;
					   var pos = response.pos;
					   var candidate_matricNo = response.candidate_matricNo;*/
				   }
			   });

        });
			
        
			
    });
    
	</script> 
	
	
	
	
	
	
	</body>
	</html>