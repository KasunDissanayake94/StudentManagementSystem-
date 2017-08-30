
<!DOCTYPE html>
<html>
<head>


	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- boostrap theme -->
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-theme.min.css">

	<!-- custom css -->


	<!-- jquery -->
	<script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
	<!-- boostrap js -->
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
<div class="row">
	<div class="col-md-3">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<a href="student?opt=mgst" style="color:white;">
					Total Student : <span class="badge"></span>	
				</a>				
			</div>			
		</div>
	</div>

	<div class="col-md-3">
		<div class="panel panel-success">
			<div class="panel-heading">
				<a href="teacher">
					Total Teacher : <span class="badge"></span>	 	
				</a>
				
			</div>			
		</div>
	</div>

	<div class="col-md-3">
		<div class="panel panel-info">
			<div class="panel-heading">
				<a href="classes">
					Total Class : <span class="badge"></span>		
				</a>
				
			</div>			
		</div>
	</div>

	<div class="col-md-3">
		<div class="panel panel-warning">
			<div class="panel-heading">
				<a href="marksheet?opt=mngms">
					Total Marksheet : <span class="badge"></span>	
				</a>
			</div>			
		</div>
	</div>

	<div class="col-md-5">
		<div class="panel panel-default">
			<div class="panel-heading"> Lifetime Income </div>
			<div class="panel-body">
				<center>
					<h3><b></b></h3>	
				</center>				
			</div>	
		</div>

		<div class="panel panel-default">
			<div class="panel-heading"> Lifetime Expenses </div>
			<div class="panel-body">
				<center>
					<h3><b></b></h3>	
				</center>
				
			</div>	
		</div>

		<div class="panel panel-default">
			<div class="panel-heading"> Current Budget </div>
			<div class="panel-body">
				<center>
					<h3><b></b></h3>
				</center>
			</div>	
		</div>
	</div>

	<div class="col-md-7">
		<div class="panel panel-default">
			<div class="panel-heading"> <i class="glyphicon glyphicon-calendar"></i> Calendar</div>
			<div class="panel-body">
				<div id="calendar"></div>
			</div>	
		</div>
	</div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $("#topNavDashboard").addClass('active');
    $("#calendar").fullCalendar();
  });
</script>
</body>

