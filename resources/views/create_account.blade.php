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
                <div class="d-flex justify-content-center">
                    <a href="{{ url('/case_list') }}">
                        <img class="img-fluid logo_website_main" src="{{ url('img/logo_head.png') }}" />
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
                <form id="form" class="" role="form" method="POST" action="{{ url('create_new_user') }}">
                @csrf

                @error('email')
                <div class="alert alert-warning" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                    <span class="mx-2">{{ $message }}</span>
                </div>
                @enderror


                    <div class="form-group">
                        <label>อีเมล</label>
                        <input 
                        type="email" 
                        class="form-control shadow-none" 
                        placeholder="mail@gmail.com"
                        name="email"
                        id="email_create"
                        value="{{ old('email') }}" required
                        >
                    </div>
                    <input type="hidden" name="pdpa" value="{{ $pdpa }}">
                    <input type="hidden" name="policy" value="{{ $policy }}">
                    <div class="form-group">
                        <label>Password</label>
                        <input 
                        type="password" 
                        class="form-control shadow-none" 
                        placeholder="รหัสผู้ใช้"
                        name="password"
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
                            <input id="same_pass" type="checkbox" disabled checked>
                            <i class="green"></i>
                            รหัสผ่านกับยืนยันรหัสผ่านต้องเหมือนกัน
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
                            <input id="ch_email" type="checkbox" disabled >
                            <i class="green"></i>
                            รูปแบบอีเมลที่ถูกต้อง
                         </label>
                    </div>
                    <div class="box-height-10"></div>
                    <div class="mt-3">
                        <button id="submit_newpass" class="btn btn-green btn-block" type="submit">
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

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="{{ url('home/password/examples.validation.js') }}"></script>

@stop('scripts')