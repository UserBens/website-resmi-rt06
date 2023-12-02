<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Staging Template">
    <meta name="keywords" content="Staging, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda | Website RT 06</title>

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
    <link rel="stylesheet" href="pengunjung/css/slick.css" type="text/css">
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
            <span>KKN NR 05 UNTAG SURABAYA</span>
            <h4>RT 06 RW 02 KEPUTIH SURABAYA</h4>
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
                            <li class="active"><a href="/">Beranda</a></li>
                            <li><a href="/post">Postingan</a></li>
                            <li><a href="/prod">Produk</a>
                                <ul class="dropdown">
                                    <li><a href="./Project-details.html">Produk UMKM</a></li>
                                    <li><a href="./blog-details.html">Sewa Kos</a></li>
                                </ul>
                            </li>
                            <li><a href="/ttg-kami">Tentang Kami</a></li>
                            <li><a href="/kontak">Kontak</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__widget">
                        <span>KKN NR 05 UNTAG SURABAYA</span>
                        <h4>RT 06 RW 02 KEPUTIH SURABAYA</h4>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="pengunjung/img/launching.jpg">
                <div class="hero__text">
                    <h4 class="text-white">Selamat Datang Di Halaman</h4>
                    <h2 class="mt-3">Website Warga RT 06 </h2>
                    <div class="hero__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="pengunjung/img/dokkomposter1.jpeg">
                <div class="hero__text">
                    <h4 class="text-white">Tim Pengembang Website</h4>
                    <h2 class="mt-3">Kelompok KKN NR 5 UNTAG SURABAYA</h2>
                    <div class="hero__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="pengunjung/img/demo.jpg">
                <div class="hero__text">
                    <h4 class="text-white">Selamat Datang Di Halaman</h4>
                    <h2 class="mt-3">Website Warga RT 06 </h2>
                    <div class="hero__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="pengunjung/img/demo2.jpg">
                <div class="hero__text">
                    <h4 class="text-white">Tim Pengembang Website</h4>
                    <h2 class="mt-3">Kelompok KKN NR 5 UNTAG SURABAYA </h2>
                    <div class="hero__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Begin -->
    {{-- <section class="about spad">
        <div class="container">
            <div class="row">
                @foreach ($postingan as $item)
                    <div class="col-lg-6">
                        <div class="about__text">
                            <div class="section-title">
                                <h2>{{ $item->judul }}</h2>
                            </div>
                            <div class="about__para__text">
                                <p>{!! $item->body !!}</p>
                            </div>
                            <a href="#" class="primary-btn normal-btn">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__pic">
                            <div class="about__pic__inner">
                                <img src="pengunjung/img/about-pic.jpg" alt="">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}
    <!-- About Section End -->

    <!-- Team Section Begin -->
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
                        <a href="/post" class="primary-btn normal-btn">Lihat Semua</a>
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
                                    <a href="{{ route('detailpost', $item->id) }}"><i class="fa fa-external-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <section class="blog-details spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10">
                    <div class="blog__details__content">
                        @foreach ($kontenpost as $item)
                            <div class="blog__details__title">
                                <ul>
                                    <li>{{ $item->created_at->diffForHumans() }}</li>
                                </ul>
                                <h2>{{ $item->judul }}</h2>
                                <img src="{{ asset('storage/' . $item->image) }}" alt="">
                                <p style="text-align: justify;" class="mb-3">{!! (Str::limit($item->body, 800)) !!} </p>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
                                <div class="latest__btn">
                                    <a href="{{ route('detailpost', $item->id) }}" class="primary-btn normal-btn">Selengkapnya</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Section Begin -->
    {{-- <section class="project">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Our works</span>
                        <h2>Latest projects</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="project__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="project__slider__item set-bg" data-setbg="pengunjung/img/project/project-1.jpg">
                            <div class="project__slider__item__hover">
                                <span>interiors</span>
                                <h5>Lower River Street Astoria</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Project Section End -->

    <!-- Latest Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-6">
                    <div class="section-title">
                        <span>Produk Terbaru</span>
                        <h2>Produk UMKM</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="latest__btn">
                        <a href="/prod" class="primary-btn normal-btn">Lihat Semua</a>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($produk as $item)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="latest__item">
                            <div class="latest__item__pic">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="">
                            </div>
                            <div class="latest__item__text">
                                <span>{{ $item->created_at->diffForHumans() }}</span>
                                <h4>{{ $item->nama_produk }}</h4>
                                <a href="{{ route('detailprod', $item->id) }}">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Latest Section End -->

    <section class="blog-details spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10">
                    <div class="blog__details__content">
                        
                        @foreach ($kontenprod as $item)
                            <div class="blog__details__title">
                                <ul>
                                    <li>{{ $item->created_at->diffForHumans() }}</li>
                                </ul>
                                <h2>{{ $item->nama_produk }}</h2>
                                <img src="{{ asset('storage/' . $item->image) }}" alt="">
                                <p style="text-align: justify;" class="mb-3 mt-2">{!! (Str::limit($item->deskripsi_produk, 800)) !!} </p>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 mt-4 mb-5">
                                <div class="latest__btn">
                                    <a href="{{ route('detailprod', $item->id) }}" class="primary-btn normal-btn">Selengkapnya</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
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
