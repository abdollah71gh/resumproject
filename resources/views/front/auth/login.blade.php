@extends('front.front')
@section('content')
    <section>
    <main>
        <div class="container  mt-2">
            <div class="row justify-content-end">
                <div class="col-sm-8">
                    <div class="card">
                        <div  class="card-header bg-info text-right text-light">ورود به سایت</div>
                        <form method="post" action="{{route('login')}}">
                            @csrf
                            <div class="card-body ">

                                <div class="form-group ">
                                    <input type="email" class="form-control text-right" name="email" placeholder="ایمیل خود را وارد نمایید">
                                </div>
                                <div class="form-group ">
                                    <input type="password" class="form-control text-right" name="password" placeholder="پسورد خود را وارد نمایید">
                                </div>

                                <button type="submit" class="btn btn-success rounded-pill btn-block">ثبت نام</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    </section>
@endsection


