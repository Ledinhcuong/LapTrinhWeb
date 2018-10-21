<?php

?>

@extends('master')
@section('title', 'software')
@section('content')

<div class="banner">
	<div class="container">
		<div class="wellcome" style="background: #2196f3; color: #fff; padding: 10px; font-size: 20px ">
			Chào mừng bạn đã quay trở lại !
		</div>

		<div class="slider-container">
			<div class="slider">
				<?php
					foreach ($banner as $key) {
						
					
				 ?>

				<img src="public/images/<?php echo $key->ImageBanner ?>" class="img-responsive" title="<?php echo $key->ContentBanner ?>" />

				<?php
			}
				?>
			
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

				<?php 
				foreach ($randomApp as $key) {
					
				?>

				<div class="col-md-2">
					<a href="chitiet?id=<?php echo $key->IdApplication ?>">
						<div class="content-app">
							<div class="icon-app-sg" style="text-align: center;">
								<img src="public/images/<?php echo $key->Icon ?>" alt="" class="img-responsive" style="max-width: 120px; max-height: 120px;">
							</div>
							<div class="name-app-sg" style="margin-top: 10px; font-weight: bold; font-size: 18px; color: #000">
								<?php  echo $key->NameApp ?>
							</div>
							<div class="author-app-sg" >
								<?php echo $key->Developer ?>
							</div>
						</div>
					</a>

				</div>

				<?php
			}

				?>

				


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

							

								<?php 
								foreach ($topdown as $key) {
								

								?>
								<li>
								<a href="chitiet?id=<?php echo $key->IdApplication ?>">
									<img src="public/images/<?php echo $key->Icon ?>"  alt="<?php  echo $key->NameApp ?>" class="img-responsive" width="20px" height="20px" style="display: inline-block;"> <?php echo $key->NameApp ?>
								</a>
								</li>

								<?php
							}
							?>

							

						</ul>


					</div>
				</div>



			</div>

			<!-- App -->
			<div class="col-md-9">
				<div class="row">

					<?php
						foreach ($data as $key) {
					 ?>

					<div class="col-md-4">
						<a href="chitiet?id=<?php echo $key->IdApplication ?>">
							<div class="app">
								<div class="app-background">
									<div class="app-icon">
										<img src="public/images/<?php echo $key->Icon ?>" alt="<?php echo $key->NameApp ?>" class="img-responsive">

									</div>

									<div class="app-detail">
										<div class="name-app" style="font-size: 20px;">
											<a href="chitiet?<php echo $key->IdApplication ?>"> <?php echo $key->NameApp ?> </a>
										</div>
										<div class="detail">
											<div class="tile-tyle">
												Loại:
											</div>
											<div class="loai">
												<?php echo $key->NameType ?>
											</div>

											<div class="tile-tyle">
												Mô tả:
											</div>
											<div class="motangan">
												<?php echo $key->SortDescription ?>
											</div>

										</div>

									</div>
								</div>
							</div>

						</a>
					</div>


					<?
				}
				?>
				
				</div>

			</div>
		</div>

	</div>
</div>

<!-- Padding -->
<div class="padding">
	<div class="container">

		{!! $data->render() !!}
		<!--
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
	-->

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
			<div class="col-md-4 store" style="text-align: center;">

				<a href="#">
					<img src="public/images/googleplay.png" alt="google play" width="60px" height="60px">

					<div class="title-store">
						Google play
					</div>

				</a>

			</div>

			<div class="col-md-4 store" style="text-align: center;">
				<a href="#">

					<img src="public/images/appstore.png" alt="google play" width="60px" height="60px">

					<div class="title-store">
						App store
					</div>

				</a>


			</div>

			<div class="col-md-4 store" style="text-align: center;">

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

@endsection