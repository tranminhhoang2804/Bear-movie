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

	<body class="body_main">
        @if(Auth::check())
			<div class="container-fluid">
            <!-- header -->
            <nav class="navbar navbar-expand-lg movie-header sticky-top">
                <div class="container">
                    <a class="navbar-brand col-3" href="{{route('homepage')}}"><img class="bear-logo img-thumbnail" src="{{asset('img/bear_logo.jpg')}}" title="Bear movie"><img class="bear-footer" src="{{asset('img/bear-footer.png')}}" title="Bear movie"></a>
                    <form class="d-flex col-5 gap-2" action="{{route('tim-kiem')}}" method="GET">
                        <input class="form-control" type="text" name="search" id="timkiem" placeholder="Search" autocomplete="off">
                        <button class="btn btn-warning text-dark fw-bold">Search</button>
                    </form>
                    <ul class="navbar-nav d-flex justify-content-end col-1 gap-2">
                        <li class="nav-item">
                             <p class="text-light">{{Auth::user()->name}}</p>
                             <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <input type="submit" class="btn btn-danger btn-sm" value="logout" />
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="clearfix"></div>
            <!-- end-header -->

            <!-- menu -->
            <div class="menu-item">
                <ul class="nav justify-content-center">
                	@foreach($category as $key => $cate)
	                    <li class="nav-item">
	                    <a class="nav-link text-warning" title="{{$cate->title}}" href="{{route('category',$cate->slug)}}">{{$cate->title}}</a>
	                    </li>
                   	@endforeach
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-warning" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Thể loại</a>
                        <ul class="dropdown-content">
                        	@foreach($genre as $key => $gen)
                        		<li>
                        			<a class="text-warning" title="{{$gen->title}}" href="{{route('genre',$gen->slug)}}">{{$gen->title}}</a>
                        		</li>
                        	@endforeach
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-warning" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Quốc gia</a>
                        <ul class="dropdown-content">
                        	@foreach($country as $key => $count)
                        <li><a class="text-warning" title="{{$count->title}}" href="{{route('country',$count->slug)}}">{{$count->title}}</a></li>
                        	@endforeach
                     
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-warning" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Năm</a>
                        <ul class="dropdown-content">
                        	@for($year=2000; $year<=2023;$year++)
                        		<li><a class="text-warning" title="{{$year}}" href="{{url('nam/'.$year)}}">{{$year}}</a></li>
                   			@endfor
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- end-menu -->

            <div class="clearfix"></div>
{{-- ---------------------------------------------------------------------------------- --}}
				@yield('content')
{{-- ---------------------------------------------------------------------------------- --}}
			<div class="footer mt-5">
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
                        <span class="text-light">Tải ứng dụng tại: </span><span><a href="#"><img width="100rem" src="{{asset('img/google-play.png')}}"></a></span> <span><a href="#"><img width="88rem" src="{{asset('img/app-store.png')}}"></a></span>
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

		</div> <!-- #site-content -->
            @else
            @yield('content_login')
            @endif
		<script type="text/javascript" src="{{asset("js/bootstrap.min.js")}}"></script>		
		<script type="text/javascript" src="{{asset("js/owl.carousel.min.js")}}"></script>
		<script type="text/javascript" src="{{asset("js/halimtheme-core.min.js")}}"></script>
		<script type="text/javascript">
            $(document).ready(function(){
                $('#timkiem').keyup(function(){
                    $('#result').html('');
                    var search = $('#timkiem').val();
                    if(search!=''){
                        var expression=new RegExp(search,"i");
                        $.getJSON('/json/movies.json',function(data){
                            $.each(data,function(key,value){
                                if(value.title.search(expression)!=-1||value.description.search(expression)!=-1){
                                    $('#result').css('display','inherit');
                                    $('#result').append('<li style="cursor:pointer" class="list-group-item"><img src="/uploads/movie/'+value.image+'"height="40" width="40"/>'+value.title+'<br/>|<span>'+value.description+'</span></li>');
                                }
                            });
                        });
                    }
                });
                $('#result').on('click','li',function(){
                    var click_text=$(this).text().split('|');
                    $('#timkiem').val($.trim(click_text[0]));
                    $('#result').html('');
                });
            })   
        </script>
	</body>

</html>