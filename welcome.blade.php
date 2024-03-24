@extends('layout.template')
@section('content')
    <style>
        h1 {
            font-family: 'Volkhov', DM Serif Display;
            font-size: 85px;
            color: #456bdc;
            /* Warna teks */
            text-align: left;
            letter-spacing: 2px;
            margin-bottom: 1px;
            /* Jarak antar elemen */
        }

        h3 {
            font-family: 'Volkhov', DM Serif Display;
            font-size: 55px;
            color: #456bdc;
            /* Warna teks */
            text-align: center;
            letter-spacing: 2px;
            margin-bottom: 1px;
            /* Jarak antar elemen */
        }

        p {
            font-family: DM Serif Display;
            font-size: 20px;
        }
    </style>

    <main class="main" id="top">
        <section style="padding-top: 7rem;">
            <div class="bg-holder" style="background-image:url(asset/img/hero/hero-bg.svg);"></div>

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 hero-img"
                            src="asset/img/hero/hero-img.png" alt="hero-header" /></div>
                    <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
                        <h4 class="fw-bold text-primary mb-3">Website pendaftaran kursus dan pelatihan IT</h4>
                        <h1>#Mudah</h1>
                        <h1>&nbsp;&nbsp;&nbsp;Daftarnya</h1>
                        <b>
                            <p class="mb-4 fw-medium-primary">Ayo, asah kemampuan mu di bidang IT. Daftar
                                berbagai kursus dan pelatihan dengan berbagai kategori di
                                bidang Teknologi dan Informasi.</p>
                        </b>
                        <div class="w-100 d-block d-md-none"></div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
        </section>

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-5" id="Daftar Kursus">

            <div class="container">
                <div class="position-absolute start-100 bottom-0 translate-middle-x d-none d-xl-block ms-xl-n4"><img
                        src="asset/img/dest/shape.svg" alt="destination" /></div>
                <div class="mb-7 text-center">
                    <h5 class="text-secondary"> Berbagai pilihan kursus dan pelatihan </h5>
                    <h3>Kategori</h3>
                </div>
                <div class="row">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        @foreach ($inputs as $index => $input)
                            @if ($index < 6)
                                <div class="col mb-4">
                                    <div class="card h-100 overflow-hidden shadow">
                                        <img class="card-img-top" src="{{ asset('image/' . $input->photo) }}"
                                            alt="{{ $input->NamaKurpel }}" />
                                        <div class="card-body py-4 px-3 d-flex flex-column">
                                            <h4 class="text-secondary fw-medium mb-3">
                                                <a class="link-900 text-decoration-none stretched-link" href="#!">
                                                    {{ $input->NamaKurpel }}
                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            @else
                            @break
                        @endif
                    @endforeach
                </div>

            </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->

</main>
@endsection
