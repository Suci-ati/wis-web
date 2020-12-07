@include('guest.includes.header')
@php
$staff = DB::table('tb_staff')->select("*")->get();
$i = 0;
@endphp
<div class="content-wrapper">
    <div class="container">
        <div class="col-sm-12">
            <div class="card" data-aos="fade-up">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="font-weight-600 mb-5">
                                STAFF ADMINISTRASI DAN LABORATORIUM
                            </h1>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="align-middle text-center">#</th>
                                        <th class="align-middle text-center">Foto</th>
                                        <th class="align-middle text-center">NIP</th>
                                        <th class="align-middle text-center">Nama Lengkap</th>
                                        <th class="align-middle text-center">Jabatan</th>
                                        <th class="align-middle text-center">E-mail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($staff as $d)
                                    @php
                                    $i++;
                                    @endphp
                                    <tr>
                                        <th scope="row" class="align-middle text-center">{{ $i }}</th>
                                        <td class="align-middle text-center"><img src="{{ asset($d->foto) }}" style="max-width: 80px;width: 100%" /></td>
                                        <td class="align-middle text-center">{{ $d->nip }}</td>
                                        <td class="align-middle text-center">{{ $d->nama }}</td>
                                        <td class="align-middle text-center">{{ $d->jabatan }}</td>
                                        <td class="align-middle text-center">{{ $d->email }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
$staff = null;
@endphp
@include('guest.includes.footer')