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
                        <img class="img-fluid logo_website_main" src="{{ url('img/logo_head.jpg') }}" />
                    </a>
                </div>
            </div>
            <div class="p-10 border-bottom">
                <div class="text-center">
                    <h1 class="big_text_green">REGISTER</h1>
                    <p class="sub_text_green">ลงทะเบียนผู้ใช้งาน </p>
                </div>
            </div>
            
            <form class="" role="form" method="POST" action="{{ url('create_user_profile') }}">
                @csrf
                <div class="p-26">
                        <h2 class="text-md text-highlight">ข้อมูลส่วนตัว</h2>
                        <div class="box-height-10"></div>
                        <div class="form-group">
                            <p class="text-muted mb-0">คำนำหน้า</p>
                            <div class="box-height-10"></div>
                            <div class="btn-group btn-group-toggle mb-0" data-toggle="buttons">
                                <label class="btn active">
                                    <input type="radio" name="ser" value="นายสัตวแพทย์" id="option1" checked> นายสัตวแพทย์
                                </label>
                                <label class="btn">
                                    <input type="radio" name="ser" value="สัตวแพทย์หญิง" id="option2"> สัตวแพทย์หญิง
                                </label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="text-muted">ชื่อ</label>
                                <input type="text" name="fname" class="form-control shadow-none" placeholder="รายละเอียด">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-muted">นามสกุล</label>
                                <input type="text" name="lname" class="form-control shadow-none" placeholder="รายละเอียด">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-muted">เบอร์โทรศัพย์</label>
                            <input type="text" name="phone" class="form-control shadow-none" placeholder="รายละเอียด">
                        </div>
                        <div class="form-group">
                            <label class="text-muted">VET ID</label>
                            <input type="text" name="code_user" value="{{ Auth::user()->code_user }}" class="form-control shadow-none" placeholder="01-xxxx/xxxx">
                        </div>
                        
                        <div class="box-height-10"></div>
                        <div class="box-height-10"></div>
                    <h2 class="text-md text-highlight">สถานที่ทำงาน</h2>
                    <div class="box-height-10"></div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-muted">ประเภท</label>
                            <select class="form-control shadow-none" name="clinic_type">
                                <option value="คลินิก">คลินิก</option>
                                <option value="โรงพยาบาลสัตว์">โรงพยาบาลสัตว์</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-muted">จังหวัด</label>
                            <select class="form-control js-example-basic-single" name="province">
                                @isset($provinces)
                                    @foreach ($provinces as $item)
                                        <option value="{{ $item->province }}">{{ $item->province }}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="text-muted">ชื่อสถานที่ทำงาน</label>
                        <input type="text" class="form-control shadow-none" name="address" placeholder="โปรดระบุสถานที่">
                    </div>
                    <div class="form-group">
                        <label class="text-muted">เลือกผู้แทนที่ดูแลท่าน</label>
                        <select onchange="val()" id="doctor" class="form-control js-example-basic-single2 shadow-none" name="representative">
                            <option>หมออิ๋ม</option>
                            <option>หมอรุ้ง</option>
                            <option>หมออาย</option>
                            <option>หมอบีม อรุณทิพย์</option>
                            <option>หมอเบนซ์</option>
                            <option>หมอนุ่น</option>
                            <option>หมอดิว</option>
                            <option>หมอป้อมแป้ม</option>
                            <option>หมอแจม</option>
                            <option>หมอหวาน</option>
                            <option>หมอวิว</option>
                            <option>หมอพิ้นช์</option>
                            <option>หมอเบล</option>
                            <option>หมอบีม กมลวรรณ</option>
                            <option>หมอมิ้ว</option>
                            <option>หมอแต้ม</option>
                            <option>หมอโจ๊ก</option>
                            <option>หมอเอิน</option>
                            <option>หมอเปตอง</option>
                            <option>อื่นๆ (โปรดระบุ)</option>
                        </select>
                    </div>
                    <div id="input_othor" class="form-group hidden">
                        <label class="text-muted">โปรดระบุผู้แทนที่ดูแลท่าน กรณีเลือก อื่นๆ (โปรดระบุ)</label>
                        <input type="text" name="representative2" class="form-control shadow-none" placeholder="โปรดระบุผู้แทนที่ดูแลท่าน">
                    </div>
                    <div class="box-height-10"></div>
                    <div class="mt-3">
                        <button class="btn btn-green btn-block" type="submit">
                            ลงทะเบียน
                        </button>
                    </div>
            </div>
            </form>
            

            <div class="box-height-20"></div>
            <div class="box-height-20"></div>
            
        </div>
    </div>
</div>


@endsection

@section('scripts')


<script>
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
    $('.js-example-basic-single2').select2();
});

function val() {
    d = document.getElementById("doctor").value;
    if(d == 'อื่นๆ (โปรดระบุ)'){
        document.getElementById("input_othor").classList.remove("hidden");
    }else{
        document.getElementById("input_othor").classList.add("hidden");
    }
}


</script>

@stop('scripts')