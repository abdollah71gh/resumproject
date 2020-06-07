@extends('back.back')
@section('title')
پنل مدیریت -- ویرایش کاربران
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="container">
                <div class="row ">
                    <div class="col-12">
                        <div class="page-header">
                            <h4 class="page-title">ویرایش کاربران </h4>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
{{--   page insert value --}}
            <div class="container mt-3">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12 col-sm-3">
                        <div style="direction: rtl;">
                            <div class="card ">

                                <div class="card-header bg-primary text-right text-light">ویرایش کاربران</div>
                                <div class="card-body bg-light">
                                    <form method="post" action="{{route('admin.profileupdate',$user->id)}}">
                                        @csrf
                                        <div class="form-group">
                                            <label  style="float: right;font-size: large"> نام</label>
                                            <input type="text"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" >
                                            @error('name')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label  style="float: right;font-size: large">ایمیل</label>
                                            <input type="text"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" >
                                            @error('email')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label  style="float: right;font-size: large">تلفن</label>
                                            <input type="number"  class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{$user->phone}}" >
                                            @error('phone')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label  style="float: right;font-size: large">رمز ورود</label>
                                            <input type="password"  class="form-control @error('password') is-invalid @enderror" name="password"  >
                                            @error('password')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label style="float: right;font-size: large"> تکرار رمز ورود</label>
                                            <input type="text"  class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation"  >
                                            @error('password_confirmation')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <button  class="btn btn-success btn-block rounded-pill btn-sm">ویرایش</button>
                                        <a href="{{route('admin.users')}}" class="btn btn-danger btn-block rounded-pill btn-sm">انصراف</a>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

@endsection






