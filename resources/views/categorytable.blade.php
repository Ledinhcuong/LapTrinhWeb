@extends('adminmaster')
@section('title', 'Bảng Category')
@section('content')


      <!-- Table begin -->
      <div class="content-table">

        <div class="nameTB">

          Bảng Category

        </div>

        <div class="tool">
          <a href="{{ url('category/createcategory') }}" class="btn-tool"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm Dữ Liệu</a>

        </div>

        <!-- Table -->

        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Id Category</th>
              <th>Name Category</th>
              <th>Control</th>
             

            </tr>
          </thead>
          <tbody>
            <?php 
                  foreach ($data as $key) {
                    
                  
            ?>

            <tr>
              <td> {{$key->IdCategory}}</td>
              <td> {{$key->NameCategory}} </td>
              <td>
                <div>
                   <a href="{{ url('category/'.$key->IdCategory.'/editcategory') }}" style="background: #00c853;" class="btn-control"> <i class="fa fa-pencil-sq  uare" aria-hidden="true"></i> Sửa</a>
                </div>
                <div>
                  <a href="{{ url('category/'.$key->IdCategory.'/delete') }}" style="background: #ff3d00;" class="btn-control"> <i class="fa fa-trash-o" aria-hidden="true"></i> Xóa </a>
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