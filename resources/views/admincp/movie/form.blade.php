@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <!-- <a href="{{route('movie.index')}}" class="btn btn-primary mb-2">Danh sách phim</a> -->
                <div class="card-header">Quản lý phim</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(!isset($movie))
                        {!! Form::open(['route'=>'movie.store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                    @else
                        {!! Form::open(['route'=>['movie.update',$movie->id],'method'=>'PUT','enctype'=>'multipart/form-data']) !!}
                    @endif
                    <div class="form-group">
                        {!! Form::label('title','Tên phim',[]) !!}
                        {!! Form::text('title', isset($movie) ? $movie->title : '', ['class'=>'form-control','placeholder'=>'Nhập vào dữ liệu','id'=>'slug','onkeyup'=>'ChangeToSlug()','required'=>'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('thoiluong','Thời lượng phim',[]) !!}
                        {!! Form::text('thoiluong', isset($movie) ? $movie->thoiluong : '', ['class'=>'form-control','placeholder'=>'Nhập vào dữ liệu','required'=>'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('sotap','Số tập phim',[]) !!}
                        {!! Form::text('sotap', isset($movie) ? $movie->sotap : '', ['class'=>'form-control','placeholder'=>'Nhập vào dữ liệu','required'=>'required']) !!}
                    </div>
                     <div class="form-group">
                        {!! Form::label('Tên Tieng Anh','Tên tiếng Anh',[]) !!}
                        {!! Form::text('name_eng', isset($movie) ? $movie->name_eng : '', ['class'=>'form-control','placeholder'=>'Nhập vào dữ liệu','required'=>'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('slug','Slug',[]) !!}
                        {!! Form::text('slug', isset($movie) ? $movie->slug : '', ['class'=>'form-control','placeholder'=>'Nhập vào dữ liệu','id'=>'convert_slug','required'=>'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('daodien','Đạo diễn',[]) !!}
                        {!! Form::text('daodien', isset($movie) ? $movie->daodien : '', ['class'=>'form-control','placeholder'=>'Nhập vào dữ liệu','required'=>'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('dienvien','Diễn viên',[]) !!}
                        {!! Form::text('dienvien', isset($movie) ? $movie->dienvien : '', ['class'=>'form-control','placeholder'=>'Nhập vào dữ liệu','required'=>'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('description','Mô tả',[]) !!}
                        {!! Form::textarea('description', isset($movie) ? $movie->description : '', ['style'=>'resize:none','class'=>'form-control','placeholder'=>'Nhập vào dữ liệu','id'=>'description','required'=>'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('tags','Tag phim',[]) !!}
                        {!! Form::textarea('tags', isset($movie) ? $movie->tags : '', ['style'=>'resize:none','class'=>'form-control','placeholder'=>'Nhập vào dữ liệu','required'=>'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('trailer','Trailer',[]) !!}
                        {!! Form::text('trailer', isset($movie) ? $movie->trailer : '', ['class'=>'form-control','placeholder'=>'Nhập vào dữ liệu']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Active','Active',[]) !!}
                        {!! Form::select('status', ['1'=>'Hiển thị','0'=>'Ẩn'], isset($movie) ? $movie->status : '' , ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('resolution','Định dạng',[]) !!}
                        {!! Form::select('resolution', ['0'=>'HD','1'=>'SD','2'=>'HDCam','3'=>'Cam','4'=>'FullHD','5'=>'Trailer'], isset($movie) ? $movie->resolution : '' , ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('phude','Phụ đề',[]) !!}
                        {!! Form::select('phude', ['0'=>'Vietsub','1'=>'Thuyết minh'], isset($movie) ? $movie->phude : '' , ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Category','Danh mục',[]) !!}
                        {!! Form::select('category_id',$category, isset($movie) ? $movie->category_id : '' , ['class'=>'form-control']) !!}
                    </div>
                     <div class="form-group">
                        {!! Form::label('thuocphim','Thuoc the loai phim',[]) !!}
                        {!! Form::select('thuocphim',['phimle'=>'Phim lẻ','phimbo'=>'Phim bộ'], isset($movie) ? $movie->thuocphim : '' , ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Genre','Thể loại',[]) !!}<br>
                        @foreach($list_genre as $key => $gen)
                        @if(isset($movie))
                        {!! Form::checkbox('genre[]',$gen->id, isset($movie_genre) && $movie_genre->contains($gen->id) ? true : false) !!}
                        @else
                        {!! Form::checkbox('genre[]',$gen->id, '') !!}
                        @endif
                        {!! Form::label('genre',$gen->title) !!}
                        @endforeach
                    </div>
                    <div class="form-group">
                        {!! Form::label('Country','Quốc gia',[]) !!}
                        {!! Form::select('country_id',$country, isset($movie) ? $movie->country_id : '' , ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Hot','Phim nổi bật',[]) !!}
                        {!! Form::select('phim_hot', ['1'=>'Có','0'=>'Không'], isset($movie) ? $movie->phim_hot : '' , ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Image','Image',[]) !!}
                        {!! Form::file('image', ['class'=>'form-control-file']) !!}
                        @if(isset($movie))
                            <img width="200px" src="{{asset('uploads/movie/'.$movie->image)}}">
                        @endif
                    </div>
                    @if(!isset($movie))
                        {!! Form::submit('Tạo phim', ['class'=>'btn btn-success']) !!}
                    @else
                        {!! Form::submit('Cập nhật phim', ['class'=>'btn btn-success']) !!}
                    @endif

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
