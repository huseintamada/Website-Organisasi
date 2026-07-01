<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact</title>

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
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/owl.carousel.min.css' ?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url() . 'theme/css/style.css' ?>" rel="stylesheet">
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
     <!--//END HEADER -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-title">
                        <h2>Hubungi Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-form">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 contact-option">
                                <div class="contact-option_rsp">
                                    <h3>Tinggalkan Pesan</h3>
                                    <form action="<?php echo site_url('contact/kirim_pesan'); ?>" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name" name="xnama"
                                                required>
                                        </div>
                                        <!-- // end .form-group -->
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email" name="xemail"
                                                required>
                                        </div>
                                        <!-- // end .form-group -->
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone" name="xphone"
                                                required>
                                        </div>
                                        <!-- // end .form-group -->
                                        <div class="form-group">
                                            <textarea placeholder="Message" class="form-control" name="xmessage"
                                                required rows="5"></textarea>
                                        </div>
                                        <!-- // end .form-group -->
                                        <button type="submit" class="btn btn-default btn-submit">SUBMIT</button>
                                        <div><?php echo $this->session->flashdata('msg'); ?></div>
                                        <!-- // end #js-contact-result -->
                                    </form>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="contact-address">
                                    <h3>Lokasi</h3>
                                    <div class="contact-details">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <h6>Alamat</h6>
                                        <p> Jl. H. Somad No.45, Cireundeu, Kec. Ciputat Tim., Kota Tangerang Selatan, Banten 15419
                                        </p>
                                    </div>
                                    <br>
                                    <div class="contact-details">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        <h6>Email</h6>
                                        <p>
                                            kmik.jktofficial@gmail.com 
                                        </p>
                                    </div>
                                    <br>
                                    <div class="contact-details">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <h6>Phone</h6>
                                        <p>085882910029</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="contact-center">OR</p>
                </div>
            </div>
        </div>
    </section>
    <!--//END  ABOUT IMAGE -->
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
    <script src="<?php echo base_url() . 'theme/js/owl.carousel.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/validate.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/tweetie.min.js' ?>"></script>
    <!-- Subscribe / Contact-->
    <script src="<?php echo base_url() . 'theme/js/subscribe.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/contact.js' ?>"></script>
    <!-- Script JS -->
    <script src="<?php echo base_url() . 'theme/js/script.js' ?>"></script>
</body>

<style>
/* === CONTACT WHITE STYLE (INLINE PHP) === */

.contact {
    background: #f7f7f7;
    padding: 90px 0 40px;
}

.contact-form {
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 10px 28px rgba(0,0,0,0.08);
}

/* BORDER TEBAL DI FORM */
.contact-option {
    border-right: 3px solid #e6e6e6; /* sebelumnya 1px */
    padding: 45px 60px;
}

.contact-option .form-control {
    border: 1px solid #ddd;
    border-radius: 8px;
    height: 46px;
    margin-bottom: 15px;
}

.contact-option textarea.form-control {
    height: auto;
}

.btn-submit {
    background: #222;
    color: #fff;
    border: none;
    padding: 12px 40px;
    border-radius: 30px;
    font-weight: 600;
}

.btn-submit:hover {
    background: #000;
}

.contact-address {
    background: #fafafa;
    padding: 45px 50px;
}

.contact-details i {
    color: #333;
}

.contact-details h6 {
    color: #222;
    font-weight: 600;
}

.contact-details p {
    color: #666;
}

/* RESPONSIVE */
@media (max-width: 767px) {
    .contact-option {
        border-right: none;
        padding: 25px 20px;
    }

    /* garis bawah juga lebih tebal */
    .contact-option_rsp {
        border-bottom: 3px solid #e6e6e6; /* sebelumnya 1px */
        padding-bottom: 25px;
        margin-bottom: 20px;
    }

    .contact-center {
        display: none;
    }
}
</style>


</html>