
<!DOCTYPE html>
<html>
<head>
    <title>Laravel Ajax CRUD Tutorial Example - ItSolutionStuff.com</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('admin.layouts.inc-style')

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
</head>
<body>
            <div class="modal-header">
                <h3 class="modal-title text-success">ข้อมูลของ {{ $objs->code_ticket }}</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_{{ $objs->id }}">ก่อนการใช้งาน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_2_{{ $objs->id }}">หลังการใช้งาน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_3_{{ $objs->id }}">ผลเพิ่มเติม</a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="kt_tab_pane_{{ $objs->id }}" role="tabpanel">

                        <div class="d-flex justify-content-around" style="width: 100%">

                            @if(isset($objs->open_tickets->img_open_tickets))
                                @foreach ($objs->open_tickets->img_open_tickets as $img)
                                    <div class="mr-15"><img src="{{ url('images/next_combo/open_ticket/'.$img->img) }}" class="img-fluid card-rounded" alt="cat"></div>
                                @endforeach
                            @endif

                        </div>
                        <br>
                        <h2 class="text-md text-highlight fs-18">ประวัติสัตว์เลี้ยง</h2>
                        <div class="form-group">
                            <label class="text-muted">ชื่อสัตว์เลี้ยง</label>
                            <input type="text" class="form-control shadow-none" value="{{ $objs->open_tickets->name_ticket }}" readonly>
                        </div>
                        <div class="box-height-10"></div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="text-muted">อายุ</label>
                                <input type="text" class="form-control shadow-none" value="{{ $objs->open_tickets->age_ticket }}" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-muted">เพศ</label>
                                <input type="text" class="form-control shadow-none" value="{{ $objs->open_tickets->sex_ticket }}" readonly>
                            </div>
                        </div>
                        <div class="box-height-10"></div>
                        <div class="form-group">
                            <label class="text-muted">พันธุ์</label>
                            <input type="text" class="form-control shadow-none" value="{{ $objs->open_tickets->breed_ticket }}" readonly>
                        </div>
                        @isset($objs->open_tickets->other_breed_ticket)
                        <div class="box-height-10"></div>
                        <div id="input_breed" class="form-group ">
                            <label class="text-muted">ระบุพันธ์ กรณีเลือก อื่นๆ (โปรดระบุ)</label>
                            <input type="text" class="form-control shadow-none" value="{{ $objs->open_tickets->other_breed_ticket }}" readonly>
                        </div>
                        @endif
                        <div class="box-height-10"></div>
                        <div class="form-group">
                            <label class="text-muted">โรคประจำตัว (เลือกได้หลายข้อ)</label>
                            <input type="text" class="form-control shadow-none" value="{{ $objs->open_tickets->disease_ticket }}" readonly>
                        </div>
                        @isset($objs->open_tickets->other_disease_ticket)
                        <div class="box-height-10"></div>
                        <div id="input_disease" class="form-group ">
                            <label class="text-muted">โรคประจำตัว กรณีเลือก อื่นๆ (โปรดระบุ)</label>
                            <input type="text" class="form-control shadow-none" value="{{ $objs->open_tickets->other_disease_ticket }}" readonly>
                        </div>
                        @endif
                        <div class="box-height-10"></div>
                        <div class="form-group">
                            <label class="text-muted">จุดประสงค์การใช้งาน (เลือกได้หลายข้อ)</label>
                            <input type="text" class="form-control shadow-none" value="{{ $objs->open_tickets->objective_ticket }}" readonly>
                        </div>
                        @isset($objs->open_tickets->other_objective_ticket)
                        <div class="box-height-10"></div>
                        <div id="input_othor" class="form-group ">
                            <label class="text-muted">จุดประสงค์การใช้งาน กรณีเลือก อื่นๆ (โปรดระบุ)</label>
                            <input type="text" class="form-control shadow-none" value="{{ $objs->open_tickets->other_objective_ticket }}" readonly>
                        </div>
                        @endif
                        <br>
                        <h2 class="text-md text-highlight fs-18 mt-3">แบบประเมินหลังใช้งาน</h2>
                        <div class="box-height-10"></div>

                            @isset($objs->open_tickets->ask_open_tickets)
                            <div class="form-group">
                                <label class="" style="font-size:15px">1. กลิ่นของยาไม่เหม็นฉุน</label>
                                <select class="star-rating" name="ark1">
                                    <option value="">Select a rating</option>
                                    <option value="5" @if( $objs->open_tickets->ask_open_tickets->ark1 == 5) selected='selected' @endif>Excellent</option>
                                    <option value="4" @if( $objs->open_tickets->ask_open_tickets->ark1 == 4) selected='selected' @endif>Very Good</option>
                                    <option value="3" @if( $objs->open_tickets->ask_open_tickets->ark1 == 3) selected='selected' @endif>Average</option>
                                    <option value="2" @if( $objs->open_tickets->ask_open_tickets->ark1 == 2) selected='selected' @endif>Poor</option>
                                    <option value="1" @if( $objs->open_tickets->ask_open_tickets->ark1 == 1) selected='selected' @endif>Terrible</option>
                                </select>
                            </div>

                            <div class="box-height-10"></div>
                            <div class="form-group">
                                <label class="" style="font-size:15px">2. สะดวกแค่หยดไม่ต้องป้อนยา ถ่ายพยาธิ</label>
                                <select class="star-rating" name="ark2">
                                    <option value="">Select a rating</option>
                                    <option value="5" @if( $objs->open_tickets->ask_open_tickets->ark2 == 5) selected='selected' @endif>Excellent</option>
                                    <option value="4" @if( $objs->open_tickets->ask_open_tickets->ark2 == 4) selected='selected' @endif>Very Good</option>
                                    <option value="3" @if( $objs->open_tickets->ask_open_tickets->ark2 == 3) selected='selected' @endif>Average</option>
                                    <option value="2" @if( $objs->open_tickets->ask_open_tickets->ark2 == 2) selected='selected' @endif>Poor</option>
                                    <option value="1" @if( $objs->open_tickets->ask_open_tickets->ark2 == 1) selected='selected' @endif>Terrible</option>
                                </select>
                            </div>
                            <div class="box-height-10"></div>
                            <div class="form-group">
                                <label class="" style="font-size:15px">3. มั่นใจในความปลอดภัย เช่น ใช้ได้ใน แมวแม่พันธุ์ ตั้งท้อง ให้นมลูก</label>
                                <select class="star-rating" name="ark3">
                                    <option value="">Select a rating</option>
                                    <option value="5" @if( $objs->open_tickets->ask_open_tickets->ark3 == 5) selected='selected' @endif>Excellent</option>
                                    <option value="4" @if( $objs->open_tickets->ask_open_tickets->ark3 == 4) selected='selected' @endif>Very Good</option>
                                    <option value="3" @if( $objs->open_tickets->ask_open_tickets->ark3 == 3) selected='selected' @endif>Average</option>
                                    <option value="2" @if( $objs->open_tickets->ask_open_tickets->ark3 == 2) selected='selected' @endif>Poor</option>
                                    <option value="1" @if( $objs->open_tickets->ask_open_tickets->ark3 == 1) selected='selected' @endif>Terrible</option>
                                </select>
                            </div>
                            <div class="box-height-10"></div>
                            <div class="form-group">
                                <label class="" style="font-size:15px">4. ภาพรวมของโปรแกรม NEXT COMBO</label>
                                <select class="star-rating" name="ark4">
                                    <option value="">Select a rating</option>
                                    <option value="5" @if( $objs->open_tickets->ask_open_tickets->ark4 == 5) selected='selected' @endif>Excellent</option>
                                    <option value="4" @if( $objs->open_tickets->ask_open_tickets->ark4 == 4) selected='selected' @endif>Very Good</option>
                                    <option value="3" @if( $objs->open_tickets->ask_open_tickets->ark4 == 3) selected='selected' @endif>Average</option>
                                    <option value="2" @if( $objs->open_tickets->ask_open_tickets->ark4 == 2) selected='selected' @endif>Poor</option>
                                    <option value="1" @if( $objs->open_tickets->ask_open_tickets->rk4 == 1) selected='selected' @endif>Terrible</option>
                                </select>
                            </div>
                            @endisset

                            <br>
                        <h2 class="text-md text-highlight fs-18 mt-3">เวลา : </h2>

                    </div>
                    <div class="tab-pane fade" id="kt_tab_pane_2_{{ $objs->id }}" role="tabpanel">
                        <div class="p-26">



                            <div class="d-flex justify-content-around" style="width: 100%">

                                @if(isset($objs->close_tickets->img_close_tickets))
                                    @foreach ($objs->close_tickets->img_close_tickets as $img)
                                        <div class="mr-15"><img src="{{ url('images/next_combo/close_ticket/'.$img->img) }}" class="img-fluid card-rounded" alt="cat"></div>
                                    @endforeach
                                @endif

                            </div>
                            <br>
                            <h2 class="text-md text-highlight fs-16">แบบประเมินหลังใช้งาน</h2>
                            <div class="box-height-10"></div>
                            @isset(($objs->close_tickets->ask_close_tickets->ark1))
                            <div class="form-group">
                                <label class="" style="font-size:15px">1. ได้ผลตรงตามจุดประสงค์การใช้งาน</label>
                                <select class="star-rating" name="ark1">
                                    <option value="">Select a rating</option>
                                    <option value="1" @if( $objs->close_tickets->ask_close_tickets->ark1 == 1) selected='selected' @endif>Excellent</option>
                                    <option value="2" @if( $objs->close_tickets->ask_close_tickets->ark1 == 2) selected='selected' @endif>Very Good</option>
                                    <option value="3" @if( $objs->close_tickets->ask_close_tickets->ark1 == 3) selected='selected' @endif>Average</option>
                                    <option value="4" @if( $objs->close_tickets->ask_close_tickets->ark1 == 4) selected='selected' @endif>Poor</option>
                                    <option value="5" @if( $objs->close_tickets->ask_close_tickets->ark1 == 5) selected='selected' @endif>Terrible</option>
                                </select>
                            </div>
                            @endisset
                            @isset(($objs->close_tickets->ask_close_tickets->ark2))
                            <div class="form-group">
                                <label class="" style="font-size:15px">2. ภาพรวมของโปรแกรม NEXT COMBO</label>
                                <select class="star-rating" name="ark2">
                                    <option value="">Select a rating</option>
                                    <option value="1" @if( $objs->close_tickets->ask_close_tickets->ark2 == 1) selected='selected' @endif>Excellent</option>
                                    <option value="2" @if( $objs->close_tickets->ask_close_tickets->ark2 == 2) selected='selected' @endif>Very Good</option>
                                    <option value="3" @if( $objs->close_tickets->ask_close_tickets->ark2 == 3) selected='selected' @endif>Average</option>
                                    <option value="4" @if( $objs->close_tickets->ask_close_tickets->ark2 == 4) selected='selected' @endif>Poor</option>
                                    <option value="5" @if( $objs->close_tickets->ask_close_tickets->ark2 == 5) selected='selected' @endif>Terrible</option>
                                </select>
                            </div>
                            @endisset

                            <div class="form-group">
                                <label class="" style="font-size:15px">3. ข้อเสนอแนะเพิ่มเติม</label>
                                <textarea id="event-desc" class="form-control" name="detail" rows="6" placeholder="รายละเอียด..." readonly>@isset($objs->close_tickets->ask_close_tickets->detail){{ $objs->close_tickets->ask_close_tickets->detail }}@endisset</textarea>
                            </div>




                        </div>
                    </div>

                    <div class="tab-pane fade" id="kt_tab_pane_3_{{ $objs->id }}" role="tabpanel">
                        <div class="p-26">

                            <div class="d-flex justify-content-around" style="width: 100%">

                                @if(isset($objs->add_tickets->img_add_tickets))
                                    @foreach ($objs->add_tickets->img_add_tickets as $img)
                                        <div class="mr-15"><img src="{{ url('images/next_combo/add_ticket/'.$img->img) }}" class="img-fluid card-rounded" alt="cat"></div>
                                    @endforeach
                                @endif

                            </div>
                            <br>
                            <div class="box-height-10"></div>
                            <div class="form-group">
                                <label class="" style="font-size:15px">ข้อเสนอแนะเพิ่มเติม</label>
                                <textarea id="event-desc" class="form-control" name="detail" rows="6" placeholder="รายละเอียด..." readonly>@isset($objs->add_tickets->detail){{ $objs->add_tickets->detail }}@endisset</textarea>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">ปิดหน้าต่าง</button>
            </div>

            @include('admin.layouts.inc-script')

            <script src="{{ url('home/star/dist/star-rating.min.js') }}"></script>
            <script>
            var starRatingControl = new StarRating('.star-rating',{
                maxStars: 5
            });

            </script>
        </body>
        </html>

