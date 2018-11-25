@extends('adminmaster')
@section('title', 'Bảng Review')
@section('content')

      <!-- Table -->
      <div class="content-table">

        <div class="nameTB">

          Bảng Review

        </div>

        <div class="tool">
          <a href="{{ url('review/create') }}" class="btn-tool"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm Dữ Liệu</a>

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
            @foreach ($data as $key)
              <tr>
                <td>{{ $key->IdApplication }}</td>
                <td>{{ $key->IdUser }}</td>
                <td>{{ $key->ReviewDate }}</td>
                <td>{{ $key->ContentReview }}</td>
                <td width="200">
                  <div>
                    <a href="review/{{ $key->IdReview }}/edit" style="background: #00c853;" class="btn-control"> <i class="fa fa-pencil-square" aria-hidden="true"></i> Sửa</a>
                  </div>
                  <div>
                    <a href="review/{{ $key->IdReview }}/delete" style="background: #ff3d00;" class="btn-control"> <i class="fa fa-trash-o" aria-hidden="true"></i> Xóa </a>
                  </div>
                    
                </td>
              </tr>
            @endforeach  
          </tbody>
        </table>

      </div>
@endsection