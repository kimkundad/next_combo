@extends('layouts.template')


@section('title')
Test
@stop

@section('stylesheet')

@stop('stylesheet')

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
            <div>
                <img src="{{ url('img/Login.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="box-height-20"></div>

            @if (session('status'))
            <div class="alert alert-success" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span class="mx-2"> {{ session('status') }}</span>
            </div>
            @endif

            @error('email')
            <div class="alert alert-warning" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                <span class="mx-2">{{ $message }}</span>
            </div>
            @enderror

            <form method="POST" action="{{ route('password.email') }}">
                <div class="p-26 ">
                    @csrf
                    <h2 class="text-md text-highlight fs-20">ลืมรหัสผ่านการใช้งาน</h2>
                    <div class="box-height-10"></div>
                    <div class="form-group">
                        <label class="text-dark">Email</label>
                        <input type="text" name="email" value="{{ old('email') }}" class="form-control shadow-none" placeholder="อีเมล" required>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-green btn-block" >
                            ลืมรหัสผ่าน
                        </button>
                    </div>
                    <div class="box-height-10"></div>
                    <div class="box-height-20"></div>
                    
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


@stop('scripts')