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
        <label for="tensp" class="col-sm-2 control-label">Name Type: </label>
        <div class="col-sm-10">
          <input type="text" name="tensp" id="tensp" class="form-control">
          <span class="help-block"></span>
        </div>
      </div>

      <div class="form-group">
        <label for="gia" class="col-sm-2 control-label">Name App </label>
        <div class="col-sm-10">
          <input type="text" name="gia" id="gia" class="form-control">
          <span class="help-block"></span>
        </div>
      </div>

      <div class="form-group">
        <label for="hang" class="col-sm-2 control-label">Developer </label>
        <div class="col-sm-10">
          <input type="text" name="hang" id="hang" class="form-control">
          <span class="help-block"></span>
        </div>
      </div>
      <div class="form-group">
        <label for="manhinh" class="col-sm-2 control-label">Link download </label>
        <div class="col-sm-10">
          <input type="text" name="manhinh" id="manhinh" class="form-control">
          <span class="help-block"></span>
        </div>
      </div>

      <div class="form-group">
        <label for="hedieuhanh" class="col-sm-2 control-label"> Version </label>
        <div class="col-sm-10">
          <input type="text" name="hedieuhanh" id="hedieuhanh" class="form-control">
          <span class="help-block"></span>
        </div>
      </div>

      <div class="form-group">
        <label for="hedieuhanh" class="col-sm-2 control-label"> Sort Description </label>
        <div class="col-sm-10">
          <input type="text" name="hedieuhanh" id="hedieuhanh" class="form-control">
          <span class="help-block"></span>
        </div>
      </div>

      <div class="form-group">
        <label for="camsau" class="col-sm-2 control-label"> Description </label>
        <div class="col-sm-10">
          <input type="text" name="camsau" id="camsau" class="form-control">
          <span class="help-block"></span>
        </div>
      </div>



      <div class="form-group">
        <label for="anh" class="col-sm-2 control-label">Icon </label>
        <div class="col-sm-10">
          <input type="file" id="anh" name="fileUpload" class="form-control" style="opacity: 0.3">
          <span class="help-block"></span>
        </div>
      </div>


      <div class="form-group">
        <label for="anh" class="col-sm-2 control-label">Image 1 </label>
        <div class="col-sm-10">
          <input type="file" id="anh" name="fileUpload" class="form-control" style="opacity: 0.3">
          <span class="help-block"></span>
        </div>
      </div>


      <div class="form-group">
        <label for="anh" class="col-sm-2 control-label">Image 2 </label>
        <div class="col-sm-10">
          <input type="file" id="anh" name="fileUpload" class="form-control" style="opacity: 0.3">
          <span class="help-block"></span>
        </div>
      </div>


      <div class="form-group">
        <label for="anh" class="col-sm-2 control-label">Image 3 </label>
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
