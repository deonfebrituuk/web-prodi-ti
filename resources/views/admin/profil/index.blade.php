@extends('admin.layouts')

@section('page-title', 'Data Profil')

@section('content')
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{ $title }}  
                  @if ($data->count() < 1)
                    - <a href="{{ route('data-profil.create') }}" class="btn btn-success">
                      <i class="bi bi-file-earmark-plus"></i>
                      Tambah Data
                    </a>  
                  @else
                    <a href=""></a>
                  @endif
                  {{-- @empty($data)
                      <a href="{{ route('data-profil.create') }}" class="btn btn-success">
                        <i class="bi bi-trash"></i>
                        Tambah Data
                      </a>
                  @else

                  @endempty --}}
              </h5>
              {{-- {{ dd(empty($data->items) ) }} --}}
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col"  style="height: 15%">opsi</th>
                    <th scope="col">Visi</th>
                    <th scope="col" style="height: 10%">Misi</th>
                    <th>Media Sosial</th>
                    <th scope="col">Logo Prodi</th>
                    <th scope="col">Time Stamps</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($data as $item)
                      <tr>
                        <th scope="row">{{ $no += 1 }}</th>
                        <th scope="row">
                          <form action="{{ route('data-profil.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('data-profil.edit', $item->id) }}" class="btn btn-warning">
                              <i class="bi bi-pencil-square"></i>
                            </a>
                            <button type="submit" class="btn btn-danger">
                              <i class="bi bi-trash"></i>
                            </button>
                          </form>
                        </th>
                        <td>
                          {{ $item->visi }} <br>

                        </td>
                         <td>
                          {{ $item->misi }} <br>

                        </td>
                        <td>
                            <i class="bi bi-instagram"></i>
                            <a href="https://www.instagram.com/{{ $item->ig }}">{{ $item->ig }}</a> <br>
                            <i class="bi bi-facebook"></i>
                            <a href="https://web.facebook.com/{{ $item->fb}}">{{ $item->fb }}</a> <br>
                            <i class="bi bi-linkedin"></i>
                            <a href="https://linkedin.com/in/{{ $item->fb}}/">{{ $item->linkedin }}</a> 
                        </td>
                        
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
                        <td colspan='6' style="text-align: center;font-weight: 700">
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