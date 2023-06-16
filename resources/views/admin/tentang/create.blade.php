@extends('admin.layouts')

@section('page-title', 'Form Tambah Tentang')

@section('content')
    <div class="col-lg-8">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{ $title }}</h5>

          <!-- Floating Labels Form -->
          <form class="row g-3 "  method="POST" action="{{ route('data-tentang.store') }}" enctype="multipart/form-data">
            @csrf
            
           <div class="col-12">
              <div class="form-floating">
                <textarea name="deskripsi" class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;">{{ old('deskripsi') }}</textarea>
                <label for="floatingTextarea">Deskripsi</label>
              </div>
              @error('deskripsi')
                  
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