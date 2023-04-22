@extends('layout')
@section('content')
@include('pages.include.banner')
<!-- phim sap chieu -->
            <div class="col-xs-12 movie-by-cate container">
                <section id="halim-advanced-widget-4">
                   <div class="section-heading mt-2 mb-2 p-2">
                      <a href="#" title="Phim Chiếu Rạp">
                      <span class="fw-bolder text-dark h5">PHIM HOT</span>
                      </a>
                   </div>               		
	               		<div class="halim-box row">
	                    	@foreach($phimhot as $key => $hot)
	                        <article class="col-md-2 col-sm-4 col-xs-6">
	                            <div class="halim-item">
	                            <a class="halim-thumb" href="{{route('movie',$hot->slug)}}">
	                                <figure><img class="lazy card-img-top" height="280em" src="{{asset('uploads/movie/'.$hot->image)}}" title="{{$hot->title}}"></figure>
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

<!-- category -->
			@foreach($category_home as $key => $cate_home)
            <div class="col-xs-12 movie-by-cate container">
                <section id="halim-advanced-widget-4">
                   <div class="section-heading mt-2 mb-2 p-2">
                      <a href="#" title="Phim Chiếu Rạp">
                      <span class="fw-bolder text-dark h5">{{$cate_home->title}}</span>
                      </a>
                   </div>               		
	               		<div class="halim-box row">
	                    	@foreach($cate_home->movie->take(12) as $key => $mov)
	                        <article class="col-md-2 col-sm-4 col-xs-6">
	                            <div class="halim-item">
	                            <a class="halim-thumb" href="{{route('movie',$mov->slug)}}">
	                                <figure><img class="lazy card-img-top" height="280em" src="{{asset('uploads/movie/'.$mov->image)}}" title="{{$mov->title}}"></figure>
	                                <span class="status">
	                               	@if($mov->resolution==0)
				                            HD
				                        @elseif($mov->resolution==1)
				                            SD
				                        @elseif($mov->resolution==2)
				                            HDCam
				                        @elseif($mov->resolution==3)
				                            Cam
				                        @elseif($mov->resolution==4)
				                            FullHD
				                        @else
				                            Trailer
				                        @endif
					                    </span><span class="episode"><i class="fa fa-play" aria-hidden="true"></i>
					                    	{{$mov->episode_count}}/{{$mov->sotap}} |
					                    @if($mov->phude==0)
				                            Vietsub
				                        @else
				                            Thuyết minh
				                        @endif
				                    </span> 
	                                <div class="icon_overlay"></div>
	                                <div class="halim-post-title-box">
	                                    <div class="halim-post-title ">
	                                        <p class="card-title card-name fw-bold text-light">{{$mov->title}}</p>
	                                        <p class="original_title card-name fst-italic text-light">{{$mov->name_eng}}</p>
	                                    </div>
	                                </div>
	                            </a>
	                            </div>
	                        </article>
	                         @endforeach
	                    </div>
	               
                </section>
            </div>
            @endforeach
            <!-- end -->
            <div class="clearfix"></div>
@endsection