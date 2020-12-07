@include('guest.includes.header')

<div class="content-wrapper">
    <div class="container">
        <div class="col-sm-12">
            <div class="card" data-aos="fade-up">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="font-weight-600 mb-5">
                                {{ $judul }}
                            </h1>
                            <p>
                                <img src="{{ asset($gambar) }}" class="w-100" />
                            </p>
                            <p class="my-3">
                                {!! $konten !!}
                            </p>
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
@include('guest.includes.footer')