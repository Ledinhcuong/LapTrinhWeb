<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Software</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<LINK REL="SHORTCUT ICON" href="public/images/mylogo.ico">
	<link rel="stylesheet" href="public/font/OpenSansCondensed-Light.ttf">
	<link rel="stylesheet" href="public/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="public/css/styles.css">
	<link rel="stylesheet" type="text/css" href="public/css/slider.css">
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
<div class="blance" style="padding: 30px 0; position: static;" > </div>

<div class="banner">
	<div class="container">
		<div class="wellcome" style="background: #2196f3; color: #fff; padding: 10px; font-size: 20px ">
			Chào mừng bạn đã quay trở lại !
		</div>

		<div class="slider-container">
			<div class="slider">
				<img src="public/images/banner page.jpg" class="img-responsive" title="Trang web chia sẽ ứng dụng hoàn toàn miễn phí"    />
				<img src="public/images/banner 2.jpg"  class="img-responsive" title="Bạn sẽ tìm thấy trò chơi đang thịnh hành" />
				<img src="public/images/banner 3.jpg" title="Hay truy cập trang thường xuyên để xem nhiều ứng dụng" />
				<img src="public/images/banner page.jpg" title="Hết cái để nói rồi" />
				<button type="button" onclick="getPrevImage()" class="btn" id="btnPrev">&lt;</button>
				<button type="button" onclick="getNextImage()" class="btn" id="btnNext">&gt;</button>
				<h1 id="titleSlider">Trang web chia sẽ ứng dụng hoàn toàn miễn phí</h1>
			</div>

		</div>

		
	</div>
	
</div>



<!-- Đề xuất -->
<div class="Suggestions">
	<div class="container">
		<div class="title-Suggesstion">
			Được đề xuất cho bạn
		</div>

		<div class="content-suggest">
			<div class="row">
				
				<div class="col-md-2">
					<a href="#">
						<div class="content-app">
							<div class="icon-app-sg" style="text-align: center;">
								<img src="public/images/controlcentericon.png" alt="" class="img-responsive" style="max-width: 120px; max-height: 120px;">
							</div>
							<div class="name-app-sg" style="margin-top: 10px; font-weight: bold; font-size: 18px; color: #000">
								Ứng dụng 1
							</div>
							<div class="author-app-sg" >
								Facebook inc
							</div>
						</div>
					</a>
					
				</div>

				<div class="col-md-2">
					<a href="#">
						<div class="content-app">
							<div class="icon-app-sg" style="text-align: center;">
								<img src="public/images/controlcentericon.png" alt="" class="img-responsive" style="max-width: 120px; max-height: 120px;">
							</div>
							<div class="name-app-sg" style="margin-top: 10px; font-weight: bold; font-size: 18px; color: #000">
								Ứng dụng 1
							</div>
							<div class="author-app-sg" >
								Facebook inc
							</div>
						</div>
					</a>
					
				</div>

				<div class="col-md-2">
					<a href="#">
						<div class="content-app">
							<div class="icon-app-sg" style="text-align: center;">
								<img src="public/images/controlcentericon.png" alt="" class="img-responsive" style="max-width: 120px; max-height: 120px;">
							</div>
							<div class="name-app-sg" style="margin-top: 10px; font-weight: bold; font-size: 18px; color: #000">
								Ứng dụng 1
							</div>
							<div class="author-app-sg" >
								Facebook inc
							</div>
						</div>
					</a>
					
				</div>

				<div class="col-md-2">
					<a href="#">
						<div class="content-app">
							<div class="icon-app-sg" style="text-align: center;">
								<img src="public/images/controlcentericon.png" alt="" class="img-responsive" style="max-width: 120px; max-height: 120px;">
							</div>
							<div class="name-app-sg" style="margin-top: 10px; font-weight: bold; font-size: 18px; color: #000">
								Ứng dụng 1
							</div>
							<div class="author-app-sg" >
								Facebook inc
							</div>
						</div>
					</a>
					
				</div>

				<div class="col-md-2">
					<a href="#">
						<div class="content-app">
							<div class="icon-app-sg" style="text-align: center;">
								<img src="public/images/controlcentericon.png" alt="" class="img-responsive" style="max-width: 120px; max-height: 120px;">
							</div>
							<div class="name-app-sg" style="margin-top: 10px; font-weight: bold; font-size: 18px; color: #000">
								Ứng dụng 1
							</div>
							<div class="author-app-sg" >
								Facebook inc
							</div>
						</div>
					</a>
					
				</div>

				<div class="col-md-2">
					<a href="#">
						<div class="content-app">
							<div class="icon-app-sg" style="text-align: center;">
								<img src="public/images/controlcentericon.png" alt="" class="img-responsive" style="max-width: 120px; max-height: 120px;">
							</div>
							<div class="name-app-sg" style="margin-top: 10px; font-weight: bold; font-size: 18px; color: #000">
								Ứng dụng 1
							</div>
							<div class="author-app-sg" >
								Facebook inc
							</div>
						</div>
					</a>
					
				</div>
				
				
			</div>

		</div>


	</div>

