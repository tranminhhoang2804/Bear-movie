<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
        <title>Document</title>
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
        <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Loading main css file -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <script type="text/javascript" src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
    </head>
    <body>
        <div class="container-fluid">
            <!-- header -->
            
            
            <div class="section">
                <nav class="navbar navbar-expand-lg">
                    <div class="container">
                        <a class="navbar-brand col-3" href="home.html"><img class="bear-logo" src="{{asset('img/logo.png')}}" title="Bear movie"><img class="bear-footer" src="{{asset('img/bear-footer.png')}}" title="Bear movie"></a>
                        <ul class="navbar-nav d-flex justify-content-end col-2">
                            <li class="nav-item">
                                <a class="nav-link bg-warning rounded fw-bold text-dark ps-4 pe-4" href="{{route('login')}}">Đăng nhập</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="clearfix"></div>
                <div class="container title-group">
                <p class="title-text text-center">Kho phim hoạt hình, anime & cartoon không giới hạn và nhiều nội dung khác.</p>
                <p class="h3 text-center text-light">Xem ở mọi nơi, mọi lúc.</p>
                <p class="h4 text-center text-light">Bạn đã sẵn sàng chưa?</p>
                <p class="h4 d-flex justify-content-center mt-5">
                    @if (Route::has('register'))
                    <a class="button btn-submit start-button text-decoration-none bg-warning rounded fw-bold text-dark pe-5 ps-5 pt-3 pb-3" href="{{ route('register') }}">Bắt đầu</a>
                    @endif
                
                </p>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- end-header -->

            <!-- section-first -->
            <div class="section-first bg-black">
                <div class="container section-first-group d-flex justify-content-around align-items-center">
                    <div class="section-first-title text-light">
                    <h3>Thưởng thức các bộ phim trên TV của bạn.</h3>
                    <h4>Xem trên TV thông minh, Playstation, Xbox, Chromecast, Apple TV, đầu phát Blu-ray và nhiều thiết bị khác.</h4>
                    </div>
                    <img src="{{asset('img/TV.png')}}" width="50%">
                </div>
            </div>
            <div class="section-second bg-black p-5">
                <div class="section-first-title text-light d-flex justify-content-center">
                    <h1 class="fw-bolder">Các câu hỏi thường gặp?</h1>
                    </div>
                <div class="accordion accordion-flush container p-5" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed bg-dark-subtle" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          <p class="fw-bold">BEAR MOVIE là gì ?</p>
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">BEAR MOVIE là dịch vụ phát trực tuyến mang đến đa dạng các loại chương trình truyền hình, phim, anime, phim tài liệu đoạt giải thưởng và nhiều nội dung khác trên hàng nghìn thiết bị có kết nối Internet.
                            Bạn có thể xem bao nhiêu tùy thích, bất cứ lúc nào bạn muốn mà không gặp phải một quảng cáo nào – tất cả chỉ với một mức giá thấp hàng tháng. Luôn có những nội dung mới để bạn khám phá và những chương trình truyền hình, phim mới được bổ sung mỗi tuần!</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed bg-dark-subtle" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            <p class="fw-bold">Tôi có thể xem ở đâu ?</p>
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Xem mọi lúc, mọi nơi. Đăng nhập bằng tài khoản BEAR MOVIE của bạn để xem ngay trên trang web từ máy tính cá nhân, hoặc trên bất kỳ thiết bị nào có kết nối Internet và có cài đặt ứng dụng BEAR MOVIE, bao gồm TV thông minh, điện thoại thông minh, máy tính bảng, thiết bị phát đa phương tiện trực tuyến và máy chơi game.
                            <br>Bạn cũng có thể tải xuống các chương trình yêu thích bằng ứng dụng trên iOS, Android hoặc Windows 10. Vào phần nội dung đã tải xuống để xem trong khi di chuyển và khi không có kết nối Internet. Mang BEAR MOVIE theo bạn đến mọi nơi.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed bg-dark-subtle" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          <p class="fw-bold">Tôi có thể xem gì trên BEAR MOVIE ?</p>
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">BEAR MOVIE có một thư viện phong phú gồm các phim truyện, phim tài liệu, chương trình truyền hình, anime, tác phẩm giáo dục và nhiều nội dung khác dành cho cả trẻ em và người lớn. Xem không giới hạn bất cứ lúc nào bạn muốn.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed bg-dark-subtle" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
                            <p class="fw-bold">BEAR MOVIE có phù hợp với trẻ em hay không ?</p>
                          </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">Trải nghiệm BEAR MOVIE Trẻ em có sẵn trong gói dịch vụ của bạn, trao cho phụ huynh quyền kiểm soát trong khi các em có thể thưởng thức các bộ phim tại không gian riêng.
                                <br> Hồ sơ Trẻ em đi kèm tính năng kiểm soát của cha mẹ (được bảo vệ bằng mã PIN), cho phép bạn giới hạn độ tuổi cho nội dung con mình được phép xem, cũng như chặn những phim hoặc chương trình mà bạn không muốn các em nhìn thấy.</div>
                        </div>
                      </div>
                  </div>
                  <div class="container d-flex justify-content-center">
                  <a class="button btn-submit register-button text-decoration-none bg-warning rounded fw-bold text-dark pe-5 ps-5 pt-3 pb-3" href="{{ route('register') }}">Đăng ký ngay</a>
                </div>
            </div>
            <!-- end section-first -->
            <!-- footer -->
            <div class="footer bg-black p-2">
                <div class="dowload-mobile d-flex justify-content-start container">
                    <div class="row col-8 text-center">
                        <div class="col-2">
                            <a class="contact" href="#">Giới thiệu</a>
                        </div>
                        <div class="col-1">
                            <div class="vr text-light"></div>
                        </div>
                        <div class="col-2">
                            <a class="contact" href="#">Quảng cáo</a>
                        </div>
                        <div class="col-1">
                            <div class="vr text-light"></div>
                        </div>
                        <div class="col-2">
                            <a class="contact" href="#">Quyền riêng tư</a>
                        </div>
                        <div class="col-1">
                            <div class="vr text-light"></div>
                        </div>
                        <div class="col-2">
                            <a class="contact" href="#">Điều khoản</a>
                        </div>
                        <div class="col-1">
                            <div class="vr text-light"></div>
                        </div>
                    </div>
                    <div class="app col-4">
                        <span class="text-light">Tải ứng dụng tại: </span><span><img width="100rem" src="./img/google-play.png"></a></span> <span><img width="88rem" src="./img/app-store.png"></a></span>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mt-5">
                  <div class="col-7">
                    <div class="row">
                        <p class="title text-light text-center">
                        Bear Movie là dịch vụ được cung cấp bởi Công ty Cổ Phần Bear Entertainment, thành viên của Công ty Cổ Phần Giải Trí và Giáo Dục Animals (GEE.,JSC)
                        </p>
                    </div>
                  </div>
                </div>
                <div class="container copyright mt-3">
                    <p class="text-light text-center">Copyright &copy; 2023. Create by BEAR.MOVIE. Xem phim mới nhanh nhất</p>
                </div>
              </div>
            

        </div>


        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/halimtheme-core.min.js"></script>
    </body>
</html>