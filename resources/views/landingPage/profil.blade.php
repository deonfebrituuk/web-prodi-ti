<!DOCTYPE html>
<html lang="en">

<head>
    @include('landingPage.partial.head')
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        @include('landingPage.partial.spinner')
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        @include('landingPage.partial.navbar')
        <!-- Navbar & Hero End -->


        <!-- Full Screen Search Start -->
        
        <!-- Full Screen Search End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h6 class="position-relative text-primary ps-4">Tentang</h6>
                            <h2 class="mt-2">Program Studi Teknik Informatika</h2>
                        </div>
                        <p class="mb-4">
                            {{ $tentang->deskripsi }}
                        </p>
                        {{-- <div class="row g-3">
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Award Winning</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Professional Staff</h6>
                            </div>
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>24/7 Support</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Fair Prices</h6>
                            </div>
                        </div> --}}
                        <div class="d-flex align-items-center mt-4">
                            {{-- <a class="btn btn-primary rounded-pill px-4 me-3" href="">Read More</a> --}}
                            <a class="btn btn-outline-primary btn-square me-3" href="https://web.facebook.com/{{ $profil->fb }}"><i class="fab fa-facebook-f"></i></a>
                            {{-- <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a> --}}
                            <a class="btn btn-outline-primary btn-square me-3" href="https://www.instagram.com/{{ $profil->ig }}"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-square" href="https://linkedin.com/in/{{ $profil->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn" data-wow-delay="1.5s" src="{{ asset('/landPage/img/about.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Newsletter Start -->
        <div class="container-xxl  my-5" data-wow-delay="0.1s">
            <div class="container px-lg-5">
                <div class="row " >
                    <div class="section-title position-relative mb-4 pb-2">
                        <h6 class="position-relative text-primary ps-4">Lokasi</h6>
                        <h2 class="mt-2">Lokasi Program Studi Teknik Informatika</h2>
                    </div>
                    <div class="col-12 col-md-12" style="width:full">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.846690178128!2d124.8844646757138!3d1.264504498723463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32871515b921f92f%3A0xd30eef94b287fa65!2sProdi%20Teknik%20Informatika%20UNIMA!5e0!3m2!1sen!2sid!4v1682958219147!5m2!1sen!2sid" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    {{-- <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                        <img class="img-fluid mt-5" style="height: 250px;" src="img/newsletter.png">
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- Newsletter End -->



        <!-- Footer Start -->
        @include('landingPage.partial.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    @include('landingPage.partial.script')
</body>

</html>