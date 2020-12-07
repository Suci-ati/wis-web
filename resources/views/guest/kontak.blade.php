@include('guest.includes.header')
@php
$kontak = DB::table('tb_kontak')->select("*")->whereRaw('id = ?', '1')->get()->first();
@endphp
<div class="content-wrapper">
    <div class="container">
        <div class="col-sm-12">
            <div class="card" data-aos="fade-up">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="font-weight-600 mb-5">
                                KONTAK
                            </h1>
                            <p>Alamat : &nbsp; {{ $kontak->alamat }}</p>
                            <p>E-mail : &nbsp; {{ $kontak->email }}</p>
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
$kontak = null;
@endphp
@include('guest.includes.footer')