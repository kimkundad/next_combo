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
        height: 10px;
    }
    .hidden{
        display: none
    }
</style>
<link href="{{ url('home/star/dist/star-rating.css') }}" rel="stylesheet" />

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
                                    <span class="fs-1 text-gray-700 fw-bold">150</span>
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
                                    <span class="ms-n1 counted">1,236</span></span>
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
                                    <span class="ms-n1 counted">490</span></span>
                                    <!--end::Number-->
                                    <!--begin::Label-->
                                    <div class="fw-semibold text-gray-400">เคสที่ปิดไปแล้ว</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->
                            </div>

                            <div>
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative my-1 mt-3">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                    <span class="svg-icon svg-icon-1 position-absolute ms-4 mr-3">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <input type="text" id="search_name" name="search_name" class="form-control form-control-solid w-400px ps-14" placeholder="ค้นหาลูกค้า" />
                                    <a class="btn btn-primary filter ml-3">ค้นหา</a>
                                </div>
                                <!--end::Search-->
                                
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

                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-light-warning fs-7 fw-bold">Open</span>
                                                <span class="text-muted fw-semibold text-muted d-block fs-7 mt-2">14/04/2024 14:22</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Vet0001-0001</a>
                                            </td>
                                            <td>
                                                <div class="d-flex">

                                                    <div class="symbol-group symbol-hover flex-nowrap">
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-kt-initialized="1">
                                                            <img alt="Pic" src="{{ url('admin/assets/media/avatars/300-2.jpg') }}">
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-kt-initialized="1">
                                                            <img alt="Pic" src="{{ url('admin/assets/media/avatars/300-3.jpg') }}">
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-kt-initialized="1">
                                                            <img alt="Pic" src="{{ url('admin/assets/media/avatars/300-9.jpg') }}">
                                                        </div>
                                                    </div>

                                                    <div class="ml-15">
                                                        <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">ชื่อน้องหมาที่น่ารัก</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">อายุ 16 ปี โรคประจำตัว : โรคผิวหนัง</span>
                                                    </div>

                                                </div>
                                                
                                            </td>
                                            <td>
                                                <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">ณัฐพนธ์ เชาวนศิลป</a>
                                                <span class="text-muted fw-semibold d-block fs-7">ชื่อคลีนิก VETID 1235-6666</span>
                                            </td>
                                            
                                            <td class="text-end">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_1" class="btn btn-secondary btn-sm me-2 mb-2">ก่อนการใช้</a>
                                                <a href="#" class="btn btn-secondary btn-sm me-2 mb-2">หลังการใช้</a>
                                                <a href="#" class="btn btn-secondary btn-sm me-2 mb-2">เพิ่มเติม</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-light-warning fs-7 fw-bold">Open</span>
                                                <span class="text-muted fw-semibold text-muted d-block fs-7 mt-2">14/04/2024 14:22</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Vet0001-0001</a>
                                            </td>
                                            <td>
                                                <div class="d-flex">

                                                    <div class="symbol-group symbol-hover flex-nowrap">
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-kt-initialized="1">
                                                            <img alt="Pic" src="{{ url('admin/assets/media/avatars/300-2.jpg') }}">
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-kt-initialized="1">
                                                            <img alt="Pic" src="{{ url('admin/assets/media/avatars/300-3.jpg') }}">
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-kt-initialized="1">
                                                            <img alt="Pic" src="{{ url('admin/assets/media/avatars/300-9.jpg') }}">
                                                        </div>
                                                    </div>

                                                    <div class="ml-15">
                                                        <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">ชื่อน้องหมาที่น่ารัก</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">อายุ 16 ปี โรคประจำตัว : โรคผิวหนัง</span>
                                                    </div>

                                                </div>
                                                
                                            </td>
                                            <td>
                                                <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">ณัฐพนธ์ เชาวนศิลป</a>
                                                <span class="text-muted fw-semibold d-block fs-7">ชื่อคลีนิก VETID 1235-6666</span>
                                            </td>
                                            
                                            <td class="text-end">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_1" class="btn btn-secondary btn-sm me-2 mb-2">ก่อนการใช้</a>
                                                <a href="#" class="btn btn-secondary btn-sm me-2 mb-2">หลังการใช้</a>
                                                <a href="#" class="btn btn-secondary btn-sm me-2 mb-2">เพิ่มเติม</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                3
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-light-warning fs-7 fw-bold">Open</span>
                                                <span class="text-muted fw-semibold text-muted d-block fs-7 mt-2">14/04/2024 14:22</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Vet0001-0001</a>
                                            </td>
                                            <td>
                                                <div class="d-flex">

                                                    <div class="symbol-group symbol-hover flex-nowrap">
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-kt-initialized="1">
                                                            <img alt="Pic" src="{{ url('admin/assets/media/avatars/300-2.jpg') }}">
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-kt-initialized="1">
                                                            <img alt="Pic" src="{{ url('admin/assets/media/avatars/300-3.jpg') }}">
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-kt-initialized="1">
                                                            <img alt="Pic" src="{{ url('admin/assets/media/avatars/300-9.jpg') }}">
                                                        </div>
                                                    </div>

                                                    <div class="ml-15">
                                                        <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">ชื่อน้องหมาที่น่ารัก</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">อายุ 16 ปี โรคประจำตัว : โรคผิวหนัง</span>
                                                    </div>

                                                </div>
                                                
                                            </td>
                                            <td>
                                                <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">ณัฐพนธ์ เชาวนศิลป</a>
                                                <span class="text-muted fw-semibold d-block fs-7">ชื่อคลีนิก VETID 1235-6666</span>
                                            </td>
                                            
                                            <td class="text-end">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_1" class="btn btn-secondary btn-sm me-2 mb-2">ก่อนการใช้</a>
                                                <a href="#" class="btn btn-secondary btn-sm me-2 mb-2">หลังการใช้</a>
                                                <a href="#" class="btn btn-secondary btn-sm me-2 mb-2">เพิ่มเติม</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                4
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-light-warning fs-7 fw-bold">Open</span>
                                                <span class="text-muted fw-semibold text-muted d-block fs-7 mt-2">14/04/2024 14:22</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Vet0001-0001</a>
                                            </td>
                                            <td>
                                                <div class="d-flex">

                                                    <div class="symbol-group symbol-hover flex-nowrap">
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-kt-initialized="1">
                                                            <img alt="Pic" src="{{ url('admin/assets/media/avatars/300-2.jpg') }}">
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-kt-initialized="1">
                                                            <img alt="Pic" src="{{ url('admin/assets/media/avatars/300-3.jpg') }}">
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-kt-initialized="1">
                                                            <img alt="Pic" src="{{ url('admin/assets/media/avatars/300-9.jpg') }}">
                                                        </div>
                                                    </div>

                                                    <div class="ml-15">
                                                        <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">ชื่อน้องหมาที่น่ารัก</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">อายุ 16 ปี โรคประจำตัว : โรคผิวหนัง</span>
                                                    </div>

                                                </div>
                                                
                                            </td>
                                            <td>
                                                <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">ณัฐพนธ์ เชาวนศิลป</a>
                                                <span class="text-muted fw-semibold d-block fs-7">ชื่อคลีนิก VETID 1235-6666</span>
                                            </td>
                                            
                                            <td class="text-end">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_1" class="btn btn-secondary btn-sm me-2 mb-2">ก่อนการใช้</a>
                                                <a href="#" class="btn btn-secondary btn-sm me-2 mb-2">หลังการใช้</a>
                                                <a href="#" class="btn btn-secondary btn-sm me-2 mb-2">เพิ่มเติม</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                5
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-light-warning fs-7 fw-bold">Open</span>
                                                <span class="text-muted fw-semibold text-muted d-block fs-7 mt-2">14/04/2024 14:22</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Vet0001-0001</a>
                                            </td>
                                            <td>
                                                <div class="d-flex">

                                                    <div class="symbol-group symbol-hover flex-nowrap">
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-kt-initialized="1">
                                                            <img alt="Pic" src="{{ url('admin/assets/media/avatars/300-2.jpg') }}">
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-kt-initialized="1">
                                                            <img alt="Pic" src="{{ url('admin/assets/media/avatars/300-3.jpg') }}">
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-kt-initialized="1">
                                                            <img alt="Pic" src="{{ url('admin/assets/media/avatars/300-9.jpg') }}">
                                                        </div>
                                                    </div>

                                                    <div class="ml-15">
                                                        <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">ชื่อน้องหมาที่น่ารัก</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">อายุ 16 ปี โรคประจำตัว : โรคผิวหนัง</span>
                                                    </div>

                                                </div>
                                                
                                            </td>
                                            <td>
                                                <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">ณัฐพนธ์ เชาวนศิลป</a>
                                                <span class="text-muted fw-semibold d-block fs-7">ชื่อคลีนิก VETID 1235-6666</span>
                                            </td>
                                            
                                            <td class="text-end">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_1" class="btn btn-secondary btn-sm me-2 mb-2">ก่อนการใช้</a>
                                                <a href="#" class="btn btn-secondary btn-sm me-2 mb-2">หลังการใช้</a>
                                                <a href="#" class="btn btn-secondary btn-sm me-2 mb-2">เพิ่มเติม</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                6
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-light-warning fs-7 fw-bold">Open</span>
                                                <span class="text-muted fw-semibold text-muted d-block fs-7 mt-2">14/04/2024 14:22</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Vet0001-0001</a>
                                            </td>
                                            <td>
                                                <div class="d-flex">

                                                    <div class="symbol-group symbol-hover flex-nowrap">
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-kt-initialized="1">
                                                            <img alt="Pic" src="{{ url('admin/assets/media/avatars/300-2.jpg') }}">
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-kt-initialized="1">
                                                            <img alt="Pic" src="{{ url('admin/assets/media/avatars/300-3.jpg') }}">
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-kt-initialized="1">
                                                            <img alt="Pic" src="{{ url('admin/assets/media/avatars/300-9.jpg') }}">
                                                        </div>
                                                    </div>

                                                    <div class="ml-15">
                                                        <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">ชื่อน้องหมาที่น่ารัก</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">อายุ 16 ปี โรคประจำตัว : โรคผิวหนัง</span>
                                                    </div>

                                                </div>
                                                
                                            </td>
                                            <td>
                                                <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">ณัฐพนธ์ เชาวนศิลป</a>
                                                <span class="text-muted fw-semibold d-block fs-7">ชื่อคลีนิก VETID 1235-6666</span>
                                            </td>
                                            
                                            <td class="text-end">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_1" class="btn btn-secondary btn-sm me-2 mb-2">ก่อนการใช้</a>
                                                <a href="#" class="btn btn-secondary btn-sm me-2 mb-2">หลังการใช้</a>
                                                <a href="#" class="btn btn-secondary btn-sm me-2 mb-2">เพิ่มเติม</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                7
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-light-warning fs-7 fw-bold">Open</span>
                                                <span class="text-muted fw-semibold text-muted d-block fs-7 mt-2">14/04/2024 14:22</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Vet0001-0001</a>
                                            </td>
                                            <td>
                                                <div class="d-flex">

                                                    <div class="symbol-group symbol-hover flex-nowrap">
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-kt-initialized="1">
                                                            <img alt="Pic" src="{{ url('admin/assets/media/avatars/300-2.jpg') }}">
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-kt-initialized="1">
                                                            <img alt="Pic" src="{{ url('admin/assets/media/avatars/300-3.jpg') }}">
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-kt-initialized="1">
                                                            <img alt="Pic" src="{{ url('admin/assets/media/avatars/300-9.jpg') }}">
                                                        </div>
                                                    </div>

                                                    <div class="ml-15">
                                                        <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">ชื่อน้องหมาที่น่ารัก</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">อายุ 16 ปี โรคประจำตัว : โรคผิวหนัง</span>
                                                    </div>

                                                </div>
                                                
                                            </td>
                                            <td>
                                                <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">ณัฐพนธ์ เชาวนศิลป</a>
                                                <span class="text-muted fw-semibold d-block fs-7">ชื่อคลีนิก VETID 1235-6666</span>
                                            </td>
                                            
                                            <td class="text-end">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_1" class="btn btn-secondary btn-sm me-2 mb-2">ก่อนการใช้</a>
                                                <a href="#" class="btn btn-secondary btn-sm me-2 mb-2">หลังการใช้</a>
                                                <a href="#" class="btn btn-secondary btn-sm me-2 mb-2">เพิ่มเติม</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                0
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-light-warning fs-7 fw-bold">Open</span>
                                                <span class="text-muted fw-semibold text-muted d-block fs-7 mt-2">14/04/2024 14:22</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Vet0001-0001</a>
                                            </td>
                                            <td>
                                                <div class="d-flex">

                                                    <div class="symbol-group symbol-hover flex-nowrap">
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-kt-initialized="1">
                                                            <img alt="Pic" src="{{ url('admin/assets/media/avatars/300-2.jpg') }}">
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-kt-initialized="1">
                                                            <img alt="Pic" src="{{ url('admin/assets/media/avatars/300-3.jpg') }}">
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-kt-initialized="1">
                                                            <img alt="Pic" src="{{ url('admin/assets/media/avatars/300-9.jpg') }}">
                                                        </div>
                                                    </div>

                                                    <div class="ml-15">
                                                        <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">ชื่อน้องหมาที่น่ารัก</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">อายุ 16 ปี โรคประจำตัว : โรคผิวหนัง</span>
                                                    </div>

                                                </div>
                                                
                                            </td>
                                            <td>
                                                <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">ณัฐพนธ์ เชาวนศิลป</a>
                                                <span class="text-muted fw-semibold d-block fs-7">ชื่อคลีนิก VETID 1235-6666</span>
                                            </td>
                                            
                                            <td class="text-end">
                                                <a href="#" class="btn btn-secondary btn-sm me-2 mb-2">ก่อนการใช้</a>
                                                <a href="#" class="btn btn-secondary btn-sm me-2 mb-2">หลังการใช้</a>
                                                <a href="#" class="btn btn-secondary btn-sm me-2 mb-2">เพิ่มเติม</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                9
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-light-warning fs-7 fw-bold">Open</span>
                                                <span class="text-muted fw-semibold text-muted d-block fs-7 mt-2">14/04/2024 14:22</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Vet0001-0001</a>
                                            </td>
                                            <td>
                                                <div class="d-flex">

                                                    <div class="symbol-group symbol-hover flex-nowrap">
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-kt-initialized="1">
                                                            <img alt="Pic" src="{{ url('admin/assets/media/avatars/300-2.jpg') }}">
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-kt-initialized="1">
                                                            <img alt="Pic" src="{{ url('admin/assets/media/avatars/300-3.jpg') }}">
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-kt-initialized="1">
                                                            <img alt="Pic" src="{{ url('admin/assets/media/avatars/300-9.jpg') }}">
                                                        </div>
                                                    </div>

                                                    <div class="ml-15">
                                                        <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">ชื่อน้องหมาที่น่ารัก</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">อายุ 16 ปี โรคประจำตัว : โรคผิวหนัง</span>
                                                    </div>

                                                </div>
                                                
                                            </td>
                                            <td>
                                                <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">ณัฐพนธ์ เชาวนศิลป</a>
                                                <span class="text-muted fw-semibold d-block fs-7">ชื่อคลีนิก VETID 1235-6666</span>
                                            </td>
                                            
                                            <td class="text-end">
                                                <a href="#" class="btn btn-secondary btn-sm me-2 mb-2">ก่อนการใช้</a>
                                                <a href="#" class="btn btn-secondary btn-sm me-2 mb-2">หลังการใช้</a>
                                                <a href="#" class="btn btn-secondary btn-sm me-2 mb-2">เพิ่มเติม</a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                                <div class="row"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"><div class="dataTables_length" id="kt_profile_overview_table_length"><label><select name="kt_profile_overview_table_length" aria-controls="kt_profile_overview_table" class="form-select form-select-sm form-select-solid"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"><div class="dataTables_paginate paging_simple_numbers" id="kt_profile_overview_table_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="kt_profile_overview_table_previous"><a href="#" aria-controls="kt_profile_overview_table" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="kt_profile_overview_table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_profile_overview_table" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_profile_overview_table" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item next" id="kt_profile_overview_table_next"><a href="#" aria-controls="kt_profile_overview_table" data-dt-idx="4" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div>
                            </div>
                        </div>
                    </div>
                    

                    
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->


        <div class="modal fade" tabindex="-1" id="kt_modal_1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title text-success">ก่อนการใช้งานผลิตภัณฑ์</h3>
        
                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                        </div>
                        <!--end::Close-->
                    </div>
        
                    <div class="modal-body">
                        <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_1">รายละเอียด</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_2">แบบประเมิน</a>
                            </li>
                        </ul>
                        
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">
                                
                                <div class="d-flex justify-content-around" style="width: 100%">
                                    <div class="mr-15"><img src="{{ url('img/cat/img2.jpg') }}" class="img-fluid card-rounded" alt="cat"></div>
                                    <div class="mr-15"><img src="{{ url('img/cat/img2.jpg') }}" class="img-fluid card-rounded" alt="cat"></div>
                                    <div class="mr-15"><img src="{{ url('img/cat/img2.jpg') }}" class="img-fluid card-rounded" alt="cat"></div>
                                </div>
                                <Br>
                                <h2 class="text-md text-highlight fs-18">ประวัติสัตว์เลี้ยง</h2>
                                <div class="form-group">
                                    <label class="text-muted">ชื่อสัตว์เลี้ยง</label>
                                    <input type="text" class="form-control shadow-none" placeholder="รายละเอียด">
                                </div>
                                <div class="box-height-10"></div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="text-muted">อายุ</label>
                                        <select class="form-control shadow-none">
                                            <option>0-6 เดือน</option>
                                            <option>6 เดือน – 1 ปี</option>
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
                                        <select class="form-control shadow-none">
                                            <option>เพศผู้ ยังไม่ทำหมัน</option>
                                            <option>เพศผู้ ทำหมันแล้ว</option>
                                            <option>เพศเมีย ยังไม่ทำหมัน</option>
                                            <option>เพศเมีย ทำหมันแล้ว</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="box-height-10"></div>
                                <div class="form-group">
                                    <label class="text-muted">พันธ์</label>
                                    <select id="breed" class="form-select js-example-basic-single2">
                                    </select>
                                </div>
                                <div id="input_breed" class="form-group hidden">
                                    <label class="text-muted">ระบุพันธ์ กรณีเลือก อื่นๆ (โปรดระบุ)</label>
                                    <input type="text" class="form-control shadow-none" placeholder="โปรดระบุพันธ์">
                                </div>
                                <div class="box-height-10"></div>
                                <div class="form-group">
                                    <label class="text-muted">โรคประจำตัว (เลือกได้หลายข้อ)</label>
                                    <select class="form-select" >
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
                                    <input type="text" class="form-control shadow-none" placeholder="โปรดระบุผู้แทนที่ดูแลท่าน">
                                </div>
                                <div class="box-height-10"></div>
                                <div class="form-group">
                                    <label class="text-muted">จุดประสงค์การใช้งาน (เลือกได้หลายข้อ)</label>
                                    <div class="select-box choose-position">
                                        <select class="form-select">
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
                                    <input type="text" class="form-control shadow-none" placeholder="โปรดระบุผู้แทนที่ดูแลท่าน">
                                </div>


                            </div>
                            <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel">
                                <div class="p-26">
                        
                                    <div class="box-height-10"></div>
                                    <div class="form-group">
                                        <label class="" style="font-size:15px">1. กลิ่นของยาไม่เหม็นฉุน</label>
                                        <select class="star-rating" name="ark1">
                                            <option value="">Select a rating</option>
                                            <option value="5">Excellent</option>
                                            <option value="4">Very Good</option>
                                            <option value="3">Average</option>
                                            <option value="2">Poor</option>
                                            <option value="1">Terrible</option>
                                        </select>
                                    </div>
                                    <div class="box-height-10"></div>
                                    <div class="form-group">
                                        <label class="" style="font-size:15px">2. สะดวกแค่หยดไม่ต้องป้อนยา ถ่ายพยาธิ</label>
                                        <select class="star-rating" name="ark2">
                                            <option value="">Select a rating</option>
                                            <option value="5">Excellent</option>
                                            <option value="4">Very Good</option>
                                            <option value="3">Average</option>
                                            <option value="2">Poor</option>
                                            <option value="1">Terrible</option>
                                        </select>
                                    </div>
                                    <div class="box-height-10"></div>
                                    <div class="form-group">
                                        <label class="" style="font-size:15px">3. มั่นใจในความปลอดภัย เช่น ใช้ได้ใน แมวแม่พันธุ์ ตั้งท้อง ให้นมลูก</label>
                                        <select class="star-rating" name="ark3">
                                            <option value="">Select a rating</option>
                                            <option value="5">Excellent</option>
                                            <option value="4">Very Good</option>
                                            <option value="3">Average</option>
                                            <option value="2">Poor</option>
                                            <option value="1">Terrible</option>
                                        </select>
                                    </div>
                                    <div class="box-height-10"></div>
                                    <div class="form-group">
                                        <label class="" style="font-size:15px">4. ภาพรวมของโปรแกรม NEXT COMBO</label>
                                        <select class="star-rating" name="ark4">
                                            <option value="">Select a rating</option>
                                            <option value="5">Excellent</option>
                                            <option value="4">Very Good</option>
                                            <option value="3">Average</option>
                                            <option value="2">Poor</option>
                                            <option value="1">Terrible</option>
                                        </select>
                                    </div>
                
                
                                    
                                    
                            </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">ปิดหน้าต่าง</button>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>

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

<script src="{{ url('home/star/dist/star-rating.min.js') }}"></script>

<script>

var starRatingControl = new StarRating('.star-rating',{
    maxStars: 5
});
    
</script>

@stop('scripts')
