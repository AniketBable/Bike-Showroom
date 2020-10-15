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
 <title> Showroom User List</title>
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
      <div class="panel-heading" align="center">Showroom User Details</div>
      <div class="panel-body">
        <div class='table-responsive'>
      <?php
      //include('conn.php');
      error_reporting(E_ALL);
      $sql = "SELECT * FROM showroom_user WHERE status=1";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        // output data of each row
       
          echo "<table class='table table-striped'>
          <thead>
            <tr>
              <th> User Name </th>
              <th>Mobile </th>
              <th>Email </th>
              <th>Password </th>
			   <th>Date</th>
           </tr>
          </thead>


          <tbody>";
          while($row = $result->fetch_assoc()) {
            
           echo"<tr>";
		   echo "<td>".$row['suname']."</td>";
              echo "<td>".$row['sumob']."</td>";
              echo "<td>".$row['suemail']."</td>";
              echo "<td>".$row['supass']."</td>";
			   echo "<td>".$row['regdate']."</td>";
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