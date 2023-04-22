@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Quản lý bản tin</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(!isset($banner))
                        {!! Form::open(['route'=>'banner.store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                    @else
                        {!! Form::open(['route'=>['banner.update',$banner->id],'method'=>'PUT','enctype'=>'multipart/form-data']) !!}
                    @endif
                    <div class="form-group">
                        {!! Form::label('title','Tiêu đề bản tin',[]) !!}
                        {!! Form::text('title', isset($banner) ? $banner->title : '', ['class'=>'form-control','placeholder'=>'Nhập vào dữ liệu','required'=>'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('description','Mô tả',[]) !!}
                        {!! Form::textarea('description', isset($banner) ? $banner->description : '', ['class'=>'form-control','placeholder'=>'Nhập vào dữ liệu','id'=>'description']) !!}
                    </div>
                    
                    
                    <div class="form-group">
                        {!! Form::label('Active','Active',[]) !!}
                        {!! Form::select('status', ['1'=>'Ẩn','2'=>'Bài đăng'], isset($banner) ? $banner->status : '' , ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Image','Image',[]) !!}
                        {!! Form::file('image', ['class'=>'form-control-file']) !!}
                        @if(isset($banner))
                            <img width="200px" src="{{asset('uploads/banner/'.$banner->image)}}">
                        @endif
                    </div>
                    @if(!isset($banner))
                        {!! Form::submit('Tạo tin', ['class'=>'btn btn-success']) !!}
                    @else
                        {!! Form::submit('Cập nhật tin', ['class'=>'btn btn-success']) !!}
                    @endif

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
