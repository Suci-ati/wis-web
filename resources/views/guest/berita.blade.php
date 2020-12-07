@include('guest.includes.header')
@php
$ban = DB::table('tb_berita')->select("*")->orderByDesc('log')->get();
@endphp
<div class="content-wrapper">
    <div class="container">
        <div class="col-sm-12">
            <div class="card" data-aos="fade-up">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="font-weight-600 mb-5">
                                BERITA
                            </h1>
                            <div class="row">
                                @foreach($ban as $con)
                                <div class="col-lg-4 mb-3">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{ asset($con->gambar) }}" class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $con->judul }}</h5>
                                            <a href="/berita/{{ $con->id }}" class="btn btn-primary">Baca Selengkapnya...</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@php
$ban = null;
@endphp
@include('guest.includes.footer')