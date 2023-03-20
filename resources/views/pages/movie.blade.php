@extends('welcome')
@section('content')

<div class="panel-heading container p-2">
            <div class="row">
            <div class="col-xs-6">
                <div class="yoast_breadcrumb hidden-xs">
                    <span>
                        <span class="text-light">
                            <a class="panel-heading-title text-light fw-bold" href="{{route('category',[$movie->category->slug])}}">{{$movie->category->title}}</a> » 
                            <span class="breadcrumb_last" aria-current="page">
                                <a class="panel-heading-title text-light fw-bold" href="{{route('country',[$movie->country->slug])}}">{{$movie->country->title}}</a> »
                                @foreach($movie->movie_genre as $gen)
                                <a class="panel-heading-title text-light fw-bold" href="{{route('genre',[$gen->slug])}}">{{$gen->title}}</a> »
                                @endforeach
                            </span>
                            <span class="breadcrumb_last" aria-current="page">
                                {{$movie->title}}
                            </span>
                        </span>
                    </span>
                </div>
            </div>
            </div>
        </div>
        <div class="movie-detail d-flex justify-content-center m-5">
            <div class="col-2 d-block">
                <div class="movie-poster">
                    <img class="movie-thumb" width="200px" src="{{asset('uploads/movie/'.$movie->image)}}" alt="{{$movie->title}}">
                 </div>
            </div>
            <div class="col-6">
                <div class="film-poster">
                    <div class="movie-name ms-4">
                    <p class="movie-title h5 fw-bold text-light">{{$movie->title}}</h1>
                    <p class="movie-title fst-italic text-light">{{$movie->name_eng}}</h2>
                    </div>
                    <ul class="list-info-group">
                       <li class="list-info-group-item text-warning"><span class="fw-bold text-light">Trạng Thái</span> : <span class="quality fw-bold">
                       						@if($movie->resolution==0)
					                            HD
					                        @elseif($movie->resolution==1)
					                            SD
					                        @elseif($movie->resolution==2)
					                            HDCam
					                        @elseif($movie->resolution==3)
					                            Cam
					                        @elseif($movie->resolution==4)
					                            FullHD
                                            @else
                                                Trailer
					                        @endif
                       </span>  <span class="movie-episode fw-bold">
											@if($movie->phude==0)
					                            Vietsub
					                        @else
					                            Thuyết minh
					                        @endif
                       </span></li>
                       <li class="list-info-group-item text-warning"><span class="fw-bold text-light">Danh mục</span> : <a href="{{route('category',[$movie->category->slug])}}" rel="category tag">{{$movie->category->title}}</a></li>
                       <li class="list-info-group-item text-warning"><span class="fw-bold text-light">Thời lượng</span> : {{$movie->thoiluong}}</li>
                       <li class="list-info-group-item text-warning"><span class="fw-bold text-light">Số tập phim</span> : {{$movie->sotap}}/{{$movie->sotap}} - Hoàn thành </li>
                       <li class="list-info-group-item text-warning"><span class="fw-bold text-light">Thể loại</span> : 
                        @foreach($movie->movie_genre as $gen)
                            <a href="{{route('genre',$gen->slug)}}" rel="category tag">{{$gen->title}},</a>
                        @endforeach
                        </li>
                       <li class="list-info-group-item text-warning"><span class="fw-bold text-light">Quốc gia</span> : <a href="{{route('country',[$movie->country->slug])}}" rel="tag">{{$movie->country->title}}</a></li>
                       <li class="list-info-group-item text-warning"><span class="fw-bold text-light">Đạo diễn</span> : <a class="director" rel="nofollow" href="https://phimhay.co/dao-dien/cate-shortland" title="Cate Shortland">Cate Shortland</a></li>
                       <li class="list-info-group-item last-item text-warning" style="-overflow: hidden;-display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-flex: 1;-webkit-box-orient: vertical;"><span class="fw-bold text-light">Diễn viên</span> : <a href="" rel="nofollow" title="C.C. Smiff">C.C. Smiff</a>, <a href="" rel="nofollow" title="David Harbour">David Harbour</a>, <a href="" rel="nofollow" title="Erin Jameson">Erin Jameson</a>, <a href="" rel="nofollow" title="Ever Anderson">Ever Anderson</a>, <a href="" rel="nofollow" title="Florence Pugh">Florence Pugh</a>, <a href="" rel="nofollow" title="Lewis Young">Lewis Young</a>, <a href="" rel="nofollow" title="Liani Samuel">Liani Samuel</a>, <a href="" rel="nofollow" title="Michelle Lee">Michelle Lee</a>, <a href="" rel="nofollow" title="Nanna Blondell">Nanna Blondell</a>, <a href="" rel="nofollow" title="O-T Fagbenle">O-T Fagbenle</a></li>
                       <li><div class="border-bottom mt-2"></div></li>
                       <li>
                        <div class="movie-watch">
                            <a class="bg-warning text-dark movie-button fw-bold p-2" href="{{route('watch')}}">Xem phim</a>
                            <a class="bg-danger text-dark movie-button fw-bold p-2 watch_trailer" href="#watch_trailer">Xem trailer</a>
                        </div>
                        </li>
                    </ul>
                 </div>
            </div>
        </div>
        <div class="clearfix"></div>
                     <div class="section-bar container col-8">
                        <p class="section-title h5"><span class="text-warning">Nội dung phim</span></h2>
                     </div>
                     <div class="entry-content htmlwrap container col-7">
                        <div class="video-item halim-entry-box">
                           <article id="post-38424" class="item-content text-light">
						   {{$movie->description}}
						</article>
                        </div>
                     </div>
        <div class="clearfix"></div>
                     <div class="section-bar container col-8 mt-2">
                        <p class="section-title h5"><span class="text-warning">Tags phim</span></h2>
                     </div>
                     <div class="entry-content htmlwrap container col-7">
                        <div class="video-item halim-entry-box">
                           <article id="post-38424" class="item-content text-light">
                            @if ($movie->tags!=NULL)
                           @php
                           $tags = array();
                           $tags = explode(',',$movie->tags);
                           @endphp
                           @foreach($tags as $key => $tag)
                           <a href="{{url('tag/' .$tag)}}"> {{$tag}} </a>
                           @endforeach
                           @else
                           {{$movie->title}}
                           @endif
                        </article>
                        </div>
                     </div>
        <div class="clearfix"></div>
                     <div class="section-bar container col-8">
                        <p class="section-title h5"><span class="text-warning">Trailer phim</span></h2>
                     </div>
                     <div class="entry-content htmlwrap container col-7">
                        <div class="video-item halim-entry-box">
                            <article id="watch_trailer" class="item-content text-light">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$movie->trailer}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </article>
                        </div>
                     </div>     	   
@endsection