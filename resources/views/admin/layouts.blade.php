<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.partials.head')
</head>

<body>

  <!-- ======= Header ======= -->
  @include('admin.partials.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('admin.partials.sidebar')
  
  <!-- End Sidebar-->

  <main id="main" class="main">

    {{-- <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title --> --}}
    <x-page-title 
      :title='$title' 
      :page='$page'
    />

    @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('admin.partials.footer')
  <!-- End Footer -->

  {{-- script --}}
  @include('admin.partials.script')
  {{-- end-script --}}

</body>

</html>