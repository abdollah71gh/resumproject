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
                                    <form method="post" action="{{route('admin.articles.update',$article->id)}}">
                                        @csrf
                                        <div class="form-group">
                                            <label style="float: right;font-size: large"> نام</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                   name="name" value="{{$article->name}}">
                                            @error('name')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label style="float: right;font-size: large">نام مستعار</label>
                                            <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                                   name="slug" value="{{$article->slug}}">
                                            @error('slug')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label style="float: right;font-size: large"> محتوای مطالب</label>
                                            <textarea rows="6" id="editor"
                                                      class="form-control @error('description') is-invalid @enderror"
                                                      name="description">{{$article->description}}</textarea>
                                            @error('description')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label style="float: right;font-size: large">وضعیت</label>
                                            <select class="form-control" name="status">
                                                <option value="0">منتشر نشده</option>
                                                <option value="1"<?php if ($article->status==1)echo 'selected'?>>منتشر شده</option>
                                            </select>
                                        </div>

                                        <div class="form-group text-right">
                                            <label style="float: right;font-size: large">انتخاب دسته بندی</label>
                                            <div id="output"></div>
                                            <select class="chosen-select" name="categories[]" multiple="multiple"
                                                    style="width:400px">
                                                @foreach($categoris as $cate_id=>$cat_name)
                                                    <option value="{{$cate_id}}"  <?php if (
                                                    in_array($cate_id,$article->categoris->pluck('id')->toArray()))
                                                        echo 'selected' ?>> {{$cat_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label style="float: right;font-size: large">
                                                نویسنده{{Auth::user()->name}}</label>
                                            <input type="hidden" class="form-control" value="{{Auth::user()->id}}"
                                                   name="user_id">

                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-info btn-sm" type="button" id="button-image">انتخاب</button>
                                            </div>
                                            <input type="text" id="image_label" class="form-control" name="image"
                                                   aria-label="image" aria-describedby="button-image" value="{{$article->image}}">

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






