<?php

include('conn.php');

session_start();
$c_id = $_SESSION['c_id'];
$username = $_SESSION['username'];
//print $c_id;
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

    <?php print "<title>$name</title>"; ?>

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
				<!-- <a href="#contact" class="page-scroll waves-effect"><i class="fa fa-fw fa-envelope-o"></i><span>Send Mail</span></a> -->
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
	
	
    <!-- Start About Us Section -->
    <section id="about-us" class="about-us-section-1">
        <div class="container">
		    <div class="row plus-sign waves-effect waves-circle">
			<a href='addjob.php' ><span data-toggle="tooltip" data-placement="top" title="Add Jobs" class="glyphicon glyphicon-plus-sign"></span></a>
			</div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                            <h2>JOBS ADDED</h2>
                            <p>See all your added jobs below</p>
                        </div>
                </div>
            </div>
			
			<!-- Modal1
	  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content 
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> ADD JOB</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="post" action='addjob.php' name="form">
            <div class="form-group">
              <label for="desc"><span class="glyphicon glyphicon-user"></span>Job Description</label>
              <input type="text" class="form-control" id="jdescp" name="j_descp" placeholder="Enter Description">
            </div>
            <div class="form-group">
              <label for="vacancy"><span class="glyphicon glyphicon-eye-open"></span>Vacancy</label>
              <input type="text" class="form-control" id="vacancy" name="vacancy" placeholder="Enter Vacancy">
            </div>
            <div>
            <br>
            </div>
              <button type="submit" onclick="submitForm()" class="btn btn-success btn-block" data-dismiss="modal" name="submit"><span class="glyphicon glyphicon-off"></span>Add Job</button>
          </form>
        </div>
      </div> -->
      
    </div>
  </div> 
  
 <?php
//INSERT query block
if(isset($_POST['submit']))
{
    print $_POST['j_descp'];
    print $_POST['vacancy'];
    print $_SESSION['c_id'];
    /*$j_descp = $_POST['j_descp'];
    $vacancy = $_POST['vacancy'];
    $sql = "INSERT INTO `jobs`(`j_id` , `c_id` , `j_descp` , `vacancy`) VALUES ( , '$c_id' , '$j_descp' , '$vacancy')";
    $result = mysqli_query($conn,$sql);
    $count = mysqli_affected_rows($conn);
    if($result)
    {
        print '<script type="text/javascript">';
        print 'window.alert("Insert Successfull");';
        print 'window.location.href="company.php";';
        print '</script>';
        
    }*/
}
?>
 
			
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-section">
					<?php
						$query = "SELECT j_id,j_descp,vacancy FROM jobs WHERE c_id='$c_id'";
						$result = mysqli_query($conn,$query);
						while ($row = mysqli_fetch_array($result))
						{
							print "<div class='welcome-section service text-center waves-effect'>";
							print "<i class='fa fa-cube'></i>";
							print "<h4>" . $row['j_id'] . "</h4>";
							print "<div class='border'></div>";
							print "<p>" . $row['j_descp'] . "</p>";
							print "<p>Vacancy: " . $row['vacancy'] . "</p>";
							print "</div>";
						}
					?>
            </div><!-- /.row -->            
           </div>
        </div><!-- /.container -->
	</section>
    <!-- End About Us Section -->
	
	
   
    <!-- Start Team Member Section -->
    <section id="team" class="team-member-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                            <h2>EMPLOYEES</h2>
                            <p>Application for your company</p>
                        </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-section">
                    <?php
						$j = 0;
						$select_query = "SELECT e.e_fname,e.e_lname,e.e_hsc_marks,e.e_be_marks,j.j_id,j.a_id from job_apply_status as j JOIN employee as e ON e.e_id=j.e_id AND j.c_id='$c_id' AND status='pending' ORDER BY j.a_id";
						$select_result = mysqli_query($conn,$select_query);
						while ($select_row = mysqli_fetch_array($select_result))
						{	
							$a_id_array[$j] = $select_row['a_id'];
							$j++;
						?>
							<div class="team-member">
								<img src="assets/images/team/face_1.png" class="img-responsive" alt="">
								<div class="team-details">
									<h4><?php print $select_row['e_fname'] . " " . $select_row['e_lname']; ?></h4>
									<div class="designation">Application ID: <?php print $select_row['a_id']; ?></div>
									<div class="designation">HSC Marks: <?php print $select_row['e_hsc_marks']; ?></div>
									<div class="designation">BE Marks: <?php print $select_row['e_be_marks']; ?></div>
									<div class="designation">Application for Job ID: <?php print $select_row['j_id']; ?></div>
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						<?php
						}
						?>
				<!--
                       <div class="team-member">
                        <img src="assets/images/team/face_1.png" class="img-responsive" alt="">
                        <div class="team-details">
                            <h4>John Doe</h4>
                            <div class="designation">Founder & Director</div>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                               
                            </ul>
                        </div>
                    </div>
               
						<div class="team-member">
                        <img src="assets/images/team/face_1.png" class="img-responsive" alt="">
                        <div class="team-details">
                            <h4>John Doe</h4>
                            <div class="designation">Founder & Director</div>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                               
                            </ul>
                        </div>
                    </div>
               
               
               
                        <div class="team-member">
                        <img src="assets/images/team/face_1.png" class="img-responsive" alt="">
                        <div class="team-details">
                            <h4>John Doe</h4>
                            <div class="designation">Founder & Director</div>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                               
                            </ul>
                        </div>
                    </div>
               
                -->
            </div>
           </div>
         </div>		   
        </div>
    </section>
    <!-- End Team Member Section -->
	
			   
	<form name="form" method="post" action='acc_rej.php' id='form'>
		<div class="form-group">
			<label for="cusrname">Select Application ID: </label>
			<select name="a_id">
			<?php
				foreach($a_id_array as $a_id_value => $value) 
				{
					$a_id_value = htmlspecialchars($a_id_value); 
					echo '<option value="'. $value .'">'. $value .'</option>';
				}
			?> 
			</select>
		
			<h2><button type="submit" class="btn btn-success btn-block" form='form' name='accept' onclick="submitForm()" value="accept"><span class="glyphicon glyphicon-off"></span> Accept!</button></h2><br>
			<h2><button type="submit" class="btn btn-danger btn-block" form='form' name='reject' onclick="submitForm()" value="reject"><span class="glyphicon glyphicon-off"></span> Reject!</button></h2>
		</div>
	</form>
	
    <!-- Start Contact Us Section
    <section id="contact" class="contact contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
                        <h2></h2>
                        <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="600ms">
                                <div class="form-group waves-effect">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group waves-effect">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group waves-effect">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInRight" data-wow-duration="2s" data-wow-delay="600ms">
                                <div class="form-group waves-effect">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-primary waves-effect">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>     
    </section>
    -->
 
    
    
    <!-- jQuery Version 2.1.3 -->
    <script src="assets/js/jquery-2.1.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	
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
	$(document).ready(function()
	{
		$('[data-toggle="tooltip"]').tooltip();   
	}
	);

	function submitForm()
	{
		document.forms["form"].submit();
	}
</script>

</body>
</html>
