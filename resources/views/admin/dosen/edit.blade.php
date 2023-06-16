@extends('admin.layouts')

@section('page-title', 'Form Ubah Dosen')

@section('content')
    <div class="col-lg-8">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{ $title }}</h5>

          <!-- Floating Labels Form -->
          <form class="row g-3 "  method="POST" action="{{ route('data-dosen.update', $data->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-md-12">
              <div class="form-floating">
                <input name="nama" value="{{ old('nama', $data->nama) }}" type="text" class="form-control" id="floatingName" placeholder="Nama dosen">
                <label for="floatingName">Nama Dosen</label>
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
                <input name="nidn" value="{{ old('nidn', $data->nidn) }}" type="number" class="form-control" id="validationCustom03 " placeholder="NIDN" >
                <label for="">NIDN</label>
              </div>
              @error('nidn')
                  
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
                <input name="jabatan" value="{{ old('jabatan', $data->jabatan) }}" type="text" class="form-control" id="validationCustom03 " placeholder="Petinggi, Atasan, Pimpinan" >
                <label for="">Jabatan : Petinggi, Atasan, Pimpinan</label>
              </div>
              @error('jabatan')
                  
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
                <textarea name="ttl" class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;">{{ old('ttl', $data->ttl) }}</textarea>
                <label for="floatingTextarea">Tempat Tanggal Lahir</label>
              </div>
              @error('ttl')
                  
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
                <input data-inputmask-alias="email" name="email" value="{{ old('email', $data->email) }}" type="email" class="form-control email" id="validationCustom03 " placeholder="NIDN" >
                <label for="">Email Dosen : email@dosen.com</label>
              </div>
              @error('email')
                  
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
                <input name="wa" value="{{ old('wa', $data->wa) }}" type="text" class="form-control wa" id="validationCustom03 " placeholder="Petinggi, Atasan, Pimpinan" >
                <label for="">Nomor Whatsapp : Petinggi, Atasan, Pimpinan</label>
              </div>
              @error('wa')
                  
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
                <input name="ig" value="{{ old('ig', $data->ig) }}" type="text" class="form-control ig" id="validationCustom03 " placeholder="NIDN" >
                <label for="">Instagram Dosen : @instagramDosen </label>
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
            
            
            <div class="col-md-6">
              <div class="form-floating">
                <input name="fb" value="{{ old('fb', $data->fb) }}" type="text" class="form-control fb" id="validationCustom03 " placeholder="Petinggi, Atasan, Pimpinan" >
                <label for="">Facebook Dosen : @fb_dosen </label>
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
              <label for="inputNumber"  class="col-sm-2 col-form-label">File Upload</label>
              <div class="col-sm-10">
                <input name="gambar" value="{{ old('gambar', $data->gambar) }}" class="form-control" type="file" id="formFile" accept=".jpg, .png, .jpeg">
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
              <button type="submit" class="btn btn-warning">Update</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form><!-- End floating Labels Form -->

        </div>
      </div>

    </div>
@endsection