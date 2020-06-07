@extends('front.front')
@section('content')
    <div class="container mt-3">
        <div class="row justify-content-end text-right">
            <div class="col-sm-8">
                <h1>{{$article->name}}</h1>

                <p>{!! $article->description !!}</p>
                <div class="card bg-light">

                    <div class="form-group">
                        <div class="text-center"> {{$article->user->name}} <b class="badge badge-success">: نویسنده</b>
                        </div>
                        <div class="text-center"> {{$article->hit}} <b class="badge badge-success"> : بازدید </b></div>
                        <div class="text-center"> {!! jdate($article->created_at)->format('%B -%d- %Y') !!} <b
                                class="badge badge-success"> : تاریخ </b></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container mt2">
        <div class="row  justify-content-end">
            <div class="col-sm-8">
                <div class="card">
                    @include('back.message')
                    <div class="card-header bg-info text-right text-light ">ارسال کامنت</div>
                    <form method="post" action="{{route('comment.store',$article->slug)}}">
                        @csrf

                        <div class="card-body">
                            @auth
                                <label style="float: right">یوزر نیم</label>
                                <div class="form-group">
                                    <input type="text" class="form-control text-right"  name="name" value="{{Auth::user()->name}}" readonly>
                                </div>
                                <label style="float: right"> ایمیل</label>
                                <div class="form-group">
                                    <input type="email" class="form-control text-right" name="email" value="{{Auth::user()->email}}" readonly>
                                </div>
                            @else
                                <label style="float: right">یوزر نیم</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <label style="float: right"> ایمیل</label>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email">
                                </div>
                            @endauth
                            <div class="form-group">
                                <label style="float: right">نظر خود را وارد نمایید</label>
                                <textarea class="form-control" role="8" name="body"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success rounded-pill btn-block">ارسال کامنت</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <div class="row justify-content-end bg-light">
        <div class="col-sm-8">

            <ul style="float: right" class="px-4 ">
                @foreach($comments as $comment)
               <p><br>{{$comment->name}} : نام نویسنده </p>

               <p>{{$comment->email}} : ایمیل </p>
                <p>{{$comment->body}} </p>
                    <hr>
                @endforeach
            </ul>


        </div>

    </div>
    <br> <br> <br>
@endsection


