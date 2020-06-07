<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img src="/assets/img/profile-img.jpg" alt="" class="/img-fluid rounded-circle">
            <h1 class="text-light"><a href="index.html">Alex Smith</a></h1>
            <div class="social-links mt-3 text-center">
                <ul>
                    @auth()

                        <form method="post" action="{{route('logout')}}">
                            @csrf
                            <button type="submit" class="btn btn-secondary rounded-pill btn-sm align-middle">خروج </button>
                            @if(Auth::user()->role==1)
                                <a href="{{route('admin.back')}}" class="log align-middle mx-auto"><i
                                    class="bx bxs-user-detail"></i></a>
                                @endif
                            <a href="{{route('profile',Auth::user()->id)}}" class="log align-middle mx-auto"><i
                                    class="bx bx-id-card"></i></a>


                            @else
                                <a href="#" class="instagram align-middle mx-auto"><i class="bx bxl-telegram"></i></a>
                                <a href="#" class="linkedin  align-middle mx-auto"><i class="bx bxl-linkedin"></i></a>
                                <a href="{{route('register')}}" class="user align-middle mx-auto"><i
                                        class="bx bxs-user"></i></a>
                                <a href="{{route('login')}}" class="log align-middle mx-auto"><i
                                        class="bx bxs-log-in-circle"></i></a>
                            @endauth
                        </form>
                </ul>

            </div>
        </div>


        <nav class="nav-menu">
            <ul>
                <li class="active"><a href="#"><i class="bx bx-home"></i> <span>خانه</span></a></li>
                <li><a href="#about"><i class="bx bx-user"></i> <span>درباره ما</span></a></li>
                <li><a href="#skills"><i class="bx bx-file-blank"></i> <span>مهارت ها</span></a></li>
                <li><a href="#portfolio"><i class="bx bx-book-content"></i> نمونه عکس</a></li>
                <li><a href="{{route('articles')}}"><i class="bx bx-book-content"></i>  مطالب</a></li>
                <li><a href="#contact"><i class="bx bx-envelope"></i> اتباط با ما</a></li>

            </ul>
        </nav><!-- .nav-menu -->
        <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
</header><!-- End Header -->
