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