<?php 
header('content-type: application/json');
 
require_once "connect.php";

   $query = "SELECT * FROM nominees ";
   $result = $con->query($query);
   
   $data = array();
   foreach ($result as $row) {
     $data[] = $row;
   }

      $result->close();
      $con->close();

      print json_encode($data);


      
	  
	
	  
	   

