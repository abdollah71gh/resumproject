@extends('back.back')
@section('title')
پنل مدیریت -- مدیریت نمونه کار
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="container">
                <div class="row ">
                    <div class="col-12">
                        <div class="page-header">
                            <h4 class="page-title">پنل مدیریت نمونه کار</h4>
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
                            <a href="{{route('admin.samples.create')}}" class="btn btn-sm  mb-4 btn-block btn-success rounded-pill">ایجاد نمونه کار</a>
                            <thead class="text-light ">
                            <tr>
                                <th class="text-light" style="font-size: 20px">نام</th>
                                <th class="text-light" style="font-size: 20px">توضیحات</th>
                                <th class="text-light" style="font-size: 20px">لینک</th>
                                <th class="text-light" style="font-size: 20px">تگ</th>
                                <th class="text-light" style="font-size: 20px"> وضعیت</th>
                                <th class="text-light" style="font-size: 20px">مدیریت</th>

                            </tr>
                            </thead>
                            <tbody class="bg-secondary">
                            @foreach($samples as $sample)
                                @switch($sample->status)
                                    @case(1)
                                    @php
                                        $url=route('admin.samples.status',$sample->id);
                                        $status='<a href="'.$url.'" class="badge badge-success">فعال</a>'  @endphp
                                    @break
                                    @case(0)
                                    @php
                                        $url=route('admin.samples.status',$sample->id);
                                       $status='<a href="'.$url.'" class="badge badge-warning">غیر فعال</a>'  @endphp
                                    @break
                                    @default
                                @endswitch
                            <tr>
                                <td>{{$sample->name}}</td>
                                <td>{{$sample->body}}</td>
                                <td>{{$sample->link}}</td>
                                <td>{{$sample->tag}}</td>
                                <td>{!! $status !!}</td>
                                <td>
                                    <a href="{{route('admin.samples.edit',$sample->id)}}" class="badge badge-success">ویرایش</a>
                                    <a href="{{route('admin.samples.destroy',$sample->id)}}>"  return  onclick="confirm('ایا میخواهید فایل مورد نظر حذف گردد')" class="badge badge-danger">حذف</a>
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






