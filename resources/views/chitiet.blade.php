
@extends('master')
@section('title', 'chitiet')
@section('content')

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
				
				<a href="#" style="text-decoration: none;">
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
					<div class="col-md-3" >
						<img src="public/images/edge1.jpg" alt="edg1" class="img-responsive" onclick="showImage()">
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

			<div class="show-image" style="display: inline;">
				<img src="public/images/controlcenter1.png" alt="image">
				<button style="display: block;">Đóng</button>
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

@endsection