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
                            <li class="active"><a href="./index.html">Home</a></li>
                            <li><a href="./projects.html">Posts</a></li>
                            <li><a href="#">Product</a>
                                <ul class="dropdown">
                                    <li><a href="./Project-details.html">Produk UMKM</a></li>
                                    <li><a href="./blog-details.html">Sewa Kos</a></li>
                                </ul>
                            </li>
                            <li><a href="./about.html">About</a></li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__widget">
                        <span>KKN NR 05 UNTAG SURABAYA</span>
                        <h4>+01 123 456 789</h4>
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
            <div class="hero__items set-bg" data-setbg="pengunjung/img/dok3.jpeg">
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
            {{-- <div class="hero__items set-bg" data-setbg="pengunjung/img/dok1.jpeg">
                <div class="hero__text">
                    <h2>Quality is not only our standard.</h2>
                    <div class="hero__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="pengunjung/img/dok2.jpeg">
                <div class="hero__text">
                    <h2>Quality is not only our standard.</h2>
                    <a href="#" class="primary-btn">See Project</a>
                    <a href="#" class="more_btn">Discover more</a>
                    <div class="hero__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div> --}}
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
                        <a href="#" class="primary-btn normal-btn">View All</a>
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
                                    <span>CEO & Founder</span>
                                </div>
                                <p>{{ $item->created_at }}</p>
                                <div class="team__social">
                                    {{-- <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a> --}}
                                    <a href="#"><i class="fa fa-instagram"></i></a>
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
                        <div class="blog__details__title">
                            <ul>
                                <li>December 20, 2019 </li>
                                <li>By John Doe</li>
                                <li>Planning</li>
                            </ul>
                            <h2>Target and Amazon Shopping List for Home Stagers</h2>
                            {{-- <img src="img/blog/details/blog-details.jpg" alt=""> --}}
                            <p>Forget Ebay and other forms of advertising for your property that costs you hard earned
                                money. Properties have ready several locations around the world to take your free
                                listings for any luxury property you have.</p>
                        </div>
                        <div class="blog__details__text">
                            <p>Each location web site is purpose built so every Search Engine will pick up new listings
                                within minutes. This way your customers only have to type in keywords relating to their
                                search for a luxury home and the Search Engine will show the Invest Asset web site
                                applicable to their location they are looking for.</p>
                            <p>Most real estate companies are way too busy with selling their client’s properties to put
                                any effort forth to their web site. Hence, making it difficult for web surfers to find
                                their listings.</p>
                        </div>
                        <div class="blog__item__quote">
                            <p>“Without question this is the stager you want to use! Jennifer staged a hard to sell home
                                for me and we sold it fast! …. Jennifer made it possible.”</p>
                            <span>Martin Lockhart</span>
                        </div>
                        <div class="blog__details__text">
                            <p>Now times have changed and we at Investment Assets Properties are thinking of the
                                customer before the business. If you have a property in a location not listed at
                                Investment Assets Properties. Don’t worry. A quick email to us will ensure your location
                                is built to accommodate your listing.</p>
                            <p>Selling your luxury home, condominium or property should not be a painstaking event. It
                                should be easy and stress free and it should be able to be advertised on a global scale
                                for free. Investment Assets Properties can and will do this for you in a hassle free
                                way.</p>
                        </div>
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
                        <a href="#" class="primary-btn normal-btn">View All</a>
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
                                <span>Architecture</span>
                                <h4>{!! $item->deskripsi_produk !!}</h4>
                                <a href="#">Read more</a>
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
                        <div class="blog__details__title">
                            <ul>
                                <li>December 20, 2019 </li>
                                <li>By John Doe</li>
                                <li>Planning</li>
                            </ul>
                            <h2>Target and Amazon Shopping List for Home Stagers</h2>
                            {{-- <img src="img/blog/details/blog-details.jpg" alt=""> --}}
                            <p>Forget Ebay and other forms of advertising for your property that costs you hard earned
                                money. Properties have ready several locations around the world to take your free
                                listings for any luxury property you have.</p>
                        </div>
                        <div class="blog__details__text">
                            <p>Each location web site is purpose built so every Search Engine will pick up new listings
                                within minutes. This way your customers only have to type in keywords relating to their
                                search for a luxury home and the Search Engine will show the Invest Asset web site
                                applicable to their location they are looking for.</p>
                            <p>Most real estate companies are way too busy with selling their client’s properties to put
                                any effort forth to their web site. Hence, making it difficult for web surfers to find
                                their listings.</p>
                        </div>
                        <div class="blog__item__quote">
                            <p>“Without question this is the stager you want to use! Jennifer staged a hard to sell home
                                for me and we sold it fast! …. Jennifer made it possible.”</p>
                            <span>Martin Lockhart</span>
                        </div>
                        <div class="blog__details__text">
                            <p>Now times have changed and we at Investment Assets Properties are thinking of the
                                customer before the business. If you have a property in a location not listed at
                                Investment Assets Properties. Don’t worry. A quick email to us will ensure your location
                                is built to accommodate your listing.</p>
                            <p>Selling your luxury home, condominium or property should not be a painstaking event. It
                                should be easy and stress free and it should be able to be advertised on a global scale
                                for free. Investment Assets Properties can and will do this for you in a hassle free
                                way.</p>
                        </div>
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
                            <a href="#"><img src="pengunjung/img/logo.png" alt=""></a>
                        </div>
                        <p>7176 Blue Spring Lane <br />Santa Monica, CA 90403</p>
                        <ul>
                            <li>Info.colorlib@gmail.com</li>
                            <li>+84 123 456 789</li>
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
                        <h6>Company</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Our Works</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">FAQs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Services</h6>
                        <ul>
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Interior Design</a></li>
                            <li><a href="#">Exterior Design</a></li>
                            <li><a href="#">Planning</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__address">
                        <h6>Get In Touch</h6>
                        <p>7176 Blue Spring Lane <br />Santa Monica, CA 90403</p>
                        <ul>
                            <li>Info.colorlib@gmail.com</li>
                            <li>+84 123 456 789</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <div class="copyright__text">
                            <p>Copyright ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i
                                    class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="copyright__widget">
                            <a href="#">Terms of use</a>
                            <a href="#">Privacy Policy</a>
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
