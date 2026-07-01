<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>KMIK JAKARTA - Selamat Datang di KMIK JAKARTA</title>
    <link rel="shorcut icon" href="<?php echo base_url() . 'theme/images/mylogo.png' ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap.min.css' ?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/font-awesome.min.css' ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/simple-line-icons.css' ?>">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/slick.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/slick-theme.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/owl.carousel.min.css' ?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url() . 'theme/css/style.css' ?>" rel="stylesheet">
    <?php
    function limit_words($string, $word_limit)
    {
        $words = explode(" ", $string);
        return implode(" ", array_splice($words, 0, $word_limit));
    }
    ?>
</head>

<body>
    <!--============================= HEADER =============================-->
<div data-toggle="affix" style="border-bottom:solid 1px #f2f2f2;">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button"
                            data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <a href="<?php echo site_url(''); ?>" class="navbar-brand nav-brand2"><img
                                class="img img-responsive" width="100px;"
                                src="<?php echo base_url() . 'theme/images/mylogo.png' ?>">
                            <img class="img img-responsive" width="100px;"
                                src="<?php echo base_url() . 'theme/images/logokabinet.png' ?>"></a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url(''); ?>">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('sejarah'); ?>">Sejarah</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pengurus'); ?>">Pengurus</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('tulisan'); ?>">Tulisan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pengumuman'); ?>">Pengumuman</a>
                                </li>
                                <li class="nav-item">
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('download'); ?>">Download</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('galeri'); ?>">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('contact'); ?>">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
        <section>
    <div class="slider_img layout_two">
        <div id="carousel" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" role="listbox">

                <!-- SLIDE 1 -->
                <div class="carousel-item active"
                     style="height:70vh; min-height:300px;">
                    <img src="<?php echo base_url().'theme/images/slider.jpeg' ?>"
                         alt="First slide"
                         style="width:100%; height:100%; object-fit:cover;">

                    <div class="carousel-caption d-md-block"
                         style="top:50%; transform:translateY(-50%); bottom:auto;">
                        <div style="
                            background:rgba(255,255,255,0.6);
                            padding:20px 30px;
                            border-radius:12px;
                            max-width:90%;
                            margin:auto;">
                            <h1 style="color:#000; font-size:clamp(18px, 4vw, 36px);">
                                KEISLAMAN, KEILMUAN DAN KEKELUARGAAN
                            </h1>
                            <h3 style="color:#000; font-size:clamp(14px, 2.5vw, 20px);">
                                Keislaman itu ruhnya, keilmuan jalannya dan kekeluargaan adalah ikatannya.
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- SLIDE 2 -->
                <div class="carousel-item"
                     style="height:70vh; min-height:300px;">
                    <img src="<?php echo base_url().'theme/images/slider-2.jpeg' ?>"
                         alt="Second slide"
                         style="width:100%; height:100%; object-fit:cover;">

                    <div class="carousel-caption d-md-block"
                         style="top:50%; transform:translateY(-50%); bottom:auto;">
                        <div style="
                            background:rgba(255,255,255,0.6);
                            padding:20px 30px;
                            border-radius:12px;
                            max-width:90%;
                            margin:auto;">
                            <h1 style="color:#000; font-size:clamp(18px, 4vw, 36px);">
                                KEISLAMAN, KEILMUAN DAN KEKELUARGAAN
                            </h1>
                            <h3 style="color:#000; font-size:clamp(14px, 2.5vw, 20px);">
                                Keislaman itu ruhnya, keilmuan jalannya dan kekeluargaan adalah ikatannya.
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- SLIDE 3 -->
                <div class="carousel-item"
                     style="height:70vh; min-height:300px;">
                    <img src="<?php echo base_url().'theme/images/slider-3.jpeg' ?>"
                         alt="Third slide"
                         style="width:100%; height:100%; object-fit:cover;">

                    <div class="carousel-caption d-md-block"
                         style="top:50%; transform:translateY(-50%); bottom:auto;">
                        <div style="
                            background:rgba(255,255,255,0.6);
                            padding:20px 30px;
                            border-radius:12px;
                            max-width:90%;
                            margin:auto;">
                            <h1 style="color:#000; font-size:clamp(18px, 4vw, 36px);">
                                KEISLAMAN, KEILMUAN DAN KEKELUARGAAN
                            </h1>
                            <h3 style="color:#000; font-size:clamp(14px, 2.5vw, 20px);">
                                Keislaman itu ruhnya, keilmuan jalannya dan kekeluargaan adalah ikatannya.
                            </h3>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>
    </div>
