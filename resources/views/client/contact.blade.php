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
            <div class="container mt-5">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                @if(session('success'))
                <div class="alert alert-success text-center">{{session('success')}}</div>
                @endif
                
                <div class="row">
                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Thanh Thai Street, 10 District, HCMC</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info.dongocquang@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+84 00 000 0000</p>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.5648141562424!2d106.66089297490758!3d10.767983989380284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1a2367211b%3A0xe63fb306d50d0b06!2zTmjDoCB0cuG7jSBUaMO0bmcgVMOibQ!5e0!3m2!1sfr!2s!4v1684644633691!5m2!1sfr!2s"
                                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-7 mt-5 mt-lg-0 align-items-stretch">
                        <form action="/contact.create" method="POST" class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" name="message" rows="10" required></textarea>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('client.includes.footer')
    <!-- End Footer -->


    <!-- Vendor JS Files -->
    <script src="../client/assets/vendor/aos/aos.js"></script>
    <script src="../client/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../client/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../client/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../client/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../client/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <!-- <script src="../client/assets/vendor/php-email-form/validate.js"></script> -->

    <!-- Template Main JS File -->
    <script src="../client/assets/js/main.js"></script>

</body>

</html>