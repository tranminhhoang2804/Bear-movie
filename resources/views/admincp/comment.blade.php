@extends('layouts.app')

@section('content')
	<table class="table table-responsive" id="tablephim">
                  <thead>
                    <tr class="bg-info">
                      <th scope="col">id</th>
                      <th scope="col">username</th>
                      <th scope="col">moviename</th>
                      <th scope="col">comment</th>
                      <th scope="col">datetime</th>
                      <th scope="col">Manage</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($list as $key => $cmt)
                    <tr>
                      <th scope="row">{{$key}}</th>
                      <td>{{$cmt->user->name}}</td>
                      <td>{{$cmt->movie->title}}</td>
                      <td>{{$cmt->comment_body}}</td>
                      <td>{{$cmt->created_at}}</td>
                      <td>
                          {!! Form::open([
                            'method'=>'DELETE',
                            'route'=>['comment.destroy',$cmt->id],
                            'onsubmit'=>'return confirm("Bạn có chắc chắn muốn xóa?")'
                          ]) !!}
                          {!! Form::submit('Xóa', ['class'=>'btn btn-danger']) !!}

                          {!! Form::close() !!}
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
            </table>
@endsection