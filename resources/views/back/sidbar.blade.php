<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="profile-image">
                    <img class="img-xs rounded-circle" src="back/images/faces/face8.jpg" alt="profile image">
                    <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                    <p class="profile-name">عبدالله قاسمی</p>
                    <p class="designation">مدیر</p>
                </div>
                <div class="icon-container">
                    <i class="icon-bubbles"></i>
                    <div class="dot-indicator bg-danger"></div>
                </div>
            </a>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link text-light">داشبورد</span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.back')}}">
                <span class="menu-title">داشبورد</span>
                <i class="icon-screen-desktop menu-icon"></i>
            </a>
        </li>
        <li class="nav-item nav-category"><span class="nav-link">صفحات</span></li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">لیست صفحات</span>
                <i class="icon-layers menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.users')}}">کاربران</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.categoris')}}">دسته بندی</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.articles')}}">مطالب </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.comments')}}">نظرات </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/icons/simple-line-icons.html">
                <span class="menu-title">Icons</span>
                <i class="icon-globe menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
                <span class="menu-title">Form Elements</span>
                <i class="icon-book-open menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartist.html">
                <span class="menu-title">Charts</span>
                <i class="icon-chart menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
                <span class="menu-title">Tables</span>
                <i class="icon-grid menu-icon"></i>
            </a>
        </li>
        <li class="nav-item nav-category"><span class="nav-link">Sample Pages</span></li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">ابزارها</span>
                <i class="icon-doc menu-icon"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.abouts')}}"> پروفایل من </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.skills')}}"> مهارت </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.samples')}}"> نمونه کار </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item pro-upgrade">
              <span class="nav-link">
                <a class="btn btn-block px-0 btn-rounded btn-upgrade" href="https://www.bootstrapdash.com/product/stellar-admin-template/" target="_blank"> <i class="icon-badge mx-2"></i> Upgrade to Pro</a>
              </span>
        </li>
    </ul>
</nav>
