<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BNN Surabaya</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url() ?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url() ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v2.1.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:bnnkota_surabaya@bnn.go.id">bnnkota_surabaya@bnn.go.id</a>
        <i class="icofont-phone"></i> (031) 5024835
        <i class="icofont-google-map"></i> Jl. Ngagel Madya V No.22, Surabaya
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="<?php echo base_url('dashboard') ?>">BNN Surabaya</a></h1>
      <!-- <a><?php echo $this->session->userdata('id_user'); ?></a> -->
      <a href="<?php echo base_url('dashboard') ?>">Home </a> &nbsp;&nbsp;
      <a href="<?php echo base_url('login/logout') ?>"> Logout</a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>SKHPN</h1>
      <h2>Surat Keterangan Hasil Pemeriksaan Narkoba</h2>
      <!-- <a href="#about" class="btn-get-started scrollto">Bawah</a> -->
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Apa itu SKHPN ?</h3>
              <p>
                SKHPN adalah surat pernyataan yang dikeluarkan oleh instansi tertentu yang menyatakan bahwa di dalam tubuh seseorang tidak terdapat jejak narkotika. Surat ini dapat meyakinkan perusahaan atau lembaga lain yang membutuhkan SKBN ini bahwa dinyatakan bukan pecandu narkoba.
              </p>

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Berikan Ulasan dari Pelayanan Kami </h2>
          <!-- <p>Ditulis Dengan Huruf Kapital</p> -->
        </div>

        <form action="<?php echo site_url('dashboard/review'); ?>" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <input type="hidden" name="iduser" value="<?php echo $this->session->userdata('id_user'); ?>">
            <input type="hidden" name="nama" value="<?php echo $this->session->userdata('nama'); ?>">

            <div class="col-md-12 form-group">
              <textarea class="form-control" name="ulasan" rows="5" placeholder="Ulasan"></textarea>
              <div class="validate"></div>
            </div>

            <!-- <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div> -->
            <div class="col-md-12 form-group">
              <div class="text-center"><button type="submit">Send</button></div>
            </div>
        </form>

      </div>
    </section><!-- End Appointment Section -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body overflow-auto">
              <h4 class="card-title text-center">Review / Ulasan </h4>
              <hr>
              <br>
              <div class="Scroll">
                <table class="table table-striped">
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($ulasan->result() as $result) :
                      ?>
                      <tr>
                        <td>
                          <?php
                            echo $this->user_model->format_tanggal($result->created_at);
                            echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
                            echo $result->nama;
                            echo " : ";
                            echo "$result->ulasan";
                            echo " ";

                            ?>
                        </td>
                      </tr>
                    <?php
                      $no++;
                    endforeach;
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main><!-- End #main -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
  <script src="<?php echo base_url() ?>assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/counterup/counterup.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url() ?>assets/js/main.js"></script>

</body>

</html>