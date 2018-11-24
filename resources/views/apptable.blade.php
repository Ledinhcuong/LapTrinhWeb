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

      <?php 
        foreach ($data as $key) {
        $icon = 'public/images/'. $key->Icon;
        $image1 = 'public/images/'. $key->Image1;
        $image2 = 'public/images/'. $key->Image2;
        $image3 = 'public/images/'. $key->Image3;
        $detail = 'admin/application/'. $key->IdApplication;
        $delete =  'application/'. $key->IdApplication. '/delete';

      ?>

      <tr>
        <td>{{$key->NameCategory}}</td>
        <td>{{$key->NameType}}</td>
        <td>{{$key->IdApplication}}</td>
        <td>{{$key->NameApp}}</td>
        <td>{{$key->Developer}}</td>
        <td width="40%">{{$key->Description}}</td>
        <td><img src="{{url($icon)}}" width="56" alt="icon"></td>
        
        <td>
          <div>
           <a href="#" style="background: #00c853;" class="btn-control"> <i class="fa fa-pencil-square" aria-hidden="true"></i> Sửa</a>
         </div>
         <div>
          <a href="{{url($delete)}}" style="background: #ff3d00;" class="btn-control"> <i class="fa fa-trash-o" aria-hidden="true"></i> Xóa </a>
        </div>

         <div>
          <a style="background: #007aff;" class="btn-control" href="{{url($detail)}}" > <i class="fa fa-info-circle" aria-hidden="true"  ></i> Chi tiết </a>
        </div>

      </td>
    </tr>
   
    <?php
  }
    ?>



  </tbody>
</table>

</div>
<!-- Table end -->
@endsection