@extends('back.back')
@section('title')
پنل مدیریت -- مدیریت  نظرات
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="container">
                <div class="row ">
                    <div class="col-12">
                        <div class="page-header">
                            <h4 class="page-title">پنل مدیریت نظرات کاربران</h4>
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
                            <thead class="text-light ">
                            <tr>
                                <th class="text-light" style="font-size: 20px">خلاصه نظر</th>
                                <th class="text-light" style="font-size: 20px">نویسنده</th>
                                <th class="text-light" style="font-size: 20px"> برای مطالب</th>
                                <th class="text-light" style="font-size: 20px">تاریخ</th>
                                <th class="text-light" style="font-size: 20px"> وضعیت</th>
                                <th class="text-light" style="font-size: 20px">مدیریت</th>

                            </tr>
                            </thead>
                            <tbody class="bg-secondary">
                            @foreach($comments as $comment)
                                @switch($comment->status)
                                    @case(1)
                                    @php
                                        $url=route('admin.comments.status',$comment->id);
                                        $status='<a href="'.$url.'" class="badge badge-success">فعال</a>'  @endphp
                                    @break
                                    @case(0)
                                    @php
                                        $url=route('admin.comments.status',$comment->id);
                                       $status='<a href="'.$url.'" class="badge badge-warning">غیر فعال</a>'  @endphp
                                    @break
                                    @default
                                @endswitch
                            <tr>
                                <td>{!! mb_substr($comment->body,0,50) !!}</td>
                                <td>{{$comment->name}}</td>
                                <td>{{$comment->article->name}}</td>
                                <td>{!! jdate($comment->created_at)->format('%B -%d- %Y') !!}</td>
                                <td>{!! $status !!}</td>
                                <td>
                                    <a href="{{route('admin.comments.edit',$comment->id)}}" class="badge badge-success">ویرایش</a>
                                    <a href="{{route('admin.comments.destroy',$comment->id)}}>"  return  onclick="confirm('ایا میخواهید فایل مورد نظر حذف گردد')" class="badge badge-danger">حذف</a>
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






