@extends('admin.layouts')

@section('page-title', 'Form Tambah Mahasiswa')

@section('content')
    <div class="col-lg-8">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{ $title }}</h5>

          <!-- Floating Labels Form -->
          <form class="row g-3 "  method="POST" action="{{ route('data-mahasiswa.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
              <div class="form-floating">
                <input name="nama" value="{{ old('nama') }}" type="text" class="form-control" id="floatingName" placeholder="Nama Mahasiswa">
                <label for="floatingName">Nama</label>
              </div>
              @error('nama')
                  
                <div class="invalid-feedback" style="    
                  display: block;
                  width: 100%;
                  margin-top: .25rem;
                  font-size: .875em;
                  color: #dc3545;"
                >
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input name="nim" value="{{ old('nim') }}" type="number" class="form-control" id="validationCustom03 floatingEmail" placeholder="NIM" >
                <label for="floatingEmail">NIM</label>
              </div>
              @error('nim')
                  
                <div class="invalid-feedback" style="    
                  display: block;
                  width: 100%;
                  margin-top: .25rem;
                  font-size: .875em;
                  color: #dc3545;"
                >
                  {{ $message }}
                </div>
              @enderror
            </div>
            
            
            <div class="col-md-4">
              <div class="form-floating mb-3">
                <select name="status" class="form-select" id="floatingSelect " aria-label="State">
                  <option selected disabled>Pilih Status</option>
                  <option  {{ old('status') == 'aktif' ? 'selected' : '' }} value="aktif">Aktif</option>
                  <option {{ old('status') == 'lulus' ? 'selected' : '' }} value="lulus">Lulus</option>
                </select>
                <label for="floatingSelect">Status</label>
              </div>
              @error('status')
                  
                <div class="invalid-feedback" style="    
                  display: block;
                  width: 100%;
                  margin-top: .25rem;
                  font-size: .875em;
                  color: #dc3545;"
                >
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="col-md-12">
              <label for="inputNumber"  class="col-sm-2 col-form-label">File Upload</label>
              <div class="col-sm-10">
                <input name="gambar" value="{{ old('gambar') }}" class="form-control" type="file" id="formFile" accept=".jpg, .png, .jpeg">
              </div>
              @error('gambar')
                  <div class="invalid-feedback" style="    
                    display: block;
                    width: 100%;
                    margin-top: .25rem;
                    font-size: .875em;
                    color: #dc3545;"
                  >
                    {{ $message }}
                  </div>
              @enderror
              
            </div>
            
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Save</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form><!-- End floating Labels Form -->

        </div>
      </div>

    </div>
@endsection