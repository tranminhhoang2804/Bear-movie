@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="table-responsive movie-table">
            <table class="table" id="tablephim">
                  <thead>
                    <tr class="bg-info">
                      <th scope="col">ID</th>
                      <th scope="col">Tên quốc gia</th>
                      <th scope="col">Mô tả</th>
                      <th scope="col">Slug</th>
                      <th scope="col">Active</th>
                      <th scope="col">Manage</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($list as $key => $cate)
                    <tr>
                      <th scope="row">{{$key}}</th>
                      <td>{{$cate->title}}</td>
                      <td>{{$cate->description}}</td>
                       <td>{{$cate->slug}}</td>
                      <td>
                          @if($cate->status)
                            Hiển thị
                          @else
                            Ẩn
                          @endif
                      </td>
                      <td>
                          {!! Form::open([
                            'method'=>'DELETE',
                            'route'=>['country.destroy',$cate->id],
                            'onsubmit'=>'return confirm("Bạn có chắc chắn muốn xóa??")'
                          ]) !!}
                          {!! Form::submit('Xóa', ['class'=>'btn btn-danger']) !!}

                          {!! Form::close() !!}
                          <a href="{{route('country.edit',$cate->id)}}" class="btn btn-warning">Sửa</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
            </table>
          </div>
        </div>
@endsection