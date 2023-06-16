@extends('admin.layouts')

@section('page-title', 'Data Kegiatan')

@section('content')
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{ $title }} - 
                  <a href="{{ route('data-kegiatan.create') }}" class="btn btn-success">
                    <i class="bi bi-file-earmark-plus"></i>
                    Tambah Data
                  </a>
              </h5>
              
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col"  style="height: 15%">opsi</th>
                    <th scope="col">Judul</th>
                    <th scope="col" style="height: 10%">Deskripsi</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Time Stamps</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($data as $item)
                      <tr>
                        <th scope="row">{{ $no += 1 }}</th>
                        <th scope="row">
                          <form action="{{ route('data-kegiatan.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('data-kegiatan.edit', $item->id) }}" class="btn btn-warning">
                              <i class="bi bi-pencil-square"></i>
                            </a>
                            <button type="submit" class="btn btn-danger">
                              <i class="bi bi-trash"></i>
                            </button>
                          </form>
                        </th>
                        <td>
                          {{ $item->judul }} <br>

                        </td>
                        <td>{{ $item->deskripsi }}</td>
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