<?php
$error="";
$show="display:none;";
$alert="";
include("conn.php");
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

 if(isset($_SESSION['login_puser']))
{
  header("Location:./dashboard.php");
  exit;
}
else
{
  //header("Location:login.php");
  //exit;
}
if (isset($_POST['submitlogin']))
{
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$myusername=$_POST['txtuname']; 
		$mypassword=$_POST['inputPassword']; 
		$sql="SELECT * FROM showroom_user WHERE status=1 AND sumob='$myusername' AND supass='$mypassword'"; 
		$result = $conn->query($sql);
		if($result->num_rows>0){
			$_SESSION['login_puser']=$myusername;
			header("location:./dashboard.php");
			die();
		}
		else{
			$error="Your Login Name or Password is invalid";
			$show="display:show;";
			$alert="alert alert-danger";
		}
	}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title> Login  </title>
  <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content=" Diamond Petroleum Nirgudsar, Zelos Infotech Pvt . Ltd." />

<meta name="keywords" content="Diamond Petroleum Nirgudsar, Zelos Infotech Pvt . Ltd." />


  <link rel="stylesheet" href="./resources/bootstrap-3.3.6-dist/css/bootstrap.min.css">
  <script src="./resources/bootstrap-3.3.6-dist/js/jquery.min.js"></script>
  <script src="./resources/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
  
</head>
<body>
<nav class="navbar navbar-default ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"> MyBike.com </a>
        
     
    </div>
    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Help</a></li>
       
         
      </ul>
     <!-- <ul class="nav navbar-nav navbar-right">    
        <li>
          <a href="./signup.php"><span class="glyphicon glyphicon-user"></span> Signup</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>-->
    </div>
  </div>
</nav>
  

<div class="container" style="margin-top: 70px">
<div class="row">

<div class="col-md-4">
  <!--<img src="./images/diamond.jpg" class="img-responsive"/>-->
 
</div>


  <div class = "col-md-4">

<div class="panel panel-info">
      <div class="panel-heading" align="center">Sign In</div>
      <div class="panel-body">

 <form data-toggle="validator" role="form" method ="post" action="">
  <div class="form-group">
     <input class="form-control" type="text" id="txtuname" name= "txtuname" placeholder="Mobile Number" required>
    <div class="help-block with-errors"></div>
  </div>
  <div class="form-group">
   <input type="password" data-minlength="6" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password" required>
      <div class="help-block"></div>
  </div>
  <div class="form-group" align="center ">
    <button type="submit" name="submitlogin" class="btn btn-info">Login</button> &nbsp; &nbsp; &nbsp;
	<a align="right" href="./signup.php" ><u> Create New Account</u> </a>
  </div>
</form>
<p> If You Forgot Password? Or Not Account created?  So Please Contact Your Administrative Person.</p>
<!--<div style="font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>-->
<div class="alert alert-danger" role="alert" style="<?php echo $show; ?>"><?php echo $error; ?></div>
</div> <!-- Close panel Body -->

</div> <!-- Close Panel -->

</div> <!-- Close Col -->

<div class="col-md-4">
 
</div>


</div> <!-- Close Row -->


</div> <!-- Close Container -->

<?php
include('./footer.php');
?>

</body>
</html>