<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Start Checkup</title>
</head>
<body>
	<div class="container">
	<div id="functions_div" class="row" style="margin-top: 25px;">	
		<div class="dropdown col-3" style="display: inline;">
	  		<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Diagnosis</button>
	  		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
	    		<a class="dropdown-item" href="/diabeties">Diabeties</a>
	    		<a class="dropdown-item" href="/pneumonia">Pneumonia</a>
	    		<a class="dropdown-item" href="#">ddadassdds</a>
	  		</div>
		</div>
		<div class="col-3">
		<button type="button" class="btn btn-secondary">General Diagnosis</button>
		</div>
		<div class="col-3">
		<button type="button" class="btn btn-secondary">Nearest Hospital</button>
		</div>
		<div class="col-3">
		<button type="button" class="btn btn-secondary">FAQ's</button>
		</div>		
	</div>

	<script type="text/javascript" src="{{asset('js/navbar.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/Start_Checkup.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>