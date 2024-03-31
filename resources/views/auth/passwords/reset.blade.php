@extends('layouts.template')


@section('title')
Test
@stop

@section('stylesheet')

@stop('stylesheet')

<style>
    .ui-check {
  font-size: 15px;
}
.ui-check > i {
    width: 18px;
    height: 18px;
}
</style>

@section('content')

<div id="main">
    <div class="chakra-container-page">
        <div id="content" >
            <div>
                <img src="{{ url('img/Login.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="box-height-20"></div>

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-warning" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                    <span class="mx-2">{{ $error }}</span>
                </div>
                @endforeach
            @endif

            @error('email')
            <div class="alert alert-warning" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                <span class="mx-2">{{ $message }}</span>
            </div>
            @enderror

            @error('password')
            <div class="alert alert-warning" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                <span class="mx-2">{{ $message }}</span>
            </div>
            @enderror

            <form method="POST" action="{{ route('password.update') }}">
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="p-26 ">
                    {{ csrf_field() }}
                    <h2 class="text-md text-highlight fs-20">ตั้งรหัสผ่านใหม่</h2>
                    <div class="box-height-10"></div>
                    <div class="form-group">
                        <label class="text-dark">Username</label>
                        <input type="email" name="email" value="{{ $email ?? old('email') }}" class="form-control shadow-none" placeholder="อีเมล" required>
                    </div>
                    <div class="form-group">
                        <label class="text-dark">Password</label>
                        <input type="Password" name="password" class="form-control shadow-none" placeholder="new-password" required>
                    </div>
                    <div class="form-group">
                        <label class="text-dark">Confirm Password</label>
                        <input type="Password" name="password_confirmation" class="form-control shadow-none" placeholder="new-password" required>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-green btn-block" >
                            Reset Password
                        </button>
                    </div>
                    <div class="box-height-10"></div>
                    <div class="box-height-20"></div>
                    
                </div>
            </form>
            
            

            <div class="box-height-20"></div>
            <div class="box-height-20"></div>
            <div class="box-height-20"></div>
            <div class="box-height-20"></div>
            <div class="box-height-20"></div>
            <div class="box-height-20"></div>
            <div class="box-height-20"></div>
            <div class="box-height-20"></div>
            <div class="box-height-20"></div>

            
            
        </div>
    </div>
</div>


@endsection

@section('scripts')


@stop('scripts')