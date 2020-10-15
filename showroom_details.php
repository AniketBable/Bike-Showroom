<?php
$error="";
$show="display:none;";
$alert="";
include("conn.php");
if (isset($_GET['bid'])) {	
	$mdid=$_GET['bid'];
    $sql1="SELECT * FROM model_details md, showroom_user su, model m, catagory c WHERE c.cid=md.cid AND m.mid=md.mid AND su.suid=md.suid AND md.mdid=$mdid AND md.status=1";
    $result = $conn->query($sql1);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
			$mdid = $row["mdid"];
			$cid = $row["cid"];
			$mid = $row["mid"];
			$cat_name = $row["cat_name"];
			$mdname = $row["mdname"];
			$color = $row["color"];
			$weight = $row["weight"];
			$fuel_capacity = $row["fuel_capacity"]; 
			$eng_type = $row["eng_type"];
			$eng_power = $row["eng_power"];
			$start_type = $row["start_type"];
			$no_of_gear = $row["no_of_gear"];
			$max_speed = $row["max_speed"];
			$break_type = $row["break_type"];
			$weel_type = $row["weel_type"];
			$headlamp = $row["headlamp"];
			$price = $row["price"];
			$description = $row["description"];
			$imgpath = $row["imgpath"];
		}
	}
}

