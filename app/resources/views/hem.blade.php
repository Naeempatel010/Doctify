<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<title>hem</title>
</head>
<body>
	
	<div id="functions_div" class="row bg-light" style="height: 565px">	
		<div id="card" class="card col-12 bg-light">
 			<div class="card-body bg-grey" style="background-color:white ">
 				<div class=container>
				<div class=" text-center" style="margin-top: 20px">
					<h2>Hemorrhage Diagnosis</h2>	
				</div>
	
				<div class="row" id='container' style="margin-top: 20px">
				<div class="col-6">
					<div class="card mb-3">
						<img id="img" src="images/imgcap.png" class="card-img-top" alt="...">
						<div class="card-body">
							<input id="file_input" onchange="encodeImageFileAsURL();" class="btn btn-light" type="file">
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
 						</div>
					</div>
				</div>
		
				<div class="col-8">
					
				</div>
				</div>
				</div>
			</div>
		</div>
	<div>
	<script type="text/javascript" src="{{asset('js/navbar.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/navbar_sec.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/pneumonia.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>