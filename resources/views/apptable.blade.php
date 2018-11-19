<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>administrator</title>

  <!-- Bootstrap core CSS -->
  <link href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('vendor/bootstrap/css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{url('public/font-awesome-4.7.0/css/font-awesome.min.css')}}">


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


  <div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li class="sidebar-brand">
          <a href="#">
            Home Administrator
          </a>
        </li>
        <li>
          <a href="#">Application Table</a>
        </li>
        <li>
          <a href="#">User Table </a>
        </li>
        <li>
          <a href="#">Review Table</a>
        </li>
        <li>
          <a href="#">Category Table</a>
        </li>
        <li>
          <a href="#">Type Table</a>
        </li>
        <li>
          <a href="#">Banner Table</a>
        </li>

      </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container-fluid">

        <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">All Table</a>

        <!-- Search -->

        <div class="area-search" style="margin: 20px 0">
         <h3>Tìm Kiếm Thông Tin Trong Bảng</h3>
         <div class="row">

          <div class="col-md-6">


            <form id="custom-search-input">

              <div class="input-group col-md-12">

                <input type="text" class="form-control input-lg" placeholder="Nhập nội dung cần tìm" />

                <span class="input-group-btn">

                  <button  class="btn btn-info btn-lg" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>

                </span>

              </div>

            </form>

          </div>
        </div>
      </div>


      <!-- Table -->
      <div class="content-table">

        <div class="nameTB">

          Bảng Types

        </div>

        <div class="tool">
          <a href="#" class="btn-tool"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm Dữ Liệu</a>

        </div>

        <!-- Table -->

        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Category</th>
              <th>Type</th>
              <th>ID</th>
              <th>Name</th>
              <th>Developer</th>
              <th>Description</th>
              <th>Icon</th>
              <th>Control</th>

            </tr>
          </thead>
          <tbody>
          
            <tr>
              <td>Application</td>
              <td>Xa hoi</td>
              <td>01</td>
              <td>Facebook</td>
              <td>Facebook inc</td>
              <td width="40%">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit eius tempore, accusamus cum facilis atque adipisci dolore, error ut provident omnis. Dolor placeat, nulla eaque veritatis rerum adipisci. Ipsam, placeat.</td>
              <td><img src="public/images/edgeicon.png" width="56" alt="icon"></td>
        
              <td>
                <div>
                   <a href="#" style="background: #00c853;" class="btn-control"> <i class="fa fa-pencil-square" aria-hidden="true"></i> Sửa</a>
                </div>
                <div>
                  <a href="#" style="background: #ff3d00;" class="btn-control"> <i class="fa fa-trash-o" aria-hidden="true"></i> Xóa </a>
                </div>
                  
              </td>
            </tr>
            

           
          </tbody>
        </table>

      </div>

    </div>
  </div>
</div>



<!-- Bootstrap core JavaScript -->
<script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Menu Toggle Script -->
<script>
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
</script>

</body>

</html>
