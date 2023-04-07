@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Quản lý user</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(!isset($user))
                        {!! Form::open(['route'=>'user.store','method'=>'POST']) !!}
                    @else
                        {!! Form::open(['route'=>['user.update',$user->id],'method'=>'PUT']) !!}
                    @endif
                    <div class="form-group">
                        {!! Form::label('name','Tên user',[]) !!}
                        {!! Form::text('name', isset($user) ? $user->name : '', ['class'=>'form-control','placeholder'=>'Nhập vào dữ liệu']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('email','Email',[]) !!}
                        {!! Form::text('email', isset($user) ? $user->email : '', ['class'=>'form-control','placeholder'=>'Nhập vào dữ liệu']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password','Password',[]) !!}
                        {!! Form::text('password', isset($user) ? $user->password : '', ['class'=>'form-control','placeholder'=>'Nhập vào dữ liệu']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('role','Role',[]) !!}
                        {!! Form::select('role', ['1'=>'admin','2'=>'users'], isset($user) ? $user->role : '' , ['class'=>'form-control']) !!}
                    </div>
                    @if(!isset($user))
                        {!! Form::submit('Thêm danh mục', ['class'=>'btn btn-success']) !!}
                    @else
                        {!! Form::submit('Cập nhật danh mục', ['class'=>'btn btn-success']) !!}
                    @endif

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection