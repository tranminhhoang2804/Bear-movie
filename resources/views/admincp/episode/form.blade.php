@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <a href="{{route('movie.index')}}" class="btn btn-primary">Tất cả tập phim</a>
                <div class="card-header">Quản lý tập phim</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(!isset($episode))
                        {!! Form::open(['route'=>'episode.store','method'=>'POST']) !!}
                    @else
                        {!! Form::open(['route'=>['episode.update',$episode->id],'method'=>'PUT','enctype'=>'multipart/form-data']) !!}
                    @endif

                    <div class="form-group">
                        {!! Form::label('movie','Phim',[]) !!}
                        {!! Form::select('movie_id', ['0'=>'Select movie', 'phim'=>$list_movie], isset($episode) ? $episode->movie_id : '' , ['class'=>'form-control select-movie']) !!}
                    </div>

                     <div class="form-group">
                        {!! Form::label('link','Link phim',[]) !!}
                        {!! Form::text('link', isset($episode) ? $episode->linkphim : '', ['class'=>'form-control','placeholder'=>'Nhập vào dữ liệu']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('episode','Tap Phim',[]) !!}
                        <select name="episode" class="form-control" id="show_movie">
                            
                        </select>
                       
                    </div>

                    @if(!isset($movie))
                        {!! Form::submit('Thêm', ['class'=>'btn btn-success']) !!}
                    @else
                        {!! Form::submit('Cập nhật', ['class'=>'btn btn-success']) !!}
                    @endif

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
