<?php 	
//require_once 'core.php';
require_once 'conn.php';
$valid['success'] = array('success' => false, 'messages' => array());
$mid = $_POST['mid'];
if($mid) { 
 $sql = "UPDATE model SET status=0 WHERE mid = $mid";
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