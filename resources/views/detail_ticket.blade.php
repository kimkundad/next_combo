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
                        <h1 class="big_text_green fs-22">{{ $head->code_ticket }}</h1>
                    </div>

                    <div style="width:44px"></div>

                </div>
            </div>

            <div class="p-26">
                <div class="mb-3">
                    <ul class="nav nav-pills" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home2" role="tab" aria-controls="home" aria-selected="true">ก่อนการใช้งาน</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile" aria-selected="false">หลังการใช้งาน</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact2" role="tab" aria-controls="contact" aria-selected="false">ผลเพิ่มเติม</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content mb-4">
                    <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home-tab">
                        
                        <div >
                            <h2 class="text-md text-highlight fs-18">ก่อนการใช้งานผลิตภัณฑ์</h2>
                            <div class="d-flex">
                                <div class="img-gallery-magnific">
                                    @isset($imgf)

                                        @foreach ($imgf as $item)

                                            <div class="magnific-img">
                                                <a class="image-popup-vertical-fit" href="{{ url('images/next_combo/open_ticket/'.$item->img) }}">
                                                    <img src="{{ url('images/next_combo/open_ticket/'.$item->img) }}" id="icon_upload1"  style="height: 105px; width: 105px; border-radius: 5px;">
                                                </a>
                                            </div>
                                            
                                        @endforeach
                                        
                                    @endisset
                                    
                                </div>
                            </div>
                            <div class="box-height-20"></div>
                            
                            <h2 class="text-md text-highlight fs-16">ประวัติสัตว์เลี้ยง</h2>
                            <div class="form-group">
                                <label class="text-muted">ชื่อสัตว์เลี้ยง</label>
                                <input type="text" class="form-control shadow-none" value="{{ $open->name_ticket }}" readonly>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="text-muted">อายุ</label>
                                    <input type="text" class="form-control shadow-none" value="{{ $open->age_ticket }}" readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="text-muted">เพศ</label>
                                    <input type="text" class="form-control shadow-none" value="{{ $open->sex_ticket }}" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="text-muted">พันธุ์</label>
                                <input type="text" class="form-control shadow-none" value="{{ $open->breed_ticket }}" readonly>
                            </div>
                            @isset($open->other_breed_ticket)
                                <div id="input_breed" class="form-group">
                                    <label class="text-muted">ระบุพันธุ์ กรณีเลือก อื่นๆ (โปรดระบุ)</label>
                                    <input type="text" class="form-control shadow-none" value="{{ $open->other_breed_ticket }}" readonly>
                                </div>
                            @endisset
                            
                            <div class="form-group">
                                <label class="text-muted">โรคประจำตัว (เลือกได้หลายข้อ)</label>
                                <input type="text" class="form-control shadow-none" value="{{ $open->disease_ticket }}" readonly>
                            </div>
                            @isset($open->other_disease_ticket)
                            <div id="input_disease" class="form-group ">
                                <label class="text-muted">โรคประจำตัว กรณีเลือก อื่นๆ (โปรดระบุ)</label>
                                <input type="text" class="form-control shadow-none" value="{{ $open->other_disease_ticket }}" readonly>
                            </div>
                            @endisset
                            <div class="form-group">
                                <label class="text-muted">จุดประสงค์การใช้งาน (เลือกได้หลายข้อ)</label>
                                <div class="select-box choose-position">
                                    <input type="text" class="form-control shadow-none" value="{{ $open->objective_ticket }}" readonly>
                                </div>
                            </div>
                            @isset($open->other_objective_ticket)
                            <div id="input_othor" class="form-group ">
                                <label class="text-muted">จุดประสงค์การใช้งาน กรณีเลือก อื่นๆ (โปรดระบุ)</label>
                                <input type="text" class="form-control shadow-none" value="{{ $open->other_objective_ticket }}" readonly>
                            </div>
                            @endisset
                            <div class="box-height-20"></div>
                            <h2 class="text-md text-highlight fs-16">แบบประเมินหลังใช้งาน</h2>
                            
                            <div class="form-group">
                                <label class="" style="font-size:15px">1. กลิ่นของยาไม่เหม็นฉุน</label>
                                <select class="star-rating" name="ark1">
                                    <option value="">Select a rating</option>
                                    <option value="1" @if( $ask1->ark1 == 1) selected='selected' @endif>Excellent</option>
                                    <option value="2" @if( $ask1->ark1 == 2) selected='selected' @endif>Very Good</option>
                                    <option value="3" @if( $ask1->ark1 == 3) selected='selected' @endif>Average</option>
                                    <option value="4" @if( $ask1->ark1 == 4) selected='selected' @endif>Poor</option>
                                    <option value="5" @if( $ask1->ark1 == 5) selected='selected' @endif>Terrible</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label class="" style="font-size:15px">2. สะดวกแค่หยดไม่ต้องป้อนยา ถ่ายพยาธิ</label>
                                <select class="star-rating" name="ark2">
                                    <option value="">Select a rating</option>
                                    <option value="1" @if( $ask1->ark2 == 1) selected='selected' @endif>Excellent</option>
                                    <option value="2" @if( $ask1->ark2 == 2) selected='selected' @endif>Very Good</option>
                                    <option value="3" @if( $ask1->ark2 == 3) selected='selected' @endif>Average</option>
                                    <option value="4" @if( $ask1->ark2 == 4) selected='selected' @endif>Poor</option>
                                    <option value="5" @if( $ask1->ark2 == 5) selected='selected' @endif>Terrible</option>
                                </select>
                            </div>
        
                            <div class="form-group">
                                <label class="" style="font-size:15px">3. มั่นใจในความปลอดภัย เช่น ใช้ได้ใน แมวแม่พันธุ์ ตั้งท้อง ให้นมลูก</label>
                                <select class="star-rating" name="ark3">
                                    <option value="">Select a rating</option>
                                    <option value="1" @if( $ask1->ark3 == 1) selected='selected' @endif>Excellent</option>
                                    <option value="2" @if( $ask1->ark3 == 2) selected='selected' @endif>Very Good</option>
                                    <option value="3" @if( $ask1->ark3 == 3) selected='selected' @endif>Average</option>
                                    <option value="4" @if( $ask1->ark3 == 4) selected='selected' @endif>Poor</option>
                                    <option value="5" @if( $ask1->ark3 == 5) selected='selected' @endif>Terrible</option>
                                </select>
                            </div>
        
                            <div class="form-group">
                                <label class="" style="font-size:15px">4. ภาพรวมของโปรแกรม NEXT COMBO </label>
                                <select class="star-rating" name="ark4">
                                    <option value="">Select a rating</option>
                                    <option value="1" @if( $ask1->ark4 == 1) selected='selected' @endif>Excellent</option>
                                    <option value="2" @if( $ask1->ark4 == 2) selected='selected' @endif>Very Good</option>
                                    <option value="3" @if( $ask1->ark4 == 3) selected='selected' @endif>Average</option>
                                    <option value="4" @if( $ask1->ark4 == 4) selected='selected' @endif>Poor</option>
                                    <option value="5" @if( $ask1->ark4 == 5) selected='selected' @endif>Terrible</option>
                                </select>
                            </div>

                        </div>

                    </div>
                    <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile-tab">
                        <h2 class="text-md text-highlight fs-16">หลังการใช้งานผลิตภัณฑ์</h2>
                            <div class="d-flex">
                                <div class="img-gallery-magnific">
                                    @isset($imgb)

                                        @foreach ($imgb as $item)

                                            <div class="magnific-img">
                                                <a class="image-popup-vertical-fit2" href="{{ url('images/next_combo/close_ticket/'.$item->img) }}">
                                                    <img src="{{ url('images/next_combo/close_ticket/'.$item->img) }}" id="icon_upload1"  style="height: 105px; width: 105px; border-radius: 5px;">
                                                </a>
                                            </div>
                                            
                                        @endforeach
                                        
                                    @endisset
                                    
                                </div>
                            </div>
                            <div class="box-height-20"></div>

                            <h2 class="text-md text-highlight fs-16">แบบประเมินหลังใช้งาน</h2>
                            <div class="box-height-10"></div>
                            <div class="form-group">
                                <label class="" style="font-size:15px">1. ได้ผลตรงตามจุดประสงค์การใช้งาน</label>
                                <select class="star-rating" name="ark1">
                                    <option value="">Select a rating</option>
                                    <option value="1" @if( $ask2->ark1 == 1) selected='selected' @endif>Excellent</option>
                                    <option value="2" @if( $ask2->ark1 == 2) selected='selected' @endif>Very Good</option>
                                    <option value="3" @if( $ask2->ark1 == 3) selected='selected' @endif>Average</option>
                                    <option value="4" @if( $ask2->ark1 == 4) selected='selected' @endif>Poor</option>
                                    <option value="5" @if( $ask2->ark1 == 5) selected='selected' @endif>Terrible</option>
                                </select>
                            </div>
        
                            <div class="form-group">
                                <label class="" style="font-size:15px">2. ภาพรวมของโปรแกรม NEXT COMBO</label>
                                <select class="star-rating" name="ark2">
                                    <option value="">Select a rating</option>
                                    <option value="1" @if( $ask2->ark2 == 1) selected='selected' @endif>Excellent</option>
                                    <option value="2" @if( $ask2->ark2 == 2) selected='selected' @endif>Very Good</option>
                                    <option value="3" @if( $ask2->ark2 == 3) selected='selected' @endif>Average</option>
                                    <option value="4" @if( $ask2->ark2 == 4) selected='selected' @endif>Poor</option>
                                    <option value="5" @if( $ask2->ark2 == 5) selected='selected' @endif>Terrible</option>
                                </select>
                            </div>
        
                            <div class="form-group">
                                <label class="" style="font-size:15px">3. ข้อเสนอแนะเพิ่มเติม</label>
                                <textarea id="event-desc" class="form-control" name="detail" rows="6" placeholder="รายละเอียด..." readonly>@isset($ask2->detail){{ $ask2->detail }}@endisset</textarea>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact-tab">
                        <h2 class="text-md text-highlight fs-16">รายงานผลเพิ่มเติม</h2>
                            <div class="d-flex">
                                <div class="img-gallery-magnific">
                                    @isset($img_add)

                                        @foreach ($img_add as $item)

                                            <div class="magnific-img">
                                                <a class="image-popup-vertical-fit3" href="{{ url('images/next_combo/add_ticket/'.$item->img) }}">
                                                    <img src="{{ url('images/next_combo/add_ticket/'.$item->img) }}" id="icon_upload1"  style="height: 105px; width: 105px; border-radius: 5px;">
                                                </a>
                                            </div>
                                            
                                        @endforeach
                                        
                                    @endisset
                                    
                                </div>
                            </div>
                            <div class="box-height-20"></div>
                            <div class="form-group">
                                <label class="" style="font-size:15px">ข้อเสนอแนะเพิ่มเติม</label>
                                <textarea id="event-desc" class="form-control" name="detail" rows="6" placeholder="รายละเอียด..." readonly>@isset($add){{ $add->detail }}@endisset</textarea>
                            </div>
                    </div>
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



