@extends('admin.layouts.template')



@section('stylesheet')

<style>
    .max-w-180px{
        max-width: 180px;
    }
    .w-400px{
        width: 400px;
    }
    .ml-3{
        margin-left: 15px
    }
    .ml-15{
        margin-left: 15px
    }
    .mr-15{
        margin-right: 10px
    }
    .box-height-10{
        height: 15px;
    }
    .hidden{
        display: none
    }

    .fs-18{
        font-size: 16px
    }
</style>


@stop('stylesheet')

@section('content')

    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                    <!--end::Actions-->
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    
                 
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <!--begin::Stat-->
                                <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3 max-w-180px">
                                    <!--begin::Date-->
                                    <span class="fs-1 text-gray-700 fw-bold">{{  number_format($count_user, 0) }}</span>
                                    <!--end::Date-->
                                    <!--begin::Label-->
                                    <div class="fw-semibold text-gray-400">สมาชิกทั้งหมด</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->
                                <!--begin::Stat-->
                                <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6  mb-3 max-w-180px">
                                    <!--begin::Number-->
                                    <span class="fs-1 text-gray-700 fw-bold">
                                    <span class="ms-n1 counted">{{ number_format($ticket_order, 0) }}</span></span>
                                    <!--end::Number-->
                                    <!--begin::Label-->
                                    <div class="fw-semibold text-gray-400">เคสทั้งหมด</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->
                                <!--begin::Stat-->
                                <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6  mb-3 max-w-180px">
                                    <!--begin::Number-->
                                    <span class="fs-1 text-gray-700 fw-bold">
                                    <span class="ms-n1 counted">{{number_format($ticket_order_close, 0)}}</span></span>
                                    <!--end::Number-->
                                    <!--begin::Label-->
                                    <div class="fw-semibold text-gray-400">เคสที่ปิดไปแล้ว</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->
                            </div>

                            <div class="d-flex justify-content-between">
                                <!--begin::Search-->
                                <form action="{{url('admin/sace_search')}}" method="GET" enctype="multipart/form-data">
                                <div class="d-flex align-items-center position-relative my-1 mt-3">
                                    
                                        {{ csrf_field() }}
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                        <span class="svg-icon svg-icon-1 position-absolute ms-4 mr-3">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <input type="text" id="search_name" name="search" class="form-control form-control-solid w-400px ps-14" placeholder="ค้นหารายชื่อ รหัสใบเคส" />
                                        <button type="submit" class="btn btn-primary filter ml-3">ค้นหา</button>
                                    
                                </div>
                            </form>
                                <!--end::Search-->

                                <div class="d-flex align-items-center gap-2 gap-lg-3">
                                    <!--begin::Filter menu-->
                                     <div class="m-0">
                
                                        
                                        <!--begin::Menu toggle-->
                                        <a href="{{ route('export.csv') }}" class="btn btn-sm btn-success btn-flex" >
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                       
                                                            <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/keenthemes/metronic/docs/core/html/src/media/icons/duotune/files/fil021.svg-->
                                        <span class="svg-icon svg-icon-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z" fill="currentColor"/>
                                        <path d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z" fill="currentColor"/>
                                        <path opacity="0.3" d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z" fill="currentColor"/>
                                        </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--end::Svg Icon-->
                                        Export รายชื่อผู้ลงทะเบียนทั้งหมด</a>
                                        
                                    </div>
                                    <!--end::Filter menu-->
                                    <!--begin::Secondary button-->
                                    <!--end::Secondary button-->
                                    <!--begin::Primary button-->
                                   
                                    <!--end::Primary button-->
                                </div>
                            </div>

                            <div>
                                <br><br>
                                <table class="table align-middle table-row-dashed fs-6 gy-5 data-table mt-3" >
                                    <thead>
                                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                            <th class="min-w-50px">ลำดับ</th>
                                            <th class="min-w-100px text-center">วันที่อัพเดท </th>
                                            <th class="text-center" >รหัสใบเคส </th>
                                            <th>รายละเอียด </th>
                                            <th>ผู้บันทึก </th>
                                            <th>จัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @if(isset($objs))
                                        @foreach ($objs as $item)
                                        <tr>
                                            <td>
                                                {{($objs->currentPage() - 1) * $objs->perPage() + $loop->iteration}}
                                            </td>
                                            <td class="text-center">
                                                @if($item->close_ticket == 0)
                                                <span class="badge badge-light-warning fs-7 fw-bold">Open</span>
                                                @else
                                                <span class="badge badge-light-success fs-7 fw-bold">Close</span>
                                                @endif
                                                
                                                <span class="text-muted fw-semibold text-muted d-block fs-7 mt-2">{{ $item->created_at }}</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $item->code_ticket }}</a>
                                            </td>
                                            <td>
                                                <div class="d-flex">

                                                    {{-- <div class="symbol-group symbol-hover flex-nowrap">
                                                        @if(isset($item->open_tickets->img_open_tickets))
                                                            @foreach ($item->open_tickets->img_open_tickets as $img)
                                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-kt-initialized="1">
                                                                    <img alt="Pic" src="{{ url('images/next_combo/open_ticket/'.$img->img) }}">
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div> --}}

                                                    <div class="ml-15">
                                                        <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{ $item->name_ticket }}</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">อายุ {{ $item->open_tickets->age_ticket }} โรคประจำตัว : {{ $item->open_tickets->disease_ticket }}
                                                        @if(isset($item->open_tickets->other_breed_ticket))
                                                        {{ $item->open_tickets->other_breed_ticket }}
                                                        @endif
                                                        </span>
                                                    </div>

                                                </div>
                                                
                                            </td>
                                            <td>
                                                <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{ $item->users->fname }} {{ $item->users->lname }}</a>
                                                <span class="text-muted fw-semibold d-block fs-7">ชื่อคลีนิก {{ $item->users->address }}</span>
                                            </td>
                                            
                                            <td class="text-end" style="width: 100px;">
                                                <a href="#" data-id="{{ $item->id }}" id="get_mymodal" class="btn btn-secondary btn-sm me-2 mb-2">ดูข้อมูล</a>
                                            </td>
                                        </tr>

                                        
                                        @endforeach
                                        @endif

                                    </tbody>
                                </table>
                                @include('admin.pagination.default', ['paginator' => $objs])

                            </div>
                        </div>
                    </div>
                    

                    
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->


        
        
        
    </div>

@endsection

@section('scripts')

    <div class="modal fade" tabindex="-1" id="kt_modal_1">
        <div class="modal-dialog">
            <div id="modal-content" class="modal-content">
                
            </div>
        </div>
    </div>



<script>

$(document).on('click','#get_mymodal',function (event) {
      event.preventDefault();

      var mo_id = $(this).data('id');
      console.log('mo_id', mo_id)
      $.ajax({
        url: '{{ url('api/modal-data/') }}/'+mo_id,
        type: 'GET',
        success: function(response) {
            // Populate modal with data
            // Example assuming modal content with ID "modal-content"
            $('#modal-content').html(response);
            // Display modal
            $('#kt_modal_1').modal('show');
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });

  

});


    
</script>

@stop('scripts')
