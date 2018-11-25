<!DOCTYPE html>
<html lang="en">
<head>
	<title>Thêm Type</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<!--===============================================================================================-->
	<link rel="stylesheet" href=" {{ asset('public/font-awesome-4.7.0/css/font-awesome.min.css') }}">

	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" {{ asset('vendor/animate/animate.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" {{ asset('vendor/css-hamburgers/hamburgers.min.css') }} ">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }} ">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('verangepicker/daterangepicker.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/main.css') }}">
	<!--===============================================================================================-->
</head>
<body>


	<div id="page-wrapper">
	<div class="container-fluid" style="background: gold;">
		<div class="col-lg-12">
			<h1 class="page-header">
				<small>Sửa</small>
			</h1>
		</div>
		<!-- col-lg-12-->
		<div class="col-lg-7" style="padding-bottom: 120px;  " >
			<?php //Hiển thị thông báo thành công?>
                        @if ( Session::has('success') )
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <strong>{{ Session::get('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                            </div>
                        @endif
                        <?php //Hiển thị thông báo lỗi?>
                        @if ( Session::has('error') )
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <strong>{{ Session::get('error') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                            </div>
                        @endif
			
			<form action="{!! URL::Route('create.users') !!}" method="POST" >
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label>Ho ten</label>
					<input type="text" class="form-control" name="name" placeholder="Nhap ten nguoi dung"  value="{{ old('NameUser',$getUserById['NameUser']) }}">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" placeholder="Nhap dia chi email"  value="{{ old('Email',$getUserById['Email']) }}">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" placeholder="Nhap mat khau"  value="{{ old('password',$getUserById['password']) }}">
				</div>
				
				<button type="submit" class="btn btn-dèault">Sửa</button>
				<button type="reset" class="btn btn-default">Lam moi</button>
			</form>
		</div>
	</div>
</div>

</body>
</html>