if (isset($_POST['submitcomm'])){
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 $comment = test_input($_POST["comment"]);
		$sql = "INSERT INTO feedback (comment, comm_date, status, mdid, uid) VALUES ('$comment', @now := now(), 2, $mdid, 1)";
		if($conn->query($sql)===TRUE){
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
<html dir="ltr" lang="en">

<!-- Mirrored from kodesolution.com/demo/wxyz/w/learnpress/v2.0/demo/index-mp-layout1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jul 2017 10:17:57 GMT -->
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Maitri Family Health Care | Manchar Ambegaon Pune-410503" />
<meta name="keywords" content="Maitri Family Health Care, manchar health care" />
<meta name="author" content="Zelos Infotech Pvt. Ltd." />


<!-- Page Title -->
<title>Showroom Details</title>

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
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="product">
              <div class="col-md-5">
                <div class="product-image">
                  <div class="zoom-gallery">
                    <a href="./business_user/<?php echo $imgpath; ?>" title="Title Here 1"><img src="./showroom_user/<?php echo $imgpath; ?>" alt=""></a>
                  </div>
                </div>
              </div>
              <div class="col-md-7">
                <div class="product-summary">
                  <h2 class="product-title"><?php echo $mdname; ?></h2>
                  <div class="product_review">
                    <ul class="review_text list-inline">
                      
                      <li><a href="#"><u>Bike Catagory</u></a></li>
                      <li><a href="#"><?php echo $cat_name;?></a></li>
                    </ul>
                  </div>
                  <div class="price"> <ins><span class="amount">Color <span class="glyphicon glyphicon-leaf" aria-hidden="true"></span> : <?php echo $color;?></span></ins></div>
                  
                  <div class="tags"><strong>Weight:</strong> <?php echo $weight; ?></div>
                  <div class="category"><strong>Fuel Capacity:</strong>  <a href="#"><?php echo $fuel_capacity;?></a></div>
                  <div class="tags"><strong>Engine Type:</strong> <a href="#"><?php echo $eng_type;?></a></div>
                  <div class="tags"><strong>Engine Power:</strong> <a href="#"><?php echo $eng_power;?></a></div>
                  <div class="tags"><strong>Start Type:</strong> <a href="#"><?php echo $start_type;?></a></div>
                  <div class="tags"><strong>No Of Gears:</strong> <a href="#"><?php echo $no_of_gear;?></a></div>
                  <div class="tags"><strong>Max Speed:</strong> <a href="#"><?php echo $max_speed;?></a></div>
                  <div class="tags"><strong>Break type:</strong> <a href="#"><?php echo $break_type;?></a></div>
                  <div class="tags"><strong>Wheel Type:</strong> <a href="#"><?php echo $weel_type;?></a></div>
                  <div class="tags"><strong>Head Lamp:</strong> <a href="#"><?php echo $headlamp;?></a></div>
                  <div class="tags"><strong>Showroom Price:</strong> <a href="#"><?php echo $price;?></a></div>
                  <div class="tags"><strong>About <?php echo $mdname; ?>:</strong> </div>
				  <div class="short-description">
                    <p><?php echo $description; ?></p>
                  </div>

                </div>
              </div>
              <div class="col-md-12">
                <div class="horizontal-tab product-tab">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab2" data-toggle="tab">Offers</a></li>
                    <li><a href="#tab3" data-toggle="tab">Reviews</a></li>
                    
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab2">
					<h3>Offers From <?php echo $mdname;?></h3>
					<?php
						$sql1="SELECT oid, datefrom, dateto, description, imgpath FROM offers WHERE mdid=$mdid AND status=1";
						$result = $conn->query($sql1);
						if ($result->num_rows > 0){
							while($row = $result->fetch_assoc()) {						
							  echo"<div class='row'>
								  <div class='col-md-6'>
									<div class='product-image'>
									  <div class='zoom-gallery'>
										<a href='./showroom_user/".$row['imgpath']."' title='Title Here 1'><img src='./showroom_user/".$row['imgpath']."' alt=''></a>
									  </div>
									</div>
								  </div>
								  <div class='col-md-6'>
									<div class='tags'><strong>Offer Started From:</strong> <a href='#'>".$row["datefrom"]."</a></div>
									<div class='tags'><strong>Offer Close Date:</strong> <a href='#'>".$row["dateto"]."</a></div>
									<div class='tags'><strong>What is Offer:</strong> <a href='#'>".$row["description"]."</a></div>
								  </div>
							  </div>";								
							}
						}
						else{
							echo "No offers Are Available!";
						}
						?>
                      

					</div>
                    <div class="tab-pane fade" id="tab3">
                      <div class="reviews">
						<div class="row">
						  <div class="col-md-12">
							<div class="border-2px p-10 mb-0" style="padding-bottom:-20px;">
							  <form style="margin-bottom:-15px;" action="./showroom_details.php?bid=<?php echo $mdid?>" method="post" enctype="multipart/form-data">
								<div class="row">
								  <div class="col-sm-4">
									<div class="form-group">
										<input type="text" class="form-control" id="comment" name="comment" placeholder="Post Your Comment Here!" required>
									</div>
								  </div>                      
								  <div class="col-sm-4">
									<div class="form-group">
									<button type="submit" name="submitcomm" class="btn btn-block btn-dark  btn-sm mt-0 pt-10 pb-10" data-loading-text="Please wait...">Post Comment</button>
									</div>
								  </div>
								</div>
							  </form>
							</div>
						  </div>
						</div>
                        <ol class="commentlist">
						<?php
						$sql1="SELECT comment, comm_date FROM feedback WHERE mdid=$mdid AND (status=1 OR status=2) Order By fid DESC";
						$result = $conn->query($sql1);
						if ($result->num_rows > 0){
							$count=0;
							while($row = $result->fetch_assoc()) {	
							$count++;							
							  echo"<li class='comment'>
                            <div class='media'> <a href='#' class='media-left'><img class='img-circle' alt='' src='https://placehold.it/75x75' width='75'></a>
                              <div class='media-body'>
                                <ul class='review_text list-inline'>
                                  <li>
                                    <h5 class='media-heading meta'><span class='author'><span class='glyphicon glyphicon-user' aria-hidden='true'></span>Comment".$count." - </span> ".$row["comm_date"].":</h5>
                                  </li>
                                </ul>
                                ".$row["comment"]."</div>
                            </div>
                          </li>";								
							}
						}
						else{
							echo "No Comments Are Available!";
						}
						?>
                        </ol>
                      </div>
                    </div>					
                  </div>
                </div>
              </div>
            </div>
			<hr/>
            <div class="col-md-12">
              <h3 class="line-bottom">Related Searches</h3>
              <div class="row multi-row-clearfix">
                <div class="products related">

					<?php
						error_reporting(E_ALL);
						$sql = "SELECT md.mdid, md.mdname, md.color, md.price, m.mname, su.suname, md.imgpath, md.status, md.regdate, c.cat_name, m.mname FROM model_details md, showroom_user su, model m, catagory c WHERE c.cid=md.cid AND m.mid=md.mid AND su.suid=md.suid AND md.cid=$cid AND md.mdid!=$mdid AND md.status=1 ORDER BY md.mdid ASC limit 4";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
							echo"<div class='col-sm-6 col-md-4 col-lg-4 mb-30'>
							  <div class='product'>
								<span class='tag-sale'>MyBike.com</span>
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
								  <a href='#'><h5 class='product-title'>".$row['mdname']."</h5></a>
								  <a href='#'><h6 class='title'>Color: ".$row['color']." </h6></a>
								  <a href='#'><h6 class='title'>Price: ".$row['price']."</h6></a>
								  <div class='' title='Rated 3.50 out of 5'><span style='width: 100%;'>Category: ".$row['cat_name']."</span></div>
								  
								</div>
							  </div>
							</div>";
							}
						}
						else{
							echo "Not Available related Searches!";
						}
						?>

                </div>
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