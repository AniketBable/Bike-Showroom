<?php
$login_session="" ;
 $url="";
 $status="";
 include('lock.php');
 include ("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title> Approve Feedback  </title>
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

<div class="panel panel-info">
      <div class="panel-heading" align="center">Feedback Details</div>
      <div class="panel-body">
        <div class='table-responsive'>
      <?php
      //include('conn.php');
      error_reporting(E_ALL);
      $sql = "SELECT f.fid, f.comment, md.color, md.imgpath, f.comm_date, c.cat_name, m.mname FROM feedback f, model_details md, model m, catagory c WHERE c.cid=md.cid AND m.mid=md.mid AND md.mdid=f.mdid AND f.status=2 ORDER BY f.comm_date ASC;";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        // output data of each row
       
          echo "<table class='table table-striped'>
          <thead>
            <tr>
              <th>Photo</th>
			  <th>Model </th>
			  <th>Catagory </th>
              <th>Color </th>
              <th> Comment </th>
			   <th>Date</th>
			  <th>Action</th>
           </tr>
          </thead>


          <tbody>";
          while($row = $result->fetch_assoc()) {
            
           echo"<tr>";
             
              
              echo "<td><img src='../business_user/".$row['imgpath']."' class='img-responsive' width='150px' height='100px' ></td>";
              echo "<td>".$row['mname']."</td>";
              echo "<td>".$row['cat_name']."</td>";
              echo "<td>".$row['color']."</td>";
              echo "<td>".$row['comment']."</td>";
			   echo "<td>".$row['comm_date']."</td>";
              echo  "<td>
              <button type='button' class='btn btn-success btn-sm' onclick='approve_feedback(".$row['fid'].")' name ='btndel' id='btndel'> <span class='glyphicon glyphicon-ok'></span></button> <br/><br/> 
              <button type='button' class='btn btn-danger btn-sm' onclick='reject_feedback(".$row['fid'].")' name ='btndel' id='btndel'> <span class='glyphicon glyphicon-remove'></span></button>"; 
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