<header class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('asset/image/logo.png') }}" alt="Logo" height="30">
            SISTEM INFORMASI UNIVERSITAS IGM
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active"
                        href="{{ route('pages.beranda') }}">Beranda</a></li>
                <li class="nav-item"><a class="nav-link"
                        href="{{ route('pages.akademik') }}">Akademik</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Penelitian</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Berita</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Tentang</a></li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</header>
<script>
        document.addEventListener("DOMContentLoaded", function () {
            const navLinks = document.querySelectorAll(".nav-link");
            const navbarToggler = document.querySelector(".navbar-toggler");
            const navbarCollapse = document.querySelector(".navbar-collapse");
            const navbar = document.querySelector(".navbar");

            // Menutup navbar saat link diklik di tampilan mobile
            navLinks.forEach(link => {
                link.addEventListener("click", function () {
                    if (navbarToggler && navbarCollapse.classList.contains("show")) {
                        navbarToggler.click();
                    }
                });
            });

            // Efek navbar berubah warna dan transisi saat scroll
            window.addEventListener("scroll", function () {
                if (window.scrollY > 50) {
                    navbar.classList.add("shadow", "bg-white", "navbar-scrolled");
                } else {
                    navbar.classList.remove("shadow", "bg-white", "navbar-scrolled");
                }
            });

            // Animasi navbar saat toggle
            navbarToggler.addEventListener("click", function () {
                navbar.classList.toggle("navbar-expanded");
            });
        });

    </script>
