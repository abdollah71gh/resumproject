<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">
      @foreach($abouts as $about)
            <div class="section-title">
                <h2> About me</h2>
                <p>{{$about->body}}</p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="{{$about->image}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3> {{$about->name}}</h3>
                    <p class="font-italic">

                        I have been working in php programming for almost 2 years and I am always searching and I like this programming
                        language very much and working with this language is very easy.
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> 28 June  1992</li>
                                <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> ghasemiresum.ir</li>
                                <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> +98 936 845 1575</li>
                                <li><i class="icofont-rounded-right"></i> <strong>City:</strong> City : kerman, Iran</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> 28</li>
                                <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> Master</li>
                                <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong> ghasemiresum.ir</li>
                                <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Available</li>
                            </ul>
                        </div>
                    </div>
                    <p>

                        I always like to be very active in programming and I like programming very much and I want to work in a reputable company and it tried
                    </p>
                </div>
            </div>
        @endforeach


    </div>
</section><!-- End About Section -->
