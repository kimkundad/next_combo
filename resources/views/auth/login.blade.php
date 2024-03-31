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
            @error('email')
            <div class="alert alert-warning" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                <span class="mx-2">{{ $message }}</span>
            </div>
            @enderror

            <form data-plugin="parsley" data-option="{}" method="POST" action="{{ route('login') }}">
                <div class="p-26 ">
                    {{ csrf_field() }}
                    <h2 class="text-md text-highlight fs-20">เข้าใจงานระบบ</h2>
                    <div class="box-height-10"></div>
                    <div class="form-group">
                        <label class="text-dark">Username</label>
                        <input type="text" name="email" value="{{ old('email') }}" class="form-control shadow-none" placeholder="อีเมล" required>
                    </div>
                    <div class="form-group">
                        <label class="text-dark">Password</label>
                        <input type="Password" name="password" class="form-control shadow-none" placeholder="********" required>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-green btn-block" >
                            เข้าใช้งาน
                        </button>
                    </div>
                    <div class="box-height-10"></div>
                    <div class="box-height-20"></div>
                    <div class="text-center">
                        <a href="{{ route('password.request') }}">
                            <h2 class=" text-md text-muted fs-18">ลืมรหัสผ่านการใช้งาน</h2>
                        </a>
                    </div>
                    
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