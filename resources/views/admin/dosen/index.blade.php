@extends('admin.layouts')

@section('page-title', 'Data Mahasiswa')

@section('content')
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{ $title }} - 
                  <a href="{{ route('data-dosen.create') }}" class="btn btn-success">
                    <i class="bi bi-trash"></i>
                    Tambah Data
                  </a>
              </h5>
              
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">opsi</th>
                    <th scope="col">Profil Dosen</th>
                    <th scope="col">NIDN</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Time Stamps</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($data as $item)
                      <tr>
                        <th scope="row">{{ $no += 1 }}</th>
                        <th scope="row">
                          <form action="{{ route('data-dosen.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('data-dosen.edit', $item->id) }}" class="btn btn-warning">
                              <i class="bi bi-pencil-square"></i>
                            </a>
                            <button type="submit" class="btn btn-danger">
                              <i class="bi bi-trash"></i>
                            </button>
                          </form>
                        </th>
                        <td>
                          {{ $item->nama }} <br>
                          {{ $item->ttl }} <br>
                          {{ $item->email }} <br>
                          {{-- {{ $item->wa }} <br> --}}
                          <i class="bi bi-whatsapp"></i>
                          <a href="https://wa.me/{{ $item->wa}}">{{ $item->wa }}</a> <br>
                          <i class="bi bi-instagram"></i>
                          <a href="https://www.instagram.com/{{ $item->ig }}">{{ $item->ig }}</a> <br>
                          <i class="bi bi-facebook"></i>
                          <a href="https://web.facebook.com/{{ $item->fb}}">{{ $item->fb }}</a> <br>

                        </td>
                        <td>{{ $item->nidn }}</td>
                        <td>{{ $item->jabatan }}</td>
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
    </section>
@endsection