@extends('layout')
@section('content')	

<div class="panel-heading container p-2">
            <div class="row">
            <div class="col-xs-6">
                <div class="yoast_breadcrumb hidden-xs"><span><span class="text-light">Năm » 
								@for($year_bread=2000;$year_bread<=2023;$year_bread++)
								<span>
									<a class="text-warning" title="{{$year_bread}}" href="{{url('nam/'.$year_bread)}}">
									{{$year_bread}}
									</a> >>
								</span>
								@endfor
                </span></span></div>
            </div>
            </div>
        </div>
        <div class="col-xs-12 movie-by-cate container">
            <section id="halim-advanced-widget-4">
               <div class="section-heading mt-2 mb-2 p-2">
                  <a href="#" title="Phim Chiếu Rạp">
                  <span class="fw-bolder text-warning">{{$year}}</span>
                  </a>
               </div>
                <div class="halim-box row">
                	 @foreach($movie as $key => $mov)
                    <article class="col-md-2 col-sm-4 col-xs-6">
                        <div class="halim-item">
                        <a class="halim-thumb" href="{{route('movie',$mov->slug)}}" title="{{$mov->title}}">
                            <figure><img class="lazy card-img-top" src="{{asset('uploads/movie/'.$mov->image)}}" alt="gallery 2"></figure>
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
        <div class="clearfix"></div>
        <nav aria-label="..." class="container text-center d-flex justify-content-center mt-3">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link bg-warning text-dark fw-bold">Previous</a>
              </li>
              <li class="page-item"><a class="page-link bg-warning text-dark fw-bold" href="#">1</a></li>
              <li class="page-item"><a class="page-link bg-warning text-dark fw-bold" href="#">2</a></li>
              <li class="page-item"><a class="page-link bg-warning text-dark fw-bold" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link bg-warning text-dark fw-bold" href="#">Next</a>
              </li>
            </ul>
        </nav>  

					<div class="clearfix"></div>
					<div class="text-center">
						{!! $movie->links() !!}
</div>         
@endsection