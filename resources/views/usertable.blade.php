@extends('adminmaster')
@section('title', 'Bảng user')
@section('content')


      <!-- Table begin -->
      <div class="content-table">

        <div class="nameTB">

          Bảng User

        </div>

        <div class="tool">
          <a href="{{ url('users/createuser') }}" class="btn-tool"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm Dữ Liệu</a>

        </div>

        

        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Id User</th>
              <th>Name User</th>
              <th>Email</th>
              <th>PassWord</th>
              <th>TypeUser</th>
              <th>Control</th>

            </tr>
          </thead>
          <tbody>
            <?php 
                  foreach ($data as $key) {    
            ?>
            <tr>
              <td> {{$key->IdUser}}</td>
              <td> {{$key->NameUser}}</td>
              <td> {{$key->Email}}</td>
              <td> {{$key->password}}</td>
              <td> 
                @if($key->TypeUser==1)
                {{"Admin"}}
                @else
                {{"Thuong"}}
                @endif
              </td>
              <td>
                <div>
                   <a href="{{ url('users/'.$key->IdUser.'/edituser') }}" style="background: #00c853;" class="btn-control"> <i class="fa fa-pencil-square" aria-hidden="true"></i> Sửa</a>
                </div>
                 <div>
                  <a href="{{ url('users/'.$key->IdUser.'/delete') }}" style="background: #ff3d00;" class="btn-control"> <i class="fa fa-trash-o" aria-hidden="true"></i> Xóa </a>
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
