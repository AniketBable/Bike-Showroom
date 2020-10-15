<?php
$login_session="" ;
 $url="";
 $status="";
 include('lock.php');

?>
<?php 
$today=date("Y-m-d");

//Colunt total business
$sql = "SELECT * FROM model_details WHERE status=1 AND suid=$user_id";
$query = $conn->query($sql);
$countbusiness = $query->num_rows;
//Colunt total offers
$sql = "SELECT o.oid FROM offers o, model_details md, showroom_user su WHERE su.suid=md.suid AND md.mdid=o.mdid AND o.status=1 AND su.suid=$user_id order by o.regdate asc";
$query = $conn->query($sql);
$countoffers = $query->num_rows;
$conn->close();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>MyBike.com</title>
  <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" href="./resources/bootstrap-3.3.6-dist/css/bootstrap.min.css">
  <script src="./resources/bootstrap-3.3.6-dist/js/jquery.min.js"></script>
  <script src="./resources/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
  
   <script src="./activemenu.js"></script>
   
   
<!-- fullCalendar 2.2.5 -->
<script src="./stock/assests/plugins/moment/moment.min.js"></script>
<script src="./stock/assests/plugins/fullcalendar/fullcalendar.min.js"></script>


<script type="text/javascript">
	$(function () {
			// top bar active
	$('#navDashboard').addClass('active');

      //Date for the calendar events (dummy data)
      var date = new Date();
      var d = date.getDate(),
      m = date.getMonth(),
      y = date.getFullYear();

      $('#calendar').fullCalendar({
        header: {
          left: '',
          center: 'title'
        },
        buttonText: {
          today: 'today',
          month: 'month'          
        }        
      });


    });
</script>

<style type="text/css">
	.ui-datepicker-calendar {
		display: none;
	}
	.card{
	width: 100%;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	text-align: center;
	}
	.cardHeader{
		background-color: #4CAF50;
		color: white; 
		padding: 10px; 
		font-size: 40px;
	}
	.cardContainer{
		padding: 10px;
	}
		
</style>

<!-- fullCalendar 2.2.5-->
    <link rel="stylesheet" href="./stock/assests/plugins/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="./stock/assests/plugins/fullcalendar/fullcalendar.print.css" media="print">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body id="dashboard">
<?php
include('./header.php');
?>

 <div class="container" style="margin-top: 10px">
<div class="row">
	



	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading"> <i class="glyphicon glyphicon-calendar"></i> Bike Showroom </div>
			<div class="panel-body">
<img src="./images/dashboard.png" class="img-responsive">				
			</div>	
		</div>
		
	</div>
	
		<div class="col-md-4">
		<div class="card">
		  <div class="cardHeader" >
		    <h1><?php echo date('d'); ?></h1>
		  </div>

		  <div class="cardContainer">
		    <p><?php echo date('l') .' '.date('d').', '.date('Y'); ?></p>
		  </div>
		</div> 
		<br/>

		<div class="card">
		  <div class="cardHeader" style="background-color:#245580;">
		    <h1><?php if($countbusiness) {
		    	echo $countbusiness;
				
		    	} else {
		    		echo '0';
		    		} ?></h1>
		  </div>

		  <div class="cardContainer">
		    <p> Total Models</p>
		  </div>
		</div> 
		<br/>
		
		<div class="card">
		  <div class="cardHeader" style="background-color:#623b65;">
		    <h1><?php if($countoffers) {
		    	echo $countoffers;
		    	} else {
		    		echo '0';
		    		} ?></h1>
		  </div>

		  <div class="cardContainer">
		    <p> Offers</p>
		  </div>
		</div>

	</div>

	
</div> <!--/row-->

</div> <!-- Close Container -->

<?php
include('./footer.php');
?>
</body>
</html>