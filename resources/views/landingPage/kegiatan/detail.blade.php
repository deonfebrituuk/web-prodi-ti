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
        {{-- {{ dd }} --}}

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h6 class="position-relative text-primary ps-4">Detail Kegiatan</h6>
                            <h2 class="mt-2">{{ $kegiatan->judul }}</h2>
                        </div>
                        <p class="mb-4">
                            {{ $kegiatan->deskripsi }}
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
                        
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Newsletter Start -->
        
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