@extends('back.back')
@section('title')
    پنل مدیریت -- ویرایش نظرات
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="container">
                <div class="row ">
                    <div class="col-12">
                        <div class="page-header">
                            <h4 class="page-title">ویرایش نظرات کاربران </h4>
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
                                    <form method="post" action="{{route('admin.comments.update',$comment->id)}}">
                                        @csrf
                                        <div class="form-group">
                                            <label style="float: right;font-size: large"> نام</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                   name="name" value="{{$comment->name}}">
                                            @error('name')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label style="float: right;font-size: large">ایمیل </label>
                                            <input type="text" class="form-control @error('email') is-invalid @enderror"
                                                   name="email" value="{{$comment->email}}">
                                            @error('email')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label style="float: right;font-size: large">کامنت مورد نظر </label>
                                            <input type="text" class="form-control @error('body') is-invalid @enderror"
                                                   name="body" value="{{$comment->body}}">
                                            @error('body')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label style="float: right;font-size: large">وضعیت</label>
                                            <select class="form-control" name="status">
                                                <option value="0">منتشر نشده</option>
                                                <option value="1"<?php if ($comment->status==1)echo 'selected'?>>منتشر شده</option>
                                            </select>
                                        </div>
                                        <button class="btn btn-success btn-block rounded-pill btn-sm">ذخیره دسته بندی
                                        </button>
                                        <a href="{{route('admin.comments')}}"
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






