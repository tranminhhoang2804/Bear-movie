@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="col_3">
                    <div class="col-md-3 widget widget1">
                      <div class="r3_counter_box">
                        <a href="{{route('category.index')}}"><i class="pull-left fa fa-file icon-rounded"></i></a>
                        <div class="stats">
                          <h5><strong>{{$category_total}}</strong></h5>
                          <span>Danh mục phim</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 widget widget1">
                      <div class="r3_counter_box">
                        <a href="{{route('genre.index')}}"><i class="pull-left fa fa-child user1 icon-rounded"></i></a>
                        <div class="stats">
                          <h5><strong>{{$genre_total}}</strong></h5>
                          <span>Thể loại</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 widget widget1">
                      <div class="r3_counter_box">
                        <a href="{{route('country.index')}}"><i class="pull-left fa fa-globe user2 icon-rounded"></i></a>
                        <div class="stats">
                          <h5><strong>{{$country_total}}</strong></h5>
                          <span>Quốc gia</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 widget widget1">
                      <div class="r3_counter_box">
                        <a href="{{route('movie.index')}}"><i class="pull-left fa fa-film dollar1 icon-rounded"></i></a>
                        <div class="stats">
                          <h5><strong>{{$movie_total}}</strong></h5>
                          <span>Phim</span>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="container title-banner">
                    <p class="text-center h1">CHÚC BẠN MỘT NGÀY MỚI TỐT LÀNH!</p>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
