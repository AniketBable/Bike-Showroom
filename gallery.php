<?php
 $now=date('Y-m-d');
 include('lock.php');
 include('conn.php');
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
<title>Participant Registration | Online Photo Contest</title>

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
  <script src="./sss.js"></script>
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
    <!-- Section: Gallery -->
    <section id="gallery">
     <div class="container pt-50 pb-30">
        <div class="section-content">
        <div class="row">
          <div class="col-md-12">
            
            <!-- Portfolio Gallery Grid -->
            <div id="grid" class="gallery-isotope grid-3 gutter clearfix">

              <!-- Portfolio Item Start -->
				<?php
			  error_reporting(E_ALL);
			  $vote="";
			  $sql = "SELECT p.photo_id, p.imgpath, p.pdate, c.cname, pu.pmob, pu.pname FROM part_user pu, photo p, catagory c WHERE pu.puid=p.puid AND c.cid=p.cid AND p.pstatus=1 order by p.pdate asc";
			  $result = $conn->query($sql);
			  if ($result->num_rows > 0) {
			  while($row = $result->fetch_assoc()) {
				$sql1 = "SELECT * FROM transaction_like WHERE liked_photo_id=".$row['photo_id']." AND euid=$user_id AND status=1";
				$result1 = $conn->query($sql1);
				if ($result1->num_rows > 0) {
				$vote="<h4 class='title text-uppercase font-raleway font-weight-500 m-0'>".$row['cname']." <a href='#'><button type='button' class='btn btn-danger btn-sm' onclick='unvote_photo(".$row['photo_id'].")' name ='btndel' id='btndel'> Unlike </button></a></h4>";
				}
				else{
				$vote="<h4 class='title text-uppercase font-raleway font-weight-500 m-0'>".$row['cname']." <a href='#'><button type='button' class='btn btn-success btn-sm' onclick='vote_photo(".$row['photo_id'].")' name ='btndel' id='btndel'> Like </button></a></h4>";
				}
              echo"<div class='gallery-item wheel'>
                <div class='work-gallery'>
                  <div class='gallery-thumb'>
                    <img class='img-fullwidth' alt='' height='215' width='380' src='./participant/".$row['imgpath']."'>
                    <div class='gallery-overlay'></div>                  
                    <div class='gallery-contect'>
                      <ul class='styled-icons icon-bordered icon-circled icon-sm'>
                        <li><a href='#'><i class='fa fa-heart'></i></a></li>
                        <li><a data-rel='prettyPhoto' href='./participant/".$row['imgpath']."'><i class='fa fa-arrows'></i></a></li>
                      </ul>
                    </div> 
                  </div>
                  <div class='gallery-bottom-part text-center'>
				  ".$vote."                 
                    <h5 class='sub-title m-0'>".$row['pdate']." </h5>
                  </div>
                </div>
              </div>";
			  }
			  }
			  ?>
              <!-- Portfolio Item End -->
            </div>
            <!-- End Portfolio Gallery Grid -->
          </div>
        </div>
        </div>
      </div >
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