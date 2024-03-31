@extends('layouts.template')


@section('title')
Test
@stop

@section('stylesheet')

<style>
    .ui-check {
  font-size: 15px;
}
.ui-check > i {
    width: 18px;
    height: 18px;
}
</style>

@stop('stylesheet')

@section('content')

<div id="main">
    <div class="chakra-container-page">
        <div id="content" >
            <div class="header_logo">
                <div class="d-flex justify-content-center">
                    <a>
                        <img class="img-fluid logo_website_main" src="{{ url('img/logo_head.jpg') }}" />
                    </a>
                </div>
            </div>
            <div class="p-10 border-bottom">
                <div class="text-center">
                    <h1 class="big_text_green">CREATE ACCOUNTS</h1>
                    <p class="sub_text_green">สร้างบัญชีผู้ใช้งาน</p>
                </div>
            </div>
            
            <div class="p-26">
                <h2 class="text-md text-highlight">สร้างบัญชีผู้ใช้งาน</h2>
                <div class="box-height-20"></div>
                <form class="" role="form" action="{{ url('create_account2') }}">
                    <div class="form-group">
                        <label>อีเมล</label>
                        <input type="email" class="form-control shadow-none" placeholder="mail@gmail.com">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control shadow-none" placeholder="รหัสผู้ใช้">
                    </div>
                    <div class="radio mt-2">
                        <label class="ui-check ">
                            <input type="radio" name="a">
                            <i class="dark-white"></i>
                            One lowercase character
                        </label>
                    </div>
                    <div class="radio mt-2">
                        <label class="ui-check ">
                            <input type="radio" name="b">
                            <i class="dark-white"></i>
                            One uppercase character
                        </label>
                    </div>
                    <div class="radio mt-2">
                        <label class="ui-check text-success">
                            <input type="radio" name="c" checked>
                            <i class="dark-white"></i>
                            One special character
                        </label>
                    </div>
                    <div class="radio mt-2">
                        <label class="ui-check">
                            <input type="radio" name="d" >
                            <i class="dark-white"></i>
                            8 characters minimum
                        </label>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-green btn-block" onclick="window.location.href='{{ url('create_account2') }}'">
                            สร้างบัญชีใช้งาน
                        </button>
                    </div>
                    
                </form>
            </div>
            

            <div class="box-height-20"></div>
            <div class="box-height-20"></div>
            
        </div>
    </div>
</div>


@endsection

@section('scripts')

@stop('scripts')