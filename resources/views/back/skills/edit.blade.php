@extends('back.back')
@section('title')
    پنل مدیریت -- ویرایش مهارت
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="container">
                <div class="row ">
                    <div class="col-12">
                        <div class="page-header">
                            <h4 class="page-title">ویرایش  مهارت کاربران </h4>
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

                                <div class="card-header bg-primary text-right text-light">ویرایش مهارت</div>
                                <div class="card-body bg-light">
                                    <form method="post" action="{{route('admin.skills.update',$skill->id)}}">
                                        @csrf
                                        <div class="form-group">
                                            <label style="float: right;font-size: large"> نام</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                   name="name" value="{{$skill->name}}">
                                            @error('name')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label style="float: right;font-size: large">نام مستعار</label>
                                            <input type="text" class="form-control @error('body') is-invalid @enderror"
                                                   name="body" value="{{$skill->body}}">
                                            @error('body')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label style="float: right;font-size: large"> مهارت</label>
                                            <input type="text" class="form-control @error('skill') is-invalid @enderror"
                                                   name="skill" value="{{$skill->skill}}">
                                            @error('skill')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label style="float: right;font-size: large"> مقدار </label>
                                            <input type="text" class="form-control @error('val') is-invalid @enderror"
                                                   name="val" value="{{$skill->val}}">
                                            @error('val')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label style="float: right;font-size: large"> درصد</label>
                                            <input type="text" class="form-control @error('darsad') is-invalid @enderror"
                                                   name="darsad" value="{{$skill->darsad}}">
                                            @error('darsad')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label style="float: right;font-size: large">وضعیت</label>
                                            <select class="form-control" name="status">
                                                <option value="0">منتشر نشده</option>
                                                <option value="1"<?php if ($skill->status==1)echo 'selected'?>>منتشر شده</option>
                                            </select>
                                        </div>


                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-info btn-sm" type="button" id="button-image">انتخاب</button>
                                            </div>
                                            <input type="text" id="image_label" class="form-control" name="image"
                                                   aria-label="image" aria-describedby="button-image" value="{{$skill->image}}">

                                        </div>

                                        <button class="btn btn-success btn-block rounded-pill btn-sm">ذخیره دسته بندی
                                        </button>
                                        <a href="{{route('admin.articles')}}"
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






