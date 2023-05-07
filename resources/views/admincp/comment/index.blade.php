@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table table-responsive" id="tablephim">
                  <thead>
                    <tr class="bg-info">
                      <th  scope="col">ID</th>
                      <th  scope="col">User Name</th>
                      <th  scope="col">Movie Name</th>
                      <th  scope="col">Noi dung</th>
                      <th  scope="col">Created Time</th>
                      <th  scope="col">Quản lý</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($list as $key => $cate)
                    <tr>
                      <th scope="row">{{$key}}</th>
                      <td>{{$cate->user->name}}</td>
                      <td>{{$cate->movie->title}}</td>
                      <td>{{$cate->content}}</td>
                      <td>{{$cate->created_at}}</td>
                      <td>
                          {!! Form::open([
                            'method'=>'DELETE',
                            'route'=>['comment.destroy',$cate->id],
                            'onsubmit'=>'return confirm("Bạn có chắc chắn muốn xóa??")'
                          ]) !!}
                          {!! Form::submit('Xóa', ['class'=>'btn btn-danger']) !!}

                          {!! Form::close() !!}
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
