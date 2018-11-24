<?php
$image1 = 'public/images/' . $data->Image1;
$image2 = 'public/images/' . $data->Image2;
$image3 = 'public/images/' . $data->Image3;


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Details</title>
	<!-- Bootstrap core CSS -->
	<link href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{url('vendor/bootstrap/css/style.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{url('public/font-awesome-4.7.0/css/font-awesome.min.css')}}">
</head>
<body>
	<div class="container">

		<div style="font-weight: bold; font-size: 35px">{{$data->NameApp}}</div>

		

		<div style="font-weight: bold; font-size: 20px;">Developer</div>
		{{$data->Developer}}

		<div style="font-weight: bold; font-size: 20px;">Description</div>
		{{$data->Description}}

		<div style="font-weight: bold; font-size: 20px;">Link Download</div>
		{{$data->LinkDownload}}

		<div style="font-weight: bold; font-size: 20px;">Number Download</div>
		{{$data->NumberDownload}}

		<div style="font-weight: bold; font-size: 20px;">Date Submit</div>
		{{$data->DateSubmit}}

		<div style="font-weight: bold; font-size: 20px;">Version</div>
		{{$data->Version}}

		<div style="font-weight: bold; font-size: 20px;">Size</div>
		{{$data->Size}}


		<div style="font-weight: bold; font-size: 20px;">Image </div>
		<div class="row">
			<div class="col-md-4">
				<img src="{{url('public/images/edge1.jpg')}}" alt="image 1">
			</div>
			<div class="col-md-4">
				<img src="{{url('public/images/edge1.jpg')}}" alt="image 2">
			</div>
			<div class="col-md-4">
				<img src="{{url('public/images/edge1.jpg')}}" alt="image 3">
			</div>
		</div>
	</div>


</body>
</html>