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
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Dosen</h6>
                    <h2 class="mt-2">Anggota Dosen Teknik Informatika</h2>
                </div>
                <div class="row g-4">
                    @foreach ($dosen as $item)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href="https://web.facebook.com/{{ $item->fb }}"><i class="fab fa-facebook-f"></i></a>
                                    {{-- <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a> --}}
                                    <a class="btn btn-square text-primary bg-white my-1" href="https://www.instagram.com/{{ $item->ig }}"><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href="https://wa.me/{{ $item->wa }}"><i class="fab fa-whatsapp"></i></a>
                                </div>
                                <img class="img-fluid rounded w-100" src="{{ asset('../gambar/'.$item->gambar) }}" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">{{ $item->nama }}</h5>
                                <small>{{ $item->jabatan }}</small>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    
                    
                </div>
            </div>
        </div>
        <!-- Team End -->
        

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