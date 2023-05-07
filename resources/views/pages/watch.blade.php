@extends('layout')
@section('content')	
<div class="container">
    <div class="row container" id="wrapper">
       <div class="halim-panel-filter">
          <div class="panel-heading p-2">
             <div class="row">
                <div class="col-xs-6">
                   <div class="yoast_breadcrumb"><span class="text-light"><span><a class="text-warning" href="{{route('genre',[$movie->genre->slug])}}">{{$movie->genre->title}}</a> » <span><a class="text-warning" href="{{route('country',[$movie->country->slug])}}">{{$movie->country->title}}</a> » <span class="breadcrumb_last" aria-current="page">{{$movie->title}}</span></span></span></span></div>
                </div>
             </div>
          </div>
          <div id="ajax-filter" class="panel-collapse collapse" aria-expanded="true" role="menu">
             <div class="ajax"></div>
          </div>
       </div>
       <main id="main-contents" class="col-xs-12 col-sm-12 col-md-12 mt-4">
          <section id="content" class="test">
             <div class="wrap-content d-block">
                <div class="show-movie d-flex justify-content-center">
                    <div class="show-movie-item col-10">
                     <style type="text/css">
                        .iframe_phim iframe {
                           width: 100%;
                           height: 600px;
                        }
                     </style>
                     <div class="iframe_phim"> 
                        {!! $episode->linkphim !!}
                     </div>
                    </div>
                </div>
                <div class="button-watch container col-10 d-flex justify-content-end">
                      <div id="autonext" class="btn-cs autonext ms-2 me-2">
                         <i class="icon-autonext-sm"></i>
                         <span class="text-secondary"><i class="hl-next"></i> Tự động chuyển tập: <span class="text-dark" id="autonext-status">On</span></span>
                      </div>
                      <div id="explayer" class="hidden-xs text-secondary ms-2 me-2"><i class="hl-resize-full"></i>
                         Mở rộng 
                      </div>
                      <div id="toggle-light" class="text-dark ms-2 me-2"><i class="hl-adjust"></i>
                         Chế độ tắt đèn 
                      </div>
                      <div id="report" class="halim-switch text-light text-secondary ms-2 me-2"><i class="hl-attention"></i> Phản hồi</div>
                      <div class="luotxem text-secondary ms-2 me-2"><i class="hl-eye"></i>
                         <span class="text-secondary">1K</span> lượt xem 
                      </div>
                      <div class="luotxem ms-2 me-2">
                         <a class="visible-xs-inline text-secondary" data-toggle="collapse" href="#moretool" aria-expanded="false" aria-controls="moretool"><i class="hl-forward"></i> Chia sẻ</a>
                      </div>
                </div>
                <div class="collapse" id="moretool">
                   <ul class="nav nav-pills x-nav-justified">
                      <li class="fb-like" data-href="" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></li>
                      <div class="fb-save" data-uri="" data-size="small"></div>
                   </ul>
                </div>
             
                <div class="clearfix"></div>
                <div class="clearfix"></div>
                <div class="title-block">
                   <a href="javascript:;" data-toggle="tooltip" title="Add to bookmark">
                      <div id="bookmark" class="bookmark-img-animation primary_ribbon" data-id="37976">
                         <div class="halim-pulse-ring"></div>
                      </div>
                   </a>
                   <div class="title-wrapper-xem p-3">
                     @if ($movie->thuocphim=='phimbo')
                      <p class="h4"><a href="#" title="{{$movie->title}}" class="text-dark fw-bold movie-title">{{$movie->title}} - tập {{$episode->episode}}</a></h1>
                        @else
                        <p class="h4"><a href="#" title="{{$movie->title}}" class="text-dark fw-bold movie-title">{{$movie->title}}</a></h1>
                        @endif
                   </div>
                </div>
                <div class="entry-content htmlwrap clearfix collapse" id="expand-post-content">
                   <article id="post-37976" class="item-content post-37976"></article>
                </div>
                <div class="clearfix"></div>
                <!-- <div class="text-center">
                   <div id="halim-ajax-list-server"></div>
                </div> -->

                <div id="halim-list-server">
                   <ul class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active sub-title server-1 ps-3 pe-3 pt-1 pb-1"><a class="sub-title" href="#server-0" aria-controls="server-0" role="tab" data-toggle="tab"><i class="hl-server"></i>
                                    @if($movie->phude==0)
                                        Vietsub
                                    @else
                                        Thuyết minh
                                    @endif
                      </a></li>
                   </ul>
                   <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active server-1" id="server-0">
                         <div class="halim-server mt-3">
                            <ul class="halim-list-eps d-flex justify-content-start">
                              @foreach($movie->episode as $key => $sotap)
                              <a class="text-secondary fw-bold" style="text-decoration: none;" href="{{url('xem-phim/'.$movie->slug.'/tap-'.$sotap->episode)}}">
                               <li class="halim-episode"><span class="halim-btn halim-btn-2 {{$tapphim==$sotap->episode ? 'active' : ''}} halim-info-1-1 box-shadow" data-post-id="37976" data-server="1" data-episode="1" data-position="first" data-embed="0" data-title="Xem phim {{$movie->title}} - Tập {{$sotap->episode}} - {{$movie->name_eng}}" data-h1="{{$movie->title}} -tap {{$sotap->episode}}">{{$sotap->episode}}</span></li>
                              </a>
                              @endforeach
                            </ul>
                            <div class="clearfix"></div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="clearfix"></div>
                <div class="htmlwrap clearfix">
                   <div id="lightout"></div>
                </div>
          </section>
          
        </div>
          <script>
             jQuery(document).ready(function($) {           
             var owl = $('#halim_related_movies-2');
             owl.owlCarousel({loop: true,margin: 4,autoplay: true,autoplayTimeout: 4000,autoplayHoverPause: true,nav: true,navText: ['<i class="hl-down-open rotate-left"></i>', '<i class="hl-down-open rotate-right"></i>'],responsiveClass: true,responsive: {0: {items:2},480: {items:3}, 600: {items:4},1000: {items: 4}}})});
          </script>
          </div>
          </section>
       </main>
       <div class="section-container container">
                        <div class="section-bar border-bottom">
                           <p class="section-title h5"><span class="text-light fw-bold">NỘI DUNG PHIM</span></p>
                        </div>
                        <div class="entry-content htmlwrap">
                           <div class="video-item halim-entry-box p-3">
                              <article class="item-content item-text text-light" style="text-align: justify;">
   						            {{$movie->description}}
   						         </article>
                           </div>
                        </div>
                     </div>
       <!-- phim sap chieu -->
            <div class="col-sm-12 movie-by-cate container">
                <section id="halim-advanced-widget-4">
                   <div class="section-heading mt-2 mb-2 p-2">
                      <a href="#" title="Phim Chiếu Rạp">
                      <span class="fw-bolder text-dark h5">Phim mới cập nhật</span>
                      </a>
                   </div>                    
                        <div class="halim-box row">
                        @foreach($phimhot as $key => $hot)
                           <article class="col-md-3 col-sm-6 col-lg-2">
                               <div class="halim-item">
                               <a class="halim-thumb" href="{{route('movie',$hot->slug)}}">
                                   <figure><img class="lazy card-img-top" height="100%" src="{{asset('uploads/movie/'.$hot->image)}}" title="{{$hot->title}}"></figure>
                                   <span class="status">
                                    @if($hot->resolution==0)
                                        HD
                                    @elseif($hot->resolution==1)
                                        SD
                                    @elseif($hot->resolution==2)
                                        HDCam
                                    @elseif($hot->resolution==3)
                                        Cam
                                    @elseif($hot->resolution==4)
                                        FullHD
                                    @else
                                        Trailer
                                    @endif
                                   </span><span class="episode"><i class="fa fa-play" aria-hidden="true"></i>
                                    {{$hot->episode_count}}/{{$hot->sotap}} |
                                   @if($hot->phude==0)
                                        Vietsub
                                    @else
                                        Thuyết minh
                                    @endif
                                </span> 
                                   <div class="icon_overlay"></div>
                                   <div class="halim-post-title-box">
                                       <div class="halim-post-title ">
                                           <p class="card-title card-name fw-bold text-light">{{$hot->title}}</p>
                                           <p class="original_title card-name fst-italic text-light">{{$hot->name_eng}}</p>
                                       </div>
                                   </div>
                               </a>
                               </div>
                           </article>
                           @endforeach
                       </div>
                  
                </section>
            </div>
             
<!-- end -->
    </div>
    </div>
@endsection