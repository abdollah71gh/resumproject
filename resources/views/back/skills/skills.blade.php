@extends('back.back')
@section('title')
پنل مدیریت -- مدیریت مهارت های من
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="container">
                <div class="row ">
                    <div class="col-12">
                        <div class="page-header">
                            <h4 class="page-title">پنل مدیریت مهارت من</h4>
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
                            <a href="{{route('admin.skills.create')}}" class="btn btn-sm  mb-4 btn-block btn-success rounded-pill">ایجاد دسته بندی</a>
                            <thead class="text-light ">
                            <tr>
                                <th class="text-light" style="font-size: 20px">نام</th>
                                <th class="text-light" style="font-size: 20px"> توضیحات</th>
                                <th class="text-light" style="font-size: 20px"> مهارت</th>
                                <th class="text-light" style="font-size: 20px"> مقدار</th>
                                <th class="text-light" style="font-size: 20px"> درصد</th>
                                <th class="text-light" style="font-size: 20px"> وضعیت</th>
                                <th class="text-light" style="font-size: 20px">مدیریت</th>

                            </tr>
                            </thead>
                            <tbody class="bg-secondary">
                            @foreach($skills as $skill)
                                @switch($skill->status)
                                    @case(1)
                                    @php
                                        $url=route('admin.skills.status',$skill->id);
                                        $status='<a href="'.$url.'" class="badge badge-success">فعال</a>'  @endphp
                                    @break
                                    @case(0)
                                    @php
                                        $url=route('admin.skills.status',$skill->id);
                                       $status='<a href="'.$url.'" class="badge badge-warning">غیر فعال</a>'  @endphp
                                    @break
                                    @default
                                @endswitch
                            <tr>
                                <td>{{$skill->name}}</td>
                                <td>{{$skill->body}}</td>
                                <td>{{$skill->skill}}</td>
                                <td>{{$skill->val}}</td>
                                <td>{{$skill->darsad}}</td>
                                <td>{!! $status !!}</td>
                                <td>
                                    <a href="{{route('admin.skills.edit',$skill->id)}}" class="badge badge-success">ویرایش</a>
                                    <a href="{{route('admin.skills.destroy',$skill->id)}}>"    onclick="return confirm('ایا میخواهید فایل مورد نظر حذف گردد')" class="badge badge-danger">حذف</a>
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






