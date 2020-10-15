<?php
$login_session="" ;
 $url="";
 $status="";
 include('lock.php');
?>
<?php
  //session_start();
// import connection file
include ("conn.php");
// define variables and set to empty values
   $uname = "";
   $pass = "";
   $currdate= ""; 
   $status=null;
   $errorc="";
  $showc="display:none;";
   $errorv="";
  $showv="display:none;";
  $alertc="";
  $alertv="";
  $error="";
  $show="display:none;";
  $alert="";

//**************************************************************************************************************************
if (isset($_GET['delalert'])) {
  $errorv="Staff Member	 No ".$_GET['delalert']." Is Deleted successfully!";
        $showv="display:show;";
        $alertv="alert alert-success";
  }
  if (isset($_GET['delfail'])) {
    $errorc="Password Invalid ! Transaction Is Not Deleted Try Again !";
    //$errorc='<b>'.$cname.'</b>'." "."Customer Name Is Not Exist!";
    $showc="display:show;";
    $alertc="alert alert-danger";
  }
// define variables and set to empty values
	  $error="";
	  $show="display:none;";
	  $alert="";
	if (isset($_GET['error'])) {
      $error=$_GET['error'];
      $show=$_GET['show'];
      $alert=$_GET['alert'];
    }
	
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
 <title> Update Model  </title>
  <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" href="./resources/bootstrap-3.3.6-dist/css/bootstrap.min.css">
  <script src="./resources/bootstrap-3.3.6-dist/js/jquery.min.js"></script>
  <script src="./resources/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
  <script src="./sss.js"></script>
</head>
<body>
<?php
include('./header.php');

?>




<div class="container" style="margin-top:20px">
<div class="row">
    <div class="col-md-12">
      <div align="center" class="<?php echo $alertc; ?>" role="alert" style="<?php echo $showc; ?>"><?php echo $errorc; ?></div>
      <div align="center" class="<?php echo $alertv; ?>" role="alert" style="<?php echo $showv; ?>"><?php echo $errorv; ?></div>
    </div> <!-- close col-->
  </div> <!--close row-->
<div class="row">

  <div class = "col-md-4">
<!--<div class="alert alert-success alert-sm" role="alert" id="signalert" style="display:show;">Well done! You successfully Signup!</div> -->
<div class="panel panel-info">
      <div class="panel-heading" align="center">Add Model </div>
      <div class="panel-body">
<div class="<?php echo $alert; ?>" role="alert" style="<?php echo $show; ?>"><?php echo $error; ?></div>
 <form  enctype="multipart/form-data" 	data-toggle="validator" role="form" method="post" action="./php_action/addmodel.php">
  	<div class="form-group">
        <label class="control-label">Select Catagory </label>
            <select class="form-control" id="txtcatagory" name="txtcatagory" required>
              <option value="">Select Catagory from List</option>
      <?php
        $query = "SELECT cid, cat_name from catagory where status=1";
        $result = $conn->query($query);  
            while($row = $result->fetch_assoc()) {                                                 
            echo "<option value='".$row['cid']."'>".$row['cat_name']."</option>";
            }
        ?>     
            </select>
    </div>
	<div class="form-group">
        <label class="control-label">Select Model </label>
            <select class="form-control" id="txtmodel" name="txtmodel" required>
              <option value="">Select Model from List</option>
      <?php
        $query = "SELECT mid, mname from model where status=1";
        $result = $conn->query($query);  
            while($row = $result->fetch_assoc()) {                                                 
            echo "<option value='".$row['mid']."'>".$row['mname']."</option>";
            }
        ?>     
            </select>
    </div>
	 
	<div class="form-group">
		<input class="form-control" type="text" id="txtmdname" name= "mdname" placeholder="Model Name" required>
	</div>
	<div class="form-group">
		<input class="form-control" type="text" id="txtcolor" name= "color" placeholder="Model Color" required>
	</div>
	<div class="form-group">
		<input class="form-control" type="text" id="txtweight" name= "weight" placeholder="Model Weight" required>
	</div>
	<div class="form-group">
		<input class="form-control" type="text" id="txtfuel_capacity" name= "fuel_capacity" placeholder="Fuel Capacity" required>
	</div>
	<div class="form-group">
		<input class="form-control" type="text" id="txteng_type" name= "eng_type" placeholder="Engine Type" required>
	</div>
	<div class="form-group">
		<input class="form-control" type="text" id="txteng_power" name= "eng_power" placeholder="Engine Power" required>
	</div
	><div class="form-group">
		<input class="form-control" type="text" id="txtstart_type" name= "start_type" placeholder="Start Type" required>
	</div>
	<div class="form-group">
		<input class="form-control" type="text" id="no_of_gear" name= "no_of_gear" placeholder="No Of Gears" required>
	</div>
	<div class="form-group">
		<input class="form-control" type="text" id="" name= "max_speed" placeholder="Max Speed" required>
	</div>
	<div class="form-group">
		<input class="form-control" type="text" id="" name= "break_type" placeholder="Break Type" required>
	</div>
	<div class="form-group">
		<input class="form-control" type="text" id="" name= "weel_type" placeholder="Wheel Type" required>
	</div>
	<div class="form-group">
		<input class="form-control" type="text" id="" name= "headlamp" placeholder="Heal Lamp" required>
	</div>
	<div class="form-group">
		<input class="form-control" type="text" id="" name= "price" placeholder="Showroom Price" required>
	</div>
	<div class="form-group">
	<label class="control-label">Model Description</label>
		<textarea class="form-control" type="text" id="" name= "description"></textarea>
	</div>
	<div class="form-group">
	 <label class="control-label">Photo Size Limit Max 300 kb (widht=160 Px & Height=210 px)</label>
	  <input class="form-control" type="hidden" name="MAX_FILE_SIZE" value="10000000" />
	  </div>
	  <div class="form-group">
	  <input class="form-control" name="userfile" type="file" required />
	 </div>

  <div class="form-group" align="center">
    <button type="submit" class="btn btn-info" name="submitbusiness">Add Model</button>
  </div>

