<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Portfolio Details - Arsha Bootstrap Template</title>
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

</head>

<body>

    <!-- ======= Header ======= -->
    @include('client.includes.header')
    <!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <h2>Blog Details</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">
                    @foreach($categories as $cate)
                    @foreach($blogs as $blog)
                    @if($blog->cate_id == $cate->id && $blog->id == $blog_id)
                    <div class="col-lg-5">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/upload_images/' . $blog->blog_main_image) }}" class="rounded" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="portfolio-info">
                            <ul>
                                <!-- <li><strong>Category ID</strong>: {{$cate->id}}</li> -->
                                <li><strong>Category Name</strong>: {{$cate->name}}</li>
                                <hr>
                                <!-- <li><strong>Blog ID</strong>: {{$blog->id}}</li> -->
                                <li><strong>Blog Name</strong>: {{$blog->blog_name}}</li>
                                <li><strong>Created at</strong>: {{$blog->created_at}}</li>
                                <hr>
                                <li><p>{{$blog->blog_content}}</p></li>
                            </ul>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                </div>


            </div>
        </section>
        <!-- End Portfolio Details Section -->

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