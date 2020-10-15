<?php 	
//require_once 'core.php';
require_once 'conn.php';
$valid['success'] = array('success' => false, 'messages' => array());
$mdid = $_POST['mdid'];
if($mdid) { 
 $sql = "UPDATE model_details SET status=3 WHERE mdid = $mdid";
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