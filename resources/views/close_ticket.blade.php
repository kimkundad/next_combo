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
                <div class="d-flex justify-content-between">
                    <div style="width: 51px;"></div>
                    <a href="{{ url('/case_list') }}">
                        <img class="img-fluid logo_website_main" src="{{ url('img/logo_head.jpg') }}" />
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
            
            <form class="" role="form" action="{{ url('servey_after') }}">
                <div class="p-26">
                        
                    <h2 class="text-md text-highlight fs-18">หลังการใช้งานผลิตภัณฑ์</h2>
                    <div class="d-flex">
                        <div class="master_upload1">
                            <input type="file" name="img[]" id="file_upload_id1" style="display:none" onchange="preview()">
                            <img src="{{ url('img/upload_img.jpg') }}" id="icon_upload1" alt="upload_img" onclick="a_upload1()" style="height: 105px; width: 105px">
                            <span onclick="del_img1()" class="btn btn-raised btn-wave btn-icon btn-rounded mb-2 btn-active-color-primary" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x mx-1"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                            </span>
                        </div>
                        <div id="master_upload2" class="master_upload1 hidden">
                            <input type="file" name="img[]" id="file_upload_id2" style="display:none" onchange="preview2()">
                            <img src="{{ url('img/upload_img.jpg') }}" id="icon_upload2" alt="upload_img" onclick="a_upload2()" style="height: 105px; width: 105px">
                            <span  onclick="del_img2()" class="btn btn-raised btn-wave btn-icon btn-rounded mb-2 btn-active-color-primary" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x mx-1"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                            </span>
                        </div>
                        
                        <div id="master_upload3" class="master_upload1 hidden">
                            <input type="file" name="img[]" id="file_upload_id3" style="display:none" onchange="preview3()">
                            <img src="{{ url('img/upload_img.jpg') }}" id="icon_upload3" alt="upload_img" onclick="a_upload3()" style="height: 105px; width: 105px">
                            <span onclick="del_img3()" class="btn btn-raised btn-wave btn-icon btn-rounded mb-2 btn-active-color-primary" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x mx-1"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                            </span>
                        </div>
                        <div>
                            <img src="{{ url('img/add_imgx.jpg') }}" id="clone_btn" onclick="clone_upload()" style="height: 105px; width: 105px">
                        </div>
                    </div>
                    <div>
                        <p class="mb-0 text-danger fs-10px-red">
                            อัพโหลดรูปภาพน้องแมว ให้เห็นบริเวณที่มีรอยโรค/ปรสิต เช่น ภูมิแพ้น้ำ <br>
                            ลายหมัด ไรในหู ไรขี้เรื้อนแห้ง หรือหากไม่มีรอยโรคชัดเจน สามารถ <br>
                            อัพโหลดรูปทั้งตัวของน้องแมวได้เลย (อัพโหลดได้สูงสุด 3 รูป) 
                        </p>
                        <p class="mb-0 text-danger ex-red">
                            คลิก เพื่อดูตัวอย่างรูปถ่าย
                        </p>
                    </div>
                    <div class="box-height-10"></div>
                    
                    <div class="mt-3">
                        <button class="btn btn-green btn-block" onclick="window.location.href='{{ url('servey_after') }}'">
                            บันทึกข้อมูล
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

<script>

    del_img1 = () => {
        console.log('del_img1')
        document.querySelector('#file_upload_id1').value = '';
        $("#icon_upload1").attr("src","{{ url('img/upload_img.jpg') }}");
    }
    del_img2 = () => {
        console.log('del_img2')
        document.querySelector('#file_upload_id2').value = '';
        $("#icon_upload2").attr("src","{{ url('img/upload_img.jpg') }}");
    }
    del_img3 = () => {
        console.log('del_img3')
        document.querySelector('#file_upload_id3').value = '';
        $("#icon_upload3").attr("src","{{ url('img/upload_img.jpg') }}");
    }
    var num = 1;
    function a_upload1(){
        var list=document.getElementById('file_upload_id1')
        list.click()
    }

    function a_upload2(){
        var list2=document.getElementById('file_upload_id2')
        list2.click()
    }
    function a_upload3(){
        var list3=document.getElementById('file_upload_id3')
        list3.click()
    }

    function preview() {
        icon_upload1.src=URL.createObjectURL(event.target.files[0]);
    }
    function preview2() {
            icon_upload2.src=URL.createObjectURL(event.target.files[0]);
    }
    function preview3() {
            icon_upload3.src=URL.createObjectURL(event.target.files[0]);
    }

    clone_upload = () => {
        ++num;
        if(num == 2){
            document.getElementById("master_upload2").classList.remove("hidden");
        }
        if(num == 3){
            document.getElementById("master_upload3").classList.remove("hidden");
            document.getElementById("clone_btn").classList.add("hidden");
        }
    }
    </script>

@stop('scripts')