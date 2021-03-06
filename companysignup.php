<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Job Portal - Company Signup</title>

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
      <div class="container" style="z-index:100;margin-top:50px;width:40%">
	 <div class="panel panel-default">
                            <div class="panel-heading" style="border-color:#ffffff">
                                <h4 class="panel-title" style="text-align:center;font-size:2em;background-color:#28ABE3;color:#ffffff">
                                    Sign Up 
                                </h4>
                            </div>
							<div class="panel-body">
							<div class="container-fluid" style="padding-top:15px;padding-bottom:15px">
                            <form role="form" name="form" method="post" action="csignup.php">
            <div class="form-group">
              <label for="cusrname">COMPANY NAME</label>
              <input type="text" class="form-control" id="cusrname" name="name" placeholder="Enter name">
            </div>
			<div class="form-group">
              <label for="cpsw">USERNAME</label>
              <input type="text" class="form-control" id="usname" name="username" placeholder="Enter username">
            </div>
            <div class="form-group">
              <label for="cpsw">PASSWORD</label>
              <input type="password" class="form-control" id="cpsw" name="password" placeholder="Enter password">
            </div>
			<div class="form-group">
              <label for="cemail">COMPANY EMAIL</label>
              <input type="email" class="form-control" id="cemail" name="email" placeholder="Enter email">
            </div>
              <h2><button type="submit" onclick="submitForm()" class="btn btn-success btn-block" data-dismiss="modal"><span class="glyphicon glyphicon-off"></span> Login</button></h2>
          </form>
		  </div>
        </div>
	
	</div>
	</div>
	
	

    <!-- End Header Section -->
    
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

    <script>
	function submitForm()
	{
		document.forms["form"].submit();
	}
	</script>
</body>
</html>
