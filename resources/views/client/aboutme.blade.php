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

    <main id="main">
        <!-- ======= Contact Section ======= -->
        <section class="contact">
            <div class="container mt-5" data-aos="fade-up">

                <div class="row">
                    <div class="portfolio-details-slider swiper col-lg-5 d-flex align-items-center">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="{{ asset('storage/upload_avatars/' . $user_current->avatar) }}" width="300"
                                    class="rounded" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                    <div class="col-lg-7 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <div class="member-info">
                            <h4><strong>{{$user_current->firstname}} {{$user_current->lastname}}</strong></h4>
                            <hr>
                            <p>Email: <strong>{{$user_current->email}}</strong></p>
                            <p>Phone number: <strong>{{$user_current->phonenumber}}</strong></p>
                            <p>Address: <strong>{{$user_current->address}}</strong></p>

                            <hr>

                            <h6>Social Networks</h6>
                            <div class="social-links mt-3">
                                <a href="https://github.com/Do-Ngoc-Quang" target="_blank" class="twitter"><i
                                        class="bx bxl-github"></i></a>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('client.includes.footer')
    <!-- End Footer -->

    <!-- <div id="preloader"></div> -->
    <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a> -->

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