<?php 
session_start();
 ?>
 <?php 
$s_id='';
$fname='';
$lname='';
$area='';
if(isset($_SESSION['details'])){

foreach ($_SESSION['details'] as $user) {
        
    $fname=$user['first_name'];
        $lname=$user['last_name'];
        $area=$user['area'];
        $s_id=$user['s_id'];
        $area=$user['area'];
        $school=$user['school'];
        $bday=$user['birthdate'];
        $race=$user['race'];
        $religion=$user['religion'];
        $reg=$user['reg_date'];
        $out=$user['out_date'];
        $gender=$user['gender'];

       
    }
}
  ?>
<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<head>

<title>Your Profile</title>

<!-- Meta-Tags -->
<!--<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Multi Tabs Resume Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
-->

<script type="application/x-javascript">
 		addEventListener("load", 
 		function() { setTimeout(hideURLbar, 0); }, false);
 	 	function hideURLbar(){ window.scrollTo(0,1); } 
 </script>
<!-- //Meta-Tags -->

<!-- Custom-Style-Sheet -->
<link rel="stylesheet" href="css/studentprofile.css" type="text/css" >
<!-- //Custom-Style-Sheet -->

<!-- Fonts -->
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" type="text/css" media="all">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700"			   type="text/css" media="all">
<!-- //Fonts -->

<!-- Default-JavaScript --><script type="text/javascript" src="js/jquery.min.js"></script>

