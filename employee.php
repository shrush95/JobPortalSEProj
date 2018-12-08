<?php

include('conn.php');

session_start();
$e_id = $_SESSION['e_id'];
$username = $_SESSION['username'];

$user_info = "SELECT * FROM employee WHERE e_id='$e_id'";
$user_info_result = mysqli_query($conn,$user_info);
$user_info_count = mysqli_num_rows($user_info_result);
if ($user_info_count);
{
	$user_info_row = mysqli_fetch_array($user_info_result);
	$fname = $user_info_row['e_fname'];
	$lname = $user_info_row['e_lname'];
	$email = $user_info_row['e_emailid'];
	$hsc = $user_info_row['e_hsc_marks'];
	$be = $user_info_row['e_be_marks'];
}
$i = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php print "<title>$fname $lname </title>"; ?>

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
    
    <div class="menu-wrap">
		<nav class="menu">
			<div class="icon-list">
			<div style="line-height:0.0001em;margin-bottom:15px;">
			    <h2 class="logo1">Welcome</h2>
				<?php print"<a href='employee.php' class='logo page-scroll waves-effect'>$fname $lname</a>"; ?>
			</div>
				<a href="employeeinfo.php" class="page-scroll waves-effect"><i class="fa fa-fw fa-user"></i><span>Profile</span></a>
				<!--<a href="#contact" class="page-scroll waves-effect"><i class="fa fa-fw fa-envelope-o"></i><span>Send Mail</span></a>-->
				<a href="#" class="page-scroll waves-effect"><i class="fa fa-fw fa-comment-o"></i><span>Logout</span></a>
			</div>
		</nav>
		<button class="close-button" id="close-button">Close Menu</button>
	</div>
	<button class="menu-button waves-effect" id="open-button">Open Menu</button>
 
 
    <section id="latest-news" class="latest-news-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>JOBS</h2>
                        <p>Explore Opportunities</p>
                    </div>
                </div>
            </div>
            <div class="row">
                 <div class="col-md-12">
                    <div class="testimonial-section waves-effect">
                    <?php
                        //$query_select = "SELECT DISTINCT j.j_id,c.c_id,c.c_name,j.j_descp,j.vacancy FROM employee as e,jobs as j,company as c WHERE e.e_id='$e_id' AND e.e_hsc_marks > j.j_hsc_marks AND e.e_be_marks >= j.j_be_marks AND vacancy > 0 ";
						$query_select = "select j.j_id,j.j_descp,c.c_name,j.j_hsc_marks,j.j_be_marks from jobs as j,company as c WHERE j.c_id = c.c_id AND vacancy>0;";
						$result_select = mysqli_query($conn,$query_select);
						while ($row_select = mysqli_fetch_array($result_select))
						{	
							if ($hsc < $row_select['j_hsc_marks'] && $be < $row_select['j_be_marks'])
							{
								continue;
							}
						else 
							{
								$j_id_array[$i] = $row_select['j_id'];
								$i++;
						?>
								<div class='latest-post waves-effect'>
								<h3><?php print $row_select['c_name'] ?><h3>
								<h4>Job ID: <?php print $row_select['j_id'] ?></h4>
								<h4>Company ID: </h4>
								<p><?php print $row_select['j_descp'] ?></p>
								</div>
						<?php 
							}
						}
						?>
                    
                        <!--<div class="latest-post waves-effect">
                            <h4>Job2</h4>
                            
                            <p>Description</p>
							<p><strong>Company Name</strong></p>
                            <a class="btn btn-primary">Apply</a>
                        </div>
                    
                    
                        <div class="latest-post waves-effect">
                            <h4>Job3</h4>
                            
                            <p>Description</p>
							<p><strong>Company Name</strong></p>
                            <a class="btn btn-primary">Apply</a>
                        </div>
                    
					    <div class="latest-post waves-effect">
                            <h4>Job3</h4>
                            
                            <p>Description</p>
							<p><strong>Company Name</strong></p>
                            <a class="btn btn-primary">Apply</a>
                        </div>-->
                 </div>
               </div>
               
            </div>
        </div>
    </section>
    <!-- End Latest News Section -->
    
    <form role="form" name="form" method="post" action="apply_job.php">
		<div class="form-group">
			<label for="cusrname">Select Job Id to Apply for Job</label>
			<select name='j_id'>
			<?php
				foreach($j_id_array as $j_id_value => $value) 
				{
					$j_id_value = htmlspecialchars($j_id_value); 
					echo '<option value="'. $value .'">'. $value .'</option>';
				}
			?>
			</select>
		</div>
		<h2><button type="submit" onclick="submitForm()" class="btn btn-success btn-block" form='form' ><span class="glyphicon glyphicon-off"></span> Apply</button></h2>
	</form>
	<br><br><br><br>
	<?php
	
	$status_query = "SELECT * FROM job_apply_status WHERE e_id='$e_id'";
	$status_result = mysqli_query($conn,$status_query);
	//$status_row = mysqli_fetch_array($status_result);
	print "Applications: <br>";
	while ($status_row = mysqli_fetch_array($status_result))
	{
		if ($status_row['status'] == 'pending')
		{
			print "<br>APPLICATION ID: " . $status_row['a_id'] . "<br>";
			print "JOB ID: ". $status_row['j_id'] . "<br>";
			print "STATUS: " . $status_row['status'] . "<br><br>";
		}
		else
		if ($status_row['status'] == 'accepted')
		{
			print "<br>APPLICATION ID: " . $status_row['a_id'] . "<br>";
			print "<br>JOB ID: ". $status_row['j_id'] . "<br>";
			print "STATUS: " . $status_row['status'] . "<br><br>";
		}
		else 
		if($status_row['status'] == 'rejected')
		{
			print "<br>APPLICATION ID: " . $status_row['a_id'] . "<br>";
			print "<br>JOB ID: ". $status_row['j_id'] . "<br>"; 
			print "STATUS: " . $status_row['status'] . "<br><br>";
		}
	}	
	?>
		
    <!-- Start Client Section
    <section id="client" class="client-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
                        <h2>COMPANIES</h2>
                        <p>Search Company</p>
                    </div>
                </div>
            </div>
            <div class="row">
                 
                <div class="col-md-12">
                    <div class="testimonial-section">
                        <div class="testimonial">
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                            <div class="testimonial-people pull-right">
                                <img src="assets/images/clients/client_2.png" class="img-responsive" alt="Testimonial People">
                            </div>
                        </div>
						<div class="testimonial">
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                            <div class="testimonial-people pull-right">
                                <img src="assets/images/clients/client_2.png" class="img-responsive" alt="Testimonial People">
                            </div>
                        </div>
                        <div class="testimonial">
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                            <div class="testimonial-people pull-right">
                                <img src="assets/images/clients/client_3.png" class="img-responsive" alt="Testimonial People">
                            </div>
                        </div>
                      <div class="testimonial">
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                            <div class="testimonial-people pull-right">
                                <img src="assets/images/clients/client_3.png" class="img-responsive" alt="Testimonial People">
                            </div>
                       
                    </div>
                </div>
            </div>/.row
        </div>/.container
    </section>
    End Client Section -->
    
	<!-- Start Contact Us Section
    <section id="contact" class="contact contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
                        <h2>Contact Company</h2>
                        <p></p>
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
        
    </section>-->
    
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
	</script
    
    
</body>
</html>