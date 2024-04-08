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
                    <p class="sub_text_green">ลงทะเบียนผู้ใช้งาน </p>
                </div>
            </div>
            
            <form class="" role="form" method="POST" action="{{ url('create_user_profile') }}">
                @csrf
                <div class="p-26">

                    @error('ser')
                    <div class="alert alert-warning" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                        <span class="mx-2">กรุณาเลือกคำนำหน้า</span>
                    </div>
                    @enderror
                    @error('fname')
                    <div class="alert alert-warning" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                        <span class="mx-2">กรุณาป้อนชื่อจริง</span>
                    </div>
                    @enderror
                    @error('lname')
                    <div class="alert alert-warning" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                        <span class="mx-2">กรุณาป้อนนามสกุล</span>
                    </div>
                    @enderror
                    @error('phone')
                    <div class="alert alert-warning" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                        <span class="mx-2">กรุณาป้อนเบอร์โทรศัพท์</span>
                    </div>
                    @enderror
                    @error('address')
                    <div class="alert alert-warning" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                        <span class="mx-2">กรุณาป้อนชื่อสถานที่ทำงาน</span>
                    </div>
                    @enderror
                    @error('representative')
                    <div class="alert alert-warning" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                        <span class="mx-2">กรุณาเลือกผู้แทนที่ดูแลท่าน</span>
                    </div>
                    @enderror
                    

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
                                    <input type="radio" name="ser" value="สัตวแพทย์หญิง" id="option1"> สัตวแพทย์หญิง
                                </label>
                                <label class="btn">
                                    <input type="radio" name="ser" value="อื่นๆ (โปรดระบุ)" id="option1"> อื่นๆ (โปรดระบุ)
                                </label>
                            </div>
                        </div>
                        <div id="ser_othher" class="form-group hidden">
                            <label class="text-muted">โปรดระบุคำนำหน้า กรณีเลือก อื่นๆ (โปรดระบุ)</label>
                            <input type="text" name="ser_othher" class="form-control shadow-none" placeholder="โปรดระบุคำนำหน้า">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="text-muted">ชื่อ (ภาษาไทย)</label>
                                <input type="text" name="fname" class="form-control shadow-none" placeholder="รายละเอียด" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-muted">นามสกุล (ภาษาไทย)</label>
                                <input type="text" name="lname" class="form-control shadow-none" placeholder="รายละเอียด" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-muted">เบอร์โทรศัพท์</label>
                            <input type="text" name="phone" class="form-control shadow-none" placeholder="รายละเอียด" required>
                        </div>
                        <div class="form-group">
                            <label class="text-muted">VET ID</label>
                            <input type="text" name="vet_id" value="{{ Auth::user()->vet_id }}" class="form-control shadow-none" placeholder="01-xxxx/xxxx">
                        </div>
                        
                        <div class="box-height-10"></div>
                        <div class="box-height-10"></div>
                    <h2 class="text-md text-highlight">สถานที่ทำงาน</h2>
                    <div class="box-height-10"></div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-muted">ประเภท</label>
                            <select class="form-control shadow-none" name="clinic_type" required>
                                <option value="">กรุณาเลือกประเภท</option>
                                <option value="คลินิก">คลินิก</option>
                                <option value="โรงพยาบาลสัตว์">โรงพยาบาลสัตว์</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-muted">จังหวัด</label>
                            <select class="form-control js-example-basic-single" name="province" required>
                                <option value="">กรุณาเลือกจังหวัด</option>
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
                        <input type="text" class="form-control shadow-none" name="address" placeholder="โปรดระบุสถานที่" required>
                    </div>
                    <div class="form-group">
                        <label class="text-muted">เลือกผู้แทนที่ดูแลท่าน</label>
                        <select onchange="val()" id="doctor" class="form-control js-example-basic-single2 shadow-none" name="representative" required>
                            <option value="">กรุณาเลือกผู้แทนที่ดูแลท่าน</option>
                            <option value="หมออิ๋ม">หมออิ๋ม</option>
                            <option value="หมอรุ้ง">หมอรุ้ง</option>
                            <option value="หมออาย">หมออาย</option>
                            <option value="หมอบีม อรุณทิพย์">หมอบีม อรุณทิพย์</option>
                            <option value="หมอเบนซ์">หมอเบนซ์</option>
                            <option value="หมอนุ่น">หมอนุ่น</option>
                            <option value="หมอดิว">หมอดิว</option>
                            <option value="หมอป๋อมแป๋ม">หมอป๋อมแป๋ม</option>
                            <option value="หมอแจม">หมอแจม</option>
                            <option value="หมอหวาน">หมอหวาน</option>
                            <option value="หมอวิว">หมอวิว</option>
                            <option value="หมอพั้นซ์">หมอพั้นซ์</option>
                            <option value="หมอเบล">หมอเบล</option>
                            <option value="หมอบีม กมลวรรณ">หมอบีม กมลวรรณ</option>
                            <option value="หมอมิ้ว">หมอมิ้ว</option>
                            <option value="หมอแต้ม">หมอแต้ม</option>
                            <option value="หมอโจ๊ก">หมอโจ๊ก</option>
                            <option value="หมอเอิน">หมอเอิน</option>
                            <option value="คุณซี">คุณซี</option>
                            <option value="คุณปอ">คุณปอ</option>
                            <option value="หมอเปตอง">หมอเปตอง</option>
                            <option value="อื่นๆ (โปรดระบุ)">อื่นๆ (โปรดระบุ)</option>
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


$('input:radio[name="ser"]').change(function() {
        if ($(this).val() == 'อื่นๆ (โปรดระบุ)') {
            document.getElementById("ser_othher").classList.remove("hidden");
            console.log('data',$(this).val() )
        } else {
            console.log('data',$(this).val() )
            document.getElementById("ser_othher").classList.add("hidden");
        }
    });



</script>

@stop('scripts')