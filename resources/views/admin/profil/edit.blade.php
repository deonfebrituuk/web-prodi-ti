@extends('admin.layouts')

@section('page-title', 'Form Tambah Mahasiswa')

@section('content')
    <div class="col-lg-8">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{ $title }}</h5>

          <!-- Floating Labels Form -->
          <form class="row g-3 "  method="POST" action="{{ route('data-profil.update', $data->id) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="col-12">
              <div class="form-floating">
                <textarea name="visi" class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;">{{ old('visi', $data->id) }}</textarea>
                <label for="floatingTextarea">Visi Program Studi</label>
              </div>
              @error('visi')
                  
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
           <div class="col-12">
              <div class="form-floating">
                <textarea name="misi" class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;">{{ old('misi', $data->misi) }}</textarea>
                <label for="floatingTextarea">Misi Program Studi</label>
              </div>
              @error('misi')
                  
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
              <div class="form-floating">
                <input name="ig" value="{{ old('ig', $data->ig) }}" type="text" class="form-control" id="floatingName" placeholder="Nama Mahasiswa">
                <label for="floatingName">Instagram Prodi</label>
              </div>
              @error('ig')
                  
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
              <div class="form-floating">
                <input name="fb" value="{{ old('fb', $data->fb) }}" type="text" class="form-control" id="floatingName" placeholder="Nama Mahasiswa">
                <label for="floatingName">Facebook Prodi</label>
              </div>
              @error('fb')
                  
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
              <div class="form-floating">
                <input name="linkedin" value="{{ old('linkedin', $data->linkedin) }}" type="text" class="form-control" id="floatingName" placeholder="Nama Mahasiswa">
                <label for="floatingName">Linkedin Prodi</label>
              </div>
              @error('linkedin')
                  
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
              <label for="inputNumber"  class="col-sm-2 col-form-label">Logo Program Studi</label>
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