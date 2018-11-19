@extends('adminmaster')
@section('title', 'Bảng user')
@section('content')

      <div class="content-table"> <!-- Table begin -->

        <div class="nameTB">

          Bảng User

        </div>

        <div class="tool">
          <a href="#" class="btn-tool"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm Dữ Liệu</a>

        </div>

        

        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Id Banner</th>
              <th>Content Banner</th>
              <th>Create Date</th>
              <th>Image</th>
              <th>Control</th>

            </tr>
          </thead>
          <tbody>
            <?php

              foreach ($data as $key) {
                
              $linkImage = 'public/images/'.  $key->ImageBanner;

            ?>
            <tr>
              <td><?php echo $key->IdBanner ?></td>
              <td><?php echo $key->ContentBanner  ?></td>
              <td> <?php echo $key->CreateDate ?></td>
              <td> <img src='{{url($linkImage)}}' style="max-width: 300px;" alt=""></td>
              
              <td width="250">
                <div>
                   <a href="#" style="background: #00c853;" class="btn-control"> <i class="fa fa-pencil-square" aria-hidden="true"></i> Sửa</a>
                </div>
                <div>
                  <a href="#" style="background: #ff3d00;" class="btn-control"> <i class="fa fa-trash-o" aria-hidden="true"></i> Xóa </a>
                </div>
                  
              </td>
            </tr>

            <?php

          }
          ?>
            
          
          </tbody>
        </table>

       {!! $data->render() !!}

      </div> <!-- Table end -->
      
@endsection