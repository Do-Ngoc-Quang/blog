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

</head>

<body>

    <!-- ======= Header ======= -->
    @include('client.includes.header')
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->


    <main id="main">

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container mt-5" data-aos="fade-up">

                <div class="section-title">
                    <h2>Blogs</h2>
                </div>

                <div class="row mb-2">
                    @foreach($blogs as $blog)
                    <div class="col-md-6 col-lg-4 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">{{$blog->blog_name}}</h5>
                                <img class="img-fluid d-flex mx-auto my-4"
                                    src="{{ asset('storage/upload_images/' . $blog->blog_main_image) }}"
                                    alt="Card image cap" />
                                <p class="card-text">Created at: {{$blog->created_at}}</p>
                                <a href="blog-details-{{$blog->id}}" class="card-link">View here</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    {{$page}}
                </div>
            </div>
        </section><!-- End Services Section -->

        <section id="hero" class="d-flex align-items-center">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                        data-aos="fade-up" data-aos-delay="200">
                        <h1>How To Install Laravel For The First Time</h1>
                        <div class="d-flex justify-content-center justify-content-lg-start">
                            <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
                            <a href="https://www.youtube.com/watch?v=2qgS_MCvDfk" class="glightbox btn-watch-video"><i
                                    class="bi bi-play-circle"></i><span>Watch Video</span></a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                        <img src="../client/assets/img/hero-img.png" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>

        </section><!-- End Hero -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="row" data-aos="zoom-in">
                    @foreach($blogs_clients as $blog)
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('storage/upload_images/' . $blog->blog_main_image) }}" class="img-fluid"
                            alt="">
                    </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Cliens Section -->
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