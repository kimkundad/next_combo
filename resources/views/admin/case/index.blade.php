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
                                                <a href="#" class="btn btn-secondary btn-sm me-2 mb-2">ก่อนการใช้</a>
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
                                                <a href="#" class="btn btn-secondary btn-sm me-2 mb-2">ก่อนการใช้</a>
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
                                                <a href="#" class="btn btn-secondary btn-sm me-2 mb-2">ก่อนการใช้</a>
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
                                                <a href="#" class="btn btn-secondary btn-sm me-2 mb-2">ก่อนการใช้</a>
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
                                                <a href="#" class="btn btn-secondary btn-sm me-2 mb-2">ก่อนการใช้</a>
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
                                                <a href="#" class="btn btn-secondary btn-sm me-2 mb-2">ก่อนการใช้</a>
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
                                                <a href="#" class="btn btn-secondary btn-sm me-2 mb-2">ก่อนการใช้</a>
                                                <a href="#" class="btn btn-secondary btn-sm me-2 mb-2">หลังการใช้</a>
                                                <a href="#" class="btn btn-secondary btn-sm me-2 mb-2">เพิ่มเติม</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                8
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




@stop('scripts')
