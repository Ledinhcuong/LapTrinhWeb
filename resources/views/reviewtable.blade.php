@extends('adminmaster')
@section('title', 'Bảng user')
@section('content')

      <!-- Table -->
      <div class="content-table">

        <div class="nameTB">

          Bảng User

        </div>

        <div class="tool">
          <a href="#" class="btn-tool"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm Dữ Liệu</a>

        </div>

        <!-- Table -->

        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Id Application</th>
              <th>Id User</th>
              <th>Review Date</th>
               <th>Content Review</th>
              <th>Control</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>1</td>
              <td>10/11/2018</td>
              <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi perferendis veniam, possimus distinctio illo iure, amet sed earum unde quae voluptatum vel harum porro molestiae natus nam vitae neque cum!</td>
              <td width="200">
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
@endsection