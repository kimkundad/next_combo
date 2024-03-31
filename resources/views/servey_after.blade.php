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

<link href="{{ url('home/star/dist/star-rating.css') }}" rel="stylesheet" />

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
            
            <form class="" role="form" action="{{ url('servey_success2') }}">
                <div class="p-26">
                        
                    <h2 class="text-md text-highlight fs-18">แบบประเมินหลังใช้งานผลิตภัณฑ์</h2>
                    <div class="box-height-10"></div>
                    <div class="form-group">
                        <label class="" style="font-size:15px">1. ได้ผลตรงตามจุดประสงค์การใช้งาน</label>
                        <select class="star-rating" name="ark1">
                            <option value="">Select a rating</option>
                            <option value="5">Excellent</option>
                            <option value="4">Very Good</option>
                            <option value="3">Average</option>
                            <option value="2">Poor</option>
                            <option value="1">Terrible</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="" style="font-size:15px">2. ภาพรวมของโปรแกรม NEXT COMBO</label>
                        <select class="star-rating" name="ark2">
                            <option value="">Select a rating</option>
                            <option value="5">Excellent</option>
                            <option value="4">Very Good</option>
                            <option value="3">Average</option>
                            <option value="2">Poor</option>
                            <option value="1">Terrible</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="" style="font-size:15px">3. ข้อเสนอแนะเพิ่มเติม</label>
                        <textarea id="event-desc" class="form-control" rows="6" placeholder="รายละเอียด..."></textarea>
                    </div>

                    <div class="box-height-20"></div>
                    <div class="box-height-20"></div>
                    <div class="box-height-20"></div>

                    <div class="text-center">
                        <h2 class="text-danger text-md text-highlight fs-18">โปรดตรวจสอบข้อมูล <br>
                            ของท่านให้ถูกต้องครบถ้วนก่อน<br>
                            การกดยืนยันการปิดเคส</h2>
                    </div>
                    
                    
                    <div class="mt-3">
                        <button class="btn btn-green btn-block" onclick="window.location.href='{{ url('servey_success2') }}'">
                            บันทึกข้อมูล และยืนยันการปิดเคส
                        </button>
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

<script src="{{ url('home/star/dist/star-rating.min.js') }}"></script>

<script>

var starRatingControl = new StarRating('.star-rating',{
    maxStars: 5
});
    
</script>

@stop('scripts')