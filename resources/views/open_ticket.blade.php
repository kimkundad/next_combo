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
.select2-selection--multiple:after{
 content:"";
 position:absolute;
 right:10px;
 top:15px;
 width:0;
 height:0;
 border-left: 5px solid transparent;
 border-right: 5px solid transparent;
 border-top: 5px solid #888;
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

            

            <form class="" role="form" method="POST" action="{{ url('post_open_ticket') }}" enctype="multipart/form-data">
                <div class="p-26">


                    {{ csrf_field() }}
                    <h2 class="text-md text-highlight fs-18">ก่อนการใช้งานผลิตภัณฑ์</h2>
                    <div class="d-flex">
                        <div class="master_upload1">
                            <input type="file" name="img[]" id="file_upload_id1" style="display:none" onchange="preview()" accept="image/png, image/gif, image/jpeg">
                            <img src="{{ url('img/upload_img.jpg') }}" id="icon_upload1" alt="upload_img" onclick="a_upload1()" style="height: 105px; width: 105px">
                            <span onclick="del_img1()" class="btn btn-raised btn-wave btn-icon btn-rounded mb-2 btn-active-color-primary" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x mx-1"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                            </span>
                        </div>
                        <div id="master_upload2" class="master_upload1 hidden">
                            <input type="file" name="img[]" id="file_upload_id2" style="display:none" onchange="preview2()" accept="image/png, image/gif, image/jpeg">
                            <img src="{{ url('img/upload_img.jpg') }}" id="icon_upload2" alt="upload_img" onclick="a_upload2()" style="height: 105px; width: 105px">
                            <span  onclick="del_img2()" class="btn btn-raised btn-wave btn-icon btn-rounded mb-2 btn-active-color-primary" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x mx-1"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                            </span>
                        </div>
                        
                        <div id="master_upload3" class="master_upload1 hidden">
                            <input type="file" name="img[]" id="file_upload_id3" style="display:none" onchange="preview3()" accept="image/png, image/gif, image/jpeg">
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
                        <a  data-toggle="modal" data-target="#modal" class="mb-0 ex-red">
                            คลิก เพื่อดูตัวอย่างรูปถ่าย
                        </a>
                    </div>
                    <div class="box-height-10"></div>

                    @error('img')
                    <div class="alert alert-warning" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                        <span class="mx-2">กรุณาอัพโหลดรูปภาพ</span>
                    </div>
                    @enderror

                    @error('name_ticket')
                    <div class="alert alert-warning" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                        <span class="mx-2">กรุณาป้อนชื่อสัตว์เลี้ยง</span>
                    </div>
                    @enderror

                    @error('age_ticket')
                    <div class="alert alert-warning" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                        <span class="mx-2">กรุณาป้อนอายุ</span>
                    </div>
                    @enderror

                    @error('sex_ticket')
                    <div class="alert alert-warning" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                        <span class="mx-2">กรุณาป้อนเพศ</span>
                    </div>
                    @enderror

                    @error('breed_ticket')
                    <div class="alert alert-warning" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                        <span class="mx-2">กรุณาป้อนพันธุ์</span>
                    </div>
                    @enderror

                    @error('disease_ticket')
                    <div class="alert alert-warning" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                        <span class="mx-2">กรุณาเลือกโรคประจำตัว</span>
                    </div>
                    @enderror

                    @error('objective_ticket')
                    <div class="alert alert-warning" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                        <span class="mx-2">กรุณาเลือกจุดประสงค์การใช้งาน</span>
                    </div>
                    @enderror
                    
                    <h2 class="text-md text-highlight fs-18">ประวัติสัตว์เลี้ยง</h2>
                    <div class="form-group">
                        <label class="text-muted">ชื่อสัตว์เลี้ยง</label>
                        <input type="text" class="form-control shadow-none" name="name_ticket" placeholder="รายละเอียด">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-muted">อายุ</label>
                            <select class="form-control shadow-none" name="age_ticket">
                                <option>0-6 เดือน</option>
                                <option>6 เดือน–1 ปี</option>
                                <option>1-3 ปี</option>
                                <option>3-7 ปี</option>
                                <option>7-10 ปี</option>
                                <option>10-15 ปี</option>
                                <option>15-20 ปี</option>
                                <option>มากกว่า 20 ปี</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-muted">เพศ</label>
                            <select class="form-control shadow-none" name="sex_ticket">
                                <option>เพศผู้ ยังไม่ทำหมัน</option>
                                <option>เพศผู้ ทำหมันแล้ว</option>
                                <option>เพศเมีย ยังไม่ทำหมัน</option>
                                <option>เพศเมีย ทำหมันแล้ว</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="text-muted">พันธุ์</label>
                        <select onchange="val2()" id="breed" name="breed_ticket" class="form-control shadow-none js-example-basic-single2">
                        </select>
                    </div>
                    <div id="input_breed" class="form-group hidden">
                        <label class="text-muted">ระบุพันธ์ กรณีเลือก อื่นๆ (โปรดระบุ)</label>
                        <input type="text" class="form-control shadow-none" name="other_breed_ticket" placeholder="โปรดระบุพันธ์">
                    </div>
                    <div class="form-group">
                        <label class="text-muted">โรคประจำตัว (เลือกได้หลายข้อ)</label>
                        <select onchange="diseasex()" id="disease" name="disease_ticket[]" multiple="multiple" class="form-control shadow-none js-disease" data-placeholder="ไม่มีโรคประจำตัว">
                            <option>ไม่มีโรคประจำตัว</option>
                            <option>โรคผิวหนัง</option>
                            <option>โรคตับ</option>
                            <option>โรคไต</option>
                            <option>โรคทางระบบประสาท</option>
                            <option>โรคหัวใจ</option>
                            <option>โรคระบบต่อมไร้ท่อ</option>
                            <option>โรคทางเดินหายใจ</option>
                            <option>โรคทางเดินอาหาร</option>
                            <option>โรคตา</option>
                            <option>โรคระบบสืบพันธุ์</option>
                            <option>อื่นๆ (โปรดระบุ)</option>
                        </select>
                    </div>
                    <div id="input_disease" class="form-group hidden">
                        <label class="text-muted">โรคประจำตัว กรณีเลือก อื่นๆ (โปรดระบุ)</label>
                        <input type="text" class="form-control shadow-none" name="other_disease_ticket" placeholder="โปรดระบุโรคประจำตัว">
                    </div>
                    <div class="form-group">
                        <label class="text-muted">จุดประสงค์การใช้งาน (เลือกได้หลายข้อ)</label>
                        <div class="select-box choose-position">
                            <select onchange="val()" id="objective" name="objective_ticket[]" multiple="multiple" class="form-control js-example-basic-single shadow-none" data-placeholder="ใช้สำหรับป้องกันปรสิตทั่วไป">
                                <option>ใช้สำหรับป้องกันปรสิตทั่วไป</option>
                                <option>ใช้รักษาเห็บ</option>
                                <option>ใช้รักษาหมัด</option>
                                <option>ใช้รักษาไรหู</option>
                                <option>ใช้รักษาไรขี้เรื้อนหน้า</option>
                                <option>ใช้รักษาเหา</option>
                                <option>ใช้สำหรับรักษาปรสิตภายนอกอื่นๆ</option>
                                <option>ใช้สำหรับถ่ายพยาธิ</option>
                                <option>ใช้ป้องกันพยาธิหนอนหัวใจ</option>
                                <option>อื่นๆ (โปรดระบุ)</option>
                            </select>
                        </div>
                    </div>
                    <div id="input_othor" class="form-group hidden">
                        <label class="text-muted">จุดประสงค์การใช้งาน กรณีเลือก อื่นๆ (โปรดระบุ)</label>
                        <input type="text" class="form-control shadow-none" name="other_objective_ticket" placeholder="โปรดระบุจุดประสงค์การใช้งาน">
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-green btn-block" >
                            บันทึกข้อมูล
                        </button>
                    </div>
            </div>
            </form>
            

            <div class="box-height-20"></div>
            <div class="box-height-20"></div>
            
        </div>
    </div>
</div>

<!-- .modal -->
<div id="modal" class="modal fade" data-backdrop="true">
    <div class="modal-dialog ">
        <div class="modal-content ">
            <div class="modal-header ">
                <div class="modal-title text-md fs-18">ตัวอย่างรูปถ่าย</div>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <img src="{{ url('img/cat_broken.jpg') }}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">ปิด</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>
<!-- / .modal -->

@endsection

@section('scripts')

<script>
    // Your data
    var data = `Abyssinian
    Aegean
    American Bobtail
    American Curl
    American Ringtail
    American Shorthair
    American Wirehair
    Aphrodite Giant
    Arabian Mau
    Asian
    Asian Semi-longhair
    Australian Mist
    Balinese
    Bambino
    Bengal
    Birman
    Bombay
    Brazilian Shorthair
    British Longhair
    British Shorthair
    Burmese
    Burmilla
    California Spangled
    Chantilly-Tiffany
    Chartreux
    Chausie
    Colorpoint Shorthair
    Cornish Rex
    Cymric, Manx Longhair or Long-haired Manx
    Cyprus
    Devon Rex
    Domestic short hair
    Donskoy or Don Sphynx
    Dragon Li or Chinese Li Hua
    Dwelf
    Egyptian Mau
    European Shorthair
    Exotic Shorthair
    Foldex
    German Rex
    Havana Brown
    Highlander
    Himalayan or Colorpoint Persian
    Japanese Bobtail
    Javanese or Colorpoint Longhair
    Kanaani
    Khao Manee
    Kinkalow
    Korat
    Korean Bobtail
    Korn Ja or Konja
    Kurilian Bobtail or Kuril Islands Bobtail
    Lambkin
    LaPerm
    Lykoi
    Maine Coon
    Manx
    Mekong Bobtail
    Minskin
    Minuet
    Munchkin
    Nebelung
    Neva Masquerade (colorpoint Siberian)
    Norwegian Forest Cat
    Ocicat
    Ojos Azules
    Oriental Bicolor/Longhair/Shorthair
    Persian
    Peterbald
    Pixie-bob
    Ragamuffin or Liebling (obsolete)
    Ragdoll
    Raas
    Russian Blue
    Russian White, Russian Black and Russian Tabby
    Sam Sawet
    Savannah
    Scottish Fold
    Selkirk Rex
    Serengeti
    Siamese
    Siberian or Siberian Forest Cat
    Singapura
    Snowshoe
    Sokoke
    Somali
    Sphynx
    Suphalak
    Wichien Maat
    Thai Lilac, Thai Blue Point and Thai Lilac Point
    Tonkinese
    Toybob
    Toyger
    Turkish Angora
    Turkish Van or Turkish Vankedisi
    Ukrainian Levkoy
    York Chocolate
    อื่นๆ (โปรดระบุ)`;

    // Split data by newline character
    var dataArray = data.split('\n');

    // Get the select element
    var selectElement = document.querySelector('.js-example-basic-single2');

    // Loop through data and add options to select element
    dataArray.forEach(function(item) {
        var option = document.createElement('option');
        option.value = item.trim(); // Trim any leading or trailing whitespace
        option.text = item.trim();
        selectElement.appendChild(option);
    });
</script>



<script>

function val2() {
    d1 = document.getElementById("breed").value;
    if(d1 == 'อื่นๆ (โปรดระบุ)'){
        document.getElementById("input_breed").classList.remove("hidden");
    }else{
        document.getElementById("input_breed").classList.add("hidden");
    }
}

    $(document).ready(function() {
        $('.js-example-basic-single').select2({
            dropdownParent: $(".choose-position")
        });
        $('.js-example-basic-single2').select2();

        $('.js-disease').select2();


    });

    function diseasex() {
console.log('Disease')
// d = document.getElementById("objective").value;
var array_disease = $(".js-disease").val();
var value_disease = 'อื่นๆ (โปรดระบุ)';

if (array_disease.includes(value_disease)) {
    document.getElementById("input_disease").classList.remove("hidden");
} else {
    document.getElementById("input_disease").classList.add("hidden");
}

}

function val() {

    // d = document.getElementById("objective").value;
    var array1 = $(".js-example-basic-single").val();
    var value1 = 'อื่นๆ (โปรดระบุ)';

    if (array1.includes(value1)) {
        document.getElementById("input_othor").classList.remove("hidden");
    } else {
        document.getElementById("input_othor").classList.add("hidden");
    }

}

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