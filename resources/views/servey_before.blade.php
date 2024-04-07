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
                <div class="d-flex justify-content-between">
                    <div style="width: 51px;"></div>
                    <a href="{{ url('/case_list') }}">
                        <img class="img-fluid logo_website_main" src="{{ url('img/logo_head.png') }}" />
                    </a>
                    <a href="{{ url('/account_setting') }}" style="padding-top: 20px; color:#000">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu mx-2"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
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
            
            <form class="" role="form" method="POST" action="{{ url('post_servey_before') }}">
                {{ csrf_field() }}
                <div class="p-26">

                    @error('ark1')
                    <div class="alert alert-warning" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                        <span class="mx-2">กรุณากรอกแบบประเมิน ข้อ 1</span>
                    </div>
                    @enderror

                    @error('ark2')
                    <div class="alert alert-warning" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                        <span class="mx-2">กรุณากรอกแบบประเมิน ข้อ 2</span>
                    </div>
                    @enderror

                    @error('ark3')
                    <div class="alert alert-warning" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                        <span class="mx-2">กรุณากรอกแบบประเมิน ข้อ 3</span>
                    </div>
                    @enderror

                    @error('ark4')
                    <div class="alert alert-warning" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                        <span class="mx-2">กรุณากรอกแบบประเมิน ข้อ 4</span>
                    </div>
                    @enderror


                    <input type="hidden" name="ticket_orders_id" value="{{ $id_ticket }}">
                    <h2 class="text-md text-highlight fs-18">แบบประเมินหลังใช้งาน</h2>
                    <div class="box-height-10"></div>
                    <div class="form-group">
                        <label class="" style="font-size:15px">1. กลิ่นของยาไม่เหม็นฉุน</label>
                        <select class="star-rating" name="ark1">
                            <option value="">Select a rating</option>
                            <option value="1">Excellent</option>
                            <option value="2">Very Good</option>
                            <option value="3">Average</option>
                            <option value="4">Poor</option>
                            <option value="5">Terrible</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="" style="font-size:15px">2. สะดวกแค่หยดไม่ต้องป้อนยาถ่ายพยาธิ</label>
                        <select class="star-rating" name="ark2">
                            <option value="">Select a rating</option>
                            <option value="1">Excellent</option>
                            <option value="2">Very Good</option>
                            <option value="3">Average</option>
                            <option value="4">Poor</option>
                            <option value="5">Terrible</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="" style="font-size:15px">3. มั่นใจในความปลอดภัย เช่น ใช้ได้ใน แมวแม่พันธุ์ ตั้งท้อง ให้นมลูก</label>
                        <select class="star-rating" name="ark3">
                            <option value="">Select a rating</option>
                            <option value="1">Excellent</option>
                            <option value="2">Very Good</option>
                            <option value="3">Average</option>
                            <option value="4">Poor</option>
                            <option value="5">Terrible</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="" style="font-size:15px">4. ภาพรวมของโปรแกรม NEXT COMBO</label>
                        <select class="star-rating" name="ark4">
                            <option value="">Select a rating</option>
                            <option value="1">Excellent</option>
                            <option value="2">Very Good</option>
                            <option value="3">Average</option>
                            <option value="4">Poor</option>
                            <option value="5">Terrible</option>
                        </select>
                    </div>


                    
                    
                    <div class="mt-3">
                        <button class="btn btn-green btn-block" onclick="window.location.href='{{ url('servey_success') }}'">
                            ยืนยันข้อมูล
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