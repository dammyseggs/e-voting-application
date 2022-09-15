<?php
require_once "connect.php";
//echo'its working';
  if (isset($_POST['submit'])) {
	  
      $matric_no = $_POST['matric_no'];
	  $firstname = $_POST['firstname'];
	  $lastname = $_POST['lastname'];
	  $college = $_POST['college'];
	  $department = $_POST['department'];
	  $password = $_POST['password'];
	  $gender = $_POST['gender'];
	  $level = $_POST['level'];
	 
	  //$sql = "UPDATE `voting` . `voters` SET `college`= `$_POST['college']`  ";
	  $sql = "UPDATE voting.voters SET college = '".$_POST['college']."', department = '".$_POST['department']."', password = '".$_POST['password']."', gender = '".$_POST['gender']."', level = '".$_POST['level']."' WHERE matric_no = '".$_POST['matric_no']."' ";
	   
	   if (mysqli_query($con, $sql)) {
		   echo"successful";
	   }
		   else{
			   echo mysqli_error($con);
		   }
	  $con->close();
	}


if (isset($_POST['testmatric'])){
	$sql = "SELECT * FROM voters WHERE matric_no ='".$_POST['matric_no']."'";
	
	if ($result = mysqli_query($con, $sql)) {
		 while ($row = mysqli_fetch_assoc($result)) {
		 echo $row["lastname"]. '~'. $row["firstname"];
    	}
	}
}

if (isset($_POST['votepage'])){
	
	$votes = $_POST['votes'];
    $matric_no = $_POST['matric_no'];
	
	foreach($votes as $myvote){
		$sql = "UPDATE nominees SET votes = votes + 1 WHERE id = $myvote";
		
		
		$sql2 = "UPDATE voters SET voted = 'YES' WHERE voters . matric_no = '".$_POST['matric_no']."'";
			
			
	if(mysqli_query($con, $sql)){
		
		if(mysqli_query($con, $sql2)){
			
	        echo"Logging you out now";
      }
	}else{
	  echo "FAILED";
  }
	}

//convert the votes array in comma separated value
  /* $votes = implode(',',$votes);

  $sql = "INSERT INTO votes(votes,matric_no,pos,candidate_matricNo) VALUES('".$_POST['matric_no']."','".$_POST['votes']."') SELECT pos, candidate_matricNo FROM nominees WHERE id = votes ";

  if(mysqli_query($con, $sql)){
	  echo"voted scuccessfully";
  }else{
	  echo mysqli_error($con);
  }
}
	$return_arr = array("votes"=>$votes,"matric_no"=>$matric_no,"pos"=>$pos,"candidate_matricNo"=>$candidate_matricNo);
	echo json_encode($return_arr);*/
}

	/*header('Content-Type: application/json');

	$query = "SELECT * FROM nominees";

	//execute query
	<br>
	$result = $mysqli->query($query);
	if(mysqli_query($con, $query)){
		echo "good";
	}
	//loop through the returned data
	/*$data = array();
	foreach ($result as $row) {
	  $data[] = $row;
	}

	//free memory associated with result
	$result->close();

	//close connection
	$mysqli->close();

	//now print the data
	print json_encode($data);*/

?>




