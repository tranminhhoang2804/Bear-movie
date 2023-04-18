@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- <a href="{{route('movie.create')}}" class="btn btn-primary mb-2">Thêm phim mới</a> -->
            <table class="table table-responsive" id="tablephim">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Tên phim</th>
                       <th scope="col">Số tập phim</th>
                      <th scope="col">Tập phim</th>
                      <th scope="col">Thời lượng phim</th>
                      <th scope="col">Hình ảnh</th>
                      <th scope="col">Phim nổi bật</th>
                      <th scope="col">Định dạng</th>
                      <th scope="col">Phụ đề</th>
                      <th scope="col">Active</th>
                      <th scope="col">Danh mục</th>
                      <th scope="col">Thuoc loai phim</th>
                      <th scope="col">Thể loại</th>
                      <th scope="col">Quốc gia</th>
                      <th scope="col">Đạo diễn</th>
                      <th scope="col">Diễn viên</th>
                      <th scope="col">Ngày tạo</th>
                      <th scope="col">Ngày cập nhật</th>
                      <th scope="col">Năm</th>
                      <th scope="col">Thao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($list as $key => $cate)
                    <tr>
                      <th scope="row">{{$key}}</th>
                      <td>{{$cate->title}}</td>
                      <td>{{$cate->episode_count}}/{{$cate->sotap}} tập</td>
                      <td><a href="{{route('add-episode',[$cate->id])}}" class="btn btn-warning btn-sm">Thêm tập phim</a></td>
                      <td>{{$cate->thoiluong}}</td>
                       <td><img width="200px" src="{{asset('uploads/movie/'.$cate->image)}}"></td>
                       <td>
                          @if($cate->phim_hot==0)
                            Không
                          @else
                            Có
                          @endif
                      </td>
                       <td>
                        @if($cate->resolution==0)
                            HD
                        @elseif($cate->resolution==1)
                            SD
                        @elseif($cate->resolution==2)
                            HDCam
                        @elseif($cate->resolution==3)
                            Cam
                        @elseif($cate->resolution==4)
                            FullHD
                        @else
                            Trailer
                        @endif
                       </td>
                       <td>
                        @if($cate->phude==0)
                            Vietsub
                        @else
                            Thuyết minh
                        @endif
                       </td>
                      <td>
                          @if($cate->status)
                            Hiển thị
                          @else
                            Ẩn
                          @endif
                      </td>
                      <td>{{$cate->category->title}}</td>
                      <td>
                          @if($cate->thuocphim=='phimle')
                          Phim le
                          @else
                          Phim bo
                          @endif
                      </td>
                      <td>
                        @foreach($cate->movie_genre as $gen)
                        <span class="badge badge-dark"> 
                            {{$gen->title}}
                        </span><br>
                        @endforeach
                      </td>
                      
                      <td>{{$cate->country->title}}</td>
                      <td>{{$cate->daodien}}</td>
                      <td>{{$cate->dienvien}}</td>
                      <td>{{$cate->ngaytao}}</td>
                      <td>{{$cate->ngaycapnhat}}</td>
                      <td>
                          {!! Form::selectYear('year',2000,2023, isset($cate->year) ? $cate->year : '' ,['class'=>'select-year','id'=>$cate->id]) !!}
                      </td>
                      <td>
                          {!! Form::open([
                            'method'=>'DELETE',
                            'route'=>['movie.destroy',$cate->id],
                            'onsubmit'=>'return confirm("Bạn có chắc chắn muốn xóa??")'
                          ]) !!}
                          {!! Form::submit('Xóa', ['class'=>'btn btn-danger']) !!}

                          {!! Form::close() !!}
                          <a href="{{route('movie.edit',$cate->id)}}" class="btn btn-warning">Sửa</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
