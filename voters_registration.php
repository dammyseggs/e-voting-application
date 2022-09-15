<?php 
  require_once "connect.php";
?>

<?php
   /*if (isset($_POST['register_std'])) {
	   echo $_POST['matric_no'];
	  $sql = "INSERT INTO voters (matric_no, firstname, lastname, college, department, password, gender, level) VALUES ('".$_POST['matric_no']."', '".$_POST['lastname']."', '".$_POST['firstname']."', '".$_POST['college']."','".$_POST['department']."', '".$_POST['password']."', '".$_POST['gender']."', '".$_POST['level']."')";
	   
	   if (mysqli_query($con, $sql)) {
		   echo"registered";
	   }
		   else{
			   echo mysqli_error($con);
		   }
	   $con->close();
	}*/
?>

<!doctype html>
<html lang="en-US">
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Registration</title>
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
<!-- Default form register -->
<form class="text-center border border-light p-5" method="post">

    <p class="h4 mb-4">Student Registration</p>
           <!-- Matric no -->
           <input type="text" id="matric_no" class="form-control mb-4" placeholder="Matric no" name="matric_no">
           
            <!-- Last name -->
            <input type="text" id="lastname" class="form-control mb-4" placeholder="Last name"  name="lastname"  readonly>
            
            <!-- First name -->
            <input type="text" id="firstname" class="form-control mb-4" placeholder="First name" name="firstname" readonly>
                
    <!-- Gender -->
    <select class="form-control mb-4" name="gender" id="gender">
        <option hidden>Gender</option>
    	<option value="male">Male</option>
    	<option value="female">Female</option>
    </select>
    
     <!--College-->
      <select class="form-control mb-4" name="college" id="college" onChange="populate(this.id,'department')">
        <option hidden>College</option>
    	<option value="agrna">Agricultural & Natural Sciences</option>
    	<option value="enviro">Enviromental sciences</option>
    	<option value="human">Humanities</option>
    	<option value="law">Law</option>
    	<option value="manage">Management sciences</option>
    	<option value="social">Social sciences</option>
    </select>
     
     <!--Department-->
     <select class="form-control mb-4" name="department" id="department">
     	<option hidden>Department</option>
     </select>
     
     <!--level-->
     <select class="form-control mb-4" name="level" id="level">
     	<option hidden>Level</option>
     	<option value="100">100</option>
     	<option value="200">200</option>
     	<option value="300">300</option>
     	<option value="400">400</option>
     	<option value="500">500</option>
     </select>
    <!-- Password -->
    <input type="password" id="password" class="form-control mb-4" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="password" autocomplete="off">
    
    
    <!-- Confirm Password -->
    <input type="password" id="confirmpassword" class="form-control" placeholder="Confirm password" aria-describedby="defaultRegisterFormPasswordHelpBlock" autocomplete="off">
    <small id="passworderror" class="form-text mb-4 red font-weight-normal">
        
    </small>
<p id="response"></p>
    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit" id="submit" name="submit">Register</button>

</form>	
	
<!-- Default form register -->
<nav class="navbar navbar-dark bg-dark">
 <div class="container justify-content-center">
        <div class="navbar-text justify-content-center">
		<small> Copyright @ Famakinde Emmanuel</small>
        </div>
 </div>
	</nav>





<script src="js/jquery-3.4.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>-->
<script src="js/sweetalert2.all.js"></script> 

<script type="text/javascript">
     setTimeout(function () {
         $('.loader-bg').fadeToggle();
	 }, 1500);
