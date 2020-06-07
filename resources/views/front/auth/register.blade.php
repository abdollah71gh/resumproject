@extends('front.front')
@section('content')
    <section>
        <main>
            <div class="container  mt-2">
                <div class="row justify-content-end">
                    <div class="col-sm-8">
                        <div class="card">
                            <div class="card-header bg-info text-right text-light">ورود به سایت</div>
                            <form method="post" action="{{route('register')}}">
                                @csrf
                                <div class="card-body ">
                                    <div class="form-group ">
                                        <input type="text"
                                               class="form-control text-right @error('name') is-invalid   @enderror"
                                               name="name" placeholder="نام خود را وارد نمایید"
                                               value="{{old('name')}}">
                                        @error('name')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group ">
                                        <input type="email" class="form-control text-right @error('email') @enderror"
                                               name="email" placeholder="ایمیل خود را وارد نمایید"
                                               value="{{old('email')}}">
                                        @error('email')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group ">
                                        <input type="number" class="form-control text-right @error('phone')  @enderror"
                                               name="phone" placeholder="تلفن خود را وارد نمایید"
                                               value="{{old('phone')}}">
                                        @error('phone')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group ">
                                        <input type="password" class="form-control text-right" name="password"
                                               placeholder="پسورد خود را وارد نمایید">
                                    </div>
                                    @error('password')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                    <div class="form-group ">
                                        <input type="password" class="form-control text-right"
                                               name="password_confirmation"
                                               placeholder="تکرار پسورد خود را وارد نمایید">
                                    </div>
                                    <button type="submit" class="btn btn-success rounded-pill btn-block">ثبت نام
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </section>
@endsection


