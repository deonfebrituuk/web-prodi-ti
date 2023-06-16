<div class="pagetitle">
    <h1>{{ $title }}</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
        <li class="breadcrumb-item"><a href="{{ 
        url( request()->segment(1) != ''  ? route(request()->segment(1).'.index') : route('dashboard.index') )}}">{{ $page }}</a></li>
        <li class="breadcrumb-item active">{{ $title }}</li>
    </ol>
    </nav>
</div>