<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<title>Diabeties</title>
</head>
<body>
<div id="functions_div" class="row bg-light" style="height: 565px">	
<div id="card" class="card col-12 bg-light">
 	<div class="card-body bg-grey" style="background-color:white ">
    	<div class=" text-center">
			<h2>Diabetes Diagnosis</h2>	
		</div>

		<div class="row" id='container' style="margin-top: 20px">
		<div class="col-1"></div>

		<div class="col-5">
		<div class="form-row">
	    	<div class="form-group">
				<label>Glucose Level</label>
	      		<input class="form-control" id="glucose" placeholder="Enter a integer">
	    	</div>
	    	<div class="form-group" style="margin-left: 20px">
	      		<label>Blood Pressure</label>
	      		<input class="form-control" id="blood" placeholder="Enter a integer">
	    	</div>
	    </div>
	    <div class="form-row">
	    	<div class="form-group">
	      		<label>Insulin</label>
	      		<input class="form-control" id="insulin" placeholder="Enter a integer">
	    	</div>
	    	<div class="form-group" style="margin-left: 20px">
	      		<label>Age</label>
	      		<input class="form-control" id="age" placeholder="Enter a integer">
	    	</div>
		</div>
		<div class="form-row">
	    	<div class="form-group">
	      		<label>BMI unit</label>
	      		<input class="form-control" id="bmi" placeholder="Enter a decimal">
	    	</div>
	    	<div class="form-group" style="margin-left: 20px">
				<label>Diabetes Pedigree Function</label>
	      		<input class="form-control" id="pedigree" placeholder="Enter a decimal">
	    	</div>
		</div>
		<div class="form-row">
	    	<div class="col-4 form-group">
	    		<label>Gender</label><br>
		    	<select id="gender" class="form-control" onChange="enable();">
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
			</div>
			<div class="col-4 form-group" style="margin-left:40px">
				<label>Pregnancy Count</label>
	      		<input class="form-control" id="preg_count" placeholder="Enter a integer" value='0' disabled=true>	
			</div>
		</div>
		<div class="form-row">
			<div class="col-9">
			<button id="submit" class="btn btn-secondary btn-lg btn-block">
					Perform Analysis For Diabeties
			</button>
			</div>
		</div>
		
		</div>
		</div>
	</div>
    		

</div>

	<script type="text/javascript" src="{{asset('js/navbar.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/navbar_sec.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/diabeties.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>