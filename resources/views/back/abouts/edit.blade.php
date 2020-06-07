@extends('back.back')
@section('title')
    پنل مدیریت -- ویرایش دسته بندی
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="container">
                <div class="row ">
                    <div class="col-12">
                        <div class="page-header">
                            <h4 class="page-title">ویرایش دسته بندی کاربران </h4>
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
                                    <form method="post" action="{{route('admin.abouts.update',$about->id)}}">
                                        @csrf
                                        <div class="form-group">
                                            <label style="float: right;font-size: large"> نام</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                   name="name" value="{{$about->name}}">
                                            @error('name')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label style="float: right;font-size: large"> توضیحات مربوطه</label>
                                            <input type="text" class="form-control @error('body') is-invalid @enderror"
                                                   name="body" value="{{$about->body}}">
                                            @error('body')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-info btn-sm" type="button" id="button-image">انتخاب</button>
                                            </div>
                                            <input type="text" id="image_label" class="form-control" name="image"
                                                   aria-label="image" aria-describedby="button-image"  value="{{$about->image}}">

                                        </div>
                                        <button class="btn btn-success btn-block rounded-pill btn-sm">ویرایش دسته بندی</button>
                                        <a href="{{route('admin.abouts')}}"
                                           class="btn btn-danger btn-block btn-sm rounded-pill">انصراف</a>
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






