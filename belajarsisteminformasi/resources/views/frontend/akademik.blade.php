@extends('frontend.pages.pages')

@section('content')
<div class="academic-image-wrapper text-center">
    <img src="{{ asset('asset/image/image10.png') }}" class="academic-image img-fluid"
        alt="Mahasiswa UIGM">
</div>

<div class="academik-page container mt-5">
    <h1 class="text-center fw-bold heading-prodi">Program Studi Sistem Informasi</h1>
    <div class="mt-4 description-prodi1">
        <p>
            Program Studi Sarjana Sistem Informasi di bawah naungan Fakultas Ilmu Komputer Universitas Indo Global
            Mandiri (Fasilkom UIGM), yang merupakan program Reguler.
        </p>
    </div>
    <p>
        Program ini dirancang untuk memenuhi kebutuhan tenaga-tenaga terampil dan profesional di bidang sistem
        informasi/manajemen informasi.
    </p>

    <!-- Visi -->
    <h3 class="academik-page2 mt-5 fw-bold">Visi</h3>
    <ul class="visi-list">
        <li>Menjadi Program Studi Sistem Informasi yang menghasilkan sumber daya manusia yang kompeten.</li>
    </ul>

    <!-- Misi -->
    <h3 class="academik-page3 mt-5 fw-bold">Misi</h3>
    <ul class="visi-list2">
        <li>Menyelenggarakan proses belajar mengajar untuk menghasilkan lulusan yang kompeten.</li>
        <li>Meningkatkan kualitas penelitian dan pengabdian kepada masyarakat.</li>
        <li>Mengembangkan kreativitas dan jiwa kewirausahaan mahasiswa.</li>
        <li>Menjalin kerja sama dengan berbagai institusi untuk menciptakan link and match di pasar kerja.</li>
    </ul>

    <!-- Lama Studi -->
    <h3 class="academik-page4 mt-5 fw-bold">Lama Studi</h3>
    <p class="visi-list3">
        Program Studi Sistem Informasi di Fasilkom UIGM mencakup 144 satuan kredit semester (SKS)
        yang dapat diselesaikan dalam waktu empat tahun.
    </p>
</div>
@endsection
