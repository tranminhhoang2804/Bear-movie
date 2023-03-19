@extends('welcome')
@section('content')	
<div class="container">
    <div class="row container" id="wrapper">
       <div class="halim-panel-filter">
          <div class="panel-heading p-2">
             <div class="row">
                <div class="col-xs-6">
                   <div class="yoast_breadcrumb"><span class="text-light"><span><a class="text-warning" href="">Phim hay</a> » <span><a class="text-warning" href="danhmuc.php">Trung Quốc</a> » <span class="breadcrumb_last" aria-current="page">Tôi Và Chúng Ta Ở Bên Nhau</span></span></span></span></div>
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
                        <iframe width="100%" height="500" src="./img/12-1_VN-4057359809_04.webm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="button-watch container col-10 d-flex justify-content-end">
                      <div id="autonext" class="btn-cs autonext ms-2 me-2">
                         <i class="icon-autonext-sm"></i>
                         <span class="text-light"><i class="hl-next"></i> Autonext: <span id="autonext-status">On</span></span>
                      </div>
                      <div id="explayer" class="hidden-xs text-light ms-2 me-2"><i class="hl-resize-full"></i>
                         Expand 
                      </div>
                      <div id="toggle-light" class="text-light ms-2 me-2"><i class="hl-adjust"></i>
                         Light Off 
                      </div>
                      <div id="report" class="halim-switch text-light text-light ms-2 me-2"><i class="hl-attention"></i> Report</div>
                      <div class="luotxem text-light ms-2 me-2"><i class="hl-eye"></i>
                         <span class="text-light">1K</span> lượt xem 
                      </div>
                      <div class="luotxem ms-2 me-2">
                         <a class="visible-xs-inline text-light" data-toggle="collapse" href="#moretool" aria-expanded="false" aria-controls="moretool"><i class="hl-forward"></i> Share</a>
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
                      <p class="h4"><a href="#" title="Tôi Và Chúng Ta Ở Bên Nhau" class="text-warning movie-title">Tôi Và Chúng Ta Ở Bên Nhau tập 1</a></h1>
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
                      <li role="presentation" class="active sub-title server-1 bg-warning ps-2 pe-2"><a class="movie-title text-dark fw-bold" href="#server-0" aria-controls="server-0" role="tab" data-toggle="tab"><i class="hl-server"></i> Vietsub</a></li>
                   </ul>
                   <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active server-1" id="server-0">
                         <div class="halim-server mt-3">
                            <ul class="halim-list-eps d-flex justify-content-start">
                               <li class="halim-episode"><span class="halim-btn halim-btn-2 active halim-info-1-1 box-shadow" data-post-id="37976" data-server="1" data-episode="1" data-position="first" data-embed="0" data-title="Xem phim Tôi Và Chúng Ta Ở Bên Nhau - Tập 1 - Be Together - vietsub + Thuyết Minh" data-h1="Tôi Và Chúng Ta Ở Bên Nhau - tập 1">1</span></li>
                               <li class="halim-episode"><span class="halim-btn halim-btn-2 halim-info-1-2 box-shadow" data-post-id="37976" data-server="1" data-episode="2" data-position="" data-embed="0" data-title="Xem phim Tôi Và Chúng Ta Ở Bên Nhau - Tập 2 - Be Together - vietsub + Thuyết Minh" data-h1="Tôi Và Chúng Ta Ở Bên Nhau - tập 2">2</span></li>
                               <li class="halim-episode"><span class="halim-btn halim-btn-2 halim-info-1-3 box-shadow" data-post-id="37976" data-server="1" data-episode="3" data-position="" data-embed="0" data-title="Xem phim Tôi Và Chúng Ta Ở Bên Nhau - Tập 3 - Be Together - vietsub + Thuyết Minh" data-h1="Tôi Và Chúng Ta Ở Bên Nhau - tập 3">3</span></li>
                               <li class="halim-episode"><span class="halim-btn halim-btn-2 halim-info-1-4 box-shadow" data-post-id="37976" data-server="1" data-episode="4" data-position="" data-embed="0" data-title="Xem phim Tôi Và Chúng Ta Ở Bên Nhau - Tập 4 - Be Together - vietsub + Thuyết Minh" data-h1="Tôi Và Chúng Ta Ở Bên Nhau - tập 4">4</span></li>
                               <li class="halim-episode"><span class="halim-btn halim-btn-2 halim-info-1-5 box-shadow" data-post-id="37976" data-server="1" data-episode="5" data-position="" data-embed="0" data-title="Xem phim Tôi Và Chúng Ta Ở Bên Nhau - Tập 5 - Be Together - vietsub + Thuyết Minh" data-h1="Tôi Và Chúng Ta Ở Bên Nhau - tập 5">5</span></li>
                               <li class="halim-episode"><span class="halim-btn halim-btn-2 halim-info-1-6 box-shadow" data-post-id="37976" data-server="1" data-episode="6" data-position="" data-embed="0" data-title="Xem phim Tôi Và Chúng Ta Ở Bên Nhau - Tập 6 - Be Together - vietsub + Thuyết Minh" data-h1="Tôi Và Chúng Ta Ở Bên Nhau - tập 6">6</span></li>
                               <li class="halim-episode"><span class="halim-btn halim-btn-2 halim-info-1-7 box-shadow" data-post-id="37976" data-server="1" data-episode="7" data-position="" data-embed="0" data-title="Xem phim Tôi Và Chúng Ta Ở Bên Nhau - Tập 7 - Be Together - vietsub + Thuyết Minh" data-h1="Tôi Và Chúng Ta Ở Bên Nhau - tập 7">7</span></li>
                               <li class="halim-episode"><span class="halim-btn halim-btn-2 halim-info-1-8 box-shadow" data-post-id="37976" data-server="1" data-episode="8" data-position="" data-embed="0" data-title="Xem phim Tôi Và Chúng Ta Ở Bên Nhau - Tập 8 - Be Together - vietsub + Thuyết Minh" data-h1="Tôi Và Chúng Ta Ở Bên Nhau - tập 8">8</span></li>
                               <li class="halim-episode"><span class="halim-btn halim-btn-2 halim-info-1-9 box-shadow" data-post-id="37976" data-server="1" data-episode="9" data-position="" data-embed="0" data-title="Xem phim Tôi Và Chúng Ta Ở Bên Nhau - Tập 9 - Be Together - vietsub + Thuyết Minh" data-h1="Tôi Và Chúng Ta Ở Bên Nhau - tập 9">9</span></li>
                               <li class="halim-episode"><span class="halim-btn halim-btn-2 halim-info-1-10 box-shadow" data-post-id="37976" data-server="1" data-episode="10" data-position="" data-embed="0" data-title="Xem phim Tôi Và Chúng Ta Ở Bên Nhau - Tập 10 - Be Together - vietsub + Thuyết Minh" data-h1="Tôi Và Chúng Ta Ở Bên Nhau - tập 10">10</span></li>
                               <li class="halim-episode"><span class="halim-btn halim-btn-2 halim-info-1-11 box-shadow" data-post-id="37976" data-server="1" data-episode="11" data-position="" data-embed="0" data-title="Xem phim Tôi Và Chúng Ta Ở Bên Nhau - Tập 11 - Be Together - vietsub + Thuyết Minh" data-h1="Tôi Và Chúng Ta Ở Bên Nhau - tập 11">11</span></li>
                               <li class="halim-episode"><span class="halim-btn halim-btn-2 halim-info-1-12 box-shadow" data-post-id="37976" data-server="1" data-episode="12" data-position="" data-embed="0" data-title="Xem phim Tôi Và Chúng Ta Ở Bên Nhau - Tập 12 - Be Together - vietsub + Thuyết Minh" data-h1="Tôi Và Chúng Ta Ở Bên Nhau - tập 12">12</span></li>
                               <li class="halim-episode"><span class="halim-btn halim-btn-2 halim-info-1-13 box-shadow" data-post-id="37976" data-server="1" data-episode="13" data-position="" data-embed="0" data-title="Xem phim Tôi Và Chúng Ta Ở Bên Nhau - Tập 13 - Be Together - vietsub + Thuyết Minh" data-h1="Tôi Và Chúng Ta Ở Bên Nhau - tập 13">13</span></li>
                               <li class="halim-episode"><span class="halim-btn halim-btn-2 halim-info-1-14 box-shadow" data-post-id="37976" data-server="1" data-episode="14" data-position="" data-embed="0" data-title="Xem phim Tôi Và Chúng Ta Ở Bên Nhau - Tập 14 - Be Together - vietsub + Thuyết Minh" data-h1="Tôi Và Chúng Ta Ở Bên Nhau - tập 14">14</span></li>
                               <li class="halim-episode"><span class="halim-btn halim-btn-2 halim-info-1-15 box-shadow" data-post-id="37976" data-server="1" data-episode="15" data-position="" data-embed="0" data-title="Xem phim Tôi Và Chúng Ta Ở Bên Nhau - Tập 15 - Be Together - vietsub + Thuyết Minh" data-h1="Tôi Và Chúng Ta Ở Bên Nhau - tập 15">15</span></li>
                               <li class="halim-episode"><span class="halim-btn halim-btn-2 halim-info-1-16 box-shadow" data-post-id="37976" data-server="1" data-episode="16" data-position="" data-embed="0" data-title="Xem phim Tôi Và Chúng Ta Ở Bên Nhau - Tập 16 - Be Together - vietsub + Thuyết Minh" data-h1="Tôi Và Chúng Ta Ở Bên Nhau - tập 16">16</span></li>
                               <li class="halim-episode"><span class="halim-btn halim-btn-2 halim-info-1-17 box-shadow" data-post-id="37976" data-server="1" data-episode="17" data-position="" data-embed="0" data-title="Xem phim Tôi Và Chúng Ta Ở Bên Nhau - Tập 17 - Be Together - vietsub + Thuyết Minh" data-h1="Tôi Và Chúng Ta Ở Bên Nhau - tập 17">17</span></li>
                               <li class="halim-episode"><span class="halim-btn halim-btn-2 halim-info-1-18 box-shadow" data-post-id="37976" data-server="1" data-episode="18" data-position="" data-embed="0" data-title="Xem phim Tôi Và Chúng Ta Ở Bên Nhau - Tập 18 - Be Together - vietsub + Thuyết Minh" data-h1="Tôi Và Chúng Ta Ở Bên Nhau - tập 18">18</span></li>
                               <li class="halim-episode"><span class="halim-btn halim-btn-2 halim-info-1-19 box-shadow" data-post-id="37976" data-server="1" data-episode="19" data-position="last" data-embed="0" data-title="Xem phim Tôi Và Chúng Ta Ở Bên Nhau - Tập 19 - Be Together - vietsub + Thuyết Minh" data-h1="Tôi Và Chúng Ta Ở Bên Nhau - tập 19">19</span></li>
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
          <section class="related-movies container">
          <div id="halim_related_movies-2xx" class="wrap-slider">
          <div class="section-bar clearfix">
          <h3 class="section-title"><span>CÓ THỂ BẠN MUỐN XEM</span></h3>
          </div>
          <div class="col-xs-12 movie-by-cate container">
            <section id="halim-advanced-widget-4">
               <div class="section-heading mt-2 mb-2 p-2">
                  <a href="#" title="Phim Chiếu Rạp">
                  <span class="fw-bolder text-warning">CÓ THỂ BẠN MUỐN XEM</span>
                  </a>
               </div>
                <div class="halim-box row">
                    <article class="col-md-2 col-sm-4 col-xs-6">
                        <div class="halim-item">
                        <a class="halim-thumb" href="#" title="GÓA PHỤ ĐEN">
                            <figure><img class="lazy card-img-top" src="./img/nobita-tham-hiem-vung-dat-moi.jfif" alt="GÓA PHỤ ĐEN" title="GÓA PHỤ ĐEN"></figure>
                            <span class="status">HD</span><span class="episode"><i class="fa fa-play" aria-hidden="true"></i>Vietsub</span> 
                            <div class="icon_overlay"></div>
                            <div class="halim-post-title-box">
                                <div class="halim-post-title ">
                                    <p class="card-title fw-bold text-light">GÓA PHỤ ĐEN</p>
                                    <p class="original_title fst-italic text-light">Black Widow</p>
                                </div>
                            </div>
                        </a>
                        </div>
                    </article>
                    <article class="col-md-2 col-sm-4 col-xs-6">
                        <div class="halim-item">
                        <a class="halim-thumb" href="#" title="GÓA PHỤ ĐEN">
                            <figure><img class="lazy card-img-top" src="./img/nobita-tham-hiem-vung-dat-moi.jfif" alt="GÓA PHỤ ĐEN" title="GÓA PHỤ ĐEN"></figure>
                            <span class="status">HD</span><span class="episode"><i class="fa fa-play" aria-hidden="true"></i>Vietsub</span> 
                            <div class="icon_overlay"></div>
                            <div class="halim-post-title-box">
                                <div class="halim-post-title ">
                                    <p class="card-title fw-bold text-light">GÓA PHỤ ĐEN</p>
                                    <p class="original_title fst-italic text-light">Black Widow</p>
                                </div>
                            </div>
                        </a>
                        </div>
                    </article>
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
    </div>
    </div>
@endsection