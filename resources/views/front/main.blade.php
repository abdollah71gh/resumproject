@extends('front.front')
@section('content')
<main id="main">

    @include('front.about')

{{--    @include('front.facts')--}}

    @include('front.skills')

{{--    @include('front.resume')--}}

    @include('front.portfolio')

{{--    @include('front.service')--}}
{{--    @include('front.texttime')--}}

    @include('front.contact')

</main>
@endsection