</script>


    <script type="text/javascript"> 
	   $(document).ready(function () {
		 $("#submit").on('click', function (e) {
			 e.preventDefault();
			 var matric_no = $("#matric_no").val();
			   var firstname = $("#firstname").val();
			   var lastname = $("#lastname").val();	 
			   var gender = $("#gender").val();
			   var college = $("#college").val();
			   var department = $("#department").val();
			   var level = $("#level").val();
			   var password = $("#password").val();
			   var confirmpassword = $("#confirmpassword").val();//20152939
			   
			 if(matric_no == "" || firstname == "" || lastname == "" || college == "" || department == "" || password == "" || confirmpassword == "" || gender == "" || level == "" ){
				 Swal.fire(
					  'Empty Filed(s) found',
					  'Please check your inputs',
					  'error'
				  );
			 }else{
				 $.ajax({
					 url: 'stud_register.php',
					 type: 'POST',
					 dataType: 'html',
					 data: {
						 submit: 1,
						   matric_no: matric_no,
							   firstname: firstname,
							   lastname: lastname,
							   college: college,
							   department: department,
							   password: password,
							   confirmpassword: confirmpassword,
							   gender: gender,
							   level: level
					 },
					 success: function(response){
						 if(response.indexOf('successful') >=0){
							 Swal.fire(
							  'Registration completed',
							   response,
							  'success'
							);
                               window.location.replace("student_login.php");
                               setTimeout("pageRedirect()", 10000);
						 }else{
							 Swal.fire(
							  'Working',
							   response,
							  'error'
							);
						 }
						 
					 }
				 });
			 }
			 
		 });
	
		    $("#confirmpassword").keyup(function () {
               var password = $("#password").val();
			   var confirmpassword = $("#confirmpassword").val();
			   
			   if(confirmpassword != password) {
				   $('#passworderror').html('Password is not matching...').css('color','red');
				   //$('#passworderror').css('color','red');
				   return false;
			   } 
				else {
					$('#passworderror').html('');
					return true;
				}
		   });
		   
		   $(document).on('blur', '#matric_no', function(e){
			   var matric_no = $("#matric_no").val();
			   $.ajax({
				  url: 'stud_register.php',
				  type: 'POST',
				  dataType: 'html',
				   data: {
					   testmatric: 'testmatric',
					   matric_no: matric_no
				   },
				   success: function(response){
				   var lname = response.substring(0, response.indexOf("~")); 
					$("#lastname").val(lname);
					   var fname = response.substring(response.indexOf("~") +1); 
				   $("#firstname").val(fname);
			   }
			   });
		   });
	    
	 });
	</script>
	<script type="text/javascript">
	    function populate(col,dept){
			var col = document.getElementById(col);
			var dept = document.getElementById(dept);
			  dept.innerHTML = "";
			    if(col.value == "agrna"){
					var optionArray = ["aee|Agricultural Economics and Extension", "bch|Biochemistry", "csc|Computer Science", "fst|Food Science and Technology", "ich|Industrial Chemistry", "mcb|Microbiology"];
				}else if(col.value == "enviro"){
					var optionArray = ["archi|Architecture","est|Estate Management"];
				}else if(col.value == "human"){
					var optionArray = ["eng|English","his|History and International Studies", "rst|Religious Studies"];
				}else if(col.value == "law"){
					var optionArray = ["law|Law"];
				}else if(col.value == "manage"){
					var optionArray = ["acc|Accounting", "bisadmin|Business Administration", "ent|Entrepreneurship", "hrm|Human Resource Management and Industrial Relations", "ins|Insurance"];
				}
				else if(col.value == "social"){
					var optionArray = ["eco|Economics", "irl|International Relations", "masscom|Mass Communication", "polsic|Political Science", "pubadmin|Public Administration"];
				}
			
			
			for(var option in optionArray){
				var pair = optionArray[option].split("|");
				var newOption = document.createElement("option");
				newOption.value = pair[0];
				newOption.innerHTML = pair[1];
				dept.options.add(newOption);
			}
		} 
	/*	var college = {
			agrna:['Biochemistry', 'Computer Science', 'Food Science and Technology', 'Industrial Chemistry', 'Microbiology'],
			enviro:['Architecture', 'Estate Management'],
			human:['English', 'History and International Studies', 'Religious Studies'],
			law:['Law'],
			mamage:['Accounting', 'Business Administration', 'Entrepreneurship', 'Human Resource Management and Industrial Relations', 'Insurance'],
			social:['Economics', 'International Relations', 'Mass Communication', 'Political Science', 'Public Administration']
		}
		
		    var college = document.getElementById(college);
			var department = document.getElementById(department);
		
		    main.addEventListener('change',function(){
				var selected_option = college[this.value];
			})*/
	</script>
</body>
</html>