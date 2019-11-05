<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="author" content="Grayrids">
  <title>Rumah Harmonis</title>
  <link rel="icon" href="img/logo1.png">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/cssrh/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/cssrh/line-icons.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/cssrh/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/cssrh/owl.theme.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/cssrh/animate.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/cssrh/magnific-popup.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/cssrh/nivo-lightbox.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/cssrh/main.css">    
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/cssrh/responsive.css">

</head>

<body>
  <!-- Header Section Start -->
  <header id="home" class="hero-area">    
    <div class="overlay"></div>
    <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
      <div class="container">
        <a href="index.html" class="navbar-brand"><img src="<?php echo base_url(); ?>assets/img/imgrh/logo.png" alt="" style="width: 200px"></a>       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <i class="lni-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto w-100 justify-content-end">
            <li class="nav-item">
              <a class="nav-link page-scroll" href="#home"><b>Home</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="#features"><b>Fitur</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="#pricing"><b>Produk</b></a>
            </li>  
            <li class="nav-item">
              <a class="nav-link page-scroll" href="#blog"><b>Blog</b></a>
            </li>                                  
            <li class="nav-item">
              <a class="nav-link page-scroll" href="#testimonial"><b>Tentang Kami</b></a>
            </li>     

            <li class="nav-item">
              <a class="nav-link page-scroll" href="#map-area"><b>Kontak</b></a>
            </li> 
            <li>
              <a class="nav-link page-scroll" data-toggle="modal" data-target="#daftar"><b>Daftar</b></a>
            </li>
            <li>
              <a class="nav-link page-scroll" data-toggle="modal" data-target="#login"><b>Masuk</b></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>  
    <div class="container">      
      <div class="row space-100">
        <div class="col-lg-7 col-md-12 col-xs-12">
          <div class="contents">
            <h2 class="head-title">Help People to Help Them Selves</h2>
            <p>Website platform pemyedia layanan dan konten kesehatan mental untuk masyarakat Indonesia.</p>
            <div class="header-button">
              <a href="#" class="btn btn-border-filled">Get Started</a>
              <a href="#features" class="btn btn-border">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-12 col-xs-12">
          <div class="intro-img">
            <img src="<?php echo base_url(); ?>assets/img/imgrh/intro.png" alt="">
          </div>            
        </div>
      </div> 
    </div>             
  </header>
  <!-- Header Section End --> 

  <!-- DAFTAR -->

  <div class="modal fade" id="daftar" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"></h4>
        </div>
        <form method="post" action="<?php echo base_url('welcome/proses_daftar'); ?>">
          <div class="modal-body">
            <div class="text-center">
              <img src="<?php echo base_url('assets/img/imgrh/LOGOBULAT.png'); ?>" style="width: 150px; padding-bottom: 10px">
              <p><b>Silahkan melakukan pendaftaran</b></p>
              <br>
            </div>
            <div class="form-group">
              <!-- <label>Nama Siswa</label> -->
              <input type="text" name="nama_siswa" class="form-control" placeholder="Nama Lengkap">
            </div>
            <div class="form-group">
        <!--       <label>Jenis Kelamin</label> -->
              <select name="jenis_kelamin" class="form-control">
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
              </select>
            </div>
            <div class="form-group">
           <!--    <label>Tempat Lahir</label> -->
              <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
            </div>
            <div class="form-group">
              <!-- <label>Tanggal Lahir</label> -->
              <input type="text" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir">
            </div>
            <div class="form-group">
             <!--  <label>Alamat</label> -->
              <textarea name="alamat" class="form-control" placeholder="Alamat"></textarea>
            </div>
            <div class="form-group">
             <!--  <label>No. Hp</label> -->
              <input type="text" name="no_hp" class="form-control" placeholder="No. Hp">
            </div>
            <div class="form-group">
              <!-- <label>Email</label> -->
              <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
           <!--    <label>Username</label> -->
              <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
              <!-- <label>Password</label> -->
              <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
            <!--   <label>Ulangi Password</label> -->
              <input type="password" name="ulangi_password" class="form-control" placeholder="Ulangi Password">
            </div>
          </div>
          <div class="modal-footer">
            <div class="text-left">
              <button type="submit" class="btn btn-primary">Daftar</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- END DAFTAR -->

  <!-- LOGIN -->

  <div class="modal fade" id="login" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="text-center"></h4>
        </div>
        <form method="post" action="<?php echo base_url('welcome/proses_login'); ?>">
          <div class="modal-body">
            <div class="text-center">
              <img src="<?php echo base_url('assets/img/imgrh/LOGOBULAT.png'); ?>" style="width: 150px; padding-bottom: 10px">
              <br>
              <p><b>Silahkan Login dengan Username dan Password anda</b></p>
            </div>
            <br>
            <div class="form-group">
              <!-- <label>Username</label> -->
              <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
              <!-- <label>Password</label> -->
              <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
          </div>
          <div class="modal-footer">
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Masuk</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- END LOGIN -->

  <!-- features Section Start -->
  <div id="features" class="section">
    <div class="container">
      <div class="section-header">
        <p class="btn btn-subtitle wow fadeInDown animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">why</p>
        <h2 class="section-title wow fadeIn animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">Fast &amp; Awesome Interface</h2>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-12 col-xs-12">
          <div class="feature-thumb wow fadeInDown animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
            <img class="img-fluid" src="img/macbook3.png" alt="">
          </div>
          <div class="feature-content">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link" id="massaging-tab" data-toggle="tab" href="#massaging" role="tab" aria-controls="massaging" aria-selected="false"><i class="lni-bubble"></i> <br> Room Chat</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="free-tab" data-toggle="tab" href="#free" role="tab" aria-controls="free" aria-selected="false"><i class="lni-camera"></i> <br>  Video Call/Voice Call</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="safely-tab" data-toggle="tab" href="#safely" role="tab" aria-controls="safely" aria-selected="false"><i class="lni-user"></i> <br> Face to Face</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active show" id="support-tab" data-toggle="tab" href="#support" role="tab" aria-controls="support" aria-selected="true"><i class="lni-files"></i> <br> Artikel</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade" id="free" role="tabpanel" aria-labelledby="free-tab">Terdapat fitur room chat  yang langsung dengan peer counselor via website.</div>
              <div class="tab-pane fade" id="massaging" role="tabpanel" aria-labelledby="massaging-tab">Terdapat fitur  Video Call/Voice Call yang dapat dipilih klien dan diakses melalui skype.</div>
              <div class="tab-pane fade" id="safely" role="tabpanel" aria-labelledby="safely-tab">Terdapat fitur face to face yang dapat dipilih klien dan membuat janji dengan RH jadwal bertemu psikolog profesional.</div>
              <div class="tab-pane fade active show" id="support" role="tabpanel" aria-labelledby="support-tab">Terdapat fitur artikel yang dapat dibaca oleh pengunjung website terkait kesehatan mental.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- features Section End -->

  <!-- Start Pricing Table Section -->
  <div id="pricing" class="section pricing-section">
    <div class="container">
      <div class="section-header">   
        <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">Produk</p>       
        <h2 class="section-title">Daftar Harga dan Syarat Produk</h2>
      </div>

      <div class="row pricing-tables">
        <div class="col-lg-4 col-md-4 col-xs-12">
          <div class="blog-item-wrapper">
            <div class="pricing-table pricing-active">
              <div class="pricing-details">
                <div class="icon">
                  <i class="lni-comments"></i>
                </div>
                <h2>Room Chat</h2>
                <h2><b>Syarat</b></h2>
                <div style="text-align:left;">
                  <li>Mengisi formulir pendaftaran secara online</li>
                  <li>Klien memilih tanggal konseling</li>
                  <li>Klien memilih opsi durasi konseling</li>
                  <li>Klien menyelesaikan pembayaran</li>
                  <li>Klien menunggu konfirmasi dari Rumah Harmonis via email maksimal 2x 24 jam</li>
                  <li>Klien siap melakukan konseling dengan <i>peer counselor</i></li>
                </div>
                <div class="price">Rp. 15.000<span>/Sesi</span></div>
              </div>
              <div class="plan-button">
                <a href="#" class="btn btn-border">Pilih Produk</a>
              </div>

            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-xs-12">
          <div class="pricing-table pricing-active">
            <div class="pricing-details">
              <div class="icon">
                <i class="lni-camera"></i>
              </div>
              <h2> Video Call/Voice Call</h2>
              <h2><b>Syarat</b></h2>
              <div style="text-align:left;">
                <li>Mengisi formulir pendaftaran secara online</li>
                <li>Klien memilih <i>peer counselor</i></li>
                <li>Klien memilih tanggal konseling</li>
                <li>Klien memilih opsi durasi konseling</li>
                <li>Klien menyelesaikan pembayaran</li>
                <li>Klien menunggu konfirmasi dari Rumah Harmonis via email maksimal 2x 24 jam</li>
                <li>Klien siap melakukan konseling dengan <i>peer counselor</i></li>
              </div>
              <div class="price">Rp. 25.000 <span>/Sesi</span></div>
            </div>
            <div class="plan-button">
              <a href="#" class="btn btn-border">Pilih Produk</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-xs-12">
          <div class="pricing-table pricing-active">
            <div class="pricing-details">
              <div class="icon">
                <i class="lni-user"></i>
              </div>
              <h2>Face To Face</h2>
              <h2><b>Syarat</b></h2>
              <div style="text-align:left;">
                <li>Mengisi formulir pendaftaran secara online</li>
                <li>Mengisi pemilihan lokasi konsultasi</li>
                <li>Klien psikolog profesioanl</li>
                <li>Klien memilih tanggal konseling</li>
                <li>Klien memilih opsi durasi konseling</li>
                <li>Klien menyelesaikan pembayaran</li>
                <li>Klien menunggu konfirmasi dari Rumah Harmonis via email maksimal 2x 24 jam</li>
                <li>Klien siap melakukan konseling dengan psikolog profesional</li>
              </div>
              <div class="price">Rp. 300.000 <span>/Sesi</span></div>
            </div>
            <div class="plan-button">
              <a href="#" class="btn btn-border">Pilih Produk</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- End Pricing Table Section -->

  <!-- Blog Section -->
  <section id="blog" class="section">
    <!-- Container Starts -->
    <div class="container">
     <div class="section-header">   
      <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">Blog</p>       
      <h2 class="section-title">Artikel seputar Psikologi</h2>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
        <!-- Blog Item Starts -->
        <div class="blog-item-wrapper">
          <div class="blog-item-img">
            <a href="single-post.html">
              <img src="<?php echo base_url(); ?>assets/img/imgrh/blog/img1.jpg" alt="">
            </a>   
            <div class="author-img">
              <img src="<?php echo base_url(); ?>assets/img/imgrh/blog/author.png" alt="">
            </div>             
          </div>
          <div class="blog-item-text"> 
            <h3><a href="single-post.html">Berbuatlah sesuatu yang membuat dirimu berterimaksih kepada dirimu sendiri.</a></h3>
            <div class="author">
              <span class="name"><a href="#">Posted by Admin</a></span>
              <span class="date float-right">9 September, 2019</span>
            </div>
          </div>
        </div>
        <!-- Blog Item Wrapper Ends-->
      </div>

      <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
        <!-- Blog Item Starts -->
        <div class="blog-item-wrapper">
          <div class="blog-item-img">
            <a href="single-post.html">
              <img src="<?php echo base_url(); ?>assets/img/imgrh/blog/img2.jpg" alt="">
            </a>   
            <div class="author-img">
              <img src="<?php echo base_url(); ?>assets/img/imgrh/blog/author.png" alt="">
            </div>             
          </div>
          <div class="blog-item-text"> 
            <h3><a href="single-post.html">It is not baauty that unders, it's love that makes us see beauty.<br><br>~Leo Tolstoy~</a></h3>
            <div class="author">
              <span class="name"><a href="#">Posted by Admin</a></span>
              <span class="date float-right">9 September, 2019</span>
            </div>
          </div>
        </div>
        <!-- Blog Item Wrapper Ends-->
      </div>

      <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
        <!-- Blog Item Starts -->
        <div class="blog-item-wrapper">
          <div class="blog-item-img">
            <a href="single-post.html">
              <img src="<?php echo base_url(); ?>assets/img/imgrh/blog/img3.jpg" alt="">
            </a>   
            <div class="author-img">
              <img src="<?php echo base_url(); ?>assets/img/imgrh/blog/author.png" alt="">
            </div>             
          </div>
          <div class="blog-item-text"> 
            <h3><a href="single-post.html">Kesulitan harus kamu rasakan terlebih dahulu sebelum kebahagian datang kepadamu.</a></h3>
            <div class="author">
              <span class="name"><a href="#">Posted by Admin</a></span>
              <span class="date float-right">9 September, 2019</span>
            </div>
          </div>
        </div>
        <!-- Blog Item Wrapper Ends-->
      </div>
    </div>
  </div>