<script>

$(document).ready(function(){
$('.image-popup-vertical-fit').magnificPopup({
	type: 'image',
  mainClass: 'mfp-with-zoom', 
  gallery:{
			enabled:true
		},

  zoom: {
    enabled: true, 

    duration: 300, // duration of the effect, in milliseconds
    easing: 'ease-in-out', // CSS transition easing function

    opener: function(openerElement) {

      return openerElement.is('img') ? openerElement : openerElement.find('img');
  }
}

});

$('.image-popup-vertical-fit2').magnificPopup({
	type: 'image',
  mainClass: 'mfp-with-zoom', 
  gallery:{
			enabled:true
		},

  zoom: {
    enabled: true, 

    duration: 300, // duration of the effect, in milliseconds
    easing: 'ease-in-out', // CSS transition easing function

    opener: function(openerElement) {

      return openerElement.is('img') ? openerElement : openerElement.find('img');
  }
}

});

$('.image-popup-vertical-fit3').magnificPopup({
	type: 'image',
  mainClass: 'mfp-with-zoom', 
  gallery:{
			enabled:true
		},

  zoom: {
    enabled: true, 

    duration: 300, // duration of the effect, in milliseconds
    easing: 'ease-in-out', // CSS transition easing function

    opener: function(openerElement) {

      return openerElement.is('img') ? openerElement : openerElement.find('img');
  }
}

});

});
</script>

<script src="{{ url('home/star/dist/star-rating.min.js') }}"></script>

<script>

var starRatingControl = new StarRating('.star-rating',{
    maxStars: 5
});
    
</script>


@stop('scripts')