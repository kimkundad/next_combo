@extends('layouts.template')


@section('title')
Test
@stop

@section('stylesheet')

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
            <div>
                <img src="{{ url('img/main_landing.png') }}" class="img-fluid" alt="">
            </div>
            <div class="box-height-10"></div>
            <div class="p-26">
                <div class="form-group row">
                    <div class="col-sm-12">
                        <div class="radio">
                            <label class="ui-check ui-check-lg">
                                <input type="radio" name="a">
                                <i class="dark-white"></i>
                                ยอมรับ <a href="">PDPA</a> เพื่อเข้าร่วมกิจกรรม
                            </label>
                        </div>
                        <div class="box-height-10"></div>
                        <div class="radio">
                            <label class="ui-check ui-check-lg">
                                <input type="radio" name="b">
                                <i class="dark-white"></i>
                                ท่านอนุญาตให้บริษัทฯ นำข้อมูลและภาพถ่ายที่ <span class="ml-36"> อัพโหลดไปใช้งานต่อได้ </span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <button class="btn btn-green btn-block" onclick="window.location.href='{{ url('create_account') }}'">
                        ลงทะเบียนเข้าร่วมกิจกรรม
                    </button>
                </div>
                <div class="text-center">
                    <p class="mt-3 fs-16">หรือ</p>
                </div>
                <div class="mt-3">
                    <button class="btn btn-green btn-block" onclick="window.location.href='{{ url('login') }}'">
                        เข้าใช้งาน
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