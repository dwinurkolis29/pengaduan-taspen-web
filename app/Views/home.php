<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mandiri Taspen KC Kediri</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?=base_url()?>/assets/img/favicon.png" rel="icon">
  <link href="<?=base_url()?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="<?=base_url()?>/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url()?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url()?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=base_url()?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=base_url()?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?=base_url()?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=base_url()?>/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eNno - v4.9.1
  * Template URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <img src="<?=base_url()?>/asset/img/mandiri.png" width="100px" weight="100px">
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Jenis Pengaduan</a></li>
          <li><a class="nav-link scrollto" href="#services">Golongan</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="<?=base_url()?>/user">Pengaduan</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Bank Mandiri Taspen KC Kediri</h1>
          <h2>Sesuai dengan ketentuan Regulator, Bank Mandiri Taspen menyediakan sarana penyampaian pengaduan nasabah, baik secara lisan maupun tertulis.</h2>
          <div class="d-flex">
            <a href="<?=base_url()?>/user" class="btn-get-started scrollto">Pengaduan</a>
            <a href="https://www.youtube.com/watch?v=ablEvldqTCY&t=16s" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="<?=base_url()?>/assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">
      <h3 align="text-center">Beberapa Pengaduan dan Solusi</h3>

            <!--batas-->
            <div class="content">
                <div class="container">
                <div class="row">
                  <?php foreach ($pengaduan as $key =>$value): ?>
                    <div class="col-md-16 col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                        <h7 class="card-title"><?=$value->created_at?></h7><br>
                        <a class="card-link">Pengaduan</a>
                        <h5 class="card-title"><?=$value->pengaduan?></h5>
                        <a class="card-link">Solusi</a>
                        <h6 class="card-title"><?=$value->balasan?></h6>
                        </div>
                    </div>
                    </div>
                  <?php endforeach; ?>
                </div>
                </div>
            </div>
            <!--batas-->
      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="<?=base_url()?>/assets/img/about.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>Jenis Pengaduan Nasabah</h3>
            <p class="fst-italic">
              jenis jenis pengaduan nasabah yang dilakukan di bank taspen kantor cabang kediri sebagai berikut.
            </p>
            <?php foreach ($jenis_p as $key =>$value) { ?>
            <ul>
              <li><i class="bi bi-check-circle"></i><?= $value['nama_j']?></li>
            </ul>
            <?php }?>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?= countData('pengaduan')?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Pengaduan</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?= countData('jenis_p')?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Jenis Pengajuan</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?= countData('golongan')?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Golongan</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <span>Golongan</span>
          <h2>Golongan</h2>
          <p>Di Bank Taspen KC Kediri dibagi menjadi beberapa golongan sesuai pensiunan nasabahnya.</p>
        </div>

          <div class="row">
          <?php foreach ($golongan as $key =>$value) { ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a><?= $value['nama']?></a></h4>
              <p>Suatu golongan yang diterima di Bank Mandiri Taspen KC Kediri</p>
            </div>
          </div>
          <?php }?>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contact</span>
          <h2>Contact</h2>
          <p>Silahkan menghubungi contact person jika masih mengalami kendala pada saat pengaduan</p>
        </div>

        <div class="row">

          <div class="d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Jl. Brawijaya No.29, Pakelan, Kec. Kota Kediri, Jawa Timur 64129</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>bankmantap@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15811.151402799!2d112.01216767576601!3d-7.812268345529008!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7857182137679b%3A0xc576188f19dfdefe!2sJl.%20Brawijaya%20No.29%2C%20Pakelan%2C%20Kec.%20Kota%2C%20Kota%20Kediri%2C%20Jawa%20Timur%2064129!5e0!3m2!1sid!2sid!4v1666103871076!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row footer-newsletter justify-content-center">
          <div class="col-lg-6">
          </div>
        </div>

        <!-- <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div> -->

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>2022</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?=base_url()?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?=base_url()?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url()?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?=base_url()?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?=base_url()?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?=base_url()?>/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=base_url()?>/assets/js/main.js"></script>

</body>

</html>