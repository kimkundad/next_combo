@extends('layouts.template')


@section('title')
    Test
@stop

@section('stylesheet')

    <style>
        .ui-check {
            font-size: 15px;
        }

        .ui-check>i {
            width: 18px;
            height: 18px;
        }
    </style>

@stop('stylesheet')

@section('content')

    <div id="main">
        <div class="chakra-container-page">
            <div id="content">
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
                <div class="p-10 border-bottom">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-column">
                            <div class="pl-5px">
                                <p class="text-green-my-case mb-0">
                                    MY CASE
                                </p>
                                <p class="text-muted-my-case mb-0">
                                    เคสของฉัน
                                </p>
                            </div>
                            <div></div>
                        </div>
                        <a href="#" onclick="lightbox_open();" style="padding-top: 4px ">
                            <div class="d-flex">
                                <div class="pt-5px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-play-circle text-muted" style="margin-right:5px">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polygon points="10 8 16 12 10 16 10 8"></polygon>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-muted mb-0 fs-19" style="margin-top: 2px;">รับชมวีดีโอ</p>
                                </div>

                            </div>
                        </a>
                        <div class="pr-5px">
                            <a href="{{ url('open_ticket') }}" class="btn mb-1 btn-green-cus text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-plus text-white"
                                    style="margin-right:8px">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                                เพิ่มเคส
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-20" style="background: rgb(234,169,90);
                background: linear-gradient(180deg, rgba(234,169,90,1) 0%, rgba(230,212,153,1) 46%, rgba(234,169,90,1) 100%);">
                    <div class="input-group">
                        <span class="input-group-append">
                            <button class="btn btn-white no-border btn-sm" type="button"
                            style="    
                            border-top: 1px solid #b4aeae !important;
                            border-bottom: 1px solid #b4aeae !important;
                            border-left: 1px solid #b4aeae !important;
                            height: 34px;
                            border-top-left-radius: 5px;
                            border-bottom-left-radius: 5px;
                            ">
                                <span class="d-flex text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg></span>
                            </button>
                        </span>
                        <input type="text" class="form-control shadow-none form-control-theme search"
                        style="
                        border-left-style: none;
                        padding-left:0px;
                        "
                            placeholder="ค้นหาเคส" required="">
                    </div>
                </div>
                <div class="text-center border-bottom p-20">
                    <p class="mb-0">เรียงตามเวลาอัพเดท
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-down mx-2">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </p>
                </div>
                <div>
                    <div class="list list-row">
                        
                        <div class="list-item border-bottom">
                            <div class="flex">
                                <p class="item-author text-color-green mb-0">Vet0001-0001</p>
                                <div class="item-mail  fs-16">
                                    จังโก้ - เอ็กซ์โซติก ช็อตแฮร์
                                </div>
                                <div class="d-flex">
                                    <div>
                                        <span class="fs-13"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> 
                                            14/09/2024
                                        </span>
                                    </div>
                                    <div class="d-flex ml-5px ">
                                        <div>
                                            <img class="img-check-green mr-5px" src="{{ url('img/checklist.jpg') }}" alt="">
                                        </div>
                                        <div>
                                            <a href="{{ url('/add_ticket') }}">
                                                <p class="fs-13 text-color-green mb-0 " style="font-size: 14px"> รายงานผลเพิ่มเติม</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right mx-2"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                
                            </div>
                        </div>
                        <div class="list-item border-bottom">
                            <div class="flex">
                                <p class="item-author text-color-green mb-0">Vet0001-0001</p>
                                <div class="item-mail  fs-16">
                                    จังโก้ - เอ็กซ์โซติก ช็อตแฮร์
                                </div>
                                <div class="d-flex">
                                    <div>
                                        <span class="fs-13"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> 
                                            14/09/2024
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="{{ url('close_ticket') }}">
                                    <img class="camera-green" src="{{ url('img/camera.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="list-item border-bottom">
                            <div class="flex">
                                <p class="item-author text-color-green mb-0">Vet0001-0001</p>
                                <div class="item-mail  fs-16">
                                    จังโก้ - เอ็กซ์โซติก ช็อตแฮร์
                                </div>
                                <div class="d-flex">
                                    <div>
                                        <span class="fs-13"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> 
                                            14/09/2024
                                        </span>
                                    </div>
                                    <div class="d-flex ml-5px ">
                                        <div>
                                            <img class="img-check-green mr-5px" src="{{ url('img/checklist.jpg') }}" alt="">
                                        </div>
                                        <div>
                                            <a href="{{ url('/add_ticket') }}">
                                                <p class="fs-13 text-color-green mb-0 " style="font-size: 14px"> รายงานผลเพิ่มเติม</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right mx-2"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                
                            </div>
                        </div>
                        <div class="list-item border-bottom">
                            <div class="flex">
                                <p class="item-author text-color-green mb-0">Vet0001-0001</p>
                                <div class="item-mail  fs-16">
                                    จังโก้ - เอ็กซ์โซติก ช็อตแฮร์
                                </div>
                                <div class="d-flex">
                                    <div>
                                        <span class="fs-13"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> 
                                            14/09/2024
                                        </span>
                                    </div>
                                    <div class="d-flex ml-5px ">
                                        <div>
                                            <img class="img-check-green mr-5px" src="{{ url('img/checklist.jpg') }}" alt="">
                                        </div>
                                        <div>
                                            <a href="{{ url('/add_ticket') }}">
                                                <p class="fs-13 text-color-green mb-0 " style="font-size: 14px"> รายงานผลเพิ่มเติม</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <img class="camera-green" src="{{ url('img/camera.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="list-item border-bottom">
                            <div class="flex">
                                <p class="item-author text-color-green mb-0">Vet0001-0001</p>
                                <div class="item-mail  fs-16">
                                    จังโก้ - เอ็กซ์โซติก ช็อตแฮร์
                                </div>
                                <div class="d-flex">
                                    <div>
                                        <span class="fs-13"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> 
                                            14/09/2024
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right mx-2"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                
                            </div>
                        </div>
                        <div class="list-item border-bottom">
                            <div class="flex">
                                <p class="item-author text-color-green mb-0">Vet0001-0001</p>
                                <div class="item-mail  fs-16">
                                    จังโก้ - เอ็กซ์โซติก ช็อตแฮร์
                                </div>
                                <div class="d-flex">
                                    <div>
                                        <span class="fs-13"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> 
                                            14/09/2024
                                        </span>
                                    </div>
                                    <div class="d-flex ml-5px ">
                                        <div>
                                            <img class="img-check-green mr-5px" src="{{ url('img/checklist.jpg') }}" alt="">
                                        </div>
                                        <div>
                                            <a href="{{ url('/add_ticket') }}">
                                                <p class="fs-13 text-color-green mb-0 " style="font-size: 14px"> รายงานผลเพิ่มเติม</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <img class="camera-green" src="{{ url('img/camera.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="list-item border-bottom">
                            <div class="flex">
                                <p class="item-author text-color-green mb-0">Vet0001-0001</p>
                                <div class="item-mail  fs-16">
                                    จังโก้ - เอ็กซ์โซติก ช็อตแฮร์
                                </div>
                                <div class="d-flex">
                                    <div>
                                        <span class="fs-13"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> 
                                            14/09/2024
                                        </span>
                                    </div>
                                    <div class="d-flex ml-5px ">
                                        <div>
                                            <img class="img-check-green mr-5px" src="{{ url('img/checklist.jpg') }}" alt="">
                                        </div>
                                        <div>
                                            <a href="{{ url('/add_ticket') }}">
                                                <p class="fs-13 text-color-green mb-0 " style="font-size: 14px"> รายงานผลเพิ่มเติม</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right mx-2"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                
                            </div>
                        </div>
                        <div class="list-item border-bottom">
                            <div class="flex">
                                <p class="item-author text-color-green mb-0">Vet0001-0001</p>
                                <div class="item-mail  fs-16">
                                    จังโก้ - เอ็กซ์โซติก ช็อตแฮร์
                                </div>
                                <div class="d-flex">
                                    <div>
                                        <span class="fs-13"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> 
                                            14/09/2024
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right mx-2"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                
                            </div>
                        </div>
                        <div class="list-item border-bottom">
                            <div class="flex">
                                <p class="item-author text-color-green mb-0">Vet0001-0001</p>
                                <div class="item-mail  fs-16">
                                    จังโก้ - เอ็กซ์โซติก ช็อตแฮร์
                                </div>
                                <div class="d-flex">
                                    <div>
                                        <span class="fs-13"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> 
                                            14/09/2024
                                        </span>
                                    </div>
                                    <div class="d-flex ml-5px ">
                                        <div>
                                            <img class="img-check-green mr-5px" src="{{ url('img/checklist.jpg') }}" alt="">
                                        </div>
                                        <div>
                                            <a href="{{ url('/add_ticket') }}">
                                                <p class="fs-13 text-color-green mb-0 " style="font-size: 14px"> รายงานผลเพิ่มเติม</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right mx-2"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                
                            </div>
                        </div>
                       

                    </div>
                </div>
                


                <div class="box-height-20"></div>
                <div class="box-height-20"></div>

            </div>
        </div>
    </div>


    <div id="light">
        <a class="boxclose" id="boxclose" onclick="lightbox_close();"></a>
        <video id="VisaChipCardVideo" style="min-width: 446px; max-width: 660px;"  controls>
            <source src="https://kimspace2.sgp1.cdn.digitaloceanspaces.com/next_combo/VDO_NexGard_Combo.mp4" style="min-width: 446px; max-width: 660px;" type="video/mp4">
            <!--Browser does not support <video> tag -->
          </video>
      </div>
      <div id="fade" onClick="lightbox_close();"></div>

@endsection

@section('scripts')

<script>
    window.document.onkeydown = function(e) {
  if (!e) {
    e = event;
  }
  if (e.keyCode == 27) {
    lightbox_close();
  }
}

function lightbox_open() {
  var lightBoxVideo = document.getElementById("VisaChipCardVideo");
  window.scrollTo(0, 0);
  document.getElementById('light').style.display = 'block';
  document.getElementById('fade').style.display = 'block';
  lightBoxVideo.play();
}

function lightbox_close() {
  var lightBoxVideo = document.getElementById("VisaChipCardVideo");
  document.getElementById('light').style.display = 'none';
  document.getElementById('fade').style.display = 'none';
  lightBoxVideo.pause();
}
</script>

@stop('scripts')
