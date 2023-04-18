@extends('layouts.user_log')

@section('content')
<div class="container">
      <section class="h-100 gradient-form" style="background-color: none;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
                      <div class="text-center">
                        <a style="text-decoration: none;" href="{{route('welcome')}}">
                        <img src="{{asset('img/logo.png')}}"
                          style="width: 185px; border-radius:30px ;" alt="logo">
                        <h4 class="text-dark fw-bold mt-1 mb-5 pb-1">BEAR MOVIE</h4>
                        </a>
                      </div>

                      <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <p class="text-center">Vui lòng đăng nhập để sử dụng các dịch vụ của Web!</p>

                        <div class="form-outline mb-4">
                          <label class="form-label" for="form2Example11">Email</label>
                            <input id="form2Example11" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="vui lòng nhập địa chỉ email của bạn">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-outline mb-4">
                          <label class="form-label" for="form2Example22">Mật khẩu</label>
                          <input id="form2Example22" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="*********">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Ghi nhớ mật khẩu') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                              <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3">
                                    {{ __('Đăng nhập') }}
                                </button>
                              </div>
                              <div class="d-flex justify-content-center">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Quên mật khẩu?') }}
                                    </a>
                                @endif
                              </div>
                            </div>
                        </div>
                        @guest
                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <p class="mb-0 me-2">Bạn không có tài khoản?</p>
                           @if (Route::has('register'))
                              <a class="nav-link text-warning" href="{{ route('register') }}">{{ __('Đăng ký') }}</a>
                               @endif
                        </div>
                        @endguest

                      </form>

                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h4 class="mb-4 text-center">THƯỞNG THỨC TRỌN VẸN TỪNG PHÚT GIÂY</h4>
                      <p class="small mb-0 lh-lg">BEAR MOVIE là dịch vụ phát trực tuyến mang đến đa dạng các loại chương trình truyền hình, phim, anime, phim tài liệu đoạt giải thưởng và nhiều nội dung khác trên hàng nghìn thiết bị có kết nối Internet. Bạn có thể xem bao nhiêu tùy thích, bất cứ lúc nào bạn muốn mà không gặp phải một quảng cáo nào – tất cả chỉ với một mức giá thấp hàng tháng. Luôn có những nội dung mới để bạn khám phá và những chương trình truyền hình, phim mới được bổ sung mỗi tuần!</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection
