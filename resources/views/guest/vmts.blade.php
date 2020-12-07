@include('guest.includes.header')
@php
$visi = DB::table('tb_visi')->select("*")->whereRaw('id = ?', '1')->get()->first();
$misi = DB::table('tb_misi')->select("*")->whereRaw('id = ?', '1')->get()->first();
$tujuan = DB::table('tb_tujuan')->select("*")->whereRaw('id = ?', '1')->get()->first();
$sasaran = DB::table('tb_sasaran')->select("*")->whereRaw('id = ?', '1')->get()->first();
@endphp
<div class="content-wrapper">
    <div class="container">
        <div class="col-sm-12">
            <div class="card" data-aos="fade-up">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="font-weight-600 mb-5">
                                VMTS DEPARTEMEN
                            </h1>
                            <h2>VISI</h2>
                            {!! $visi->konten !!}
                            <h2>MISI</h2>
                            {!! $misi->konten !!}
                            <h2>TUJUAN</h2>
                            {!! $tujuan->konten !!}
                            <h2>SASARAN</h2>
                            {!! $sasaran->konten !!}
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
$visi = $misi = $tujuan = $sasaran = null;
@endphp
@include('guest.includes.footer')