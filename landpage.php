<?php
session_start();
if (isset($_SESSION['logout_success'])) {
    echo '<div class="fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg z-50 animate-fade-in-out">'.$_SESSION['logout_success'].'</div>';
    unset($_SESSION['logout_success']);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pusat Kesehatan PRIMA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
         .animate-fade-in-out {
        animation: fadeInOut 3s ease-in-out forwards;
    }
    @keyframes fadeInOut {
        0% { opacity: 0; transform: translateY(-20px); }
        10% { opacity: 1; transform: translateY(0); }
        90% { opacity: 1; transform: translateY(0); }
        100% { opacity: 0; transform: translateY(-20px); }
    }
        body {
            font-family: 'Montserrat', sans-serif;
            scroll-behavior: smooth;
        }

        .service-item {
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .service-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        nav ul li {
            position: relative;
        }

        nav ul li a {
            padding: 10px 15px;
            display: inline-block;
            transition: all 0.3s ease;
        }

        nav ul li a:hover {
            color: #38A169;
            transform: translateY(-3px);
        }

        nav ul li::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: #38A169;
            left: 50%;
            bottom: -5px;
            transition: all 0.3s ease;
        }

        nav ul li:hover::after {
            width: 100%;
            left: 0;
        }

        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .hero-content {
            animation: slideUp 0.8s ease-in-out forwards;
            opacity: 0;
        }

        @keyframes slideUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        .testimonial-card {
            transition: all 0.3s ease;
        }

        .testimonial-card:hover {
            transform: scale(1.03);
        }

        .contact-form {
            transition: all 0.3s ease;
        }

        .contact-form:hover {
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
            z-index: 99;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Back to Top Button -->
    <a href="#home" class="back-to-top bg-green-500 text-white p-3 rounded-full shadow-lg hover:bg-green-600 transition duration-200">
        <i class="fas fa-arrow-up"></i>
    </a>

    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-5 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <div class="logo text-2xl font-bold text-green-600 flex items-center">
                    <i class="fas fa-hospital-alt mr-2"></i> FASKES PRIMA
                </div>
            </div>
            <nav class="hidden md:block">
                <ul class="flex space-x-6">
                    <li><a href="#home" class="hover:text-green-500 font-medium">Beranda</a></li>
                    <li><a href="#about" class="hover:text-green-500 font-medium">Tentang Kami</a></li>
                    <li><a href="#services" class="hover:text-green-500 font-medium">Layanan</a></li>
                    <li><a href="#testimonials" class="hover:text-green-500 font-medium">Testimoni</a></li>
                    <li><a href="#contact" class="hover:text-green-500 font-medium">Kontak</a></li>
                    <li><a href="login.php" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition duration-200 font-medium">Logout</a></li>
                </ul>
            </nav>
            <button class="md:hidden text-green-600 text-2xl" id="mobile-menu-button">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        
        <!--  Menu -->
        <div class="md:hidden hidden bg-white w-full px-5 py-3 shadow-md" id="mobile-menu">
            <ul class="space-y-3">
                <li><a href="#home" class="block hover:text-green-500 font-medium py-2">Beranda</a></li>
                <li><a href="#services" class="block hover:text-green-500 font-medium py-2">Layanan</a></li>
                <li><a href="#about" class="block hover:text-green-500 font-medium py-2">Tentang Kami</a></li>
                <li><a href="#testimonials" class="block hover:text-green-500 font-medium py-2">Testimoni</a></li>
                <li><a href="#contact" class="block hover:text-green-500 font-medium py-2">Kontak</a></li>
                <li><a href="login.php" class="block bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition duration-200 font-medium text-center">Login</a></li>
            </ul>
        </div>
    </header>

    <section id="home" class="hero min-h-screen flex items-center justify-center text-center px-4">
        <div class="hero-content max-w-4xl">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6">Selamat Datang di Pusat Kesehatan PRIMA</h1>
            <p class="text-xl md:text-2xl text-white mb-8">Menyediakan Layanan Kesehatan Terbaik dengan Tim Profesional dan Fasilitas Modern</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#contact" class="bg-green-500 text-white px-8 py-3 rounded-lg shadow-lg hover:bg-green-600 transition duration-200 font-medium">
                    <i class="fas fa-calendar-alt mr-2"></i> Jadwalkan Janji Temu
                </a>
                <a href="#services" class="bg-white text-green-600 px-8 py-3 rounded-lg shadow-lg hover:bg-gray-100 transition duration-200 font-medium">
                    <i class="fas fa-medkit mr-2"></i> Layanan Kami
                </a>
            </div>
        </div>
    </section>

    <section id="stats" class="py-12 bg-green-600 text-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-6">
                    <div class="text-4xl font-bold mb-2">5000+</div>
                    <div class="text-lg">Pasien Terlayani</div>
                </div>
                <div class="p-6">
                    <div class="text-4xl font-bold mb-2">50+</div>
                    <div class="text-lg">Tenaga Medis</div>
                </div>
                <div class="p-6">
                    <div class="text-4xl font-bold mb-2">24/7</div>
                    <div class="text-lg">Layanan Darurat</div>
                </div>
                <div class="p-6">
                    <div class="text-4xl font-bold mb-2">10+</div>
                    <div class="text-lg">Spesialisasi</div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-green-600">Tentang Pusat Kesehatan PRIMA</h2>
                <div class="w-20 h-1 bg-green-500 mx-auto mb-6"></div>
                <p class="text-lg max-w-3xl mx-auto">Pusat Kesehatan PRIMA berkomitmen untuk memberikan layanan kesehatan yang berkualitas dan terjangkau bagi seluruh masyarakat. Dengan tim medis yang profesional dan fasilitas yang lengkap, kami siap menjadi mitra kesehatan keluarga Anda.</p>
            </div>
            
            <div class="flex flex-col md:flex-row items-center gap-10">
                <div class="md:w-1/2">
                    <img src="img/sehat.jpeg" alt="Dokter dan Pasien" class="rounded-lg shadow-xl w-full h-auto">
                </div>
                <div class="md:w-1/2">
                    <h3 class="text-2xl font-bold mb-4 text-green-600">Visi & Misi Kami</h3>
                    <div class="mb-6">
                        <h4 class="text-xl font-semibold mb-2 flex items-center">
                            <i class="fas fa-eye mr-2 text-green-500"></i> Visi
                        </h4>
                        <p>Menjadi pusat kesehatan terdepan yang memberikan pelayanan paripurna dengan standar internasional.</p>
                    </div>
                    <div>
                        <h4 class="text-xl font-semibold mb-2 flex items-center">
                            <i class="fas fa-bullseye mr-2 text-green-500"></i> Misi
                        </h4>
                        <ul class="space-y-2">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Menyediakan layanan kesehatan berkualitas tinggi</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Mengutamakan kepuasan dan keselamatan pasien</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Mengembangkan inovasi dalam pelayanan kesehatan</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Menjangkau seluruh lapisan masyarakat</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="py-20 bg-green-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-green-600">Layanan Kesehatan Kami</h2>
                <div class="w-20 h-1 bg-green-500 mx-auto mb-6"></div>
                <p class="text-lg max-w-3xl mx-auto">Kami menyediakan berbagai layanan kesehatan komprehensif untuk memenuhi kebutuhan Anda dan keluarga.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="service-item bg-white rounded-xl p-8 shadow-md">
                    <div class="text-green-500 text-4xl mb-4">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Pelayanan Umum</h3>
                    <p class="text-gray-600">Konsultasi kesehatan umum dengan dokter berpengalaman untuk diagnosa dan pengobatan berbagai penyakit.</p>
                </div>
                
                <div class="service-item bg-white rounded-xl p-8 shadow-md">
                    <div class="text-green-500 text-4xl mb-4">
                        <i class="fas fa-syringe"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Imunisasi</h3>
                    <p class="text-gray-600">Layanan imunisasi lengkap untuk bayi, anak-anak, dan dewasa sesuai jadwal yang direkomendasikan.</p>
                </div>
                
                <div class="service-item bg-white rounded-xl p-8 shadow-md">
                    <div class="text-green-500 text-4xl mb-4">
                        <i class="fas fa-baby"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">KIA</h3>
                    <p class="text-gray-600">Pelayanan kesehatan ibu dan anak termasuk pemeriksaan kehamilan, persalinan, dan tumbuh kembang anak.</p>
                </div>
                
                <div class="service-item bg-white rounded-xl p-8 shadow-md">
                    <div class="text-green-500 text-4xl mb-4">
                        <i class="fas fa-tooth"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Kesehatan Gigi</h3>
                    <p class="text-gray-600">Perawatan gigi dan mulut termasuk scaling, tambal gigi, cabut gigi, dan perawatan ortodontik.</p>
                </div>
                
                <div class="service-item bg-white rounded-xl p-8 shadow-md">
                    <div class="text-green-500 text-4xl mb-4">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Kesehatan Mental</h3>
                    <p class="text-gray-600">Konseling dan terapi untuk masalah kesehatan mental dengan tenaga profesional yang berpengalaman.</p>
                </div>
                
                <div class="service-item bg-white rounded-xl p-8 shadow-md">
                    <div class="text-green-500 text-4xl mb-4">
                        <i class="fas fa-flask"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Laboratorium</h3>
                    <p class="text-gray-600">Pemeriksaan laboratorium lengkap dengan hasil akurat dan cepat untuk mendukung diagnosa.</p>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#contact" class="inline-block bg-green-500 text-white px-8 py-3 rounded-lg shadow-lg hover:bg-green-600 transition duration-200 font-medium">
                    <i class="fas fa-phone-alt mr-2"></i> Hubungi Kami untuk Info Lebih Lanjut
                </a>
            </div>
        </div>
    </section>

    <section id="testimonials" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-green-600">Apa Kata Pasien Kami?</h2>
                <div class="w-20 h-1 bg-green-500 mx-auto mb-6"></div>
                <p class="text-lg max-w-3xl mx-auto">Testimoni dari pasien yang telah merasakan pelayanan kami.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="testimonial-card bg-green-50 rounded-xl p-8 shadow-md">
                    <div class="flex items-center mb-4">
                        <img src="img/gambar.jpeg" alt="Testimoni 1" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Ibu Siti</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Pelayanan di Puskesmas PRIMA sangat memuaskan. Dokter dan perawat sangat ramah dan profesional. Anak saya tidak taklagi lagi saat imunisasi berkat cara mereka yang sangat baik."</p>
                </div>
                
                <div class="testimonial-card bg-green-50 rounded-xl p-8 shadow-md">
                    <div class="flex items-center mb-4">
                        <img src="img/gambar2.jpeg" alt="Testimoni 2" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Budi Santoso</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Saya sangat puas dengan perawatan gigi yang saya dapatkan. Dokter gigi sangat telaten dan menjelaskan setiap prosedur dengan jelas. Fasilitasnya juga sangat modern."</p>
                </div>
                
                <div class="testimonial-card bg-green-50 rounded-xl p-8 shadow-md">
                    <div class="flex items-center mb-4">
                        <img src="img/gambar1.jpeg" alt="Testimoni 3" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Dewi Anggraeni</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Sebagai ibu hamil, saya sangat terbantu dengan program KIA di PRIMA. Pemeriksaan rutin sangat lengkap dan petugas selalu memberikan informasi yang saya butuhkan."</p>
                </div>
            </div>
        </div>
    </section>

    <section id="doctors" class="py-20 bg-green-600 text-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Tim Dokter Kami</h2>
                <div class="w-20 h-1 bg-white mx-auto mb-6"></div>
                <p class="text-lg max-w-3xl mx-auto">Tim dokter profesional yang siap melayani kesehatan Anda.</p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white text-gray-800 rounded-xl p-6 shadow-lg text-center">
                    <img src="img/dokter1.jpeg" alt="Dokter 1" class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-green-500">
                    <h3 class="text-xl font-bold mb-1">Dr. Ahmad Fauzi</h3>
                    <p class="text-green-600 font-medium mb-3">Dokter Umum</p>
                    <p class="text-sm text-gray-600">Spesialis penyakit dalam dengan pengalaman 10 tahun.</p>
                </div>
                
                <div class="bg-white text-gray-800 rounded-xl p-6 shadow-lg text-center">
                    <img src="img/dokter2.jpeg" alt="Dokter 2" class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-green-500">
                    <h3 class="text-xl font-bold mb-1">Dr. Rina Wijaya</h3>
                    <p class="text-green-600 font-medium mb-3">Dokter Gigi</p>
                    <p class="text-sm text-gray-600">Spesialis ortodontik dan perawatan gigi anak.</p>
                </div>
                
                <div class="bg-white text-gray-800 rounded-xl p-6 shadow-lg text-center">
                    <img src="img/dokter3.jpeg" alt="Dokter 3" class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-green-500">
                    <h3 class="text-xl font-bold mb-1">Dr. Siti Rahayu</h3>
                    <p class="text-green-600 font-medium mb-3">Dokter Anak</p>
                    <p class="text-sm text-gray-600">Spesialis tumbuh kembang anak dan imunisasi.</p>
                </div>
                
                <div class="bg-white text-gray-800 rounded-xl p-6 shadow-lg text-center">
                    <img src="img/dokter4.jpeg" alt="Dokter 4" class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-green-500">
                    <h3 class="text-xl font-bold mb-1">Dr. Bambang S.</h3>
                    <p class="text-green-600 font-medium mb-3">Psikiater</p>
                    <p class="text-sm text-gray-600">Spesialis kesehatan jiwa dan konseling keluarga.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-green-600">Hubungi Kami</h2>
                <div class="w-20 h-1 bg-green-500 mx-auto mb-6"></div>
                <p class="text-lg max-w-3xl mx-auto">Jika Anda memiliki pertanyaan atau ingin membuat janji temu, silakan hubungi kami.</p>
            </div>
            
            <div class="flex flex-col lg:flex-row gap-10">
                <div class="lg:w-1/2">
                    <form class="contact-form bg-white rounded-xl p-8 shadow-md hover:shadow-lg transition duration-300">
                        <div class="mb-6">
                            <label for="name" class="block text-gray-700 font-medium mb-2">Nama Lengkap</label>
                            <input type="text" id="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" required>
                        </div>
                        
                        <div class="mb-6">
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                            <input type="email" id="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" required>
                        </div>
                        
                        <div class="mb-6">
                            <label for="phone" class="block text-gray-700 font-medium mb-2">Nomor Telepon</label>
                            <input type="tel" id="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" required>
                        </div>
                        
                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 font-medium mb-2">Pesan</label>
                            <textarea id="message" rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" required></textarea>
                        </div>
                        
                        <button type="submit" class="w-full bg-green-500 text-white py-3 rounded-lg shadow-lg hover:bg-green-600 transition duration-200 font-medium">
                            <i class="fas fa-paper-plane mr-2"></i> Kirim Pesan
                        </button>
                    </form>
                </div>
                
                <div class="lg:w-1/2">
                    <div class="bg-white rounded-xl p-8 shadow-md h-full">
                        <h3 class="text-2xl font-bold mb-6 text-green-600">Informasi Kontak</h3>
                        
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="text-green-500 text-xl mr-4 mt-1">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-1">Alamat</h4>
                                    <p class="text-gray-600">Jl. Suka Makmur No. 1933, Kelurahan Spaceman, Kecamatan Biru, Kota Bandung, Jawa Barat 40234</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="text-green-500 text-xl mr-4 mt-1">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-1">Telepon</h4>
                                    <p class="text-gray-600">(022) 1234567</p>
                                    <p class="text-gray-600">0812-3456-7890 (24 Jam)</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="text-green-500 text-xl mr-4 mt-1">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-1">Email</h4>
                                    <p class="text-gray-600">info@paskesprima.com</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="text-green-500 text-xl mr-4 mt-1">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-1">Jam Operasional</h4>
                                    <p class="text-gray-600">Senin-Jumat: 08.00 - 21.00 WIB</p>
                                    <p class="text-gray-600">Sabtu-Minggu: 08.00 - 17.00 WIB</p>
                                    <p class="text-gray-600">Unit Gawat Darurat: 24 Jam</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-8">
                            <h4 class="font-bold mb-4 text-green-600">Ikuti Kami</h4>
                            <div class="flex space-x-4">
                                <a href="#" class="bg-green-500 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-green-600 transition duration-200">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="bg-green-500 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-green-600 transition duration-200">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="bg-green-500 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-green-600 transition duration-200">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="bg-green-500 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-green-600 transition duration-200">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-green-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4 flex items-center">
                        <i class="fas fa-hospital-alt mr-2"></i> PASKES PRIMA
                    </h3>
                    <p class="text-green-200">Pusat Kesehatan PRIMA memberikan pelayanan kesehatan terbaik dengan fasilitas modern dan tenaga medis profesional.</p>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-4">Tautan Cepat</h3>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-green-200 hover:text-white transition duration-200">Beranda</a></li>
                        <li><a href="#services" class="text-green-200 hover:text-white transition duration-200">Layanan</a></li>
                        <li><a href="#about" class="text-green-200 hover:text-white transition duration-200">Tentang Kami</a></li>
                        <li><a href="#testimonials" class="text-green-200 hover:text-white transition duration-200">Testimoni</a></li>
                        <li><a href="#contact" class="text-green-200 hover:text-white transition duration-200">Kontak</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-4">Layanan</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-green-200 hover:text-white transition duration-200">Konsultasi Dokter</a></li>
                        <li><a href="#" class="text-green-200 hover:text-white transition duration-200">Imunisasi</a></li>
                        <li><a href="#" class="text-green-200 hover:text-white transition duration-200">Kesehatan Ibu & Anak</a></li>
                        <li><a href="#" class="text-green-200 hover:text-white transition duration-200">Perawatan Gigi</a></li>
                        <li><a href="#" class="text-green-200 hover:text-white transition duration-200">Laboratorium</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-4">Berita & Update</h3>
                    <p class="text-green-200 mb-4">Berlangganan untuk mendapatkan informasi terbaru tentang kesehatan.</p>
                    <form class="flex">
                        <input type="email" placeholder="Email Anda" class="px-4 py-2 rounded-l-lg focus:outline-none text-gray-800 w-full">
                        <button type="submit" class="bg-green-500 px-4 py-2 rounded-r-lg hover:bg-green-600 transition duration-200">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
            
            <div class="border-t border-green-700 mt-10 pt-6 text-center text-green-200">
                <p>&copy; 2025 Pusat Kesehatan PRIMA.</p>
            </div>
        </div>
    </footer>

    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        const backToTopButton = document.querySelector('.back-to-top');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.style.display = 'block';
            } else {
                backToTopButton.style.display = 'none';
            }
        });
        
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
                
                mobileMenu.classList.add('hidden');
            });
        });
        
        const contactForm = document.querySelector('.contact-form');
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Terima kasih! Pesan Anda telah terkirim. Kami akan segera menghubungi Anda.');
            contactForm.reset();
        });
    </script>
</body>
</html>