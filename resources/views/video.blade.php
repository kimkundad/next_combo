@extends('layouts.template')


@section('title')
Test
@stop

@section('stylesheet')

@stop('stylesheet')
<link href="https://vjs.zencdn.net/8.10.0/video-js.css" rel="stylesheet">
<style>
    .ui-check {
  font-size: 15px;
}
.ui-check > i {
    width: 18px;
    height: 18px;
}
</style>

@section('content')

<div id="main">
    <div class="chakra-container-page">
        <div id="content" >
            <div class="header_logo">
                <div class="d-flex justify-content-center">

                        <img class="img-fluid logo_website_main" src="{{ url('img/logo_head.png') }}" />


                </div>
            </div>
            <div class="p-18 border-bottom ">
                <div class="d-flex justify-content-center">

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

                </div>
            </div>
            <div class="p-26 text-center">
                <div class="d-flex justify-content-center">
                    {{-- <video id="VisaChipCardVideo" style="min-width: 446px; max-width: 660px;"  controls>
                        <source src="https://kimspace2.sgp1.cdn.digitaloceanspaces.com/next_combo/v3Cut_Final_2024_BI_VDO_NexGard_Combo.mp4" style="min-width: 446px; max-width: 660px;" type="video/mp4">
                        <!--Browser does not support <video> tag --> cover_video.jpg
                      </video> --}}
                      <video id="myPlayer" class="video-js"
                        controls preload="auto"style="min-width: 446px; height:251px; max-width: 660px;"
                        poster="{{ url('img/cover_video_2.jpg') }}"
                        >
                    <source src="https://kimspace2.sgp1.cdn.digitaloceanspaces.com/next_combo/v3Cut_Final_2024_BI_VDO_NexGard_Combo.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="box-height-20"></div>
                <div>Time Played: <span id="timePlayed">0</span> วินาที</div>
                <h2 class=" text-md text-green fs-20 fb-x">รับชมวิดีโอ NEXT COMBO</h2>
                <p class=" mb-0 fs-16" style="margin-top: 2px;">เมื่อเข้าสู่ระบบครั้งแรก <br> หลังจากนั้นระบบจะนำท่านเข้าสู่การใช้งานระบบ</p>
                <a href="{{ url('/case_list') }}" id="pass_video" class="btn btn-green btn-block mt-3 text-white hidden" >
                    เริ่มต้นใช้งาน
                </a>
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

<script src='https://vjs.zencdn.net/8.10.0/video.min.js'></script>

<script>
    const video = document.getElementById('myPlayer');
    const timePlayedElement = document.getElementById('timePlayed');
    let timer = 0;
    video.addEventListener('timeupdate', function() {
      timePlayedElement.textContent = video.currentTime.toFixed(0);
      console.log('video --> ',video.currentTime.toFixed(0));
      timer =  video.currentTime.toFixed(0);
    });

    function view_stack(){

        if(timer == 28){
            $("#pass_video").removeClass("hidden")
          //  window.location.href = '{{ url('/case_list') }}';
        }
        if(timer >= 30){
          //  $("#pass_video").removeClass("hidden")
            window.location.href = '{{ url('/case_list') }}';
        }
    }

      setInterval(view_stack, 1000);

  </script>
@stop('scripts')
