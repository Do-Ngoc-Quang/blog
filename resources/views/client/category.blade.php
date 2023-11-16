<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Arsha Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../client/assets/img/favicon.png" rel="icon">
    <link href="../client/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../client/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../client/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../client/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../client/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../client/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../client/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../client/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../client/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    @include('client.includes.header')
    <!-- End Header -->

    <main id="main">

        <!-- ======= Portfolio Section ======= -->
        <section class="portfolio">
            <div class="container mt-5" data-aos="fade-up">

                <div class="section-title">
                    <h2>Categories</h2>
                </div>

                <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">All Categories</li>
                    @foreach($categories_all as $cate_all)
                    <li data-filter=".filter-{{$cate_all->id}}">{{$cate_all->name}}</li>
                    @endforeach
                </ul>
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach($categories as $cate)
                    @foreach($blogs as $blog)
                    @if($blog->cate_id == $cate->id)
                    <a href="blog-details-{{$blog->id}}">
                        <div class="col-lg-4 col-md-6 portfolio-item filter-{{$cate->id}}">
                            <div class="portfolio-img"><img
                                    src="{{ asset('storage/upload_images/' . $blog->blog_main_image) }}"
                                    class="img-fluid rounded" alt=""></div>
                            <div class="portfolio-info">
                                <h4>{{$blog->blog_name}}</h4>
                                <!-- <p>App</p> -->
                                <a href="{{ asset('storage/upload_images/' . $blog->blog_main_image) }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                    title="{{$blog->blog_name}}"><i class="bx bx-plus"></i></a>
                                <a href="blog-details-{{$blog->id}}" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </a>
                    @endif
                    @endforeach
                    @endforeach

                </div>


            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('client.includes.footer')
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../client/assets/vendor/aos/aos.js"></script>
    <script src="../client/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../client/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../client/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../client/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../client/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="../client/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../client/assets/js/main.js"></script>

</body>

</html>