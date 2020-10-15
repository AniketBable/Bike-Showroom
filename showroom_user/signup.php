<?php
$login_session="" ;
 $url="";
 $status="";
include("conn.php");
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//check up
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
   $type=null;
  $error="";
  $show="display:none;";
  $alert="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $suname = test_input($_POST["txtuname"]);
     $pass = test_input($_POST["inputPassword"]);
     $confpass = test_input($_POST["inputPasswordConfirm"]);
	 $sumob = test_input($_POST["txtmob"]);
	 $suemail = test_input($_POST["txtemail"]); 
     $status=1;
     // // coding for fetching user name
     $sql1="SELECT sumob FROM showroom_user WHERE sumob='$sumob' and status=1 ";
     //$result=mysql_query($sql); 
     $result = $conn->query($sql1);
      if ($result->num_rows > 0){
        $error=$sumob." "."User Mobile Is Already Exist!";
        $show="display:show;";
        $alert="alert alert-danger";
      }
      else 
      {
        if($pass===$confpass)
        {
          $sql = "INSERT INTO showroom_user (suname, supass, sumob, suemail, regdate, status)
          VALUES ('$suname', '$pass', '$sumob', '$suemail', @now := now(), '$status')";
          // use exec() because no results are returned
          if ($conn->query($sql) === TRUE) {
          $error="User Is Addes successfully! <a href='./login.php'> Click Here To Login!</a>";
          $show="display:show;";
          $alert="alert alert-success";
          //header("location:./signup.php");
          }
          else{
          $error="Your signup is invalid";
          $show="display:show;";
          $alert="alert alert-danger";
          }
        }
        else
        {
          $error="Your Password and Confirm Password is Not Match!";
          $show="display:show;";
          $alert="alert alert-danger";
        }
      }
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
  <title>Add User</title>
  <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="./resources/bootstrap-3.3.6-dist/css/bootstrap.min.css">
  <script src="./resources/bootstrap-3.3.6-dist/js/jquery.min.js"></script>
  <script src="./resources/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
      function confpass(){
      var counter=0;
      var f1 = document.getElementById("inputPassword").value;
      var f2 = document.getElementById("inputPasswordConfirm").value;
      //var r= parseFloat(f1)*parseFloat(f2);
      if(f1==f2)
      {
          document.getElementById("msg").innerHTML="Password Is Match";
          document.getElementById("inputPassword").style.borderColor = "#008000";
          document.getElementById("inputPasswordConfirm").style.borderColor = "#008000";
      }
      else
      {
        document.getElementById("msg").innerHTML="Password Is Not Match";
        document.getElementById("inputPassword").style.borderColor = "#E34234";
        document.getElementById("inputPasswordConfirm").style.borderColor = "#E34234";
      }
   }
  </script>
<script src="./activemenu.js"></script>
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
<div class="container" style="margin-top:20px">
<div class="row">
<div class="col-md-4">
</div>
  <div class = "col-md-4">
<!--<div class="alert alert-success alert-sm" role="alert" id="signalert" style="display:show;">Well done! You successfully Signup!</div> -->
<div class="panel panel-info">
      <div class="panel-heading" align="center">Create Showroom User Account</div>
      <div class="panel-body">
 <form data-toggle="validator" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div class="form-group">
    <input class="form-control" type="text" id="txtuname" name= "txtuname" placeholder="User Name" required>
  </div>
  <div class="form-group">
    <input class="form-control" type="number" id="txtmob" name= "txtmob" placeholder="Mobile Number" required>
  </div>
  <div class="form-group">
   <input type="password" data-minlength="6" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password" required>
  </div>
  <div class="form-group">
   <input type="password" class="form-control" onkeyup="confpass();" id="inputPasswordConfirm" name= "inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm Password" required>
      <div class="help-block with-errors"></div>
  </div>
    <div class="form-group">
    <input class="form-control" type="text" id="txtemail" name= "txtemail" placeholder="Email Id" required>
  </div>
 <h5 ng-show="val2" id="msg">  </h5>
  <div class="form-group" align="center">
    <button type="submit" class="btn btn-info" name="submit">Signup</button>
  </div>
</form>
<div class="<?php echo $alert; ?>" role="alert" style="<?php echo $show; ?>"><?php echo $error; ?></div>
</div> <!-- Close panel Body -->
</div> <!-- Close Panel -->
</div> <!-- Close Col -->
</div> <!-- Close Row -->
</div> <!-- Close Container -->
<?php
include('./footer.php');
?>
</body>
</html>