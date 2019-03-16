<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<title>Diabeties</title>
</head>
<body>
	<div class="container" id='container' style="margin: 50px">
	<div class="form-row ">
    	<div class="form-group col-md-3">
			<label>Glucose Level</label>
      		<input class="form-control" id="glucose" placeholder="Enter a integer">
    	</div>
    	<div class="form-group col-md-3" style="margin-left: 20px">
      		<label>Blood Pressure</label>
      		<input class="form-control" id="blood" placeholder="Enter a integer">
    	</div>
    </div>
    <div class="form-row">
    	<div class="form-group col-md-3">
      		<label>Insulin</label>
      		<input class="form-control" id="insulin" placeholder="Enter a integer">
    	</div>
    	<div class="form-group col-md-3" style="margin-left: 20px">
      		<label>Age</label>
      		<input class="form-control" id="insulin" placeholder="Enter a integer">
    	</div>
	</div>

	<div class="form-row">
    	<div class="form-group col-md-3">
      		<label>BMI unit</label>
      		<input class="form-control" id="bmi" placeholder="Enter a decimal">
    	</div>
    	<div class="form-group col-md-3" style="margin-left: 20px">
			<label>Diabetes Pedigree Function</label>
      		<input class="form-control" id="pedigree" placeholder="Enter a decimal">
    	</div>
	</div>

	<div class="form-row">
		<div class="col-md-6" style="margin-left: 10px">
		<button type="button" class="btn btn-secondary btn-lg btn-block">
				Perform Analysis For Diabeties
			</button>
		</div>
	</div>
	
	</div>
	<script type="text/javascript" src="js/navbar.js"></script>
	<script type="text/javascript" src="js/diabeties.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>