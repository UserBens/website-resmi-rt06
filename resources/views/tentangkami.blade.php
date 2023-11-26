<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Staging Template">
    <meta name="keywords" content="Staging, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Postingan | Website RT 06</title>

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
            <a href="#"><img src="pengunjung/img/logo.png" alt=""></a>
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
                                {{-- <ul class="dropdown">
                                    <li><a href="./Project-details.html">Produk UMKM</a></li>
                                    <li><a href="./blog-details.html">Sewa Kos</a></li>
                                </ul> --}}
                            </li>
                            <li class="active"><a href="/ttg-kami">Tentang Kami</a></li>
                            <li><a href="./contact.html">Kontak</a></li>
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
    <div class="breadcrumb-option spad set-bg" data-setbg="pengunjung/img/dok3.jpeg">
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

    <!-- Blog Section Begin -->
    <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-6">
                    <div class="section-title">
                        <span>Kegiatan Terbaru</span>
                        <h2>Postingan</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="team__btn">
                        <a href="#" class="primary-btn normal-btn">Lihat Semua</a>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($postingan as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="team__item set-bg" data-setbg="{{ asset('storage/' . $item->image) }}">
                            <div class="team__text">
                                <div class="team__title">
                                    <h5>{{ $item->judul }}</h5>
                                    {{-- <span>CEO & Founder</span> --}}
                                </div>
                                <p>{{ $item->created_at->diffForHumans() }}</p>
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

    {{-- <h2 class="justify-content-center">tim pengembang website</h2> --}}
    <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-6">
                    <div class="section-title">
                        <span>Kegiatan Terbaru</span>
                        <h2>Postingan</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="team__btn">
                        <a href="#" class="primary-btn normal-btn">Lihat Semua</a>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($postingan as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="team__item set-bg" data-setbg="{{ asset('storage/' . $item->image) }}">
                            <div class="team__text">
                                <div class="team__title">
                                    <h5>{{ $item->judul }}</h5>
                                    {{-- <span>CEO & Founder</span> --}}
                                </div>
                                <p>{{ $item->created_at->diffForHumans() }}</p>
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
    <!-- Blog Section End -->

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
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Navigasi</h6>
                        <ul>
                            <li><a href="#">Beranda</a></li>
                            <li><a href="#">Postingan</a></li>
                            <li><a href="#">Produk</a></li>
                            <li><a href="#">Tentang Kami</a></li>
                            <li><a href="#">Kontak</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Kategori</h6>
                        <ul>
                            <li><a href="#">Produk UMKM</a></li>
                            <li><a href="#">Sewa Kos</a></li>
                            <li><a href="#">Postingan dan Kegiatan Masyarakat</a></li>
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