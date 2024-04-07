@extends('layouts.template')


@section('title')
Test
@stop

@section('stylesheet')

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
            <div>
                <img src="{{ url('img/main_landing.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="box-height-10"></div>
            <div class="p-26">
                <form id="contactForm">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label class="ui-check ui-check-lg">
                                <input type="checkbox" id="pdpa" name="pdpa" value="TRUE">
                                <i class="green"></i>
                                ยอมรับ <a href="https://www.spectrafordog.com/TH/privacy-policy.html" target="_blank">PDPA</a> เพื่อเข้าร่วมกิจกรรม
                            </label>
                            <div class="box-height-10"></div>
                            <label class="ui-check ui-check-lg">
                                <input type="checkbox" id="policy" name="policy" value="TRUE">
                                <i class="green"></i>
                                ท่านอนุญาตให้บริษัทฯ นำข้อมูลและภาพถ่ายที่ <span class="ml-36"> อัพโหลดไปใช้งานต่อได้ </span>
                            </label>
                        </div>
                    </div>
                </form>
                <div class="mt-3">
                    <button class="btn btn-green btn-block" id="btn_send_create" disabled>
                        ลงทะเบียนครั้งแรก
                    </button>
                </div>
                <div class="text-center">
                    <p class="mt-3 fs-16">หรือหากเคยลงทะเบียนแล้ว</p>
                </div>
                <div class="mt-3">
                    <button class="btn btn-green btn-block" onclick="window.location.href='{{ url('login') }}'">
                        เข้าสู่ระบบ
                    </button>
                </div>
            </div>
            

            <div class="box-height-20"></div>
            <div class="box-height-20"></div>
            
        </div>
    </div>
</div>


@endsection

@section('scripts')

<script>

const checkbox = document.getElementById('pdpa')

checkbox.addEventListener('change', (event) => {
  if (event.currentTarget.checked) {
    $('#btn_send_create').prop("disabled", false);
  } else {
    $('#btn_send_create').prop("disabled", true);
  }
})

$(document).on('click','#btn_send_create',function (event) {
      event.preventDefault();
      
      var form = $('#contactForm')[0];
      var formData = new FormData(form);

      var button = $('#btn_send_create');
        var oldValue = button.value;
        var isDisabled = true;

        button.attr('disabled', isDisabled);

        setTimeout(function () {
            button.value = oldValue;
            button.attr('disabled', !isDisabled);
        }, 3000)

        var pdpa = $('input#pdpa').prop('checked')
        var policy = $('input#policy').prop('checked')

        console.log('submit', pdpa)

        window.location.href = 'create_account?pdpa='+pdpa+'&policy='+policy;

});
</script>

@stop('scripts')