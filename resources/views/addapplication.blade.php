<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>administrator</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="public/font-awesome-4.7.0/css/font-awesome.min.css">


</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Administrator</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item active">
            <a class="nav-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> Xin chao admin
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-comment" aria-hidden="true"></i> Message</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container" style="padding: 120px 0px;">
    <form action="themsanpham.php" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data" onsubmit="return validateformProduct();">
      <div class="form-group">
        <legend style="color: #009688">Thêm Ứng Dụng</legend>

      </div>

      <div class="form-group">
        <label for="namecategory" class="col-sm-2 control-label">Name Category: </label>
        <div class="col-sm-10">
          <input type="text" name="namecategory" id="namecategory" class="form-control">
          <span class="help-block"></span>
        </div>
      </div>


      <div class="form-group">
        <label for="tensp" class="col-sm-2 control-label">Tên sản phẩm: </label>
        <div class="col-sm-10">
          <input type="text" name="tensp" id="tensp" class="form-control">
          <span class="help-block"></span>
        </div>
      </div>

      <div class="form-group">
        <label for="gia" class="col-sm-2 control-label">Giá: </label>
        <div class="col-sm-10">
          <input type="text" name="gia" id="gia" class="form-control">
          <span class="help-block"></span>
        </div>
      </div>

      <div class="form-group">
        <label for="hang" class="col-sm-2 control-label">Hãng: </label>
        <div class="col-sm-10">
          <input type="text" name="hang" id="hang" class="form-control">
          <span class="help-block"></span>
        </div>
      </div>
      <div class="form-group">
        <label for="manhinh" class="col-sm-2 control-label">Màn hình: </label>
        <div class="col-sm-10">
          <input type="text" name="manhinh" id="manhinh" class="form-control">
          <span class="help-block"></span>
        </div>
      </div>

      <div class="form-group">
        <label for="hedieuhanh" class="col-sm-2 control-label">Hệ điều hành: </label>
        <div class="col-sm-10">
          <input type="text" name="hedieuhanh" id="hedieuhanh" class="form-control">
          <span class="help-block"></span>
        </div>
      </div>

      <div class="form-group">
        <label for="camsau" class="col-sm-2 control-label">Camera sau: </label>
        <div class="col-sm-10">
          <input type="text" name="camsau" id="camsau" class="form-control">
          <span class="help-block"></span>
        </div>
      </div>

      <div class="form-group">
        <label for="camtruoc" class="col-sm-2 control-label">Camera trước: </label>
        <div class="col-sm-10">
          <input type="text" name="camtruoc" id="camtruoc" class="form-control">
          <span class="help-block"></span>
        </div>
      </div>

      <div class="form-group">
        <label for="cpu" class="col-sm-2 control-label">CPU: </label>
        <div class="col-sm-10">
          <input type="text" name="cpu" id="cpu" class="form-control">
          <span class="help-block"></span>
        </div>
      </div>

      <div class="form-group">
        <label for="ram" class="col-sm-2 control-label">RAM: </label>
        <div class="col-sm-10">
          <input type="text" name="ram" id="ram" class="form-control">
          <span class="help-block"></span>
        </div>
      </div>

      <div class="form-group">
        <label for="bonho" class="col-sm-2 control-label">Bộ nhớ: </label>
        <div class="col-sm-10">
          <input type="text" name="bonho" id="bonho" class="form-control">
          <span class="help-block"></span>
        </div>
      </div>

      <div class="form-group">
        <label for="chatlieu" class="col-sm-2 control-label">Chất liệu: </label>
        <div class="col-sm-10">
          <input type="text" name="chatlieu" id="chatlieu" class="form-control">
          <span class="help-block"></span>
        </div>
      </div>

      <div class="form-group">
        <label for="trongluong" class="col-sm-2 control-label">Trọng lượng: </label>
        <div class="col-sm-10">
          <input type="text" name="trongluong" id="trongluong" class="form-control">
          <span class="help-block"></span>
        </div>
      </div>

      <div class="form-group">
        <label for="pin" class="col-sm-2 control-label">Dung lượng pin: </label>
        <div class="col-sm-10">
          <input type="text" name="pin" id="pin" class="form-control">
          <span class="help-block"></span>
        </div>
      </div>



      <div class="form-group">
        <label for="dacdiem" class="col-sm-2 control-label">Đặc điểm: </label>
        <div class="col-sm-10">
          <textarea name="dacdiem" id="dacdiem" cols="30" rows="5" class="form-control"></textarea>
          <span class="help-block"></span>
        </div>
      </div>

      <div class="form-group">
        <label for="anh" class="col-sm-2 control-label">Tệp ảnh </label>
        <div class="col-sm-10">
          <input type="file" id="anh" name="fileUpload" class="form-control" style="opacity: 0.3">
          <span class="help-block"></span>
        </div>
      </div>


      <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
          <button type="submit" class="btn btn-primary">Thêm</button>
        </div>
      </div>
    </form>

  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
