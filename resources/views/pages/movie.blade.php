@extends('layout')
@section('content')

<div class="panel-heading container p-2">
            <div class="row">
               <div class="col-xs-6">
                  <div class="yoast_breadcrumb hidden-xs">
                     <span>
                        <span class="text-light">
                           <a class="panel-heading-title text-light fw-bold" href="{{route('country',[$movie->country->title])}}">{{$movie->country->title}}</a> » 
                           @foreach($movie->movie_genre as $gen)
                           <span class="breadcrumb_last" aria-current="page">
                              <a class="panel-heading-title text-light fw-bold" href="{{route('genre',[$gen->slug])}}">{{$gen->title}}</a> »
                           </span>
                           @endforeach
                        </span>
                     </span>
                  </div>
               </div>
            </div>
        </div>
        <div class="movie-detail d-flex justify-content-center m-5">
            <div class="col-2">
                <div class="movie-poster">
                    <img class="movie-thumb" width="250px" src="{{asset('uploads/movie/'.$movie->image)}}" alt="{{$movie->title}}">
                 </div>
            </div>
            <div class="col-6 film-title">
                <div class="film-poster">
                    <div class="movie-name ms-4 p-2">
                    <p class="movie-title h3 fw-bold text-light">{{$movie->title}}</p>
                    <p class="movie-title fst-italic text-light">{{$movie->name_eng}}</p>
                    </div>
                    <ul class="list-info-group border-top pt-2">
                       <li class="list-info-group-item text-warning">
                           <span class="fw-bold text-light">Trạng Thái</span> : <span class="quality fw-bold">
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
                           </span> &nbsp
                           @if($movie->resolution!=5)
                          <span class="movie-episode fw-bold">
   											    @if($movie->phude==0)
   					                         Vietsub
   					                      @else
   					                         Thuyết minh
   					                      @endif
                          </span>
                          @endif
                    </li>
                       <li class="list-info-group-item text-warning"><span class="fw-bold text-light">Danh mục</span> : <a class="fw-bold" href="{{route('category',[$movie->category->slug])}}" rel="category tag">{{$movie->category->title}}</a></li>
                       <li class="list-info-group-item text-warning"><span class="fw-bold text-light">Thời lượng</span> : <a class="fw-bold">{{$movie->thoiluong}}</a></li>
                       <li class="list-info-group-item text-warning"><span class="fw-bold text-light">Số tập</span> : <a class="fw-bold">
                        @if($movie->thuocphim=='phimbo')
                           {{$episode_current_list_count}}/{{$movie->sotap}} -
                              @if($episode_current_list_count==$movie->sotap)
                                 Hoàn thành
                              @else
                                 Đang cạp nhật
                              @endif
                        @else
                           Phim lẻ
                        @endif
                     </a>
                       </li>
                       <li class="list-info-group-item text-warning"><span class="fw-bold text-light">Thể loại</span> :                        
                        @foreach($movie->movie_genre as $gen)
                         <a class="fw-bold" href="{{route('genre',$gen->slug)}}" rel="category tag">{{$gen->title}},</a>
                        @endforeach                       
                       </li>
                       <li class="list-info-group-item text-warning"><span class="fw-bold text-light">Quốc gia</span> : <a class="fw-bold" href="{{route('country',[$movie->country->slug])}}" rel="tag">{{$movie->country->title}}</a></li>
                       <li class="list-info-group-item text-warning"><span class="fw-bold text-light">Tập phim mới nhất</span> : 
                          @if($episode_current_list_count>0) 
                              @if($movie->thuocphim=='phimbo')
                                 @foreach($episode as $key =>$ep)
                                 <a class="fw-bold" href="{{url('xem-phim/'.$ep->movie->slug.'/tap-'.$ep->episode)}}" rel="tag">Tập {{$ep->episode}} ,</a>
                                 @endforeach
                             
                              @elseif($movie->thuocphim=='phimle')
                                 @foreach($episode as $key =>$ep_le)
                                 <a class="fw-bold" href="{{url('xem-phim/'.$ep_le->movie->slug.'/tap-'.$ep_le->episode)}}" rel="tag">{{$ep_le->episode}}</a>
                                 @endforeach
                              @endif 

                           @else
                              <a class="fw-bold text-danger">Đang cập nhật</a>
                           @endif
                     </li>
                       <li class="list-info-group-item text-warning"><span class="fw-bold text-light">Đạo diễn</span> : {{$movie->daodien}}</li>
                       <li class="list-info-group-item last-item text-warning" style="-overflow: hidden;-display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-flex: 1;-webkit-box-orient: vertical;"><span class="fw-bold text-light">Diễn viên</span> : {{$movie->dienvien}} </li>
                       <li></li>
                       <li class="list-info-group-item text-warning">  
                        @if($movie->resolution!=5)
                           @if($episode_current_list_count>0)
                           <a class="bg-warning text-dark movie-button fw-bold p-2 m-2" href="{{url('xem-phim/'.$movie->slug.'/tap-'.$episode_tapdau->episode)}}">Xem phim</a>
                           <a class="bg-warning text-dark movie-button fw-bold p-2 m-2" href="#trailer">Xem trailer</a>
                           @endif
                        @else
                           <a class="bg-warning text-dark movie-button fw-bold p-2 m-2" href="#trailer">Xem trailer</a>   
                        @endif
                     </li>
                    </ul>
                 </div>
            </div>
        </div>
        <div class="clearfix"></div>
                     <div class="section-container container">
                        <div class="section-bar border-bottom">
                           <p class="section-title h5"><span class="text-light fw-bold">NỘI DUNG</span></p>
                        </div>
                        <div class="entry-content htmlwrap">
                           <div class="video-item halim-entry-box p-3">
                              <article id="post-38424" class="item-content text-light">
   						            {{$movie->description}}
   						         </article>
                           </div>
                        </div>
                     </div>
                     <div class="section-container container">
                        <div class="section-bar border-bottom">
                           <p class="section-title h5"><span class="text-light fw-bold">TAGS</span></p>
                        </div>
                        <div class="entry-content htmlwrap">
                           <div class="video-item halim-entry-box p-3">
                              <article id="post-38424" class="item-content text-light">
                                 @if($movie->tags!=NULL)
                                    @php
                                       $tags = array();
                                       $tags = explode(',',$movie->tags);
                                    @endphp
                                    @foreach($tags as $key => $tag)
                                       <a class="text-warning" style="text-decoration: none;" href="{{url('tag/'.$tag)}}">{{$tag}},</a>
                                    @endforeach
                                 @else
                                    {{$movie->title}},
                                 @endif                            
                              </article>
                           </div>
                        </div>
                     </div>
                     <div class="section-container container">
                     <div class="section-bar border-bottom">
                        <p class="section-title h5"><span class="text-light fw-bold">TRAILER</span></p>
                     </div>
                     <div class="entry-content htmlwrap container col-7">
                        <div class="video-item halim-entry-box d-flex justify-content-center p-5">
                           <article id="trailer" class="item-content text-light">
                              <iframe width="800" height="500" src="https://www.youtube.com/embed/{{$movie->trailer}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                           </article>
                        </div>
                     </div>
                  </div>
@endsection