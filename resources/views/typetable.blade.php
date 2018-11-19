@extends('adminmaster')
@section('title', 'Bảng Type')
@section('content')


      <!-- Table begin -->
      <div class="content-table">

        <div class="nameTB">

          Bảng Types

        </div>

        <div class="tool">
          <a href="{{ url('type/createtype') }}" class="btn-tool"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm Dữ Liệu</a>

        </div>

        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Id Type</th>
              <th>Name Type</th>
              <th>Control</th>

            </tr>
          </thead>
          <tbody>
            <?php 

            foreach ($data as $key) {
              
            

            ?>
            <tr>
              <td>{{$key->IdType}}</td>
              <td>{{$key->NameType}}</td>
        
              <td>
                <div>
                   <a href="{{ url('type/'.$key->IdType.'/edittype') }}" style="background: #00c853;" class="btn-control"> <i class="fa fa-pencil-square" aria-hidden="true"></i> Sửa</a>
                </div>
                <div>
                  <a href="{{ url('type/'.$key->IdType.'/delete') }}" style="background: #ff3d00;" class="btn-control"> <i class="fa fa-trash-o" aria-hidden="true"></i> Xóa </a>
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