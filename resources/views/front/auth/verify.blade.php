@extends('front.front')
@section('content')
    <section>
    <main>
        <div class="container  mt-2">
            <div class="row justify-content-end">
                <div class="col-sm-8">
                    <div class="card">
                        <div  class="card-header bg-info text-right text-light">تاییدیه ایمیل</div>
                        <form method="post" action="{{route('verification.resend')}}">
                            @csrf
                            <div class="card-body  bg-light">
                                @if(session('resent'))
                                    <div class="alert alert-success text-right">ایمیل مورد نظر باموفقیت ارسال شد و پس از تایید مدیریت سایت شما میتوانید به سایت دسترسی داشته باشید</div>
                                    @endif
                                <p class="text-right " style="font-size: 17px">ابتدا برای وارد شدن به سایت شما باید تاییدیه ایمیل رو بزنید و مدیر تایید شما را دریافت نماید</p>
                                <br>
                                <button type="submit" class="btn btn-success rounded-pill btn-block">تایید ایمیل </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    </section>
@endsection


