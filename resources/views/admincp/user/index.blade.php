@extends('layouts.app')

@section('content')
	<table class="table container">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Tên user</th>
                      <th scope="col">Email</th>
                      <th scope="col">Password</th>
                      <th scope="col">Role</th>
                      <th scope="col">Manage</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($list as $key => $users)
                    @if($users->role==2)
                    <tr>
                      <th scope="row">{{$key}}</th>
                      <td>{{$users->name}}</td>
                      <td>{{$users->email}}</td>
                      <td>{{$users->password}}</td>
                      <td>{{$users->role}}</td>
                      <td>
                          {!! Form::open([
                            'method'=>'DELETE',
                            'route'=>['user.destroy',$users->id],
                            'onsubmit'=>'return confirm("Delete?")'
                          ]) !!}
                          {!! Form::submit('Xóa', ['class'=>'btn btn-danger']) !!}

                          {!! Form::close() !!}
                          <a href="{{route('user.edit',$users->id)}}" class="btn btn-warning">Sửa</a>
                      </td>
                    </tr>
                    @endif
                    @endforeach
                  </tbody>
            </table>
@endsection