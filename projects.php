<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Fortana Ayuri Nusantara - Portfolio & Clients</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Fortana Icon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- Custom Dynamic Styles -->
  <style>
    /* Section Title Custom Styling */
    .section-title-badge {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 5px 16px;
      border-radius: 20px;
      background: rgba(253, 184, 19, 0.15);
      color: #d99b00;
      font-size: 0.78rem;
      font-weight: 700;
      letter-spacing: 1px;
      text-transform: uppercase;
      margin-bottom: 8px;
    }

    .dynamic-title {
      font-size: 32px;
      font-weight: 800;
      color: #1a1f24;
      position: relative;
      display: inline-block;
      margin-bottom: 8px;
    }

    .dynamic-title::after {
      content: "";
      position: absolute;
      bottom: -6px;
      left: 50%;
      transform: translateX(-50%);
      width: 50px;
      height: 3px;
      background: linear-gradient(90deg, #fdb813, #f5a623);
      border-radius: 2px;
    }

    .dynamic-subtitle {
      font-size: 0.95rem;
      color: #64748b;
      font-weight: 500;
      margin-top: 10px;
      margin-bottom: 0;
    }

    /* Client & Partner Box Card Styling */
    .client-card {
      background: #ffffff;
      border: 1px solid #e2e8f0;
      border-radius: 14px;
      padding: 24px;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 120px;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
    }

    .client-card img {
      max-height: 65px;
      max-width: 85%;
      object-fit: contain;
      filter: grayscale(20%);
      opacity: 0.9;
      transition: all 0.3s ease;
    }

    .client-card:hover {
      border-color: #fdb813;
      transform: translateY(-4px);
      box-shadow: 0 10px 25px rgba(253, 184, 19, 0.22);
    }

    .client-card:hover img {
      filter: grayscale(0%);
      opacity: 1;
      transform: scale(1.05);
    }

    /* Fixing Swiper Pagination & Spacing */
    .swiper-clients,
    .swiper-partners {
      padding: 15px 5px 45px 5px !important;
      position: relative;
    }

    .swiper-pagination {
      bottom: 5px !important;
    }

    .swiper-pagination-bullet-active {
      background: #fdb813 !important;
      width: 22px;
      border-radius: 6px;
    }

    /* Custom Filter Buttons (Lega & Jarak Garis Kuning Pas) */
    .portfolio-flters {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 35px;
      border-bottom: none !important;
      padding-bottom: 0 !important;
      margin-bottom: 45px;
      list-style: none;
    }

    .portfolio-flters li {
      font-size: 0.98rem;
      font-weight: 600;
      color: #64748b;
      position: relative;
      cursor: pointer;
      padding-bottom: 14px; /* Ruang bernapas di bawah teks */
      transition: all 0.3s ease;
      background: transparent !important;
      border: none !important;
      box-shadow: none !important;
    }

    .portfolio-flters li:hover {
      color: #1a1f24;
    }

    .portfolio-flters li.filter-active {
      color: #1a1f24 !important;
      font-weight: 700 !important;
    }

    /* Indikator Kuning Emas dengan Jarak yang Pas di Bawah Teks */
    .portfolio-flters li.filter-active::after {
      content: "";
      position: absolute;
      bottom: -4px; /* Garis diturunkan agar tidak mepet dengan huruf */
      left: 0;
      width: 100%;
      height: 3.5px;
      background: linear-gradient(90deg, #fdb813, #f5a623);
      border-radius: 3px;
    }

    /* Interactive Portfolio Cards */
    .portfolio-item {
      overflow: hidden;
      border-radius: 14px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.06);
      background: #fff;
      transition: all 0.3s ease;
    }

    .portfolio-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
    }

    .portfolio-img-wrapper {
      position: relative;
      overflow: hidden;
    }

    .portfolio-img-wrapper img {
      transition: transform 0.5s ease;
      width: 100%;
      height: 250px;
      object-fit: cover;
    }

    .portfolio-item:hover .portfolio-img-wrapper img {
      transform: scale(1.08);
    }

    .portfolio-overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(135deg, rgba(26, 31, 36, 0.85) 0%, rgba(253, 184, 19, 0.85) 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 15px;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .portfolio-item:hover .portfolio-overlay {
      opacity: 1;
    }

    .portfolio-overlay a {
      width: 45px;
      height: 45px;
      background: #ffffff;
      color: #1a1f24;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.2rem;
      transition: all 0.3s ease;
      text-decoration: none;
    }

    .portfolio-overlay a:hover {
      background: #fdb813;
      color: #ffffff;
      transform: scale(1.1);
    }

    .portfolio-content-info {
      padding: 20px;
    }

    .portfolio-content-info h4 {
      font-size: 1.1rem;
      font-weight: 700;
      margin-bottom: 6px;
      color: #1a1f24;
    }

    .portfolio-content-info p {
      font-size: 0.85rem;
      color: #64748b;
      margin: 0;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/Fortana.png" alt="" class="logo">
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="services.php">Our Business</a></li>
          <li><a href="projects.php" class="active">Portfolio</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2>Portfolio & Corporate Experience</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Portfolio</li>
        </ol>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Customers (Clients) Section ======= -->
    <section id="customers" class="clients py-5">
      <div class="container" data-aos="fade-up">

        <!-- Header Customer -->
        <div class="text-center mb-4">
          <div class="section-title-badge">
            <i class="bi bi-shield-check"></i> Trusted By Industry Leaders
          </div>
          <div>
            <h2 class="dynamic-title">Our Customer</h2>
          </div>
          <p class="dynamic-subtitle">Your Satisfaction is Our Commitment</p>
        </div>

        <!-- Slider Swiper Klien -->
        <div class="swiper swiper-clients">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide">
              <div class="client-card">
                <img src="assets/img/clients/antam.png" alt="Antam">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="client-card">
                <img src="assets/img/clients/Matsuo.png" alt="Matsuo">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="client-card">
                <img src="assets/img/clients/taci.png" alt="Taci">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="client-card">
                <img src="assets/img/clients/denso.png" alt="Denso">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="client-card">
                <img src="assets/img/clients/mtm.png" alt="MTM">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="client-card">
                <img src="assets/img/clients/pertamina.png" alt="Pertamina">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="client-card">
                <img src="assets/img/clients/schoot.png" alt="Schoot">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="client-card">
                <img src="assets/img/clients/saranamuktiadijaya.png" alt="Sarana Mukti Adijaya">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="client-card">
                <img src="assets/img/clients/gselectechindonesia.png" alt="GS Electech Indonesia">
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>

    <!-- ======= Our Partners Section ======= -->
    <section id="partners" class="clients section-bg py-5">
      <div class="container" data-aos="fade-up">

        <!-- Header Partner -->
        <div class="text-center mb-4">
          <div class="section-title-badge">
            <i class="bi bi-handshake"></i> Strategic Alliances
          </div>
          <div>
            <h2 class="dynamic-title">Our Partner</h2>
          </div>
          <p class="dynamic-subtitle">Growing Stronger with Our Technology Partners</p>
        </div>

        <!-- Slider Swiper Partner -->
        <div class="swiper swiper-partners">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide">
              <div class="client-card">
                <img src="assets/img/partners/Epsea.png" alt="Epsea">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="client-card">
                <img src="assets/img/partners/teco.png" alt="Teco">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="client-card">
                <img src="assets/img/partners/ebmpapst.png" alt="Ebm Papst">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="client-card">
                <img src="assets/img/partners/comate.png" alt="Comate">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="client-card">
                <img src="assets/img/partners/gik.png" alt="Gik Vision">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="client-card">
                <img src="assets/img/partners/hmtech.png" alt="Hm Tech">
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>

    <!-- ======= Dynamic Interactive Portfolio Gallery ======= -->
    <section id="projects" class="projects py-5">
      <div class="container" data-aos="fade-up">

        <div class="text-center mb-4">
          <div class="section-title-badge">
            <i class="bi bi-briefcase"></i> Showcase of Excellence
          </div>
          <div>
            <h2 class="dynamic-title">Project Showcase</h2>
          </div>
          <p class="dynamic-subtitle">Delivering Industrial Excellence Across Multiple Sectors</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <!-- Category Filters (Tanpa Others & Jarak Garis Pas) -->
          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All Projects</li>
            <li data-filter=".filter-compressor">Compressor & Chiller Solution</li>
            <li data-filter=".filter-energy">Energy & Automation Service</li>
            <li data-filter=".filter-construction">Me and Building Construction</li>
          </ul><!-- End Projects Filters -->

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <!-- Item 1: Compressor -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-compressor">
              <div class="portfolio-img-wrapper">
                <img src="assets/img/projects/Project1.png" class="img-fluid" alt="Industrial Compressor Service">
                <div class="portfolio-overlay">
                  <a href="assets/img/projects/Project1.png" title="Compressor Overhaul" data-gallery="portfolio-gallery-compressor" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="service-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
              <div class="portfolio-content-info">
                <h4>Chiller System Maintenance</h4>
                <p>Compressor & Chiller Solution</p>
              </div>
            </div>

            <!-- Item 2: Energy -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-energy">
              <div class="portfolio-img-wrapper">
                <img src="assets/img/projects/Project6.png" class="img-fluid" alt="Digitalized Energy Project">
                <div class="portfolio-overlay">
                  <a href="assets/img/projects/Project6.png" title="Energy Efficiency Audit" data-gallery="portfolio-gallery-energy" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="service-details 2.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
              <div class="portfolio-content-info">
                <h4>Smart Energy Monitoring</h4>
                <p>Energy & Automation Service</p>
              </div>
            </div>

            <!-- Item 3: Construction -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-img-wrapper">
                <img src="assets/img/projects/Project3.png" class="img-fluid" alt="Building Construction">
                <div class="portfolio-overlay">
                  <a href="assets/img/projects/Project3.png" title="Mechanical Electrical Setup" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="service-details 3.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
              <div class="portfolio-content-info">
                <h4>Industrial Piping & ME</h4>
                <p>Me and Building Construction</p>
              </div>
            </div>

            <!-- Item 4: Compressor -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-compressor">
              <div class="portfolio-img-wrapper">
                <img src="assets/img/projects/Project2.png" class="img-fluid" alt="Screw Air Compressor">
                <div class="portfolio-overlay">
                  <a href="assets/img/projects/Project2.png" title="Air Compressor Retrofit" data-gallery="portfolio-gallery-compressor" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="service-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
              <div class="portfolio-content-info">
                <h4>Air Compressor Installation</h4>
                <p>Compressor & Chiller Solution</p>
              </div>
            </div>

            <!-- Item 5: Energy -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-energy">
              <div class="portfolio-img-wrapper">
                <img src="assets/img/projects/Project10.png" class="img-fluid" alt="Automation Control Panel">
                <div class="portfolio-overlay">
                  <a href="assets/img/projects/Project10.png" title="PLC Automation" data-gallery="portfolio-gallery-energy" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="service-details 2.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
              <div class="portfolio-content-info">
                <h4>PLC Automation Panel</h4>
                <p>Energy & Automation Service</p>
              </div>
            </div>

            <!-- Item 6: Construction -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-img-wrapper">
                <img src="assets/img/projects/Project7.png" class="img-fluid" alt="ME Engineering">
                <div class="portfolio-overlay">
                  <a href="assets/img/projects/Project7.png" title="Building Construction" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="service-details 3.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
              <div class="portfolio-content-info">
                <h4>Factory Ducting System</h4>
                <p>Me and Building Construction</p>
              </div>
            </div>

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <a href="index.php"><img src="assets/img/Fortana Footer.png" class="img-fluid" alt="" width="200px" height="250px"></a>
              <p>
                Kampung Kedaung RT03 RW01 <br>
                Kedung Jaya Babelan West Java 17610, Indonesia<br><br>
                <strong>Phone:</strong> +62 812 2277 4949, +62 811 1134 417<br>
                <strong>Email:</strong> fortana.business@fortana-an.com<br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="https://www.instagram.com/fortana_an" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/fortana-ayuri-nusantara" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End footer info column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Company</h4>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About us</a></li>
              <li><a href="services.php">Services</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-3 col-md-3 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="service-details.php">Compressor & Chiller Solution</a></li>
              <li><a href="service-details 2.php">Energy & Automation Service</a></li>
              <li><a href="service-details 3.php">Me & Building Construction</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Legal</h4>
            <ul>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div><!-- End footer links column-->

        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Fortana Ayuri Nusantara</span></strong>. All Rights Reserved
        </div>
      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Inisialisasi Carousel Swiper Klien & Partner -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Inisialisasi Swiper Customer Klien
      new Swiper('.swiper-clients', {
        speed: 600,
        loop: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false
        },
        slidesPerView: 'auto',
        pagination: {
          el: '.swiper-clients .swiper-pagination',
          type: 'bullets',
          clickable: true
        },
        breakpoints: {
          320: { slidesPerView: 2, spaceBetween: 15 },
          576: { slidesPerView: 3, spaceBetween: 20 },
          768: { slidesPerView: 4, spaceBetween: 20 },
          992: { slidesPerView: 5, spaceBetween: 25 }
        }
      });

      // Inisialisasi Swiper Partner
      new Swiper('.swiper-partners', {
        speed: 600,
        loop: true,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false
        },
        slidesPerView: 'auto',
        pagination: {
          el: '.swiper-partners .swiper-pagination',
          type: 'bullets',
          clickable: true
        },
        breakpoints: {
          320: { slidesPerView: 2, spaceBetween: 15 },
          576: { slidesPerView: 3, spaceBetween: 20 },
          768: { slidesPerView: 4, spaceBetween: 20 },
          992: { slidesPerView: 5, spaceBetween: 25 }
        }
      });
    });
  </script>

</body>

</html>