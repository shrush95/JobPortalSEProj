<?php

include('conn.php');

session_start();
$c_id = $_SESSION['c_id'];
$username = $_SESSION['username'];

$user_info = "SELECT * FROM company WHERE c_id='$c_id'";
$user_info_result = mysqli_query($conn,$user_info);
$user_info_count = mysqli_num_rows($user_info_result);
if ($user_info_count);
{
	$user_info_row = mysqli_fetch_array($user_info_result);
	$name = $user_info_row['c_name'];
	$email = $user_info_row['c_emailid'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php print "<title>$name</title>"?>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    
    
    <!-- Animate CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    
    <!-- Owl-Carousel -->
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css" >
    <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.css" >
    <link rel="stylesheet" type="text/css" href="assets/css/owl.transitions.css" >

    <!-- Materialize CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/material.css">
    
    
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    
    


    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/color/blue.css" title="blue">
    

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    
    
    <!-- Modernizer js -->
    <script src="assets/js/modernizr.custom.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="index">
    
    <!-- Start Off=Canvas Navigation Section -->
    <div class="menu-wrap">
		<nav class="menu">
			<div class="icon-list">
			<div style="line-height:0.0001em;margin-bottom:15px;">
			    <h2 class="logo1">Welcome</h2>
				<?php print "<a href='company.php' class='logo page-scroll waves-effect'>$name</a>"; ?>
			</div>
				<a href="companyinfo.php" class="page-scroll waves-effect"><i class="fa fa-fw fa-user"></i><span>Profile</span></a>
				<!--<a href="#contact" class="page-scroll waves-effect"><i class="fa fa-fw fa-envelope-o"></i><span>Send Mail</span></a>-->
				<a href="#" class="page-scroll waves-effect"><i class="fa fa-fw fa-comment-o"></i><span>Logout</span></a>
			</div>
		</nav>
		<button class="close-button" id="close-button">Close Menu</button>
	</div>
	<button class="menu-button waves-effect" id="open-button">Open Menu</button>
	
	
	

    <!-- End Off-Canvas Navigation Section -->
    
    
    <!-- ***************************************************************** -->
    <!-- Start Header Section -->
    <!-- ***************************************************************** -->

	    <!-- Start Team Member Section -->
    <section id="team" class="team-member-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                            <?php print "<h2><strong>$name's Profile</strong></h2>"; ?>
							<p> </p>
                        </div>
                </div>
            </div>
            
            <div class="row">
			    <div class="col-md-1 col-sm-6">
				</div>
                <div class="col-md-3 col-sm-6">
                    <div class="team-member">
                        <img src="assets/images/team/face_1.png" class="img-responsive" alt="">
                        <div class="team-details">
                            <?php print "<h4>$name</h4>"; ?>
                            <div class="designation">IT</div>
                            <p class="description"></p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
				</div>
				<div class="col-md-2 col-sm-6">
				</div>
                <div class="col-md-5 col-sm-6">
				<div class="contact-info waves-effect" style="width:100%">
					<h4>Contact info</h4>
					<ul>
						<?php print "<li><strong>E-mail: </strong>$email</li>"; ?>
						<!-- <li><strong>Contact :</strong> +8801-45565378</li>
					</ul>
				</div>
				</div>
	</div>
</div>
</div>
    </section>
    
    
    
    
    
    <!-- jQuery Version 2.1.3 -->
    <script src="assets/js/jquery-2.1.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/classie.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.fitvids.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assets/js/contact_me.js"></script>

    <!-- Materialize js -->
    <script src="assets/js/material.js"></script>
    <script src="assets/js/waypoints.min.js"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="assets/js/google-map-init.js"></script>

    <!-- Custom JavaScript -->
    <script src="assets/js/script.js"></script>
    
    
</body>
</html>
