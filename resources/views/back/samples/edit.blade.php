@extends('back.back')
@section('title')
    پنل مدیریت -- ویرایش  نمونه کار
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="container">
                <div class="row ">
                    <div class="col-12">
                        <div class="page-header">
                            <h4 class="page-title">ویرایش نمونه کار   </h4>
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
                                    <form method="post" action="{{route('admin.samples.update',$sample->id)}}">
                                        @csrf
                                        <div class="form-group">
                                            <label style="float: right;font-size: large"> نام</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                   name="name" value="{{$sample->name}}">
                                            @error('name')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label style="float: right;font-size: large">توضیحات مربوطه </label>
                                            <input type="text" class="form-control @error('body') is-invalid @enderror"
                                                   name="body" value="{{$sample->body}}">
                                            @error('body')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label style="float: right;font-size: large"> لینک</label>
                                            <input type="text" class="form-control @error('link') is-invalid @enderror"
                                                   name="link" value="{{$sample->link}}">
                                            @error('link')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label style="float: right;font-size: large"> تگ</label>
                                            <input type="text" class="form-control @error('tag') is-invalid @enderror"
                                                   name="tag" value="{{$sample->tag}}">
                                            @error('tag')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label style="float: right;font-size: large">وضعیت</label>
                                            <select class="form-control" name="status">
                                                <option value="0">منتشر نشده</option>
                                                <option value="1"<?php if ($sample->status==1)echo 'selected'?>>منتشر شده</option>
                                            </select>
                                        </div>

                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-info btn-sm" type="button" id="button-image">انتخاب</button>
                                            </div>
                                            <input type="text" id="image_label" class="form-control" name="image"
                                                   aria-label="image" aria-describedby="button-image" value="{{$sample->image}}">

                                        </div>

                                        <button class="btn btn-success btn-block rounded-pill btn-sm"> ذخیره نمونه کار
                                        </button>
                                        <a href="{{route('admin.samples')}}"
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






