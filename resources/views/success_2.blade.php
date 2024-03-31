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
            <div class="header_logo">
                <div class="d-flex justify-content-center">
                    <a>
                        <img class="img-fluid logo_website_main" src="{{ url('img/logo_head.jpg') }}" />
                    </a>
                </div>
            </div>
            <div class="p-18 border-bottom ">
                <div class="d-flex justify-content-between">

                    <div>
                        <a href="{{ url('case_list') }}" class="text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left mx-2"><polyline points="15 18 9 12 15 6"></polyline></svg>
                        </a>
                    </div>

                    <div class="text-center">
                        <h1 class="big_text_green">CASE REPORT</h1>
                    </div>

                    <div></div>

                </div>
            </div>
            <div class="box-height-20"></div>
            <div class="p-26 text-center">
                <div class="d-flex justify-content-center">
                    <img class="img-fluid w-280 h-280" src="{{ url('img/success_create.png') }}" />
                </div>
                <div class="box-height-20"></div>
                <h2 class=" text-md text-muted fs-18">ปิดเคสเสร็จสมบูรณ์</h2>
                <div class="box-height-20"></div>
                <div class="box-height-20"></div>
                <div class="mt-3">
                    <button class="btn btn-green btn-block" onclick="window.location.href='{{ url('case_list') }}'">
                        กลับสู่หน้ารายการหลัก
                    </button>
                </div>
            </div>
            
            

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