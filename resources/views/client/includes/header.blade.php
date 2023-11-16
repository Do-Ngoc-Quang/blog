<header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="/">dongocquang</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="/">Home</a></li>
                <li><a class="nav-link scrollto" href="category">Category</a></li>
                <li class="dropdown"><a href="#"><span>Blogs</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>

                        @foreach($categories as $cate)

                        <li class="dropdown"><a href="#"><span>{{$cate->name}}</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                @foreach($blogs_header as $blog)
                                @if($blog->cate_id == $cate->id)
                                <li><a href="blog-details-{{$blog->id}}">{{$blog->blog_name}}</a></li>
                                @endif
                                @endforeach

                            </ul>
                        </li>

                        @endforeach
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="contact">Contact</a></li>
                <li><a class="nav-link scrollto" href="aboutme">About me</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>