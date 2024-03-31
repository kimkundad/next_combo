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
                    <a>
                        <img class="img-fluid logo_website_main" src="{{ url('img/logo_head.jpg') }}" />
                    </a>
                </div>
            </div>
            <div class="p-10 border-bottom">
                <div class="text-center">
                    <h1 class="big_text_green">ACCOUNT SETTING</h1>
                    <p class="sub_text_green">แก้ไขผู้ใช้งาน</p>
                </div>
            </div>

            <div class="p-26">
                <h2 class="text-md text-highlight">ตั้งค่าบัญชีผู้ใช้งาน</h2>
                <div class="box-height-20"></div>
                <form class="" role="form" action="{{ url('create_account2') }}">
                    <div class="form-group">
                        <label>อีเมล</label>
                        <input type="email" class="form-control shadow-none" placeholder="mail@gmail.com">
                    </div>
                    <div class="form-group">
                        <label>Old Password</label>
                        <input type="password" class="form-control shadow-none" placeholder="รหัสผู้ใช้">
                    </div>
                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password" class="form-control shadow-none" placeholder="รหัสผู้ใช้">
                    </div>
                    <div class="radio mt-2">
                        <label class="ui-check ">
                            <input type="radio" name="a">
                            <i class="dark-white"></i>
                            One lowercase character
                        </label>
                    </div>
                    <div class="radio mt-2">
                        <label class="ui-check ">
                            <input type="radio" name="b">
                            <i class="dark-white"></i>
                            One uppercase character
                        </label>
                    </div>
                    <div class="radio mt-2">
                        <label class="ui-check text-success">
                            <input type="radio" name="c" checked>
                            <i class="dark-white"></i>
                            One special character
                        </label>
                    </div>
                    <div class="radio mt-2">
                        <label class="ui-check">
                            <input type="radio" name="d" >
                            <i class="dark-white"></i>
                            8 characters minimum
                        </label>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-green btn-block" onclick="window.location.href='{{ url('create_account2') }}'">
                            เปลี่ยนแปลง
                        </button>
                    </div>
                    
                </form>
            </div>
            
            <form class="" role="form" action="{{ url('create_complete') }}">
                <div class="p-26">


                        <h2 class="text-md text-highlight">ข้อมูลส่วนตัว</h2>
                        <div class="box-height-10"></div>
                        <div class="form-group">
                            <p class="text-muted mb-0">คำนำหน้า</p>
                            <div class="box-height-10"></div>
                            <div class="btn-group btn-group-toggle mb-0" data-toggle="buttons">
                                <label class="btn active">
                                    <input type="radio" name="options" id="option1" checked> นายสัตวแพทย์
                                </label>
                                <label class="btn">
                                    <input type="radio" name="options" id="option2"> สัตวแพทย์หญิง
                                </label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="text-muted">ชื่อ</label>
                                <input type="text" class="form-control shadow-none" placeholder="รายละเอียด">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-muted">นามสกุล</label>
                                <input type="text" class="form-control shadow-none" placeholder="รายละเอียด">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-muted">เบอร์โทรศัพย์</label>
                            <input type="text" class="form-control shadow-none" placeholder="รายละเอียด">
                        </div>
                        <div class="form-group">
                            <label class="text-muted">VET ID</label>
                            <input type="text" class="form-control shadow-none" placeholder="01-xxxx/xxxx">
                        </div>
                        
                        <div class="box-height-10"></div>
                        <div class="box-height-10"></div>
                    <h2 class="text-md text-highlight">สถานที่ทำงาน</h2>
                    <div class="box-height-10"></div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-muted">ประเภท</label>
                            <select class="form-control shadow-none">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-muted">จังหวัด</label>
                            <select class="form-control shadow-none">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="text-muted">ชื่อสถานที่ทำงาน</label>
                        <input type="text" class="form-control shadow-none" placeholder="โปรดระบุสถานที่">
                    </div>
                    <div class="form-group">
                        <label class="text-muted">เลือกผู้แทนที่ดูแลท่าน</label>
                        <select class="form-control shadow-none">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-green btn-block" onclick="window.location.href='{{ url('create_account3') }}'">
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

@stop('scripts')