<?php 	

//require_once 'core.php';
require_once 'conn.php';


$valid['success'] = array('success' => false, 'messages' => array());

$fid = $_POST['fid'];

if($fid) { 

 $sql = "UPDATE feedback SET status=1 WHERE fid = $fid";

 

 if($conn->query($sql) === TRUE ) {
	  
 	$valid['success'] = true;
	$valid['messages'] = "Successfully Removed";		
 } else {
	 
 	$valid['success'] = false;
 	$valid['messages'] = "Error while remove the brand";
 }
 
 $conn->close();

 echo json_encode($valid);
 
} // /if $_POST