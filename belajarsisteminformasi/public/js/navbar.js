document.addEventListener("DOMContentLoaded", function () {
    console.log("JavaScript navbar.js berhasil dimuat!");
    alert("JavaScript Berjalan!");

    const navLinks = document.querySelectorAll(".nav-link");
    const navbarToggler = document.querySelector(".navbar-toggler");
    const navbar = document.querySelector(".navbar");

    // Menutup navbar saat link diklik di tampilan mobile
    navLinks.forEach(link => {
        link.addEventListener("click", function () {
            console.log("Navbar link diklik:", this.textContent);
            const navbarCollapse = document.querySelector(".navbar-collapse");
            if (navbarToggler && navbarCollapse.classList.contains("show")) {
                navbarToggler.click();
            }
        });
    });

    // Efek navbar berubah warna saat scroll
    window.addEventListener("scroll", function () {
        console.log("Scroll terjadi, posisi:", window.scrollY);
        if (window.scrollY > 50) {
            navbar.classList.add("bg-success", "text-white");
            navbar.classList.remove("bg-light");
            console.log("Navbar berubah menjadi hijau");
        } else {
            navbar.classList.add("bg-light");
            navbar.classList.remove("bg-success", "text-white");
            console.log("Navbar kembali ke warna asli");
        }
    });
});
