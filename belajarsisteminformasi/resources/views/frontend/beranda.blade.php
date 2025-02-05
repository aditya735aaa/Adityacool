<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CSS Example</title>

    <!-- Link ke file CSS -->
    <link href="{{ asset('asset/main.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    @include('frontend.header.header')

    <main>
        <section class="background-selection" style="background-image: url('{{ asset('asset/image/bgr.png') }}');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-md-6-top">
                        <h2>Penerimaan Mahasiswa Baru Universitas Indo Global Mandiri</h2>
                        <p>
                            Fakultas Ilmu Komputer Universitas Indo Global Mandiri menerima mahasiswa baru tahun ajaran
                            2023/2024 untuk semua program studi pada level sarjana.
                        </p>
                        <a href="#" class="btn btn-primary">Daftar Sekarang</a>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('asset/image/uigm.png') }}" alt="Gedung Universitas"
                            class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('frontend.footer.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    

</body>

</html>
