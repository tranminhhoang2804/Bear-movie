@extends('welcome')
@section('content')

<!-- hot -->
        	 
<!-- end -->

<!-- category -->
			@foreach($category_home as $key => $cate_home)
            <div class="col-xs-12 movie-by-cate container">
                <section id="halim-advanced-widget-4">
                   <div class="section-heading mt-2 mb-2 p-2">
                      <a href="#" title="Phim Chiếu Rạp">
                      <span class="fw-bolder text-warning">» {{$cate_home->title}}</span>
                      </a>
                   </div>               		
	               		<div class="halim-box row">
	                    	@foreach($cate_home->movie->take(12) as $key => $mov)
	                        <article class="col-md-2 col-sm-4 col-xs-6">
	                            <div class="halim-item">
	                            <a class="halim-thumb" href="{{route('movie',$mov->slug)}}">
	                                <figure><img class="lazy card-img-top" src="{{asset('uploads/movie/'.$mov->image)}}" title="{{$mov->title}}"></figure>
	                                <span class="status">
	                                @if($mov->resolution==0)
					                    HD
					                @elseif($mov->resolution==1)
					                    SD
					                @elseif($mov->resolution==2)
					                    HDCam
					                @elseif($mov->resolution==3)
					                    Cam
					                @else
					                    FullHD
					                 @endif
					                    </span><span class="episode"><i class="fa fa-play" aria-hidden="true"></i>
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