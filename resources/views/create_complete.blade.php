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
                    <a href="{{ url('/case_list') }}">
                        <img class="img-fluid logo_website_main" src="{{ url('img/logo_head.png') }}" />
                    </a>
                </div>
            </div>
            <div class="p-10 border-bottom">
                <div class="text-center">
                    <h1 class="big_text_green">REGISTER</h1>
                    <p class="sub_text_green">ลงทะเบียนผู้ใช้งาน</p>
                </div>
            </div>
            <div class="box-height-20"></div>
            <div class="p-26">
                <div class="d-flex justify-content-center">
                        <img class="img-fluid w-280 h-280" src="{{ url('img/success_create.png') }}" />
                </div>
                <div class="text-center">
                    <h2 class="text-md text-highlight">ลงทะเบียนเสร็จสมบูรณ์</h2>
                </div>
                <div class="box-height-20"></div>
                    <div class="mt-3">
                        <button class="btn btn-green btn-block" onclick="window.location.href='{{ url('case_list') }}'">
                            รับชมวีดีโอ NEXT COMBO
                        </button>
                    </div>
            </div>
            

            <div class="box-height-20"></div>
            <div class="box-height-20"></div>
            
        </div>
    </div>
</div>


@endsection

@section('scripts')

@stop('scripts')