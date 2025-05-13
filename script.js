/**
 * script.js - File JavaScript utama untuk tampilan modern
 * Dibuat untuk project-web
 */

// Menunggu dokumen HTML selesai dimuat
document.addEventListener('DOMContentLoaded', function() {
    // Navbar scrolling effect
    const navbar = document.querySelector('.navbar');
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
    
    // Smooth scrolling untuk link anchor
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                const navbarHeight = document.querySelector('.navbar').offsetHeight;
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
                
                window.scrollTo({
                    top: targetPosition - navbarHeight,
                    behavior: 'smooth'
                });
                
                // Menutup navbar collapse pada mobile setelah klik
                const navbarToggler = document.querySelector('.navbar-toggler');
                const navbarCollapse = document.querySelector('.navbar-collapse');
                
                if (navbarCollapse.classList.contains('show')) {
                    navbarToggler.click();
                }
            }
        });
    });
    
    // Form submission dengan validasi sederhana
    const contactForm = document.querySelector('.contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validasi form sederhana
            let valid = true;
            const inputs = this.querySelectorAll('input, textarea');
            
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    valid = false;
                    input.classList.add('is-invalid');
                } else {
                    input.classList.remove('is-invalid');
                }
            });
            
            if (valid) {
                // Di sini bisa ditambahkan kode untuk mengirim form ke server
                // Untuk contoh sederhana, kita hanya tampilkan alert
                alert('Terima kasih! Pesan Anda telah dikirim.');
                this.reset();
            } else {
                alert('Mohon isi semua field yang diperlukan.');
            }
        });
    }
    
    // Newsletter form
    const newsletterForm = document.querySelector('.newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const emailInput = this.querySelector('input[type="email"]');
            const email = emailInput.value.trim();
            
            if (email && isValidEmail(email)) {
                // Di sini bisa ditambahkan kode untuk mengirim email ke server
                alert('Terima kasih telah berlangganan newsletter kami!');
                this.reset();
            } else {
                alert('Mohon masukkan alamat email yang valid.');
                emailInput.classList.add('is-invalid');
            }
        });
    }
    
    // Fungsi validasi email sederhana
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    
    // Animasi sederhana untuk elemen saat scroll
    const animateOnScroll = function() {
        const elements = document.querySelectorAll('.service-card, .team-card, .about-content, .contact-info, .contact-form');
        
        elements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            
            if (elementPosition < windowHeight - 100) {
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            }
        });
    };
    
    // Set initial state untuk elemen yang akan dianimasikan
    document.querySelectorAll('.service-card, .team-card, .about-content, .contact-info, .contact-form').forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(20px)';
        element.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
    });
    
    // Jalankan animasi saat halaman dimuat dan saat scroll
    window.addEventListener('load', animateOnScroll);
    window.addEventListener('scroll', animateOnScroll);
});

// Preloader sederhana
window.addEventListener('load', function() {
    // Jika ingin menambahkan preloader, bisa ditambahkan di sini
    // Contoh: document.querySelector('.preloader').style.display = 'none';
    
    // Menambahkan class loaded ke body setelah halaman dimuat
    document.body.classList.add('loaded');
});
