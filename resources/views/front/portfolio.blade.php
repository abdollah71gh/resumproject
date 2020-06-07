<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
    <div class="container">

        <div class="section-title">
            @foreach($list as $item)
            <h2>{{$item->name}}</h2>
            <p>{{$item->body}}</p>
            @endforeach
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    @foreach($tags as $item)
                        <li data-filter=".filter-{{$item->tag}}">{{$item->tag}}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
            @foreach($portfolios as $item)
                <div class="col-lg-4 col-md-6 portfolio-item filter-{{$item->tag}}">
                    <div class="portfolio-wrap">
                        <img src="{{$item->image}}" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="{{$item->image}}" data-gall="portfolioGallery"
                               class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="{{$item->link}}" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>

    </div>
</section><!-- End Portfolio Section -->
