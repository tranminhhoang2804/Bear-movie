@extends('layouts.user_log')

@section('content')


<div class="container">
    <div class="row justify-content-center">
            <section class="vh-100" style="background-color: none;">
              <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                  <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                      <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                          <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                            <div class="text-center">
                                <a href="{{route('welcome')}}">
                                    <img src="{{asset('img/logo.png')}}"
                                      style="width: 120px; border-radius:20px ;" alt="logo">
                                </a>
                            </div>

                            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">ĐĂNG KÝ</p>

                            <form class="mx-1 mx-md-4" method="POST" action="{{ route('register') }}">
                            @csrf

                              <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                  <label class="form-label" for="name">Tên người dùng</label>
                                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Vui lòng nhập tên của bạn">

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                </div>
                              </div>

                              <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                  <label class="form-label" for="phone">Số điện thoại người dùng</label>
                                  <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="Vui lòng nhập số điện thoại của bạn">

                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                </div>
                              </div>

                              <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                  <label class="form-label" for="email">Email</label>
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Vui lòng nhập email của bạn">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                </div>
                              </div>

                              <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                  <label class="form-label" for="password">Mật khẩu</label>
                                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Vui lòng nhập mật khẩu của bạn">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                </div>
                              </div>

                              <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                  <label class="form-label" for="form3Example4cd">Xác nhận mật khẩu</label>
                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Vui lòng nhập lại mật khẩu để xác thực">
                                </div>
                              </div>

                              <div class="form-check d-flex justify-content-center mb-5">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                                <label class="form-check-label" for="form2Example3">
                                  Tôi đồng ý với <a href="#!">Điều khoản sử dụng</a>
                                </label>
                              </div>

                              <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3">
                                                {{ __('Đăng ký') }}
                                            </button>
                                        </div>
                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <p class="mb-0 me-2">Bạn đã có tài khoản?</p>
                              <a class="nav-link text-warning" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </div>
                            </form>

                          </div>
                          <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                              class="img-fluid" alt="Sample image">

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
    </div>
</div>
@endsection
