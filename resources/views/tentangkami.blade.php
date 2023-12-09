<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Staging Template">
    <meta name="keywords" content="Staging, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tentang Kami | Website RT 06</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="pengunjung/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="pengunjung/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="pengunjung/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="pengunjung/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="pengunjung/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="pengunjung/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo">
            {{-- <a href="#"><img src="pengunjung/img/logo.png" alt=""></a> --}}
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__widget">
            <span>Call us for any questions</span>
            <h4>+01 123 456 789</h4>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        {{-- <a href="#"><img src="pengunjung/img/logo.png" alt=""></a> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="/">Beranda</a></li>
                            <li><a href="/post">Postingan</a></li>
                            <li><a href="/prod">Produk</a>
                            <li><a href="/prok">Proker</a></li>
                            </li>
                            <li class="active"><a href="/ttg-kami">Tentang Kami</a></li>
                            <li><a href="/kontak">Kontak</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__widget">
                        <span>KKN NR 05 UNTAG SURABAYA</span>
                        <h4>RT 06 RW 02 Desa Keputih Surabaya</h4>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="{{ asset('pengunjung/img/demo2.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Tentang Kami</h2>
                        <div class="breadcrumb__links">
                            <a href="/">Home</a>
                            {{-- <a href="/post">Posts</a> --}}
                            <span>Tentang Kami</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <section class="about-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="about__text about__page__text">
                        <div class="section-title">
                            <span>Selamat Datang Di Halaman</span>
                            <h2>Website RT 06</h2>
                        </div>
                        <div class="about__para__text">
                            <p>Kami dengan bangga mempersembahkan website ini sebagai hasil kolaborasi antara masyarakat
                                Desa Keputih dan Kelompok KKN NR 05 dari Universitas 17 Agustus 1945 Surabaya.
                            </p>
                        </div>

                        <div class="section-title">
                            <span>Jumlah Seluruh Penduduk</span>
                            <h2>Warga RT 06</h2>
                        </div>
                        <div class="about__para__text">
                            <p>Total Penduduk yang ada di rt 06 berjumlah {{ $datapenduduk->jml_penduduk }} jiwa dengan
                                jumlah penduduk berjenis kelamin laki laki terdata {{ $datapenduduk->jml_laki }} dan jumlah penduduk berjenis kelamin
                                perempuan terdata {{ $datapenduduk->jml_perempuan }} kemudian untuk total seluruh KK berjumlah {{ $datapenduduk->jml_kk }}
                            </p>
                        </div>

                        <div class="section-title">
                            <span>Jumlah Penduduk Tetap</span>
                            <h2>Warga RT 06</h2>
                        </div>
                        <div class="about__para__text">
                            <p>Total Penduduk Tetap yang ada di rt 06 berjumlah {{ $wargatetap->jml_penduduk }} jiwa dengan
                                jumlah penduduk berjenis kelamin laki laki terdata {{ $wargatetap->jml_laki }} dan jumlah penduduk berjenis kelamin
                                perempuan terdata {{ $wargatetap->jml_perempuan }} kemudian untuk total seluruh KK berjumlah {{ $wargatetap->jml_kk }}
                            </p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-8 col-md-8">
                    <div class="about__page__services">
                        <div class="about__page__services__text">
                            <p>Di sini, Anda akan menemukan informasi terkini mengenai kehidupan sehari-hari, kegiatan,
                                dan berbagai potensi yang dimiliki oleh Desa Keputih. Dengan tekad untuk meningkatkan
                                kesejahteraan masyarakat, kami berkomitmen untuk menyajikan konten yang informatif,
                                inspiratif, dan bermanfaat.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="services__item">
                                    <img src="img/services/services-5.png" alt="">
                                    <h4>KELOMPOK KKN NR 05 </h4>
                                    <p>Kami mengundang Anda untuk menjelajahi setiap bagian dari website ini, mulai dari
                                        profil Desa Keputih, berita terkini, inisiatif pembangunan, hingga kegiatan
                                        sosial dan budaya yang dilaksanakan di lingkungan kami. Jangan ragu untuk
                                        memberikan masukan atau saran yang dapat membantu kami lebih baik lagi dalam
                                        memenuhi kebutuhan dan harapan masyarakat.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="services__item">
                                    <img src="img/services/services-6.png" alt="">
                                    <h4>UNTAG SURABAYA</h4>
                                    <p>Terima kasih atas dukungan dan partisipasinya dalam membangun Desa Keputih
                                        menjadi tempat yang lebih baik untuk semua. Selamat menikmati eksplorasi Anda di
                                        halaman website resmi Desa Keputih, RT 06/RW 02, Surabaya!</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="services__item">
                                    <img src="img/services/services-5.png" alt="">
                                    <h4>Jumlah Penduduk Tidak Tetap </h4>
                                    <p>Total Penduduk Tidak Tetap yang ada di rt 06 berjumlah {{ $wargatidaktetap->jml_penduduk }} jiwa dengan
                                        jumlah penduduk berjenis kelamin laki laki terdata {{ $wargatidaktetap->jml_laki }} dan jumlah penduduk berjenis kelamin
                                        perempuan terdata {{ $wargatidaktetap->jml_perempuan }} kemudian untuk total seluruh KK berjumlah {{ $wargatidaktetap->jml_kk }}</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="services__item">
                                    <img src="img/services/services-5.png" alt="">
                                    <h4>Jumlah Penduduk Kontrak</h4>
                                    <p>Total Penduduk Kontrak yang ada di rt 06 berjumlah {{ $wargakontrak->jml_penduduk }} jiwa dengan
                                        jumlah penduduk berjenis kelamin laki laki terdata {{ $wargakontrak->jml_laki }} dan jumlah penduduk berjenis kelamin
                                        perempuan terdata {{ $wargakontrak->jml_perempuan }} kemudian untuk total seluruh KK berjumlah {{ $wargakontrak->jml_kk }}</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="services__item">
                                    <img src="img/services/services-5.png" alt="">
                                    <h4>Jumlah Penduduk Kos</h4>
                                    <p>Total Penduduk Kos yang ada di rt 06 berjumlah {{ $wargakos->jml_penduduk }} jiwa dengan
                                        jumlah penduduk berjenis kelamin laki laki terdata {{ $wargakos->jml_laki }} dan jumlah penduduk berjenis kelamin
                                        perempuan terdata {{ $wargakos->jml_perempuan }} kemudian untuk total seluruh KK berjumlah {{ $wargakos->jml_kk }}</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section Begin -->
    <section class="team__ttgkami spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-6">
                    <div class="section-title">
                        <span>Susunan Pengurus</span>
                        <h2>Pengurus RT 06</h2>
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="team__btn">
                        <a href="#" class="primary-btn normal-btn">Lihat Semua</a>
                    </div>
                </div> --}}
            </div>
            <div class="row">
                @foreach ($pengurusrt as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="team__item set-bg" data-setbg="{{ asset('storage/' . $item->image) }}">
                            <div class="team__text">
                                <div class="team__title">
                                    <h5>{{ $item->nama_pengurus }}</h5>
                                    {{-- <h5>{{ $item->nama_jabatan }}</h5> --}}
                                    <span>{{ $item->jabatan }}</span>
                                </div>
                                <p>{{ $item->kategori_pengurus }}</p>
                                <div class="team__social">
                                    {{-- <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a> --}}
                                    {{-- <a href="#"><i class="fa fa-external-link"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="team__ttgkami spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-6">
                    <div class="section-title">
                        <span>Susunan Pengurus</span>
                        <h2>Pengurus PKK RT 06</h2>
                    </div>
                </div>
               
            </div>
            <div class="row mt-4 mb-4">
                @foreach ($penguruspkk as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="team__item set-bg" data-setbg="{{ asset('storage/' . $item->image) }}">
                            <div class="team__text">
                                <div class="team__title">
                                    <h5>{{ $item->nama_pengurus }}</h5>
                                    <span>{{ $item->jabatan }}</span>
                                </div>
                                <p>{{ $item->kategori_pengurus }}</p>
                                <div class="team__social">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <section class="team__ttgkami spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-6">
                    <div class="section-title">
                        <span>Susunan Pengurus</span>
                        <h2>Pengurus Masjid RT 06</h2>
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="team__btn">
                        <a href="#" class="primary-btn normal-btn">Lihat Semua</a>
                    </div>
                </div> --}}
            </div>
            <div class="row mt-4 mb-4">
                @foreach ($pengurusmasjid as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="team__item set-bg" data-setbg="{{ asset('storage/' . $item->image) }}">
                            <div class="team__text">
                                <div class="team__title">
                                    <h5>{{ $item->nama_pengurus }}</h5>
                                    {{-- <h5>{{ $item->jabatan }}</h5> --}}
                                    <span>{{ $item->jabatan }}</span>
                                </div>
                                <p>{{ $item->kategori_pengurus }}</p>
                                <div class="team__social">
                                    {{-- <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a> --}}
                                    <a href="#"><i class="fa fa-external-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="pengunjung/img/footer-bg.jpg">
        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            {{-- <a href="#"><img src="pengunjung/img/logo.png" alt=""></a> --}}
                        </div>
                        <p>RT 06 RW 02 <br />Desa Keputih Surabaya</p>
                        <ul>
                            <li>KKN NR 5</li>
                            <li>Universitas 17 Agustus 1945 Surabaya</li>
                        </ul>
                        <div class="footer__social">
                            {{-- <a href="#"><i class="fa fa-facebook"></i></a> --}}
                            {{-- <a href="#"><i class="fa fa-twitter"></i></a> --}}
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            {{-- <a href="#"><i class="fa fa-linkedin"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Navigasi</h6>
                        <ul>
                            <li><a href="/">Beranda</a></li>
                            <li><a href="/post">Postingan</a></li>
                            <li><a href="/prod">Produk</a></li>
                            <li><a href="/prok">Proker</a></li>
                            <li><a href="/ttg-kami">Tentang Kami</a></li>
                            <li><a href="/kontak">Kontak</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Kategori</h6>
                        <ul>
                            <li><a href="/prod">Produk UMKM</a></li>
                            <li><a href="/prod">Sewa Kos</a></li>
                            <li><a href="/post">Postingan dan Kegiatan Masyarakat</a></li>
                            {{-- <li><a href="#">Planning</a></li> --}}
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__address">
                        <h6>Get In Touch</h6>
                        <p>7176 Blue Spring Lane <br />Santa Monica, CA 90403</p>
                        <ul>
                            <li>Info.colorlib@gmail.com</li>
                            <li>+84 123 456 789</li>
                        </ul>
                    </div>
                </div> --}}
            </div>
            <div class="copyright">
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <div class="copyright__text">
                            <p>Copyright ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> Warga RT 06 RW 02 | Desa Keputih Surabaya <i
                                    class="fa fa-heart-o" aria-hidden="true"></i>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="copyright__widget">
                            <a href="#">KKN NR 5 </a>
                            <a href="#">Universitas 17 Agustus 1945 Surabaya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="pengunjung/js/jquery-3.3.1.min.js"></script>
    <script src="pengunjung/js/bootstrap.min.js"></script>
    <script src="pengunjung/js/jquery.slicknav.js"></script>
    <script src="pengunjung/js/owl.carousel.min.js"></script>
    <script src="pengunjung/js/slick.min.js"></script>
    <script src="pengunjung/js/main.js"></script>
</body>

</html>
