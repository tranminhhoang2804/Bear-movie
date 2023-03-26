@extends('layouts.app')

@section('content')
	<table class="table container">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Tên danh mục</th>
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
                            'route'=>['category.destroy',$cate->id],
                            'onsubmit'=>'return confirm("Delete?")'
                          ]) !!}
                          {!! Form::submit('Xóa', ['class'=>'btn btn-danger']) !!}

                          {!! Form::close() !!}
                          <a href="{{route('category.edit',$cate->id)}}" class="btn btn-warning">Sửa</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
            </table>
@endsection