<?php
use App\Http\Controllers\ProjectController;
$control = new ProjectController();

$id = $_GET['id'];
$data = $control->getChiTiet($id);

?>

@extends('master')
@section('title', 'chitiet')
@section('content')

<div class="chitiet-app">
	<div class="container">
		
		<!-- Tong quan -->
		<div class="row">
			
			<div class="col-md-3">
				<div class="icon-app">
					<img src="public/images/<?php echo $data->Icon ?>" alt="<?php echo $data->NameApp ?>" width="128x" height="128px">

				</div>

			</div>

			<div class="col-md-3">
				<div class="thongtin-cb">
					<div class="ten-ung-dung">
						<?php echo $data->NameApp ?>
					</div>

					<div class="cong-ty" style="color: #2196f3">
						<?php echo $data->Developer ?>
					</div>

					<div class="the-loai">
						<?php echo $data->NameType ?>
					</div>

					<div class="mo-ta-ngan">
						<?php echo $data->SortDescription ?>
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
				
				<a href="<?php echo $data->LinkDownload ?>" style="text-decoration: none;">
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
				<?php echo $data->Description ?>
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
						<img src="public/images/<?php echo $data->Image1 ?>" alt="edg1" class="img-responsive">
					</div>

					<div class="col-md-3">
						<img src="public/images/<?php  echo $data->Image2 ?>" alt="edg2" class="img-responsive">
					</div>

					<div class="col-md-3">
						<img src="public/images/<?php echo $data->Image3 ?>" alt="edg3" class="img-responsive">
					</div>

				
				</div>
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
						<?php echo $data->Developer ?>
					</div>


					<div class="title-bs">
						Được phát triển bởi
					</div>

					<div class="content-bs">
						<?php echo $data->Developer ?>
					</div>

				</div>

				<div class="col-md-3">

					<div class="title-bs">
						Ngày phát hành
					</div>

					<div class="content-bs">
						<?php echo $data->DateSubmit ?>
					</div>


					<div class="title-bs">
						Kích thước
					</div>

					<div class="content-bs">
						<?php  echo $data->Size ?> MB
					</div>

				</div>


				<div class="col-md-3">

					<div class="title-bs">
						Phiên bản
					</div>

					<div class="content-bs">
						<?php echo $data->Version ?>
					</div>


					<div class="title-bs">
						Danh mục
					</div>

					<div class="content-bs">
						<?php echo $data->NameType ?>
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

			<iframe src="list_comment" width="100%" height="600px" frameborder="0">
				
			</iframe>
			

		</div>


	</div>

</div>

@endsection