</head>
<!-- //Head -->



	<!-- Body -->	
	<body>
		<p>
			you are logged as   <?php echo $_SESSION['username'] ?> .
		  </br>
		  <a href="../index.php?op=logout">Logout</a>
		</p>	
		<h1>Your Profile</h1>

		<div class="containerw3layouts-agileits">

			<div id="verticalTab" class="resp-vtabs w3-agile" style="display: block; width: 100%; margin: 0px;">

				<ul class="resp-tabs-list agileits-w3layouts">
					<li class="resp-tab-item"><span>About</span></li>
					<li class="resp-tab-item"><span>Experience</span></li>
					<li class="resp-tab-item agileinfo"><span>Education</span></li>
					<li class="resp-tab-item"><span>Skills</span></li>
					<li class="resp-tab-item"><span>Contact</span></li>
					<li class="resp-tab-item"><span>Upload Photo</span></li>
				</ul>

				<div class="resp-tabs-container">

					<div class="resp-tab-content">
						<div class="agileabout">
							<div class="agileabout-image w3-agileits">
								<img src="../view/images/<?php echo $s_id;?>.jpg" alt="W3layouts">
							</div>
							<div class="agileabout-info">
								<ul>
									<li><div class="li1">Name</div><div class="li2">:</div><div class="li3"><?php echo $fname." ".$lname;?></div><div class="clearfix"></div></li>
									<li><div class="li1">Birthday</div><div class="li2">:</div><div class="li3"><?php echo $bday;?></div><div class="clearfix w3-agileits"></div></li>
									<li><div class="li1">Lives In</div><div class="li2">:</div><div class="li3"><?php echo $area;?></div><div class="clearfix"></div></li>
									<li><div class="li1">School</div><div class="li2">:</div><div class="li3"><?php echo $school;?></div><div class="clearfix"></div></li>
									<li><div class="li1">Race</div><div class="li2">:</div><div class="li3"><?php echo $race;?></div><div class="clearfix"></div></li>
									<li><div class="li1">Religion</div><div class="li2">:</div><div class="li3"><?php echo $religion;?></div><div class="clearfix"></div></li><br>
									<li><div class="li1">Gender</div><div class="li2">:</div><div class="li3"><?php echo $gender;?></div><div class="clearfix"></div></li>
									<li><div class="li1">Register Date</div><div class="li2">:</div><div class="li3"><?php echo $reg;?></div><div class="clearfix"></div></li>
									<li><div class="li1">Pass Out Date</div><div class="li2">:</div><div class="li3"><?php echo $out;?></div><div class="clearfix"></div></li>

								</ul>
							</div>
							<div class="clear"></div>
						</div>
					</div>

					<div class="resp-tab-content">
						<div class="work">
							<div class="work-info agileits-w3layouts">
								<h4>2013 - 2016</h4>
								<h5>Company 2</h5>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
							</div>
							<div class="work-info agile">
								<h4>2009 - 2013</h4>
								<h5>Company 1</h5>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
							</div>
						</div>
					</div>

					<div class="resp-tab-content">
						<div class="work w3-agileits">
							<div class="work-info">
								<h4>2007 - 2009</h4>
								<h5>University</h5>
								<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae.</p>
							</div>
							<div class="work-info agileinfo">
								<h4>2004 - 2007</h4>
								<h5>Senior High</h5>
								<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae.</p>
							</div>
							<div class="work-info w3layouts">
								<h4>1995 - 2004</h4>
								<h5>School</h5>
								<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae.</p>
							</div>
						</div>
					</div>

					<div class="resp-tab-content">
						<div class="our-skills">
							<div class="single-skill">
								<p class="lead">HTML</p>
								<div class="progress">
									<div class="progress-bar progress-bar-1">90%</div>
								</div>
							</div>
							<div class="single-skill">
								<p class="lead">CSS</p>
								<div class="progress wthree">
									<div class="progress-bar progress-bar-2">80%</div>
								</div>
							</div>
							<div class="single-skill">
								<p class="lead">JAVASCRIPT</p>
								<div class="progress w3-agile">
									<div class="progress-bar progress-bar-3">85%</div>
								</div>
							</div>
							<div class="single-skill">
								<p class="lead">PHP</p>
								<div class="progress">
									<div class="progress-bar agile progress-bar-4">95%</div>
								</div>
							</div>
							<div class="single-skill">
								<p class="lead">SQL</p>
								<div class="progress w3layouts">
									<div class="progress-bar progress-bar-5">75%</div>
								</div>
							</div>
						</div>
					</div>

					<div class="resp-tab-content">						
						<div class="agileabout-info aitsabout">
							<ul>
								
								
								<li><div class="li1">Mobile Number</div><div class="li2 w3-agile">:</div><div class="li3">0711625552</div><div class="clearfix"></div></li>
								<li><div class="li1">Imagancy Contact Number</div><div class="li2 w3-agile">:</div><div class="li3">0382241955</div><div class="clearfix"></div></li>
								<li><div class="li1">Imagancy Person</div><div class="li2 w3-agile">:</div><div class="li3">Mother</div><div class="clearfix"></div></li>
								
							</ul>
						</div>
						<div class="clear"></div>
						
					</div>
					<div class="resp-tab-content">						
						<div class="upload-image">
							<ul>
								<form class="uplaod" action="upload.php" method="post" enctype="multipart/form-data" >
								    
								    <input class="up1" type="file" name="fileToUpload" value="Chose Image" >
								    <input class="up2" type="submit" value="Upload Image" name="submit">
								</form>
							</ul>
						</div>
						<div class="clear"></div>
						
					</div>
					<div class="clear"></div>

				</div>
				<div class="clear w3-agile"></div>

			</div>

		</div>

		<div class="w3lsfooteragileits">
			<p> &copy; 2017 University of Colombo School of Computing<a href="http://http://ucsc.cmb.ac.lk" target="=_blank"> UCSC</a></p>
		</div>



		<!-- Necessary-JavaScript-Files-&-Links -->

			<!-- Tabs-JavaScript -->
				<script src="js/easyResponsiveTabs.js"></script>
				<script type="text/javascript">
					$(document).ready(function () {
						$('#horizontalTab').easyResponsiveTabs({
							type: 'default',
							width: 'auto',
							fit: true,
							closed: 'accordion',
							activate: function(event) {
								var $tab = $(this);
								var $info = $('#tabInfo');
								var $name = $('span', $info);
								$name.text($tab.text());
								$info.show();
							}
						});
						$('#verticalTab').easyResponsiveTabs({
							type: 'vertical',
							width: 'auto',
							fit: true
						});
					});
				</script>
			<!-- //Tabs-JavaScript -->


		<!-- //Necessary-JavaScript-Files-&-Links -->



	</body>
	<!-- //Body -->

</html>