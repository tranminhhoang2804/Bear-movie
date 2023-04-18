@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">   
            <table class="table container">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Tên phim</th>
                      <th scope="col">Hình ảnh</th>
                      <th scope="col">Tập phim</th>
                      <th scope="col">Link phim</th>
                      <th scope="col">Quản lý</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($list_episode as $key => $episode)
                    <tr>
                      <th scope="row">{{$key}}</th>
                      <td>{{$episode->movie->title}}</td>
                       <td><img width="200px" src="{{asset('uploads/movie/'.$episode->movie->image)}}"></td>
                      <td>{{$episode->episode}}</td>
                      <!-- <td>{!! $episode->linkphim !!}</td> -->
                      <td>{{ $episode->linkphim }}</td>
                      <td>
                          {!! Form::open([
                            'method'=>'DELETE',
                            'route'=>['episode.destroy',$episode->id],
                            'onsubmit'=>'return confirm("Bạn có chắc chắn muốn xóa tập này?")'
                          ]) !!}
                          {!! Form::submit('Xóa', ['class'=>'btn btn-danger']) !!}

                          {!! Form::close() !!}
                          <a href="{{route('episode.edit',$episode->id)}}" class="btn btn-warning">Sửa</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
