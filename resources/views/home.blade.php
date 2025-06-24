@extends('layout.template')

@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        html,
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #e70660;
        }

        .navbar {
            background-color: #120202;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            color: #111 !important;
            font-weight: 700;
            font-size: 1.5rem;
            opacity: 1 !important;
        }

        .masthead {
            background: url('{{ asset('storage/images/1750670271_point.jpg') }}') no-repeat center center;
            background-size: cover;
            background-attachment: fixed;
            min-height: 100vh;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            position: relative;
        }

        .masthead::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            z-index: 0;
        }

        .masthead h1,
        .masthead h2,
        .masthead .btn-custom {
            position: relative;
            z-index: 1;
        }

        .masthead h1 {
            font-size: 4rem;
            font-weight: 700;
            color: #ff6f61;
            text-shadow: 3px 3px 8px rgba(0, 0, 0, 0.4);
        }

        .masthead h2 {
            font-size: 1.8rem;
            font-style: italic;
            margin-top: 10px;
            color: white;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6);
        }

        .btn-custom {
            background: linear-gradient(to right, #a10b33, #ff6f61);
            border: none;
            border-radius: 30px;
            padding: 12px 36px;
            font-size: 1.2rem;
            color: white;
            margin-top: 30px;
            transition: all 0.3s ease;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.2);
        }

        .btn-custom:hover {
            background: linear-gradient(to right, #ff6f61, #f3124e);
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.3);
        }

        .carousel-container {
            width: 100%;
            background-color: #ffcdd2;
            min-height: 100vh;
            /* ✅ ini kunci agar full screen */
            padding: 60px 30px 60px 30px;
            display: flex;
            align-items: center;
        }


        .carousel-inner img {
            height: 300px;
            object-fit: cover;
            border-radius: 12px;
        }

        .carousel-indicators [data-bs-target] {
            background-color: #ec407a;
        }

        .carousel-section h2 {
            font-size: 2.8rem;
            font-weight: 700;
            color: #6a1b1a;
        }

        .carousel-section p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #333;
        }

        .content-section {
            min-height: 100vh;
            background-color: #ffcdd2;
            padding: 60px 20px;
            display: flex;
            align-items: center;
        }

        .carousel-item {
            padding: 20px 10px;
            background-color: #fff;
            border-radius: 10px;
            margin-top: 20px;
            transition: all 0.3s ease;
            text-align: center;
        }

        .carousel-item img {
            border-radius: 10px;
            max-height: 250px;
            object-fit: cover;
        }

        .carousel-item header h4 {
            font-size: 1.2rem;
            margin-top: 15px;
            font-weight: 600;
        }

        .carousel-item p {
            font-size: 0.95rem;
            color: #333;
        }

        .carousel-item header a {
            color: #b71c1c;
            text-decoration: none;
        }

        .carousel-item header a:hover {
            text-decoration: underline;
        }


        .footer {
            text-align: center;
            background-color: #ffffff;
            padding: 20px;
            font-size: 0.9rem;
            margin-top: 0;
        }

        @media (max-width: 768px) {
            .masthead h1 {
                font-size: 3rem;
            }

            .masthead h2 {
                font-size: 1.4rem;
            }
        }
    </style>

    <!-- Header -->
    <header class="masthead">
        <h1>NYAWIJI</h1>
        <h2>Navigasi Wisata Jogja Istimewa</h2>
        <a class="btn btn-custom" href="javascript:void(0);" onclick="showContent()">Selengkapnya</a>

    </header>

    <!-- Section Pink Fullscreen -->
    <section id="carousel-section" class="carousel-container">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Konten Kiri -->
                <div class="col-md-6 mb-4 mb-md-0 carousel-section">
                    <h2>Sugeng Rawuh ing Tanah Ngayogyakarta Hadiningrat</h2>
                    <p>
                        "Sakjane dudu mung panggonan, nanging pangalaman rasa kang ora bakal lali."

                        Selamat datang di laman pariwisata Daerah Istimewa Yogyakarta, bumi Mataram yang sarat makna. Di
                        sinilah budaya Jawa tumbuh dan berkembang, alam yang lestari bersatu padu, dan keramahan warganya
                        menjadikan setiap perjalanan terasa istimewa.

                        Temukan keindahan candi-candi kuno, pantai-pantai di selatan, gunung yang menjulang menyentuh awan,
                        hingga keraton yang menjaga keluhuran budaya Jawa.
                        Setiap sudut Yogya menyimpan cerita. Setiap langkahmu akan membawa rasa.

                </div>

                <!-- Carousel Kanan -->
                <div class="col-md-6">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('storage/images/1750651137_point.jpg') }}" class="d-block w-100"
                                    alt="Candi Prambanan">
                                <header class="mt-3">
                                    <h4><a href="https://maps.app.goo.gl/u3rufXTSwjzjzs7u8" target="_blank">Candi
                                            Prambanan</a></h4>
                                </header>
                                <p class="mt-2">
                                    Candi Prambanan buka setiap hari dari pukul 06.30 hingga 17.00 WIB. Untuk harga tiket
                                    masuk, wisatawan domestik usia 10 tahun ke atas membayar Rp 50.000, sedangkan usia 3-10
                                    tahun membayar Rp 25.000.
                                </p>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('storage/images/1750651722_point.jpg') }}" class="d-block w-100"
                                    alt="Pantai Parangtritis">
                                <header class="mt-3">
                                    <h4><a href="https://maps.app.goo.gl/a1cMBeA6A76j5MtV6" target="_blank">Pantai Parangtritis</a></h4>
                                </header>
                                <p class="mt-2">
                                    Pantai Parangtritis buka 24 jam, namun waktu terbaik untuk berkunjung adalah pagi atau sore hari. Harga tiket masuknya Rp10.000 per orang, belum termasuk biaya parkir.
                                </p>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('storage/images/1750658026_point.jpg') }}" class="d-block w-100" alt="Tebing Breksi">
                                <header class="mt-3">
                                    <h4><a href="https://maps.app.goo.gl/2JWwEpogsoDJrRWE9" target="_blank">Tebing Breksi</a>
                                    </h4>
                                </header>
                                <p class="mt-2">
                                    Tebing Breksi buka setiap hari mulai pukul 06.00 hingga 21.00 WIB. Untuk harga tiket masuk, wisatawan domestik dikenakan biaya Rp10.000 per orang, sedangkan wisatawan asing membayar Rp20.000 per orang
                                </p>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('storage/images/1750655225_point.jpg') }}" class="d-block w-100" alt="Pantai Drini">
                                <header class="mt-3">
                                    <h4><a href="https://maps.app.goo.gl/4GYSb4idLXbGzHRR9" target="_blank">Pantai Drini</a>
                                    </h4>
                                </header>
                                <p class="mt-2">
                                   Pantai Drini buka 24 jam setiap hari. Harga tiket masuknya adalah Rp10.000 per orang
                                </p>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('storage/images/1750653009_point.jpg') }}" class="d-block w-100" alt="Waduk Sermo">
                                <header class="mt-3">
                                    <h4><a href="https://maps.app.goo.gl/8eQe8QV7zbwfZJDp6" target="_blank">Waduk Sermo</a>
                                    </h4>
                                </header>
                                <p class="mt-2">
                                   Waduk Sermo buka setiap hari mulai pukul 07.00 hingga 17.00 WIB. Untuk pengunjung yang ingin berkemah, waduk ini buka 24 jam. Harga tiket masuknya adalah Rp5.000 per orang, belum termasuk biaya parkir kendaraan.
                                </p>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('storage/images/1750653389_point.jpg') }}" class="d-block w-100" alt="Bukit Wisata Pulepayung">
                                <header class="mt-3">
                                    <h4><a href="https://maps.app.goo.gl/EK3gULXQocMFCSLy7" target="_blank">Bukit Wisata Pulepayung</a>
                                    </h4>
                                </header>
                                <p class="mt-2">
                                   Bukit Wisata Pulepayung buka setiap hari mulai pukul 08.00 hingga 21.00 WIB. Harga tiket masuknya adalah Rp20.000 per orang, belum termasuk biaya parkir dan wahana tambahan seperti Sepeda Langit, Jembatan Surga, dan Flying Fox.
                                </p>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p class="small">&copy; Jenni Putri Ardani 2025</p>
        <p>Sistem Informasi Geografis</p>
        <p>Terima kasih telah mengunjungi situs ini, semoga harimu menyenangkan</p>
    </footer>

    <!-- JS Smooth Scroll -->
    <script>
        function showContent() {
            const masthead = document.querySelector('.masthead');
            masthead.style.opacity = '0';
            setTimeout(() => {
                masthead.style.display = 'none';
            }, 500); // tunggu efek fade selesai
            document.getElementById('carousel-section').scrollIntoView({
                behavior: 'smooth'
            });
        }
    </script>
@endsection
