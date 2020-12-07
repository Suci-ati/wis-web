@include('guest.includes.header')
@php
$sejarah_singkat = DB::table('tb_sejarah_singkat')->select("*")->whereRaw('id = ?', '1')->get()->first();
@endphp
<div class="content-wrapper">
    <div class="container">
        <div class="col-sm-12">
            <div class="card" data-aos="fade-up">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="font-weight-600 mb-5">
                                SEJARAH SINGKAT
                            </h1>
                            {!! $sejarah_singkat->konten !!}
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
$sejarah_singkat = null;
@endphp
@include('guest.includes.footer')