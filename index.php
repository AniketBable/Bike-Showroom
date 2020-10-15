<?php
$error="";
$show="display:none;";
$alert="";
include ("conn.php");


if (isset($_POST['submitsearch'])){
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 $mid = test_input($_POST["mid"]);
	 $cid = test_input($_POST["cat_name"]);
	 $sql = "SELECT md.mdid, md.mdname, md.color, md.price, m.mname, su.suname, md.imgpath, md.status, md.regdate, c.cat_name FROM model_details md, showroom_user su, model m, catagory c WHERE c.cid=md.cid AND m.mid=md.mid AND su.suid=md.suid AND md.mid=$mid AND md.cid=$cid AND md.status=1 ORDER BY md.mdid ASC";
	}
}
else{
	$sql = "SELECT md.mdid, md.mdname, md.color, md.price, m.mname, su.suname, md.imgpath, md.status, md.regdate, c.cat_name FROM model_details md, showroom_user su, model m, catagory c WHERE c.cid=md.cid AND m.mid=md.mid AND su.suid=md.suid AND md.status=1 ORDER BY md.regdate ASC LIMIT 12";
	//$sql = "SELECT b.bid, b.bname, b.mob, b.email, a.city, bu.buname, b.imgpath, b.status, b.regdate, c.cat_name, a.city FROM business b, business_user bu, area a, catagory c WHERE c.cid=b.cid AND a.aid=b.aid AND bu.buid=b.buid AND b.status=1 ORDER BY b.regdate ASC ";
}

 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from kodesolution.com/demo/wxyz/w/learnpress/v2.0/demo/index-mp-layout1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jul 2017 10:17:57 GMT -->
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Bike Showroom" />
<meta name="keywords" content="Bike Showroom  " />
<meta name="author" content="Zelos Infotech Pvt. Ltd." />


<!-- Page Title -->
<title>Bike Showroom</title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">  
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<script type="text/javascript">
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
<script type="text/javascript">
$('.carousel').carousel({
  interval: 1000 * 50
});
</script>

</head>
<body id="home" class="">
<div id="wrapper" class="clearfix">

<?php 
include('./includes/header.php');
?>
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
	    <section id="home" class="divider parallax layer-overlay overlay-dark-1" data-bg-img="images/bg/bg3.jpg">
      <div class="display-table">
        <div class="display-table-cell">
          <div class="container1" style="padding-top:20;">
            <div class="row">
              <div class="col-md-12">

                <div class="border-1px p-30 mb-0">
				<div class="alert <?php echo $alert; ?>" role="alert" style="<?php echo $show; ?>"><?php echo $error; ?></div>
                  
                  <form id="part_signup" name="part_signup" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                      
					  <div class="col-sm-4">
                        <div class="form-group">
							<select class="form-control" id="cat_name" name="cat_name" required>
							<option value="">Select Category</option>                                                 
							<?php
							$query = "SELECT cid, cat_name from catagory where status=1";
							$result = $conn->query($query);  
								while($row = $result->fetch_assoc()) {                                                 
								echo "<option value='".$row['cid']."'>".$row['cat_name']."</option>";
								}
							?>    
							</select>
                        </div>
                      </div>      
					  <div class="col-sm-4">
                        <div class="form-group">
							<select class="form-control" id="mid" name="mid" required>
							<option value="">Select Model</option>                                                                                                                                                  
							<?php
							$query1 = "SELECT mid, mname from model where status=1";
							$result = $conn->query($query1);  
								while($row = $result->fetch_assoc()) {                                                 
								echo "<option value='".$row['mid']."'>".$row['mname']."</option>";
								}
							?>  
							</select>
                        </div>
                      </div>              
					  <div class="col-sm-4">
                        <div class="form-group">
						<button type="submit" name="submitsearch" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-0 pt-10 pb-10" data-loading-text="Please wait...">Search Bike</button>
						</div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 
	
    <section class="">
      <div class="container">
        <div class="section-content">
          <div class="row multi-row-clearfix">
            <div class="col-md-12">
              <div class="products">
				<?php
				error_reporting(E_ALL);
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
					echo"<div class='col-sm-6 col-md-4 col-lg-4 mb-30'>
					  <div class='product'>
						<span class='tag-sale'>mybike.Com</span>
						<div class='product-thumb'> 
						  <img alt='' src='showroom_user/".$row['imgpath']."' style='height:250px; width:400px;'  class='img-responsive img-fullwidth'><hr/>
						  <div class='overlay'>
							<div class='btn-add-to-cart-wrapper'>
							  <a class='btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700' href='./showroom_details.php?bid=".$row['mdid']."'>View Offers</a>
							</div>
							<div class='btn-product-view-details'>
							  <a class='btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700' href='./showroom_details.php?bid=".$row['mdid']."'>View detail</a>
							</div>
						  </div>
						</div>
						<div class='product-details text-center'>
						  <a href='#'><h5 class='product-title'>".$row['mname']."</h5></a>
						  <a href='#'><h6 class='title'>Color: ".$row['color']." </h6></a>
						  <a href='#'><h6 class='title'>Price: ".$row['price']."</h6></a>
						  <div class='' title='Rated 3.50 out of 5'><span style='width: 100%;'>Category: ".$row['cat_name']."</span></div>
						  
						</div>
					  </div>
					</div>";
					}
				}
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>  
  <!-- end main-content -->
  <?php
	include('./includes/footer.php');
  ?>

  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper --> 

<!-- Footer Scripts --> 
<!-- JS | Custom script for all pages --> 
<script src="js/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) --> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
</body>

<!-- Mirrored from kodesolution.com/demo/wxyz/w/learnpress/v2.0/demo/index-mp-layout1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jul 2017 10:21:15 GMT -->
</html>