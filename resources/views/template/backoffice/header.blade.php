<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img src={{asset('/img/profile-img.jpg')}} alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="index.html">Admin || Dashboard</a></h1>
        </div>

        <nav class="nav-menu">
            <ul>
                <li class="active"><a href="{{route('admin')}}"><i class="bx bx-lock"></i> <span>Admin</span></a></li>
                <li><a href="{{route('abouts.index') }}"><i class="bx bx-user"></i> <span>About</span></a></li>
                <li><a href="{{route('facts.index') }}"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
                <li><a href="{{route('portfolios.index') }}"><i class="bx bx-book-content"></i> Portfolio</a></li>
                <li><a href="{{route('services.index') }}"><i class="bx bx-server"></i> Services</a></li>
                <li><a href="{{route('home')}}"><i class="bx bx-home"></i>Back to your Portfolio</a></li>

            </ul>
        </nav><!-- .nav-menu -->
        <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
</header>