</section>

    <!--//END HEADER -->
    <!--============================= ABOUT =============================-->
    <section class="clearfix about about-style2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2>Visi</h2>
                    <p>Terwujudnya KMIK Jakarta sebagai organisasi mahasiswa yang memiliki kesadaran historis dan
                        primordial, dengan mengukuhkan nilai-nilai Tri Tangtu KMIK Jakarta1, yaitu keislaman, keilmuan,
                        dan kekeluargaan, guna membentuk organisasi yang berkarakter.</p>

                </div>
                <div class="col-md-8">
                    <h2>Misi</h2>
                    <p>1. Menanamkan kesadaran historis dan nilai-nilai primordial kepada kader KMIK Jakarta sebagai
                        wujud kecintaan terhadap Kota Pangkal Perjuangan.
                        <br><br>2. Memperkuat nilai-nilai keislaman dalam
                        kehidupan berorganisasi guna membentuk KMIK Jakarta yang berkarakter <br><br>3. Meningkatkan
                        intelektualitas dan daya kritis kader KMIK Jakarta melalui kajian akademik, diskusi, dan
                        pengembangan keilmuan yang relevan dengan kebutuhan zaman. <br><br>4. Membangun rasa
                        kekeluargaan dan
                        solidaritas antara kader dan alumni KMIK Jakarta guna menciptakan lingkungan yang harmonis dan
                        suportif. <br><br>5. Mendorong peran aktif kader KMIK Jakarta dalam pengabdian kepada masyarakat
                        sebagai
                        bentuk kontribusi nyata bagi pembangunan dan kemajuan Kota Karawang. <br><br>6. Memperluas
                        eksistensi
                        KMIK Jakarta melalui semangat kolaborasi dan sinergi dengan organisasi lain. .
                    </p>

                </div>
                <!-- <div class="col-md-4">
                    <img src="<?php echo base_url() . 'theme/images/welcome.png' ?>" class="img-fluid about-img"
                        alt="#">
                </div> -->
            </div>
        </div>
    </section>
    <!--//END ABOUT -->
    <!--============================= OUR COURSES =============================-->
    <section class="our_courses">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Artikel Terbaru</h2>
                </div>
            </div>
            <div class="row">
                <?php foreach ($berita->result() as $row): ?>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="courses_box mb-4">
                            <div class="course-img-wrap">
                                <img src="<?php echo base_url() . 'assets/images/' . $row->tulisan_gambar; ?>"
                                    class="img-fluid" alt="courses-img">
                            </div>
                            <!-- // end .course-img-wrap -->
                            <a href="<?php echo site_url('tulisan/' . $row->tulisan_slug); ?>" class="course-box-content">
                                <h3 style="text-align:center;"><?php echo $row->tulisan_judul; ?></h3>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div> <br>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="<?php echo site_url('tulisan'); ?>" class="btn btn-default btn-courses">View More</a>
                </div>
            </div>
        </div>
    </section>
    <!--//END OUR COURSES -->
    <!--============================= EVENTS =============================-->
    <section class="event">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="event-img2">
                        <?php foreach ($pengumuman->result() as $row): ?>
                            <div class="row">
                                <div class="col-sm-3"> <img
                                        src="<?php echo base_url() . 'theme/images/announcement-icon.png' ?>"
                                        class="img-fluid" alt="event-img"></div><!-- // end .col-sm-3 -->
                                <div class="col-sm-9">
                                    <h3><a
                                            href="<?php echo site_url('pengumuman'); ?>"><?php echo $row->pengumuman_judul; ?></a>
                                    </h3>
                                    <span><?php echo $row->tanggal; ?></span>
                                    <p><?php echo limit_words($row->pengumuman_deskripsi, 10) . '...'; ?></p>

                                </div><!-- // end .col-sm-7 -->
                            </div><!-- // end .row -->
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-12">
                            <?php foreach ($agenda->result() as $row): ?>
                                <div class="event_date">
                                    <div class="event-date-wrap">
                                        <p><?php echo date("d", strtotime($row->agenda_tanggal)); ?></p>
                                        <span><?php echo date("M. y", strtotime($row->agenda_tanggal)); ?></span>
                                    </div>
                                </div>
                                <div class="date-description">
                                    <h3><a href="<?php echo site_url('agenda'); ?>"><?php echo $row->agenda_nama; ?></a>
                                    </h3>
                                    <p><?php echo limit_words($row->agenda_deskripsi, 10) . '...'; ?></p>
                                    <hr class="event_line">
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--//END EVENTS -->
    <!--============================= DETAILED CHART =============================-->
    <div class="detailed_chart">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom chart_top">
                    <div class="chart-img">
                        <img src="<?php echo base_url() . 'theme/images/chart-icon_2.png' ?>" class="img-fluid"
                            alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter"><?php echo $tot_siswa; ?></span> Pengurus
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 chart_top">
                    <div class="chart-img">
                        <img src="<?php echo base_url() . 'theme/images/chart-icon_3.png' ?>" class="img-fluid"
                            alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter"><?php echo $tot_files; ?></span> Download
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="chart-img">
                        <img src="<?php echo base_url() . 'theme/images/chart-icon_3.png' ?>" class="img-fluid"
                            alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter"><?php echo $tot_agenda; ?></span> Agenda</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//END DETAILED CHART -->
    <!--============================= FOOTER =============================-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="foot-logo">
                        <a href="<?php echo site_url(); ?>">
                            <img src="<?php echo base_url() . 'assets/images/logofoot.png' ?>" class="img-fluid"
                                alt="footer_logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap">
                        <h3>Menu Utama</h3>
                        <ul>
                            <li><a href="<?php echo site_url(); ?>">Home</a></li>
                            <li><a href="<?php echo site_url('sejarah'); ?>">Sejarah</a></li>
                            <li><a href="<?php echo site_url('tulisan'); ?>">Tulisan</a></li>
                            <li><a href="<?php echo site_url('galeri'); ?>">Gallery</a></li>
                            <li><a href="<?php echo site_url('contact'); ?>">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap">
                        <h3>Akademik</h3>
                        <ul>
                            <li><a href="<?php echo site_url('pengurus'); ?>">Pengurus </a></li>
                            <li><a href="<?php echo site_url('pengumuman'); ?>">Pengumuman</a></li>
                            <li><a href="<?php echo site_url('download'); ?>">Download</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="address">
                        <h3>Hubungi Kami</h3>
                        <p><span>Alamat: </span> Jl. H. Somad No.45, Cireundeu, Kec. Ciputat Tim., Kota Tangerang
                            Selatan, Banten 15419</p>
                        <p>Email : kmik.jktofficial@gmail.com</p>
                        <ul class="footer-social-icons mt-4">
                            <li><a href="https://www.facebook.com/kmik.kmik.794"><i class="fa-brands fa-facebook fa-2x"></i></a></li>
                            <li><a href="https://www.instagram.com/kmikjakarta/"><i class="fa-brands fa-instagram fa-2x"></i></a></li>
                            <li><a href="https://www.youtube.com/@KMIKJakartaOfficial"><i class="fa-brands fa-youtube fa-2x"></i></a></li>
                            <li><a href="https://www.tiktok.com/@kmikjakarta"><i class="fa-brands fa-tiktok fa-2x"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--//END FOOTER -->
    <!-- jQuery, Bootstrap JS. -->
    <script src="<?php echo base_url() . 'theme/js/jquery.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/tether.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/bootstrap.min.js' ?>"></script>
    <!-- Plugins -->
    <script src="<?php echo base_url() . 'theme/js/slick.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/waypoints.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/counterup.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/owl.carousel.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/validate.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/tweetie.min.js' ?>"></script>
    <!-- Subscribe -->
    <script src="<?php echo base_url() . 'theme/js/subscribe.js' ?>"></script>
    <!-- Script JS -->
    <script src="<?php echo base_url() . 'theme/js/script.js' ?>"></script>
</body>

</html>