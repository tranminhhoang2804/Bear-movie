@extends('layout')
@section('content')
<div class="panel-heading container p-2">
            <div class="row">
            <div class="col-xs-6">
                <div class="yoast_breadcrumb hidden-xs"><span><span class="text-light">Quốc gia » <a class="panel-heading-title text-light fw-bold" href="">{{$count_slug->title}}</a></span></span></div>
            </div>
            </div>
        </div>
        <div class="col-xs-12 movie-by-cate container">
            <section id="halim-advanced-widget-4">
               <div class="section-heading mt-2 mb-2 p-2">
                  <a href="#" title="Phim Chiếu Rạp">
                  <span class="fw-bolder text-warning">{{$count_slug->title}}</span>
                  </a>
               </div>
                <div class="halim-box row">
                	 @foreach($movie as $key => $mov)
                    <article class="col-md-2 col-sm-4 col-xs-6">
                        <div class="halim-item">
                        <a class="halim-thumb" href="{{route('movie',$mov->slug)}}" title="{{$mov->title}}">
                            <figure><img class="lazy card-img-top" height="280em" src="{{asset('uploads/movie/'.$mov->image)}}" alt="gallery 2"></figure>
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
                <div class="text-center d-flex justify-content-center">
                {!!$movie -> links("pagination::bootstrap-4") !!}
            </div>
            </section>
        </div>
        <div class="clearfix"></div>

@endsection