@extends('back.back')
@section('title')
پنل مدیریت -- مدیریتl مطالب
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="container">
                <div class="row ">
                    <div class="col-12">
                        <div class="page-header">
                            <h4 class="page-title">پنل مدیریت مطالب کاربران</h4>
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
                            <a href="{{route('admin.articles.create')}}" class="btn btn-sm  mb-4 btn-block btn-success rounded-pill">ایجاد دسته بندی</a>
                            <thead class="text-light ">
                            <tr>
                                <th class="text-light" style="font-size: 20px">نام</th>
                                <th class="text-light" style="font-size: 20px">نام مستعار slug -</th>
                                <th class="text-light" style="font-size: 20px">نویسنده</th>
                                <th class="text-light" style="font-size: 20px">دسته بندی</th>
                                <th class="text-light" style="font-size: 20px"> وضعیت</th>
                                <th class="text-light" style="font-size: 20px">بازدید </th>
                                <th class="text-light" style="font-size: 20px">مدیریت</th>

                            </tr>
                            </thead>
                            <tbody class="bg-secondary">
                            @foreach($articles as $article)
                                @switch($article->status)
                                    @case(1)
                                    @php
                                        $url=route('admin.articles.status',$article->id);
                                        $status='<a href="'.$url.'" class="badge badge-success">فعال</a>'  @endphp
                                    @break
                                    @case(0)
                                    @php
                                        $url=route('admin.articles.status',$article->id);
                                       $status='<a href="'.$url.'" class="badge badge-warning">غیر فعال</a>'  @endphp
                                    @break
                                    @default
                                @endswitch
                            <tr>
                                <td>{{$article->name}}</td>
                                <td>{{$article->slug}}</td>
                                <td>{{$article->user->name}}</td>
                             <td>
                            @foreach($article->categoris()->pluck('name') as $category)
                                <span class="badge- badge-dark">  {{$category}}</span>
                                 @endforeach
                             </td>
                                <td>{!! $status !!}</td>
                                <td>{{$article->hit}}</td>
                                <td>
                                    <a href="{{route('admin.articles.edit',$article->id)}}" class="badge badge-success">ویرایش</a>
                                    <a href="{{route('admin.articles.destroy',$article->id)}}>" onclick="return confirm('ایا میخواهید فایل مورد نظر حذف گردد')" class="badge badge-danger">حذف</a>
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






