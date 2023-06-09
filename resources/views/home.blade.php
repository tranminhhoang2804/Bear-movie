@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-start">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('XIN CHÀO !!!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Chúc ngày mới tốt lành!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
