@extends('front.front')
@section('content')
    <section>
        <main>
            <div class="container  mt-2">
                <div class="row justify-content-end">
                    @foreach($articles as $article)
                        <div class="col-sm-3">
                            <img src="<?php echo 'storage/photos/13/thumbs/'.basename($article->image)?>" alt="">
                           <h3 ><a href="{{route('article',$article->slug)}}">{{$article->name}}</a></h3>
                          <ol class="bg-secondary text-light">


                                  <li class="my-auto"> {{$article->user->name}} <b class="badge badge-success">:  نویسنده</b> </li>
                                  <li class="my-auto "> {{$article->hit}} <b class="badge badge-success"> : بازدید  </b> </li>
                                 <li class="my-auto"> {!! jdate($article->created_at)->format('%B -%d- %Y') !!} <b class="badge badge-success"> : تاریخ </b> </li>

                          </ol>
                            <p><?php  echo mb_substr(strip_tags($article->description),0 , 200,'UTF8').'. . .';?></p>
                        </div>
                    @endforeach
                </div>
            </div>

        </main>
    </section>
@endsection