</section>
<!-- blog Section End --> 

<!-- Tentang Kami Section Start -->
<section id="testimonial" class="section">
  <div class="container">
    <div class="section-header">   
      <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">Tentang Kami</p>       
      <h2 class="section-title">Perkenalkan, kami adalah … 
        <hr>
        <p>Website platform pemyedia layanan dan konten kesehatan mental untuk masyarakat Indonesia.</p></h2>
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-12 col-xs-12">
            <div class="feature-thumb wow fadeInDown animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
              <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/imgrh/macbook.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Tentang Kami Section End -->  

  <!-- Subcribe Section Start -->
  <div id="subscribe" class="section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 col-md-12 col-xs-12">
          <div class="subscribe-form">
            <div class="form-wrapper">
              <div class="sub-title text-center">
                <h3>Masukkan E-mail Untuk Newsletter & Promo</h3>
              </div>
              <form>
                <div class="row">
                  <div class="col-12 form-line">
                    <div class="form-group form-search">
                      <input type="email" class="form-control" name="email" placeholder="Masukkan alamat email">
                      <button type="submit" class="btn btn-common btn-search">Saya Mau</button>
                    </div> 
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Subcribe Section End -->
  <!-- Map Section Start -->
  <section id="map-area">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 padding-0">
          <object style="border:0; height: 450px; width: 100%;" data=https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.353902034697!2d110.44767491477793!3d-7.752236894412671!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwNDUnMDguMSJTIDExMMKwMjYnNTkuNSJF!5e0!3m2!1sen!2sid!4v1567923920397!5m2!1sen!2sid"></object>
        </div>
      </div>
    </div>
  </section>
  <!-- Map Section End -->

  <!-- Contact Section Start -->
  <section id="contact">      
    <div class="contact-form">
      <div class="container">
        <div class="row justify-content-center"> 
          <div class="offset-top">
            <div class="col-lg-12 col-md-12 col-xs-12">
              <div class="contact-block wow fadeInUp" data-wow-delay="0.2s">
                <div class="section-header">
                  <p class="btn btn-subtitle wow fadeInDown animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">Kontak</p>
                  <h2 class="section-title">Love to Hear From You</h2>
                </div>
                <form id="contactForm" novalidate="true">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama" required="" data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" placeholder="Email" id="email" class="form-control" name="name" required="" data-error="Please enter your email">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" placeholder="Subjek" id="msg_subject" class="form-control" required="" data-error="Please enter your subject">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea class="form-control" id="message" placeholder="Pesan" rows="7" data-error="Write your message" required=""></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="submit-button">
                        <button class="btn btn-common btn-effect disabled" id="submit" type="submit" style="pointer-events: all; cursor: pointer;">Kirim</button>
                        <div id="msgSubmit" class="h3 hidden"></div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>        
  </section>
  <!-- Contact Section End -->

  <!-- Footer Section Start -->
  <footer>
    <!-- Footer Area Start -->
    <section class="footer-Content">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
            <img src="<?php echo base_url(); ?>assets/img/imgrh/logowhite.png" width="160px" alt="">
            <br>

          <!-- <div class="textwidget">
            <p>Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically architect adaptive.</p>
          </div> -->
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
          <div class="widget">
            <h3 class="block-title"><b>Tentang kami</b></h3>
            <ul class="menu">
              <li><a href="#"><b>Home</b></a></li>
              <li><a href="#"><b>Fitur</b></a></li>
              <li><a href="#"><b>Produk</b></a></li>
              <li><a href="#"><b>Blog</b></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
          <div class="widget">
            <h3 class="block-title"><b>Follow Kam di</b></h3>
            <ul class="menu">
              <li><a class="facebook" href="#"><i class="fa fa-facebook-square"></i> Facebook</a></li>
              <li><a class="Instagram" href="#"><i class="lni-instagram-original"></i> Instagram</a></li>
              <li><a href="#"><b>Instagram</b></a></li>
              <li><a href="#"><b>Facebook</b></a></li>
              <li><a href="#"><b>Twitter</b></a></li>
              <li><a href="#"><b>?</b></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
          <div class="widget">
            <h3 class="block-title"><b>Lainya</b></h3>
            <ul class="menu">
              <li><a href="#"><b>Curhat & Konsultasi</b></a></li>
              <li><a href="#"><b>Kebijakan Privasi</b></a></li>
              <li><a href="#"><b>Ketentuan Penggunaan</b></a></li>
              <li><a href="#"><b>FAQ</b></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Copyright Start  -->
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="site-info float-left">
              <p>@Copyright<a href="http://uideck.com" rel="nofollow"> Rumah Harmonis</a></p>
            </div>              
            <!-- <div class="float-right">  
              <ul class="footer-social">
                <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
              </ul> 
            </div> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Copyright End -->
  </section>
  <!-- Footer area End -->

