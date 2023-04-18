@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Quản lý danh mục phim</div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul style="list-style-type: none;">
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(!isset($category))
                        {!! Form::open(['route'=>'category.store','method'=>'POST']) !!}
                    @else
                        {!! Form::open(['route'=>['category.update',$category->id],'method'=>'PUT']) !!}
                    @endif
                    <div class="form-group">
                        {!! Form::label('title','Tên danh mục',[]) !!}
                        {!! Form::text('title', isset($category) ? $category->title : '', ['class'=>'form-control','placeholder'=>'Nhập vào dữ liệu','id'=>'slug','onkeyup'=>'ChangeToSlug()']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('slug','Slug',[]) !!}
                        {!! Form::text('slug', isset($category) ? $category->slug : '', ['class'=>'form-control','placeholder'=>'Nhập vào dữ liệu','id'=>'convert_slug']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('description','Mô tả',[]) !!}
                        {!! Form::textarea('description', isset($category) ? $category->description : '', ['style'=>'resize:none','class'=>'form-control','placeholder'=>'Nhập vào dữ liệu','id'=>'description']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Active','Active',[]) !!}
                        {!! Form::select('status', ['1'=>'Hiển thị','0'=>'Ẩn'], isset($category) ? $category->status : '' , ['class'=>'form-control']) !!}
                    </div>
                    @if(!isset($category))
                        {!! Form::submit('Tạo danh mục', ['class'=>'btn btn-success']) !!}
                    @else
                        {!! Form::submit('Cập nhật danh mục', ['class'=>'btn btn-success']) !!}
                    @endif
                    {!! Form::close() !!}
                    <br>
                    <div class="btn btn-danger"><a style="color:white;" href="{{route('category.index')}}">Hủy bỏ</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
