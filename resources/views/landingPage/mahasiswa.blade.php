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
                            <h6 class="position-relative text-primary ps-4">Data</h6>
                            <h2 class="mt-2">Daftar Mahasiswa</h2>
                        </div>
                        
                    </div>
                    
                </div>
                <div class="row">
                  <div class="col-lg-12">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Datatables</h5>
                              <p>Daftar Mahasiswa yang terdaftar di program studi teknik informatika sejak tahun 2016

                              <!-- Table with stripped rows -->
                              <table class="table datatable">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">opsi</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Time Stamps</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @forelse ($mahasiswa as $item)
                                      <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <th scope="row">
                                          <form action="{{ route('data-mahasiswa.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('data-mahasiswa.edit', $item->id) }}" class="btn btn-warning">
                                              <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <button type="submit" class="btn btn-danger">
                                              <i class="bi bi-trash"></i>
                                            </button>
                                          </form>
                                        </th>
                                        <td>{{ $item->nim }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>
                                          <a href="{{ asset('gambar/'.$item->gambar) }}" alt="" srcset="">
                                          {{ $item->gambar }}
                                        </td>
                                        <td> 
                                          dibuat : {{ $item->created_at }} <br> 
                                          diperbaharui : {{ $item->updated_at }}
                                        </td>

                                      </tr>
                                  @empty
                                      <tr >
                                        <td colspan='7' style="text-align: center;font-weight: 700">
                                          <h2>
                                            Data Kosong
                    
                                          </h2>
                                        </td>
                                      </tr>
                                  @endforelse
                                  
                                  
                                </tbody>
                              </table>
                              <!-- End Table with stripped rows -->

                            </div>
                          </div>
                        </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        



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