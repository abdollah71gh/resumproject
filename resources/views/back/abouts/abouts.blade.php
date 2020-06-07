@extends('back.back')
@section('title')
پنل مدیریت -- مدیریت پروفایل
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="container">
                <div class="row ">
                    <div class="col-12">
                        <div class="page-header">
                            <h4 class="page-title">پنل مدیریت پروفایل</h4>
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
                        <table class="table bg-dark text-center">
                            @include('back.message')
                            <a href="{{route('admin.abouts.create')}}" class="btn btn-sm  mb-4 btn-block btn-success rounded-pill">ایجاد پروفایل</a>
                            <thead class="text-light ">
                            <tr>
                                <th class="text-light" style="font-size: 20px">نام</th>
                                <th class="text-light" style="font-size: 20px">توضیحات</th>
                                <th class="text-light" style="font-size: 20px">مدیریت</th>

                            </tr>
                            </thead>
                            <tbody class="bg-secondary">
                            @foreach($abouts as $about)
                            <tr>
                                <td>{{$about->name}}</td>
                                <td>{{$about->body}}</td>
                                <td>
                                    <a href="{{route('admin.abouts.edit',$about->id)}}" class="badge badge-success">ویرایش</a>
                                    <a href="{{route('admin.abouts.destroy',$about->id)}}>"  return  onclick="confirm('ایا میخواهید فایل مورد نظر حذف گردد')" class="badge badge-danger">حذف</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

@endsection






