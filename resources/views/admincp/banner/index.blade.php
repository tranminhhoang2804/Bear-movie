@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table table-responsive" id="tablephim">
                  <thead>
                    <tr class="bg-info">
                      <th  scope="col">ID</th>
                      <th  scope="col">Tiêu đề tin</th>
                      <th  scope="col">Hình ảnh</th>
                      <th  scope="col">Active</th>
                      <th  scope="col">Mô tả</th>
                      <th  scope="col">Quản lý</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($list as $key => $cate)
                    <tr>
                      <th scope="row">{{$key}}</th>
                      <td>{{$cate->title}}</td>
                      <td><img width="200px" src="{{asset('uploads/banner/'.$cate->image)}}"></td>
                      <td>
                          @if($cate->status==1)
                            Ẩn
                          @else
                            Bài đăng
                          @endif
                      </td>
                      <td>{{$cate->description}}</td>
                      <td>
                          {!! Form::open([
                            'method'=>'DELETE',
                            'route'=>['banner.destroy',$cate->id],
                            'onsubmit'=>'return confirm("Bạn có chắc chắn muốn xóa??")'
                          ]) !!}
                          {!! Form::submit('Xóa', ['class'=>'btn btn-danger']) !!}

                          {!! Form::close() !!}
                          <a href="{{route('banner.edit',$cate->id)}}" class="btn btn-warning">Sửa</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
