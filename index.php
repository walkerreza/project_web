<?php
// Konfigurasi dasar
$pageTitle = "Website lama";
$description = "Tampilan sederhana modern dengan PHP";

// Data konten (dalam aplikasi nyata, ini bisa berasal dari database)
$featuredItems = [
    [
        'title' => 'Layanan 1',
        'description' => 'Deskripsi layanan pertama yang kami tawarkan.',
        'icon' => 'fas fa-laptop-code'
    ],
    [
        'title' => 'Layanan 2',
        'description' => 'Deskripsi layanan kedua yang kami tawarkan.',
        'icon' => 'fas fa-mobile-alt'
    ],
    [
        'title' => 'Layanan 3',
        'description' => 'Deskripsi layanan ketiga yang kami tawarkan.',
        'icon' => 'fas fa-chart-line'
    ]
];

$teamMembers = [
    [
        'name' => 'John Doe',
        'position' => 'CEO',
        'photo' => 'https://via.placeholder.com/150'
    ],
    [
        'name' => 'Jane Smith',
        'position' => 'CTO',
        'photo' => 'https://via.placeholder.com/150'
    ],
    [
        'name' => 'Mike Johnson',
        'position' => 'Designer',
        'photo' => 'https://via.placeholder.com/150'
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $description; ?>">
    <title><?php echo $pageTitle; ?></title>
    
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header / Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">CompanyName</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Tim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1>solusi website</h1>
                    <p class="lead">Kami menyediakan layanan terbaik untuk kebutuhan digital Anda dengan teknologi terkini.</p>
                    <div class="hero-buttons">
                        <a href="#contact" class="btn btn-primary">Hubungi Kami</a>
                        <a href="#services" class="btn btn-outline-light ms-2">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="https://via.placeholder.com/600x400" alt="Hero Image" class="img-fluid rounded hero-image">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="section-padding">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2>Layanan Kami</h2>
                <p>Kami menawarkan berbagai layanan untuk memenuhi kebutuhan Anda</p>
            </div>
            <div class="row">
                <?php foreach($featuredItems as $item): ?>
                <div class="col-md-4 mb-4">
                    <div class="service-card">
                        <div class="icon-box">
                            <i class="<?php echo $item['icon']; ?>"></i>
                        </div>
                        <h3><?php echo $item['title']; ?></h3>
                        <p><?php echo $item['description']; ?></p>
                        <a href="#" class="read-more">Selengkapnya <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section-padding bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="https://via.placeholder.com/600x400" alt="About Us" class="img-fluid rounded">
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <h2>Tentang Kami</h2>
                        <p>Kami adalah perusahaan yang berdedikasi untuk memberikan solusi digital terbaik bagi klien kami. Dengan pengalaman bertahun-tahun dalam industri, kami telah membantu banyak bisnis untuk tumbuh dan berkembang.</p>
                        <p>Misi kami adalah menyediakan layanan berkualitas tinggi dengan harga yang terjangkau. Kami percaya bahwa setiap bisnis berhak mendapatkan solusi digital yang baik.</p>
                        <div class="stats-row mt-4">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="stat-item">
                                        <h3>100+</h3>
                                        <p>Klien Puas</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="stat-item">
                                        <h3>250+</h3>
                                        <p>Proyek Selesai</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="stat-item">
                                        <h3>10+</h3>
                                        <p>Tahun Pengalaman</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="section-padding">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2>Tim Kami</h2>
                <p>Kenali para profesional di balik kesuksesan kami</p>
            </div>
            <div class="row">
                <?php foreach($teamMembers as $member): ?>
                <div class="col-md-4 mb-4">
                    <div class="team-card">
                        <div class="team-img">
                            <img src="<?php echo $member['photo']; ?>" alt="<?php echo $member['name']; ?>" class="img-fluid">
                        </div>
                        <div class="team-info">
                            <h3><?php echo $member['name']; ?></h3>
                            <p><?php echo $member['position']; ?></p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section-padding bg-light">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2>Hubungi Kami</h2>
                <p>Kami siap membantu Anda dengan solusi terbaik</p>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="contact-info">
                        <h3>Informasi Kontak</h3>
                        <p>Silakan hubungi kami melalui informasi di bawah ini atau isi formulir kontak.</p>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <h4>Alamat</h4>
                                <p>Jl. Contoh No. 123, Jakarta, Indonesia</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone-alt"></i>
                            <div>
                                <h4>Telepon</h4>
                                <p>+62 123 4567 890</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <h4>Email</h4>
                                <p>info@example.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form class="contact-form">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" placeholder="Nama Lengkap" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="email" class="form-control" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Subjek" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="5" placeholder="Pesan" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h3>CompanyName</h3>
                    <p>Solusi digital terbaik untuk bisnis Anda. Kami membantu Anda tumbuh dan berkembang di era digital.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <h4>Tautan</h4>
                    <ul class="footer-links">
                        <li><a href="#home">Beranda</a></li>
                        <li><a href="#services">Layanan</a></li>
                        <li><a href="#about">Tentang Kami</a></li>
                        <li><a href="#team">Tim</a></li>
                        <li><a href="#contact">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <h4>Layanan</h4>
                    <ul class="footer-links">
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Mobile Apps</a></li>
                        <li><a href="#">UI/UX Design</a></li>
                        <li><a href="#">Digital Marketing</a></li>
                        <li><a href="#">SEO</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h4>Newsletter</h4>
                    <p>Berlangganan newsletter kami untuk mendapatkan update terbaru.</p>
                    <form class="newsletter-form">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Email Anda" required>
                            <button class="btn btn-primary" type="submit">Langganan</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> CompanyName. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script src="script.js"></script>
</body>
</html>
