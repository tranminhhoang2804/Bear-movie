@extends('layouts.app')

@section('content')
	<table class="table">
        <thead>
            <tr>
                <th  class="bg-primary" scope="col">STT</th>
                <th  class="bg-info" scope="col">Tên thể loại</th>
                <th  class="bg-primary" scope="col">Mô tả</th>
                <th  class="bg-info" scope="col">Slug</th>
                <th  class="bg-primary" scope="col">Active</th>
                <th  class="bg-info" colspan="2" style="text-align: center;" scope="col">Manage</th>
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
                    <td class="text-center">
                        {!! Form::open([
                          'method'=>'DELETE',
                          'route'=>['genre.destroy',$cate->id],
                          'onsubmit'=>'return confirm("Bạn có chắc chắn muốn xóa??")'
                        ]) !!}
                        {!! Form::submit('Xóa', ['class'=>'btn btn-danger']) !!}

                        {!! Form::close() !!}
                    </td>
                    <td  class="text-center">
                        <a href="{{route('genre.edit',$cate->id)}}" class="btn btn-warning">Sửa</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection