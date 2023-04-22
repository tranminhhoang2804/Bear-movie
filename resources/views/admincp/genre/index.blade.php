@extends('layouts.app')

@section('content')
	<table class="table table-responsive" id="tablephim">
        <thead>
            <tr class="bg-info">
                <th scope="col">STT</th>
                <th scope="col">Tên thể loại</th>
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
                    <td class="text-center">
                        {!! Form::open([
                          'method'=>'DELETE',
                          'route'=>['genre.destroy',$cate->id],
                          'onsubmit'=>'return confirm("Bạn có chắc chắn muốn xóa??")'
                        ]) !!}
                        {!! Form::submit('Xóa', ['class'=>'btn btn-danger']) !!}

                        {!! Form::close() !!}
                        <a href="{{route('genre.edit',$cate->id)}}" class="btn btn-warning">Sửa</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection