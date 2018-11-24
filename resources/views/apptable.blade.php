@extends('adminmaster')
@section('title', 'Bảng Application')
@section('content')


<!-- Table begin -->
<div class="content-table">

  <div class="nameTB">

    Bảng Application

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
        <td><img src="{{url('public/images/edgeicon.png')}}" width="56" alt="icon"></td>
        
        <td>
          <div>
           <a href="#" style="background: #00c853;" class="btn-control"> <i class="fa fa-pencil-square" aria-hidden="true"></i> Sửa</a>
         </div>
         <div>
          <a href="#" style="background: #ff3d00;" class="btn-control"> <i class="fa fa-trash-o" aria-hidden="true"></i> Xóa </a>
        </div>

         <div>
          <a href="#" style="background: #007aff;" class="btn-control"> <i class="fa fa-info-circle" aria-hidden="true"></i> Chi tiết </a>
        </div>

      </td>
    </tr>
    <div class="detail-app">
      <div class="row">
        <div class="col-md-4">
          <img class="img-responsive"  src="{{url('public/images/edge1.jpg')}}" alt="">
        </div>

        <div class="col-md-4">
          <img class="img-responsive" src="{{url('public/images/edge2.jpg')}}" alt="">
        </div>

        <div class="col-md-4">
          <img class="img-responsive" src="{{url('public/images/edge3.jpg')}}" alt="">
        </div>
      </div>
      <div>Link Download: </div>
      <div>Number Download: </div>
      <div>Date Submit: </div>
      <div>Version: </div>
      <div>Size: </div>
    </div>



  </tbody>
</table>

</div>
<!-- Table end -->
@endsection