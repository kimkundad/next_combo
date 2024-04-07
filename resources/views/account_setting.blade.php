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
.md-check > i:before {
    background-color: #D8D8D8;
}
.fs-14{
    font-size:14px
}
.md-check input[disabled]:checked + i:before {
    opacity: 0.8;
}
.green {
    background-color: #004e36;
    color: #fff;
}
</style>

@stop('stylesheet')

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
            <div class="d-flex justify-content-between p-10 border-bottom">
                <a href="{{ url('/case_list') }}" style="color:#999; padding-top: 10px; width: 51px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left mx-2"><polyline points="15 18 9 12 15 6"></polyline></svg>
                </a>
                <div class="text-center">
                    <h1 class="big_text_green">ACCOUNT SETTING</h1>
                    <p class="sub_text_green">แก้ไขผู้ใช้งาน</p>
                </div>
                <div style="width: 51px;"></div>
            </div>


            <div class="p-26">

                <h2 class="text-md text-highlight">ตั้งค่าบัญชีผู้ใช้งาน</h2>
                <div class="box-height-20"></div>
                <form class="" role="form" method="POST" action="{{ url('post_change_newpass') }}">
                    @csrf
                    <div class="form-group">
                        <label>อีเมล</label>
                        <input 
                        type="email" 
                        class="form-control shadow-none" 
                        placeholder="mail@gmail.com"
                        name="email"
                        id="email_create"
                        value="{{ Auth::user()->email }}" required
                        >
                    </div>
                    <div class="form-group">
                        <label>New Password</label>
                        <input 
                        type="password" 
                        class="form-control shadow-none" 
                        placeholder="รหัสผู้ใช้"
                        name="new_password"
                        required
                        onkeyup="open_the_door(this.value,null)"
                        onkeydown="open_the_door(this.value,null)"
                        >
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input 
                        type="password" 
                        class="form-control shadow-none" 
                        placeholder="ยืนยันรหัสผู้ใช้" 
                        name="con_password"
                        required
                        onkeyup="open_the_door(null,this.value)"
                        onkeydown="open_the_door(null,this.value)">
                    </div>
                    <div class="box-height-10"></div>
                    <h2 class="text-md fs-18 text-highlight">รหัสต้องประกอบไปด้วย :</h2>
                    <div class="radio mt-2">
                        <label class="md-check">
                            <input id="length_pass" type="checkbox" disabled checked>
                            <i class="green"></i>
                            จำนวนอักขระรวมกันไม่น้อยกว่า 8 ตัว
                         </label>
                    </div>
                    <div class="radio mt-2">
                        <label class="md-check">
                            <input id="big_pass" type="checkbox" disabled checked>
                            <i class="green"></i>
                            ตัวอักษรพิมพ์ใหญ่ (A-Z) อย่างน้อย 1 ตัว
                         </label>
                    </div>
                    <div class="radio mt-2">
                        <label class="md-check">
                            <input id="letter_pass" type="checkbox" disabled checked>
                            <i class="green"></i>
                            ตัวอักษรพิมพ์เล็ก (a-z) อย่างน้อย 1 ตัว
                         </label>
                    </div>
                    
                    <div class="radio mt-2">
                        <label class="md-check">
                            <input id="number_pass" type="checkbox" disabled >
                            <i class="green"></i>
                            ตัวเลข (0-9) อย่างน้อย 1 ตัว
                         </label>
                    </div>
                    <div class="radio mt-2">
                        <label class="md-check">
                            <input id="same_pass" type="checkbox" disabled checked>
                            <i class="green"></i>
                            รหัสผ่านกับยืนยันรหัสผ่านต้องเหมือนกัน
                         </label>
                    </div>
                    <div class="box-height-10"></div>
                    <div class="mt-3">
                        <button class="btn btn-green btn-block" id="submit_newpass">
                            เปลี่ยนแปลง
                        </button>
                    </div>
                    
                </form>
            </div>
            
            <form class="" role="form" method="POST" action="{{ url('create_user_profile2') }}">
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
                        <p class="text-muted mb-0">คำนำหน้า </p>
                        <div class="box-height-10"></div>
                        <div class="btn-group btn-group-toggle mb-0" data-toggle="buttons">
                            <label class="btn @if( Auth::user()->ser == 'นายสัตวแพทย์') active @endif">
                                <input type="radio" name="ser" value="นายสัตวแพทย์" id="option1" @if( Auth::user()->ser == 'นายสัตวแพทย์') checked @endif> นายสัตวแพทย์
                            </label>
                            <label class="btn @if( Auth::user()->ser == 'สัตวแพทย์หญิง') active @endif">
                                <input type="radio" name="ser" value="สัตวแพทย์หญิง" id="option1" @if( Auth::user()->ser == 'สัตวแพทย์หญิง') checked @endif> สัตวแพทย์หญิง
                            </label>
                            <label class="btn @if( Auth::user()->ser == 'อื่นๆ (โปรดระบุ)') active @endif">
                                <input type="radio" name="ser" value="อื่นๆ (โปรดระบุ)" id="option1" @if( Auth::user()->ser == 'อื่นๆ (โปรดระบุ)') checked @endif> อื่นๆ (โปรดระบุ)
                            </label>
                        </div>
                    </div>
                    
                    @if(Auth::user()->ser_othher == null)
                    <div id="ser_othher" class="form-group hidden">
                        <label class="text-muted">โปรดระบุคำนำหน้า กรณีเลือก อื่นๆ (โปรดระบุ)</label>
                        <input type="text" name="ser_othher" class="form-control shadow-none" value="{{ Auth::user()->ser_othher }}" placeholder="โปรดระบุคำนำหน้า">
                    </div>
                    @else
                    <div id="ser_othher" class="form-group">
                        <label class="text-muted">โปรดระบุคำนำหน้า กรณีเลือก อื่นๆ (โปรดระบุ)</label>
                        <input type="text" name="ser_othher" class="form-control shadow-none" value="{{ Auth::user()->ser_othher }}" placeholder="โปรดระบุคำนำหน้า">
                    </div>
                    @endif
      
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-muted">ชื่อ (ภาษาไทย)</label>
                            <input type="text" name="fname" value="{{ Auth::user()->fname }}" class="form-control shadow-none" placeholder="รายละเอียด" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-muted">นามสกุล (ภาษาไทย)</label>
                            <input type="text" name="lname" value="{{ Auth::user()->lname }}" class="form-control shadow-none" placeholder="รายละเอียด" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="text-muted">เบอร์โทรศัพท์</label>
                        <input type="text" name="phone" value="{{ Auth::user()->phone }}" class="form-control shadow-none" placeholder="รายละเอียด" required>
                    </div>
                    <div class="form-group">
                        <label class="text-muted">VET ID</label>
                        <input type="text" name="vet_id" value="{{ Auth::user()->vet_id }}" class="form-control shadow-none" placeholder="01-xxxx/xxxx" >
                    </div>
                        
                        <div class="box-height-10"></div>
                        <div class="box-height-10"></div>
                        <h2 class="text-md text-highlight">สถานที่ทำงาน</h2>
                        <div class="box-height-10"></div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="text-muted">ประเภท</label>
                                <select class="form-control shadow-none" name="clinic_type" required>
                                    <option value="{{ Auth::user()->clinic_type }}">{{ Auth::user()->clinic_type }}</option>
                                    <option value="คลินิก">คลินิก</option>
                                    <option value="โรงพยาบาลสัตว์">โรงพยาบาลสัตว์</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-muted">จังหวัด</label>
                                <select class="form-control js-example-basic-single" name="province" required>
                                    <option value="{{ Auth::user()->province }}">{{ Auth::user()->province }}</option>
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
                            <input type="text" class="form-control shadow-none" value="{{ Auth::user()->address }}" name="address" placeholder="โปรดระบุสถานที่">
                        </div>
                        <div class="form-group">
                            <label class="text-muted">เลือกผู้แทนที่ดูแลท่าน</label>
                            <select onchange="val()" id="doctor" class="form-control js-example-basic-single2 shadow-none" name="representative" required>
                                <option value="{{ Auth::user()->representative }}">{{ Auth::user()->representative }}</option>
                                <option>หมออิ๋ม</option>
                                <option>หมอรุ้ง</option>
                                <option>หมออาย</option>
                                <option>หมอบีม อรุณทิพย์</option>
                                <option>หมอเบนซ์</option>
                                <option>หมอนุ่น</option>
                                <option>หมอดิว</option>
                                <option>หมอป๋อมแป๋ม</option>
                                <option>หมอแจม</option>
                                <option>หมอหวาน</option>
                                <option>หมอวิว</option>
                                <option>หมอพั้นซ์</option>
                                <option>หมอเบล</option>
                                <option>หมอบีม กมลวรรณ</option>
                                <option>หมอมิ้ว</option>
                                <option>หมอแต้ม</option>
                                <option>หมอโจ๊ก</option>
                                <option>หมอเอิน</option>
                                <option>คุณซี</option>
                                <option>คุณปอ</option>
                                <option>หมอเปตอง</option>
                                <option>อื่นๆ (โปรดระบุ)</option>
                            </select>
                        </div>
                        <div id="input_othor" class="form-group 
                        @if(Auth::user()->representative !== 'อื่นๆ (โปรดระบุ)')
                         hidden
                         @else
                         @endif
                         ">
                            <label class="text-muted">โปรดระบุผู้แทนที่ดูแลท่าน กรณีเลือก อื่นๆ (โปรดระบุ)</label>
                            <input type="text" name="representative2" value="{{ Auth::user()->representative2 }}" class="form-control shadow-none" placeholder="โปรดระบุผู้แทนที่ดูแลท่าน">
                        </div>
                        <div class="box-height-10"></div>
                    <div class="mt-3">
                        <button class="btn btn-green btn-block" >
                            เปลี่ยนแปลง
                        </button>
                    </div>
                    <div class="mt-3">
                        <a class="btn btn-raised btn-wave btn-red  btn-block" href="{{ url('logout') }}" style="color:#fff">
                            ออกจากระบบ
                        </a>
                    </div>
            </div>
            </form>
            

            <div class="box-height-20"></div>
            <div class="box-height-20"></div>
            
        </div>
    </div>
</div>

<style>
    .btn-red {
    color: #ffffff;
    background-color: #f44336;
    border-color: #f44336;
    padding: 12px 0.75rem;
    font-size: 22px;
}
</style>
@endsection

@section('scripts')

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="{{ url('home/password/examples.validation2.js') }}?v{{time()}}"></script> 

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