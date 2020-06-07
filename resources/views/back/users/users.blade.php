@extends('back.back')
@section('title')
پنل مدیریت -- مدیریت کاربران
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="container">
                <div class="row ">
                    <div class="col-12">
                        <div class="page-header">
                            <h4 class="page-title">پنل مدیریت کاربران</h4>
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
                                <th class="text-light" style="font-size: 20px">نام</th>
                                <th class="text-light" style="font-size: 20px">ایمیل</th>
                                <th class="text-light" style="font-size: 20px">تلفن</th>
                                <th class="text-light" style="font-size: 20px">نقش</th>
                                <th class="text-light" style="font-size: 20px">وضعیت</th>
                                <th class="text-light" style="font-size: 20px">مدیریت</th>

                            </tr>
                            </thead>
                            <tbody class="bg-secondary">
                            @foreach($users as $user)
                                @switch($user->role)
                                    @case(1)
                                    @php $role='مدیر'  @endphp
                                    @break
                                    @case(2)
                                    @php $role='کاربر'  @endphp
                                    @break
                                    @default
                                @endswitch
                                @switch($user->status)
                                    @case(1)
                                    @php
                                        $url=route('admin.user.status',$user->id);
                                        $status='<a href="'.$url.'" class="badge badge-success">فعال</a>'  @endphp
                                    @break
                                    @case(0)
                                    @php
                                        $url=route('admin.user.status',$user->id);
                                       $status='<a href="'.$url.'" class="badge badge-warning">غیر فعال</a>'  @endphp
                                    @break
                                    @default
                                @endswitch
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$role}}</td>
                                <td>{!! $status !!}</td>
                                <td>
                                    <a href="{{route('admin.profile',$user->id)}}" class="badge badge-success">ویرایش</a>
                                    <a href="{{route('admin.user.delete',$user->id)}}>"  return  onclick="confirm('ایا میخواهید فایل مورد نظر حذف گردد')" class="badge badge-danger">حذف</a>
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






