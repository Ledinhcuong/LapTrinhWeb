<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Create banner</title>

  <!-- Bootstrap core CSS -->
  <link href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('vendor/bootstrap/css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{url('public/font-awesome-4.7.0/css/font-awesome.min.css')}}">


</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
    <a class="navbar-brand" href="{{ url("admin") }}">Administrator</a>

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
    <form action="{!! URL::Route('create.review')!!}" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data" onsubmit="return validateformProduct();">
      <div class="form-group">
        <legend style="color: #009688">Add review</legend>
      </div>

      <div class="form-group">
        <label for="idapplication" class="col-sm-2 control-label">Application Id </label>
        <div class="col-sm-10">
          <input type="text" name="idapplication" id="idapplication" class="form-control">
          <span class="help-block"></span>
        </div>
      </div>

      <div class="form-group">
        <label for="iduser" class="col-sm-2 control-label">User Id </label>
        <div class="col-sm-10">
          <input type="text" name="iduser" id="iduser" class="form-control">
          <span class="help-block"></span>
        </div>
      </div>

      <div class="form-group">
        <label for="reviewdate" class="col-sm-2 control-label">Review date</label>
        <div class="col-sm-10">
          <input type="text" name="reviewdate" id="reviewdate" class="form-control">
          <span class="help-block"></span>
        </div>
      </div>

      <div class="form-group">
          <label for="reviewcontent" class="col-sm-2 control-label">Review content</label>
          <div class="col-sm-10">
            <input type="text" name="reviewcontent" id="reviewcontent" class="form-control">
            <span class="help-block"></span>
          </div>
        </div>

      <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
      </div>
    </form>

  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