</form>

</div> <!-- Close panel Body -->

</div> <!-- Close Panel -->

</div> <!-- Close Col -->

<div class="col-md-8">

<div class="panel panel-info">
      <div class="panel-heading" align="center">Model Details</div>
      <div class="panel-body">
        <div class='table-responsive'>
      <?php
      //include('conn.php');
      error_reporting(E_ALL);
      $sql = "SELECT md.mdid, md.mdname, md.color, md.imgpath, md.status, md.regdate, c.cat_name, m.mname FROM model_details md, showroom_user su, model m, catagory c WHERE c.cid=md.cid AND m.mid=md.mid AND su.suid=md.suid AND su.suid=$user_id AND md.status!=0 ORDER BY md.regdate ASC";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        // output data of each row
       
          echo "<table class='table table-striped'>
          <thead>
            <tr>
              <th>Photo</th>
              <th>Model Name</th>
              <th>Color </th>
              <th>Catagory </th>
			   <th>Date</th>
			   <th>Status</th>
			  <th>Action</th>
           </tr>
          </thead>


          <tbody>";
          while($row = $result->fetch_assoc()) {
			  $status=$row['status'];
			  if($status==2){
				$status="Aproval Pending";
			  }
			  else if($status==1){
				$status="Aproved";
			  }
			  else if($status==3){
				$status="Rejected";
			  }
			  else{
				$status="Deleted";
			  }
            
           echo"<tr>";
              echo "<td><img src='".$row['imgpath']."' class='img-responsive' width='75px' height='100px' ></td>";
              echo "<td>".$row['mname']."</td>";
              echo "<td>".$row['color']."</td>";
              echo "<td>".$row['cat_name']."</td>";
			   echo "<td>".$row['regdate']."</td>";
			   echo "<td>".$status."</td>";
              echo  "<td>
              <button type='button' class='btn btn-default btn-sm' onclick='delete_model(".$row['mdid'].")' name ='btndel' id='btndel'> <span class='glyphicon glyphicon-trash'></span></button>"; 
           echo "</tr>";
         }
           
          echo"</tbody>
      </table>";
        
        }  
        else {
         echo "0 results";
        }
        $conn->close();
        ?> 
      </div>
      </div><!-- Close panel Body -->

</div> <!-- Close Panel -->
</div>


</div> <!-- Close Row -->


</div> <!-- Close Container -->



<?php 
include('footer.php');
?>
</body>
</html>