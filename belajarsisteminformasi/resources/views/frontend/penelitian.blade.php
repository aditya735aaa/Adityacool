@extends('frontend.pages.pages')

@section('content')
<div class="container mt-5">
    <h2 class="fw-bold text-primary">Hasil karya Penelitian</h2>
    <hr class="line1">
    <p class="text-secondary">
        Tri Dharma perguruan tinggi merupakan kewajiban perguruan tinggi dalam menyelenggarakan pendidikan, penelitian,
        dan pengabdian kepada masyarakat. Salah satunya adalah bagi dosen untuk berinovasi dengan terlibat dalam
        berbagai penelitian.
        Berikut adalah beberapa hasil penelitian dosen TI di Fasilkom UIGM yang telah terpublikasi secara nasional
        maupun internasional:
    </p>
    <hr>

    <div class="row g-4">
        <!-- Card 1 -->
        <div class="col-md-4">
            <div class="card p-3 bg-light">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('asset/image/Ellipse.png') }}" alt="Foto Dosen"
                        class="profile-img">
                    <div>
                        <h6 class="fw-bold m-0">Trisnawati</h6>
                        <small class="text-muted">Dosen Sistem Informasi</small>
                    </div>
                </div>
                <div class="card-body">
                    <p><strong>Judul Penelitian:</strong> "Judul penelitian dosen terkait. Lorem Ipsum is simply dummy
                        text..."</p>
                    <a href="#" class="btn btn-primary btn-sm">Selanjutnya &gt;</a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4">
            <div class="card p-3 bg-light">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('asset/image/Ellipse.png') }}" alt="Foto Dosen"
                        class="profile-img">
                    <div>
                        <h6 class="fw-bold m-0">Trisnawati</h6>
                        <small class="text-muted">Dosen Sistem Informasi</small>
                    </div>
                </div>
                <div class="card-body">
                    <p><strong>Judul Penelitian:</strong> "Judul penelitian dosen terkait. Lorem Ipsum is simply dummy
                        text..."</p>
                    <a href="#" class="btn btn-primary btn-sm">Selanjutnya &gt;</a>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4">
            <div class="card p-3 bg-light">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('asset/image/Ellipse.png') }}" alt="Foto Dosen"
                        class="profile-img">
                    <div>
                        <h6 class="fw-bold m-0">Trisnawati</h6>
                        <small class="text-muted">Dosen Sistem Informasi</small>
                    </div>
                </div>
                <div class="card-body">
                    <p><strong>Judul Penelitian:</strong> "Judul penelitian dosen terkait. Lorem Ipsum is simply dummy
                        text..."</p>
                    <a href="#" class="btn btn-primary btn-sm">Selanjutnya &gt;</a>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-4">
            <div class="card p-3 bg-light">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('asset/image/Ellipse.png') }}" alt="Foto Dosen"
                        class="profile-img">
                    <div>
                        <h6 class="fw-bold m-0">Trisnawati</h6>
                        <small class="text-muted">Dosen Sistem Informasi</small>
                    </div>
                </div>
                <div class="card-body">
                    <p><strong>Judul Penelitian:</strong> "Judul penelitian dosen terkait. Lorem Ipsum is simply dummy
                        text..."</p>
                    <a href="#" class="btn btn-primary btn-sm">Selanjutnya &gt;</a>
                </div>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="col-md-4">
            <div class="card p-3 bg-light"> 
                <div class="d-flex align-items-center">
                    <img src="{{ asset('asset/image/Ellipse.png') }}" alt="Foto Dosen"
                        class="profile-img">
                    <div>
                        <h6 class="fw-bold m-0">Trisnawati</h6>
                        <small class="text-muted">Dosen Sistem Informasi</small>
                    </div>
                </div>
                <div class="card-body">
                    <p><strong>Judul Penelitian:</strong> "Judul penelitian dosen terkait. Lorem Ipsum is simply dummy
                        text..."</p>
                    <a href="#" class="btn btn-primary btn-sm">Selanjutnya &gt;</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
