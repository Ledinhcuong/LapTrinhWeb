<?php

spl_autoload_register(function ($class_name){
	require "app/" .$class_name . ".php";
});

$software = new software();
$phanMem = $software->layPhanMem(1);


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Software</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<LINK REL="SHORTCUT ICON" href="public/images/mylogo.ico">
	<link rel="stylesheet" href="public/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="public/css/styles.css">
	<script type="text/javascript" src="public/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="public/js/sitecripts.js" ></script>
	
</head>
<body>
	<!-- Header -->
	<header>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html"><img src="public/images/mylogo.ico" alt="">
						<b>Software</b></a>

					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
					<!--
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
					</ul>
				-->

				<ul class="nav navbar-nav navbar-right">
					<!-- form tìm kiếm -->
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Nhập tên phần mềm">
						</div>
						<button type="submit" class="btn btn-default" style="color: #4284F3"><i class="fa fa-search" aria-hidden="true"></i></button>
					</form>

					<!-- Các chỉ mục -->
					<li><a href="#" style="color: #5BC348"><i class="fa fa-android" aria-hidden="true"></i> Phần mềm</a></li>
					<li><a href="#" style="color: #f44336"><i class="fa fa-gamepad"></i> Trò chơi</a></li>
					<li><a href="https://www.facebook.com/LeDinhCuongPrime/" style="color: #3B5998"><i class="fa fa-facebook-official" aria-hidden="true"></i> Face</a></li>
					<li><a href="#"><i class="fa fa-user"></i> Tài khoản</a></li>

					<li><a href="#" style="color: #6FA8FF"><i class="fa fa-bars" aria-hidden="true" ></i> Menu</a></li>

				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
</header>

<!-- Blance -->
<div class="blance" style="padding: 30px 0; position: static;" >
</div>


<div class="chitiet-app">
	<div class="container">
		
		<!-- Tong quan -->
		<div class="row">
			
			<div class="col-md-3">
				<div class="icon-app">
					<img src="public/images/gestureicon.png" alt="icon app" width="128x" height="128px">

				</div>

			</div>

			<div class="col-md-3">
				<div class="thongtin-cb">
					<div class="ten-ung-dung">
						Gesture
					</div>

					<div class="cong-ty" style="color: #2196f3">
						Apple inc
					</div>

					<div class="the-loai">
						Điểu hướng
					</div>

					<div class="mo-ta-ngan">
						Ứng dụng thay đổi các cử chỉ vút trên thiết bị của chúng ta.
					</div>

				</div>

			</div>

			<div class="col-md-3">
				
			</div>

			<div class="col-md-3">
				<div class="title-download">
					Tải Về
				</div>
				<div class="text-free">
					Miễn phí
				</div>
				
				<a href="#">
					<span class="nut-tai-ve">
						Tải xuống
					</span>

				</a>

			</div>

		</div>

		<!-- Mô tả -->
		<div class="mota-ungdung">
			<div class="title-ct">
				Mô tả ứng dụng
			</div>

			<div class="noidung-mt">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus dignissimos eveniet labore, atque fuga sequi adipisci. Rerum pariatur quisquam a cupiditate quis nihil ipsam similique earum magni numquam consectetur, vitae!
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto quidem recusandae atque, dicta eaque. Molestias consectetur, officiis voluptas, doloremque minus, sed mollitia at iure eligendi eum ipsa aspernatur deserunt ut.
			</div>

		</div>

		<!-- Hình ảnh ứng dụng -->

		<div class="hinh-anh">
			
			<div class="title-ct">
				Hình ảnh ứng dụng
			</div>

			<div class="danhsach-image">
				<div class="row">
					<div class="col-md-3">
						<img src="public/images/edge1.jpg" alt="edg1" class="img-responsive">
					</div>

					<div class="col-md-3">
						<img src="public/images/edge2.jpg" alt="edg2" class="img-responsive">
					</div>

					<div class="col-md-3">
						<img src="public/images/edge2.jpg" alt="edg3" class="img-responsive">
					</div>

					<div class="col-md-3">
						<img src="public/images/edge4.jpg" alt="edg3" class="img-responsive">
					</div>
				</div>

			</div>

			<div class="show-image" style="display: none;">
				
			</div>


		</div>

		<!-- Thông tin bố sung -->
		<div class="thong-tin-bs">
			 <div class="title-ct">
				Thông tin bổ sung
			</div>

			<div class="row">
				<div class="col-md-3">

					<div class="title-bs">
						Nhà xuất bản
					</div>

					<div class="content-bs">
						Facebook inc
					</div>


					<div class="title-bs">
						Được phát triển bởi
					</div>

					<div class="content-bs">
						Facebook inc
					</div>

				</div>

				<div class="col-md-3">

					<div class="title-bs">
						Ngày phát hành
					</div>

					<div class="content-bs">
						17/10/2013
					</div>


					<div class="title-bs">
						Kích thước
					</div>

					<div class="content-bs">
						47,55 MB
					</div>

				</div>


				<div class="col-md-3">

					<div class="title-bs">
						Phiên bản
					</div>

					<div class="content-bs">
						1.6
					</div>


					<div class="title-bs">
						Danh mục
					</div>

					<div class="content-bs">
						Xã hội
					</div>

				</div>

			</div>

		</div>

		<div class="danh-gia">
			<div class="title-ct">
				Đánh giá của người dùng
			</div>
			<button style="margin-bottom: 5px;"> <i class="fa fa-pencil"></i> Viết đánh giá</button>

			<form method="post" name="form-comment" action="#">

				
					<label for="edt_comment" >Nhập đánh giá của bạn </label>

					<input type="text" name="user-comment" id="edt_comment" class="form-control">
					<span class="help-block"></span>
					<button type="submit" class="btn btn-primary">Đăng</button>
					
				
			</form>

			<iframe src="list_comment.php" width="100%" height="600px" frameborder="0">
				
			</iframe>
			

		</div>


	</div>

</div>


<!-- footer -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="title-footer">
					About Us
				</div>

				<ul style="list-style: none; padding-left: 0px">
					<li><a href="#">Thông tin về chúng tôi</a></li>
					<li><a href="#">Bản quyền</a></li>
					<li><a href="#">Tin tức công ty</a></li>
					
				</ul>

			</div>

			<div class="col-md-4">
				<div class="title-footer">
					Thông tin liên hệ
				</div>

				<ul style="list-style: none; padding-left: 0px">
					<li><a href="#">Email: </a></li>
					<li><a href="#">SĐT:</a></li>
					<li><a href="#">Facebook: </a></li>
				</ul>

			</div>

			<div class="col-md-4">
				<div class="title-footer">
					Trang web
				</div>

				<ul style="list-style: none; padding-left: 0px">
					<li><a href="#">Báo cáo lỗi </a></li>
					<li><a href="#">Hỗ trợ</a></li>
					<li><a href="#">Hồ sơ tài khoản </a></li>
				</ul>

			</div>

		</div>
	</div>

</footer>

</body>
</html>