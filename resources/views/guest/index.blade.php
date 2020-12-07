@include('guest.includes.header')
<div class="flash-news-banner">
    <div class="container text-center">
        <p>
            SELAMAT DATANG DI
        </p>
        <h1>UNIVERSITAS HASANUDDIN</h1>
    </div>
</div>
<div class="content-wrapper">
    <div class="container">
        <div class="row" data-aos="fade-up">
            <div class="col-xl-12 stretch-card grid-margin">
                <div class="position-relative w-100">
                    @php
                    $ban = DB::table('tb_headline')->select("*")->whereRaw('id = ?', '1')->get()->first();
                    @endphp
                    <img src="{{ $ban->gambar }}" alt="banner" class="img-fluid w-100" />
                    <div class="banner-content">
                        <h1 class="mb-2">
                            {{ $ban->judul }}
                            @php
                            $ban = null;
                            @endphp
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-wrapper">
        <div class="container">
            <div class="col-sm-12">
                <div class="card" data-aos="fade-up">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="font-weight-600 mb-4">
                                    BERITA TERBARU
                                </h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                @php
                                $ban = DB::table('tb_berita')->select("*")->orderByDesc('log')->limit(5)->get();
                                @endphp
                                @foreach($ban as $con)
                                <div class="row">
                                    <div class="col-sm-4 grid-margin">
                                        <div class="rotate-img">
                                            <img src="{{ asset($con->gambar) }}" alt="banner" class="img-fluid" />
                                        </div>
                                    </div>
                                    <div class="col-sm-8 grid-margin">
                                        <h2 class="font-weight-600 mb-2">
                                            <a href='/berita/{{ $con->id }}' class="text-dark">{{ $con->judul }}</a>
                                        </h2>
                                        <p class="fs-13 text-muted mb-0">
                                            Diposting :&nbsp;{{$con->log }}
                                        </p>
                                        <p class="fs-15">

                                            {!! substr($con->konten,0, 250) !!}...
                                        </p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="col-lg-4">
                                <!--
                                <h2 class="mb-4 text-primary font-weight-600">
                                    Kegiatan Terbaru
                                </h2>
                                @php
                                $ban = DB::table('tb_kegiatan')->select("*")->orderByDesc('log')->limit(3)->get();
                                @endphp
                                @foreach($ban as $con)
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="border-bottom pb-4 pt-4">

                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <h5 class="font-weight-600 mb-1">
                                                        <a href='/kegiatan/{{ $con->id }}' class="text-dark">{{ $con->judul }}</a>
                                                    </h5>
                                                    <p class="fs-13 text-muted mb-0">
                                                        <span class="mr-2">Diposting :&nbsp;</span>{{$con->log}}
                                                    </p>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="rotate-img">
                                                        <img src="{{ asset($con->gambar) }}" alt="banner" class="img-fluid" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                -->
                                <!-- <div class="trending"> -->
                                <h2 class="mb-4 text-primary font-weight-600">
                                    Informasi Penting
                                </h2>
                                @php
                                $ban = DB::table('tb_informasi')->select("*")->orderByDesc('log')->limit(5)->get();
                                @endphp
                                @foreach($ban as $con)
                                <div class="mb-4">
                                    <p class="mt-3">
                                        <span class="font-weight-bold"><a href='/informasi/{{ $con->id }}' class="text-dark">{{ $con->judul }}</a></span>
                                    </p>
                                    <p class="fs-13 text-muted mb-0">
                                        <span class="mr-2">Diposting :&nbsp;</span>{{$con->log}}
                                    </p>
                                </div>
                                @endforeach
                                @php
                                $ban = null;
                                @endphp
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('guest.includes.footer')