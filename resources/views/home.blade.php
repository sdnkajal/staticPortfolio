<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Portfolio</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img src="{{ asset($data['image']) }}" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="{{ route('home') }}">{{ $data['fullName'] }}</a></h1>
            <div class="social-links mt-3 text-center">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>

        <nav id="navbar" class="nav-menu navbar">
            <ul>
                <li><a href="{{ route('home') }}" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
                <li><a href="{{ route('experience') }}" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Experience</span></a></li>
                <li><a href="{{ route('projects') }}" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Projects</span></a></li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->



<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2>{{ $data['fullName'] }}</h2>
                <p>{{ $data['about'] }}</p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="{{ asset($data['image']) }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3>UI/UX Designer &amp; Web Developer.</h3>
                    <p class="fst-italic">{{ $data['uiuxFirstPara'] }}</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{ $data['birthday'] }}</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>{{ $data['website'] }}</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{ $data['phone'] }}</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{ $data['city'] }}</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{ $data['age'] }}</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{ $data['degree'] }}</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>{{ $data['phEmailOne'] }}</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>{{ $data['freelance'] }}</span></li>
                            </ul>
                        </div>
                    </div>
                    <p>{{ $data['uiuxSecondPara'] }}</p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
        <div class="container">
            <div class="section-title">
                <h2>Facts</h2>
                <p>{{ $data['factsText'] }}</p>
            </div>

            <div class="row no-gutters">
                @foreach($data['facts'] as $fact)
                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                        <div class="count-box">
                            <i class="bi {{ $fact['icon'] }}"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ $fact['totalNumber'] }}" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>{{ $fact['boldText'] }}</strong> {{ $fact['text'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
        <div class="container">
            <div class="section-title">
                <h2>Skills</h2>
                <p>{{ $data['skillText'] }}</p>
            </div>

            <div class="row skills-content">
                    @foreach($data['skills'] as $key => $value)
                        @if($loop->odd)
                            <div class="col-lg-6" data-aos="fade-up">
                                <div class="progress">
                                    <span class="skill">{{Str::upper($key)}} <i class="val">{{ $value[$key] }}%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="{{ $value[$key] }}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="progress">
                                    <span class="skill">{{Str::upper($key)}} <i class="val">{{ $value[$key] }}%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="{{ $value[$key] }}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
        </div>
    </section><!-- End Skills Section -->
</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>iPortfolio</span></strong>
        </div>
        <div class="credits">Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End  Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.j') }}s"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.j') }}s"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.j') }}s"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/typed.js/typed.umd.j') }}s"></script>
<script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.j') }}s"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