</div>


<!-- content -->
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-3">

				<div class="calendar">
					<div class="background-list">
						<div class="title-app" style="padding: 10px 0; margin-bottom: 5px; padding-left: 20px; font-size: 25px; color: red">
							Today
						</div>

						<div class="icon-time" style="padding-left: 20px; margin-bottom: 5px">
							<img src="public/images/morning.png" alt="" width="25px;" height="25px;">
						</div>
						<div class="hello-time">

							<div class="loi-chao">
								Chào buổi sáng
							</div>

						</div>
						<div class="thu">
							Chủ nhật
						</div>
						<div class="date">
							26/02/2018
						</div>
					</div>

				</div>

				<!-- Top download -->
				<div class="new-app">
					<div class="background-list">
						<div class="title-app" style="padding: 10px 0; margin-bottom: 5px; padding-left: 20px; font-size: 25px; color: #008EFF">
							Top download
						</div>
						<ul style="list-style: none; padding-left: 20px;">
							<li>
								<a href="#">
									<img src="public/images/edgeicon.png"  alt="icon-app" class="img-responsive" width="20px" height="20px" style="display: inline-block;"> Appstore
								</a>

							</li>
							<li>
								<a href="#">
									<img src="public/images/edgeicon.png"  alt="icon-app" class="img-responsive" width="20px" height="20px" style="display: inline-block;"> Appstore
								</a>

							</li>


						</ul>


					</div>
				</div>


				<!-- Mới cập nhật -->
				<div class="list-app">
					<div class="background-list">
						<div class="title-app" style="padding: 10px 0; margin-bottom: 5px; padding-left: 20px; font-size: 25px; color: #008EFF">
							Mới cập nhật
						</div>

						<ul style="list-style: none; padding-left: 20px;">
							
							<li>
								<a href="#">
									<img src="public/images/edgeicon.png"  alt="icon-app" class="img-responsive" width="20px" height="20px" style="display: inline-block;"> Tên phần mềm
								</a>

							</li>	
							
						</ul>

					</div>
				</div>

			</div>

			<!-- App -->
			<div class="col-md-9">
				<div class="row">

					<div class="col-md-4">
						<a href="#">
							<div class="app">
								<div class="app-background">
									<div class="app-icon">
										<img src="public/images/edgeicon.png" alt="app-icon" class="img-responsive">

									</div>

									<div class="app-detail">
										<div class="name-app" style="font-size: 20px;">
											<a href="#"> Microsoft edge </a>
										</div>
										<div class="detail">
											<div class="tile-tyle">
												Loại:
											</div>
											<div class="loai">
												Trình duyệt
											</div>

											<div class="tile-tyle">
												Mô tả:
											</div>
											<div class="motangan">
												Trình duyệt trên di động có những tính năng mang tính đột phá
											</div>

										</div>

									</div>
								</div>
							</div>

						</a>
					</div>

					<div class="col-md-4">
						<a href="#">
							<div class="app">
								<div class="app-background">
									<div class="app-icon">
										<img src="public/images/edgeicon.png" alt="app-icon" class="img-responsive">

									</div>

									<div class="app-detail">
										<div class="name-app" style="font-size: 20px;">
											<a href="#"> Microsoft edge </a>
										</div>
										<div class="detail">
											<div class="tile-tyle">
												Loại:
											</div>
											<div class="loai">
												Trình duyệt
											</div>

											<div class="tile-tyle">
												Mô tả:
											</div>
											<div class="motangan">
												Trình duyệt trên di động có những tính năng mang tính đột phá
											</div>

										</div>

									</div>
								</div>
							</div>

						</a>
					</div>

					<div class="col-md-4">
						<a href="#">
							<div class="app">
								<div class="app-background">
									<div class="app-icon">
										<img src="public/images/edgeicon.png" alt="app-icon" class="img-responsive">

									</div>

									<div class="app-detail">
										<div class="name-app" style="font-size: 20px;">
											<a href="#"> Microsoft edge </a>
										</div>
										<div class="detail">
											<div class="tile-tyle">
												Loại:
											</div>
											<div class="loai">
												Trình duyệt
											</div>

											<div class="tile-tyle">
												Mô tả:
											</div>
											<div class="motangan">
												Trình duyệt trên di động có những tính năng mang tính đột phá
											</div>

										</div>

									</div>
								</div>
							</div>

						</a>
					</div>

					<div class="col-md-4">
						<a href="#">
							<div class="app">
								<div class="app-background">
									<div class="app-icon">
										<img src="public/images/edgeicon.png" alt="app-icon" class="img-responsive">

									</div>

									<div class="app-detail">
										<div class="name-app" style="font-size: 20px;">
											<a href="#"> Microsoft edge </a>
										</div>
										<div class="detail">
											<div class="tile-tyle">
												Loại:
											</div>
											<div class="loai">
												Trình duyệt
											</div>

											<div class="tile-tyle">
												Mô tả:
											</div>
											<div class="motangan">
												Trình duyệt trên di động có những tính năng mang tính đột phá
											</div>

										</div>

									</div>
								</div>
							</div>

						</a>
					</div>


					<div class="col-md-4">
						<a href="#">
							<div class="app">
								<div class="app-background">
									<div class="app-icon">
										<img src="public/images/edgeicon.png" alt="app-icon" class="img-responsive">

									</div>

									<div class="app-detail">
										<div class="name-app" style="font-size: 20px;">
											<a href="#"> Microsoft edge </a>
										</div>
										<div class="detail">
											<div class="tile-tyle">
												Loại:
											</div>
											<div class="loai">
												Trình duyệt
											</div>

											<div class="tile-tyle">
												Mô tả:
											</div>
											<div class="motangan">
												Trình duyệt trên di động có những tính năng mang tính đột phá
											</div>

										</div>

									</div>
								</div>
							</div>

						</a>
					</div>


					<div class="col-md-4">
						<a href="#">
							<div class="app">
								<div class="app-background">
									<div class="app-icon">
										<img src="public/images/edgeicon.png" alt="app-icon" class="img-responsive">

									</div>

									<div class="app-detail">
										<div class="name-app" style="font-size: 20px;">
											<a href="#"> Microsoft edge </a>
										</div>
										<div class="detail">
											<div class="tile-tyle">
												Loại:
											</div>
											<div class="loai">
												Trình duyệt
											</div>

											<div class="tile-tyle">
												Mô tả:
											</div>
											<div class="motangan">
												Trình duyệt trên di động có những tính năng mang tính đột phá
											</div>

										</div>

									</div>
								</div>
							</div>

						</a>
					</div>


					<div class="col-md-4">
						<a href="#">
							<div class="app">
								<div class="app-background">
									<div class="app-icon">
										<img src="public/images/edgeicon.png" alt="app-icon" class="img-responsive">

									</div>

									<div class="app-detail">
										<div class="name-app" style="font-size: 20px;">
											<a href="#"> Microsoft edge </a>
										</div>
										<div class="detail">
											<div class="tile-tyle">
												Loại:
											</div>
											<div class="loai">
												Trình duyệt
											</div>

											<div class="tile-tyle">
												Mô tả:
											</div>
											<div class="motangan">
												Trình duyệt trên di động có những tính năng mang tính đột phá
											</div>

										</div>

									</div>
								</div>
							</div>

						</a>
					</div>


					<div class="col-md-4">
						<a href="#">
							<div class="app">
								<div class="app-background">
									<div class="app-icon">
										<img src="public/images/edgeicon.png" alt="app-icon" class="img-responsive">

									</div>

									<div class="app-detail">
										<div class="name-app" style="font-size: 20px;">
											<a href="#"> Microsoft edge </a>
										</div>
										<div class="detail">
											<div class="tile-tyle">
												Loại:
											</div>
											<div class="loai">
												Trình duyệt
											</div>

											<div class="tile-tyle">
												Mô tả:
											</div>
											<div class="motangan">
												Trình duyệt trên di động có những tính năng mang tính đột phá
											</div>

										</div>

									</div>
								</div>
							</div>

						</a>
					</div>


					<div class="col-md-4">
						<a href="#">
							<div class="app">
								<div class="app-background">
									<div class="app-icon">
										<img src="public/images/edgeicon.png" alt="app-icon" class="img-responsive">

									</div>

									<div class="app-detail">
										<div class="name-app" style="font-size: 20px;">
											<a href="#"> Microsoft edge </a>
										</div>
										<div class="detail">
											<div class="tile-tyle">
												Loại:
											</div>
											<div class="loai">
												Trình duyệt
											</div>

											<div class="tile-tyle">
												Mô tả:
											</div>
											<div class="motangan">
												Trình duyệt trên di động có những tính năng mang tính đột phá
											</div>

										</div>

									</div>
								</div>
							</div>

						</a>
					</div>


				</div>

			</div>
		</div>

	</div>
