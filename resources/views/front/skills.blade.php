<!-- ======= Skills Section ======= -->
<section id="skills" class="skills section-bg">

    @foreach($name as $tag)

    <div class="container">
            <div class="section-title">
                <h2>{{$tag->name}}</h2>
                <p>{{$tag->body}}</p>

            </div>
        @endforeach


        <div class="row skills-content">
{{--            @foreach($disrepet as $norepet)--}}
            @foreach($skills as $skill)
                <div class="col-lg-6" data-aos="fade-up">

                    <div class="progress">
                        <span class="skill">{{$skill->skill}} <i class="val">{{$skill->darsad}}</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="{{$skill->val}}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                </div>

{{--                <div class="col-lg-6" data-aos="{{$norepet->skill}}" data-aos-delay="100">--}}

{{--                    <div class="progress">--}}
{{--                        <span class="skill">{{$skill->skill}} <i class="val">{{$skill->darsad}}</i></span>--}}
{{--                        <div class="progress-bar-wrap">--}}
{{--                            <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->val}}" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
            @endforeach
{{--            @endforeach--}}
        </div>

    </div>

</section><!-- End Skills Section -->
