@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
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
                        {!! Form::text('title', isset($movie) ? $movie->title : '', ['class'=>'form-control','placeholder'=>'Nhập vào dữ liệu','id'=>'slug','onkeyup'=>'ChangeToSlug()']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('thoiluong','Thoi luong phim',[]) !!}
                        {!! Form::text('thoiluong', isset($movie) ? $movie->thoiluong : '', ['class'=>'form-control','placeholder'=>'Nhập vào dữ liệu']) !!}
                    </div>
                     <div class="form-group">
                        {!! Form::label('Tên Tieng Anh','Tên Tieng Anh',[]) !!}
                        {!! Form::text('name_eng', isset($movie) ? $movie->name_eng : '', ['class'=>'form-control','placeholder'=>'Nhập vào dữ liệu']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('trailer','Trailer',[]) !!}
                        {!! Form::text('trailer', isset($movie) ? $movie->trailer : '', ['class'=>'form-control','placeholder'=>'Nhập vào dữ liệu']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('slug','Slug',[]) !!}
                        {!! Form::text('slug', isset($movie) ? $movie->slug : '', ['class'=>'form-control','placeholder'=>'Nhập vào dữ liệu','id'=>'convert_slug']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('description','Mô tả',[]) !!}
                        {!! Form::textarea('description', isset($movie) ? $movie->description : '', ['style'=>'resize:none','class'=>'form-control','placeholder'=>'Nhập vào dữ liệu','id'=>'description']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('tags','Tags phim',[]) !!}
                        {!! Form::textarea('tags', isset($movie) ? $movie->tags : '', ['style'=>'resize:none','class'=>'form-control','placeholder'=>'Nhập vào dữ liệu']) !!}
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
                        {!! Form::label('Category','Category',[]) !!}
                        {!! Form::select('category_id',$category, isset($movie) ? $movie->category_id : '' , ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Genre','Genre',[]) !!}
                        <!-- {!! Form::select('genre_id',$genre, isset($movie) ? $movie->genre_id : '' , ['class'=>'form-control']) !!} -->
                        @foreach($list_genre as $key => $gen)
                            @if(isset($movie))
                        {!! Form::checkbox('genre[]', $gen->id, $movie->genre_id==$gen->id ? 'checked' : '') !!}
                            @else
                        {!! Form::checkbox('genre[]', $gen->id, '') !!}
                            @endif
                        {!! Form::label('genre',$gen->title) !!}
                        @endforeach
                    </div>
                    <div class="form-group">
                        {!! Form::label('Country','Country',[]) !!}
                        {!! Form::select('country_id',$country, isset($movie) ? $movie->country_id : '' , ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Hot','Phim hot',[]) !!}
                        {!! Form::select('phim_hot', ['1'=>'Co','0'=>'Khong'], isset($movie) ? $movie->phim_hot : '' , ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Image','Image',[]) !!}
                        {!! Form::file('image', ['class'=>'form-control-file']) !!}
                        @if(isset($movie))
                            <img width="200px" src="{{asset('uploads/movie/'.$movie->image)}}">
                        @endif
                    </div>
                    @if(!isset($movie))
                        {!! Form::submit('ADD', ['class'=>'btn btn-success']) !!}
                    @else
                        {!! Form::submit('UPDATE', ['class'=>'btn btn-success']) !!}
                    @endif

                    {!! Form::close() !!}
                </div>
            </div>
            <table class="table" id="tablephim">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Tên phim</th>
                      <th scope="col">Tags phim</th>
                      <th scope="col">thời lượng phim</th>
                      <th scope="col">Hình ảnh</th>
                      <th scope="col">Phim hot</th>
                      <th scope="col">Định dạng</th>
                      <th scope="col">Phụ đề</th>
                      <!-- <th scope="col">Mô tả</th> -->
                      <th scope="col">Slug</th>
                      <th scope="col">Active</th>
                      <th scope="col">Category</th>
                      <th scope="col">Genre</th>
                      <th scope="col">Country</th>
                      <th scope="col">Ngay tao</th>
                      <th scope="col">Ngay cap nhat</th>
                      <th scope="col">Year</th>
                      <th scope="col">Manage</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($list as $key => $cate)
                    <tr>
                      <th scope="row">{{$key}}</th>
                      <td>{{$cate->title}}</td>
                      <td>{{$cate->tags}}</td>
                      <td>{{$cate->thoiluong}}</td>
                       <td><img width="200px" src="{{asset('uploads/movie/'.$cate->image)}}"></td>
                       <td>
                          @if($cate->phim_hot==0)
                            Khong
                          @else
                            Co
                          @endif
                      </td>
                       <td>
                        @if($cate->resolution==0)
                            HD
                        @elseif($cate->resolution==1)
                            SD
                        @elseif($cate->resolution==2)
                            HDCam
                        @elseif($cate->resolution==3)
                            Cam
                        @elseif($cate->resolution==4)
                            FullHD
                        @else
                            Trailer
                        @endif
                       </td>
                       <td>
                        @if($cate->phude==0)
                            Vietsub
                        @else
                            Thuyết minh
                        @endif
                       </td>
                      <!-- <td>{{$cate->description}}</td> -->
                      <td>{{$cate->slug}}</td>
                      <td>
                          @if($cate->status)
                            Hiển thị
                          @else
                            Ẩn
                          @endif
                      </td>
                      <td>{{$cate->category->title}}</td>
                      
                      <td>
                        @foreach($cate->movie_genre as $gen)
                        {{$gen->title}}
                        @endforeach
                      </td>
                      
                      <td>{{$cate->country->title}}</td>
                      <td>{{$cate->ngaytao}}</td>
                      <td>{{$cate->ngaycapnhat}}</td>
                      <td>
                          {!! Form::selectYear('year',2000,2023, isset($cate->year) ? $cate->year : '' ,['class'=>'select-year','id'=>$cate->id]) !!}
                      </td>
                      <td>
                          {!! Form::open([
                            'method'=>'DELETE',
                            'route'=>['movie.destroy',$cate->id],
                            'onsubmit'=>'return confirm("Delete?")'
                          ]) !!}
                          {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}

                          {!! Form::close() !!}
                          <a href="{{route('movie.edit',$cate->id)}}" class="btn btn-warning">Edit</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