</div>

<!-- Padding -->
<div class="padding">
	<div class="container">
		<tr>
			<td><a href="#">
				<span class="background-p" > 1 </span>
			</a></td>

			<td><a href="#">
				<span class="background-p" > 2 </span>
			</a></td>

			<td><a href="#">
				<span class="background-p" > 3 </span>
			</a></td>

		</tr>

	</div>
</div>


<!-- Danh mục -->
<div class="danh-muc">
	<div class="container">
		<div class="title-dm">
			Danh mục
		</div>
		
		<div class="noi-dung-dm">
			<div class="row">
				<div class="col-md-3">

					<ul class="list-dm">
						<li><a href="#">Năng xuất</a></li>
						<li><a href="#">Xã hội</a></li>
						<li><a href="#">Tin tức</a></li>
						<li><a href="#">Sức khỏe</a></li>
						
					</ul>

				</div>

				<div class="col-md-3">

					<ul class="list-dm">
						<li><a href="#">Bản đồ</a></li>
						<li><a href="#">Các nhân hóa</a></li>
						<li><a href="#">Sách</a></li>
						<li><a href="#">Giải trí</a></li>

					</ul>

				</div>
				
				<div class="col-md-3">
					<ul class="list-dm">
						<li><a href="#">Ảnh </a></li>
						<li><a href="#">Video</a></li>
						<li><a href="#">Nhạc</a></li>
						<li><a href="#">Bảo mật</a></li>
						
					</ul>

				</div>

				<div class="col-md-3">
					<ul class="list-dm">
						<li><a href="#">Giáo dục</a></li>
						<li><a href="#">Thời tiết</a></li>
						<li><a href="#">Mua sắm</a></li>
					</ul>

				</div>

			</div>
		</div>

		<div class="noi-dung-dm">
			<div class="row">
				<div class="col-md-3">

					<ul class="list-dm">
						<li><a href="#">Chiến lược</a></li>
						<li><a href="#">Thể thao</a></li>
						<li><a href="#">Hành động</a></li>
						
					</ul>

				</div>

				<div class="col-md-3">

					<ul class="list-dm">
						<li><a href="#">Sòng bạc</a></li>
						<li><a href="#">Mô phỏng</a></li>
						<li><a href="#">Cổ điển</a></li>
						
					</ul>

				</div>
				
				<div class="col-md-3">
					<ul class="list-dm">
						<li><a href="#">Phiêu lưu </a></li>
						<li><a href="#">Bắn sung</a></li>
						
					</ul>

				</div>

				<div class="col-md-3" >
					<ul class="list-dm">
						<li><a href="#">Đố chữ</a></li>
						<li><a href="#">Nhập vai</a></li>
					</ul>

				</div>

			</div>
		</div>

	</div>
</div>


<!-- All store -->
<div class="other-store">
	<div class="container">
		<div class="row">
			<div class="col-md-4" style="text-align: center;">
				
				<a href="#">
					<img src="public/images/googleplay.png" alt="google play" width="60px" height="60px">

					<div class="title-store">
						Google play
					</div>

				</a>
				
			</div>

			<div class="col-md-4" style="text-align: center;">
				<a href="#">
					
					<img src="public/images/appstore.png" alt="google play" width="60px" height="60px">

					<div class="title-store">
						App store
					</div>

				</a>
				

			</div>

			<div class="col-md-4" style="text-align: center;">

				<a href="#">
					<img src="public/images/Microsoft-icon.png" alt="google play" width="60px" height="60px">

					<div class="title-store">
						Microsoft store
					</div>
				</a>
				

			</div>

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

<script type="text/javascript" src="public/js/slider.js"></script>
<script>
        var indexCurrent = 1;      // Chỉ số hình đầu tiên hiển thị ở slide
        var loop = true;  // Bật lặp slide 
        var showbutton =true;  // Hiện 2 button điều hướng
        var duration = 4000;   // Thời gian chờ chuyển hình (tính theo đơn vị milisecond)

        initSlider();
    </script>

</body>
</html>