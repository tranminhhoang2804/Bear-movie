@extends('layouts.app')

@section('content')
	<table class="table table-responsive" id="tablephim">
                  <thead>
                    <tr class="bg-info">
                      <th scope="col">#</th>
                      <th scope="col">Tên người dùng</th>
                      <th scope="col">Email</th>
                      <th scope="col">Điện thoại</th>
                      <th scope="col">Quyền</th>
                      <th scope="col">Quản lý</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($list as $key => $users)
                    <tr>
                      <th scope="row">{{$key}}</th>
                      <td>{{$users->name}}</td>
                      <td>{{$users->email}}</td>
                      <td>{{$users->phone}}</td>
                      <td>
                        @if($users->role==3)
                        Khách Hàng
                        @elseif($users->role==2)
                        Quản lý hệ thống
                        @elseif($users->role==1)
                        Quản trị viên
                        @endif
                      </td>
                      <td>
                          {!! Form::open([
                            'method'=>'DELETE',
                            'route'=>['user.destroy',$users->id],
                            'onsubmit'=>'return confirm("Bạn có chắc chắn muốn xóa?")'
                          ]) !!}
                          {!! Form::submit('Xóa', ['class'=>'btn btn-danger']) !!}

                          {!! Form::close() !!}
                          <a href="{{route('user.edit',$users->id)}}" class="btn btn-warning">Sửa</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
            </table>
@endsection