</footer>
<!-- Footer Section End --> 

<!-- Go To Top Link -->
<a href="#" class="back-to-top">
  <i class="lni-chevron-up"></i>
</a> 

<!-- Preloader -->
<div id="preloader">
  <div class="loader" id="loader-1"></div>
</div>
<!-- End Preloader -->

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="<?php echo base_url(); ?>assets/js/jsrh/jquery-min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jsrh/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jsrh/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jsrh/owl.carousel.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/jsrh/jquery.mixitup.js"></script>       
<script src="<?php echo base_url(); ?>assets/js/jsrh/jquery.nav.js"></script>    
<script src="<?php echo base_url(); ?>assets/js/jsrh/scrolling-nav.js"></script>    
<script src="<?php echo base_url(); ?>assets/js/jsrh/jquery.easing.min.js"></script>     
<script src="<?php echo base_url(); ?>assets/js/jsrh/wow.js"></script>   
<script src="<?php echo base_url(); ?>assets/js/jsrh/jquery.counterup.min.js"></script>     
<script src="<?php echo base_url(); ?>assets/js/jsrh/nivo-lightbox.js"></script>     
<script src="<?php echo base_url(); ?>assets/js/jsrh/jquery.magnific-popup.min.js"></script>     
<script src="<?php echo base_url(); ?>assets/js/jsrh/waypoints.min.js"></script>     
<script src="<?php echo base_url(); ?>assets/js/jsrh/main.js"></script>

</body>
</html>