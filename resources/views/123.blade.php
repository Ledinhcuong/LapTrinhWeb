
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Thêm User</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="vendor/bootstrap/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="public/font-awesome-4.7.0/css/font-awesome.min.css">

	</head>
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="col-lg-12">
			<h1 class="page-header">
				<small>Thêm</small>
			</h1>
		</div>
		<!-- col-lg-12-->
		<div class="col-lg-7" style="padding-bottom: 120px">
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
			<form action="{!! URL::Route('create.users') !!}" method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label>Ho ten</label>
					<input type="text" class="form-control" name="name" placeholder="Nhap ten nguoi dung">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" placeholder="Nhap dia chi email">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" placeholder="Nhap mat khau">
				</div>
				<div class="form-group">
					<label>Nhap lai password</label>
					<input type="password" class="form-control" name="passwordAgain" placeholder="Nhap lai password">
				</div>
				<div class="form-group">
					<label>Quyen nguoi dung</label>
					<label class="radio-inline">
						<input type="radio" value="0" checked="" name="rdoStatus"> Thuong
					</label>
					<label class="radio-inline">
						<input type="radio" name="rdoStatus" value="1" > Admin
					</label>
					<button type="submit" class="btn btn-dèault">Them</button>
					<button type="reset" class="btn btn-default">Lam moi</button>
				</div>
			</form>
		</div>
	</div>
</div>

</html>
