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

                            <div>
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
                                        <input type="text" id="search_name" name="search" value="{{$search}}" class="form-control form-control-solid w-400px ps-14" placeholder="ค้นหารายชื่อ รหัสใบเคส" />
                                        <button type="submit" class="btn btn-primary filter ml-3">ค้นหา</button>

                                </div>
                            </form>
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

                                                    <div class="symbol-group symbol-hover flex-nowrap">
                                                        @if(isset($item->open_tickets->img_open_tickets))
                                                            @foreach ($item->open_tickets->img_open_tickets as $img)
                                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-kt-initialized="1">
                                                                    <img alt="Pic" src="{{ url('images/next_combo/open_ticket/'.$img->img) }}">
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>

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

                                            <td class="text-end">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_{{ $item->id }}" class="btn btn-secondary btn-sm me-2 mb-2">ดูข้อมูล</a>
                                            </td>
                                        </tr>

                                        <div class="modal fade" tabindex="-1" id="kt_modal_{{ $item->id }}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title text-success">ข้อมูลของ {{ $item->code_ticket }}</h3>

                                                        <!--begin::Close-->
                                                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                        </div>
                                                        <!--end::Close-->
                                                    </div>

                                                    <div class="modal-body">
                                                        <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_{{ $item->id }}">ก่อนการใช้งาน</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_2_{{ $item->id }}">หลังการใช้งาน</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_3_{{ $item->id }}">ผลเพิ่มเติม</a>
                                                            </li>
                                                        </ul>

                                                        <div class="tab-content" id="myTabContent">
                                                            <div class="tab-pane fade show active" id="kt_tab_pane_{{ $item->id }}" role="tabpanel">

                                                                <div class="d-flex justify-content-around" style="width: 100%">

                                                                    @if(isset($item->open_tickets->img_open_tickets))
                                                                        @foreach ($item->open_tickets->img_open_tickets as $img)
                                                                            <div class="mr-15"><img src="{{ url('images/next_combo/open_ticket/'.$img->img) }}" class="img-fluid card-rounded" alt="cat"></div>
                                                                        @endforeach
                                                                    @endif

                                                                </div>
                                                                <br>
                                                                <h2 class="text-md text-highlight fs-18">ประวัติสัตว์เลี้ยง</h2>
                                                                <div class="form-group">
                                                                    <label class="text-muted">ชื่อสัตว์เลี้ยง</label>
                                                                    <input type="text" class="form-control shadow-none" value="{{ $item->open_tickets->name_ticket }}" readonly>
                                                                </div>
                                                                <div class="box-height-10"></div>
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label class="text-muted">อายุ</label>
                                                                        <input type="text" class="form-control shadow-none" value="{{ $item->open_tickets->age_ticket }}" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="text-muted">เพศ</label>
                                                                        <input type="text" class="form-control shadow-none" value="{{ $item->open_tickets->sex_ticket }}" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="box-height-10"></div>
                                                                <div class="form-group">
                                                                    <label class="text-muted">พันธุ์</label>
                                                                    <input type="text" class="form-control shadow-none" value="{{ $item->open_tickets->breed_ticket }}" readonly>
                                                                </div>
                                                                @isset($item->open_tickets->other_breed_ticket)
                                                                <div class="box-height-10"></div>
                                                                <div id="input_breed" class="form-group ">
                                                                    <label class="text-muted">ระบุพันธ์ กรณีเลือก อื่นๆ (โปรดระบุ)</label>
                                                                    <input type="text" class="form-control shadow-none" value="{{ $item->open_tickets->other_breed_ticket }}" readonly>
                                                                </div>
                                                                @endif
                                                                <div class="box-height-10"></div>
                                                                <div class="form-group">
                                                                    <label class="text-muted">โรคประจำตัว (เลือกได้หลายข้อ)</label>
                                                                    <input type="text" class="form-control shadow-none" value="{{ $item->open_tickets->disease_ticket }}" readonly>
                                                                </div>
                                                                @isset($item->open_tickets->other_disease_ticket)
                                                                <div class="box-height-10"></div>
                                                                <div id="input_disease" class="form-group ">
                                                                    <label class="text-muted">โรคประจำตัว กรณีเลือก อื่นๆ (โปรดระบุ)</label>
                                                                    <input type="text" class="form-control shadow-none" value="{{ $item->open_tickets->other_disease_ticket }}" readonly>
                                                                </div>
                                                                @endif
                                                                <div class="box-height-10"></div>
                                                                <div class="form-group">
                                                                    <label class="text-muted">จุดประสงค์การใช้งาน (เลือกได้หลายข้อ)</label>
                                                                    <input type="text" class="form-control shadow-none" value="{{ $item->open_tickets->objective_ticket }}" readonly>
                                                                </div>
                                                                @isset($item->open_tickets->other_objective_ticket)
                                                                <div class="box-height-10"></div>
                                                                <div id="input_othor" class="form-group ">
                                                                    <label class="text-muted">จุดประสงค์การใช้งาน กรณีเลือก อื่นๆ (โปรดระบุ)</label>
                                                                    <input type="text" class="form-control shadow-none" value="{{ $item->open_tickets->other_objective_ticket }}" readonly>
                                                                </div>
                                                                @endif
                                                                <br>
                                                                <h2 class="text-md text-highlight fs-18 mt-3">แบบประเมินหลังใช้งาน</h2>
                                                                <div class="box-height-10"></div>

                                                                    @isset($item->open_tickets->ask_open_tickets)
                                                                    <div class="form-group">
                                                                        <label class="" style="font-size:15px">1. กลิ่นของยาไม่เหม็นฉุน</label>
                                                                        <select class="star-rating" name="ark1">
                                                                            <option value="">Select a rating</option>
                                                                            <option value="5" @if( $item->open_tickets->ask_open_tickets->ark1 == 5) selected='selected' @endif>Excellent</option>
                                                                            <option value="4" @if( $item->open_tickets->ask_open_tickets->ark1 == 4) selected='selected' @endif>Very Good</option>
                                                                            <option value="3" @if( $item->open_tickets->ask_open_tickets->ark1 == 3) selected='selected' @endif>Average</option>
                                                                            <option value="2" @if( $item->open_tickets->ask_open_tickets->ark1 == 2) selected='selected' @endif>Poor</option>
                                                                            <option value="1" @if( $item->open_tickets->ask_open_tickets->ark1 == 1) selected='selected' @endif>Terrible</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="box-height-10"></div>
                                                                    <div class="form-group">
                                                                        <label class="" style="font-size:15px">2. สะดวกแค่หยดไม่ต้องป้อนยา ถ่ายพยาธิ</label>
                                                                        <select class="star-rating" name="ark2">
                                                                            <option value="">Select a rating</option>
                                                                            <option value="5" @if( $item->open_tickets->ask_open_tickets->ark2 == 5) selected='selected' @endif>Excellent</option>
                                                                            <option value="4" @if( $item->open_tickets->ask_open_tickets->ark2 == 4) selected='selected' @endif>Very Good</option>
                                                                            <option value="3" @if( $item->open_tickets->ask_open_tickets->ark2 == 3) selected='selected' @endif>Average</option>
                                                                            <option value="2" @if( $item->open_tickets->ask_open_tickets->ark2 == 2) selected='selected' @endif>Poor</option>
                                                                            <option value="1" @if( $item->open_tickets->ask_open_tickets->ark2 == 1) selected='selected' @endif>Terrible</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="box-height-10"></div>
                                                                    <div class="form-group">
                                                                        <label class="" style="font-size:15px">3. มั่นใจในความปลอดภัย เช่น ใช้ได้ใน แมวแม่พันธุ์ ตั้งท้อง ให้นมลูก</label>
                                                                        <select class="star-rating" name="ark3">
                                                                            <option value="">Select a rating</option>
                                                                            <option value="5" @if( $item->open_tickets->ask_open_tickets->ark3 == 5) selected='selected' @endif>Excellent</option>
                                                                            <option value="4" @if( $item->open_tickets->ask_open_tickets->ark3 == 4) selected='selected' @endif>Very Good</option>
                                                                            <option value="3" @if( $item->open_tickets->ask_open_tickets->ark3 == 3) selected='selected' @endif>Average</option>
                                                                            <option value="2" @if( $item->open_tickets->ask_open_tickets->ark3 == 2) selected='selected' @endif>Poor</option>
                                                                            <option value="1" @if( $item->open_tickets->ask_open_tickets->ark3 == 1) selected='selected' @endif>Terrible</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="box-height-10"></div>
                                                                    <div class="form-group">
                                                                        <label class="" style="font-size:15px">4. ภาพรวมของโปรแกรม NEXT COMBO</label>
                                                                        <select class="star-rating" name="ark4">
                                                                            <option value="">Select a rating</option>
                                                                            <option value="5" @if( $item->open_tickets->ask_open_tickets->ark4 == 5) selected='selected' @endif>Excellent</option>
                                                                            <option value="4" @if( $item->open_tickets->ask_open_tickets->ark4 == 4) selected='selected' @endif>Very Good</option>
                                                                            <option value="3" @if( $item->open_tickets->ask_open_tickets->ark4 == 3) selected='selected' @endif>Average</option>
                                                                            <option value="2" @if( $item->open_tickets->ask_open_tickets->ark4 == 2) selected='selected' @endif>Poor</option>
                                                                            <option value="1" @if( $item->open_tickets->ask_open_tickets->rk4 == 1) selected='selected' @endif>Terrible</option>
                                                                        </select>
                                                                    </div>
                                                                    @endisset

                                                            </div>
                                                            <div class="tab-pane fade" id="kt_tab_pane_2_{{ $item->id }}" role="tabpanel">
                                                                <div class="p-26">



                                                                    <div class="d-flex justify-content-around" style="width: 100%">

                                                                        @if(isset($item->close_tickets->img_close_tickets))
                                                                            @foreach ($item->close_tickets->img_close_tickets as $img)
                                                                                <div class="mr-15"><img src="{{ url('images/next_combo/close_ticket/'.$img->img) }}" class="img-fluid card-rounded" alt="cat"></div>
                                                                            @endforeach
                                                                        @endif

                                                                    </div>
                                                                    <br>
                                                                    <h2 class="text-md text-highlight fs-16">แบบประเมินหลังใช้งาน</h2>
                                                                    <div class="box-height-10"></div>
                                                                    @isset(($item->close_tickets->ask_close_tickets->ark1))
                                                                    <div class="form-group">
                                                                        <label class="" style="font-size:15px">1. ได้ผลตรงตามจุดประสงค์การใช้งาน</label>
                                                                        <select class="star-rating" name="ark1">
                                                                            <option value="">Select a rating</option>
                                                                            <option value="1" @if( $item->close_tickets->ask_close_tickets->ark1 == 1) selected='selected' @endif>Excellent</option>
                                                                            <option value="2" @if( $item->close_tickets->ask_close_tickets->ark1 == 2) selected='selected' @endif>Very Good</option>
                                                                            <option value="3" @if( $item->close_tickets->ask_close_tickets->ark1 == 3) selected='selected' @endif>Average</option>
                                                                            <option value="4" @if( $item->close_tickets->ask_close_tickets->ark1 == 4) selected='selected' @endif>Poor</option>
                                                                            <option value="5" @if( $item->close_tickets->ask_close_tickets->ark1 == 5) selected='selected' @endif>Terrible</option>
                                                                        </select>
                                                                    </div>
                                                                    @endisset
                                                                    @isset(($item->close_tickets->ask_close_tickets->ark2))
                                                                    <div class="form-group">
                                                                        <label class="" style="font-size:15px">2. ภาพรวมของโปรแกรม NEXT COMBO</label>
                                                                        <select class="star-rating" name="ark2">
                                                                            <option value="">Select a rating</option>
                                                                            <option value="1" @if( $item->close_tickets->ask_close_tickets->ark2 == 1) selected='selected' @endif>Excellent</option>
                                                                            <option value="2" @if( $item->close_tickets->ask_close_tickets->ark2 == 2) selected='selected' @endif>Very Good</option>
                                                                            <option value="3" @if( $item->close_tickets->ask_close_tickets->ark2 == 3) selected='selected' @endif>Average</option>
                                                                            <option value="4" @if( $item->close_tickets->ask_close_tickets->ark2 == 4) selected='selected' @endif>Poor</option>
                                                                            <option value="5" @if( $item->close_tickets->ask_close_tickets->ark2 == 5) selected='selected' @endif>Terrible</option>
                                                                        </select>
                                                                    </div>
                                                                    @endisset

                                                                    <div class="form-group">
                                                                        <label class="" style="font-size:15px">3. ข้อเสนอแนะเพิ่มเติม</label>
                                                                        <textarea id="event-desc" class="form-control" name="detail" rows="6" placeholder="รายละเอียด..." readonly>@isset($item->close_tickets->ask_close_tickets->detail){{ $item->close_tickets->ask_close_tickets->detail }}@endisset</textarea>
                                                                    </div>




                                                                </div>
                                                            </div>

                                                            <div class="tab-pane fade" id="kt_tab_pane_3_{{ $item->id }}" role="tabpanel">
                                                                <div class="p-26">

                                                                    <div class="d-flex justify-content-around" style="width: 100%">

                                                                        @if(isset($item->add_tickets->img_add_tickets))
                                                                            @foreach ($item->add_tickets->img_add_tickets as $img)
                                                                                <div class="mr-15"><img src="{{ url('images/next_combo/add_ticket/'.$img->img) }}" class="img-fluid card-rounded" alt="cat"></div>
                                                                            @endforeach
                                                                        @endif

                                                                    </div>
                                                                    <br>
                                                                    <div class="box-height-10"></div>
                                                                    <div class="form-group">
                                                                        <label class="" style="font-size:15px">ข้อเสนอแนะเพิ่มเติม</label>
                                                                        <textarea id="event-desc" class="form-control" name="detail" rows="6" placeholder="รายละเอียด..." readonly>@isset($item->add_tickets->detail){{ $item->add_tickets->detail }}@endisset</textarea>
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
                                        @endforeach
                                        @endif

                                    </tbody>
                                </table>
                                {{-- @include('admin.pagination.search', ['paginator' => $objs]) --}}


                                <ul class="pagination">
                                    <!-- Previous Button -->
                                    <li class="page-item previous {{ ($objs->currentPage() == 1) ? ' disabled' : '' }}">
                                        <a href="{{ $objs->url(1) . '&_token='.$_token.'&search='.$search.'' }}" class="page-link">
                                            <i class="previous"></i>
                                        </a>
                                    </li>

                                    <!-- Page Numbers -->
                                    @for ($i = 1; $i <= $objs->lastPage(); $i++)
                                        <li class="page-item {{ ($objs->currentPage() == $i) ? ' active' : '' }}">
                                            <a href="{{ $objs->url($i) . '&_token='.$_token.'&search='.$search.'' }}" class="page-link">{{ $i }}</a>
                                        </li>
                                    @endfor

                                    <!-- Next Button -->
                                    <li class="page-item next {{ ($objs->currentPage() == $objs->lastPage()) ? ' disabled' : '' }}">
                                        <a href="{{ $objs->url($objs->currentPage() + 1) . '&_token='.$_token.'&search='.$search.'' }}" class="page-link">
                                            <i class="next"></i>
                                        </a>
                                    </li>
                                </ul>

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




<script src="{{ url('home/star/dist/star-rating.min.js') }}"></script>

<script>

var starRatingControl = new StarRating('.star-rating',{
    maxStars: 5
});

</script>

@stop('scripts')
