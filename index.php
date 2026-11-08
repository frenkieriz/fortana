<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Fortana Ayuri Nusantara</title>
  <meta content="PT. Fortana Ayuri Nusantara - Solusi terpercaya untuk Compressor & Chiller, Energy & Automation Service, serta Mechanical-Electric Building Construction di Indonesia sejak 2023." name="description">
  <meta content="compressor chiller Indonesia, kontraktor mekanikal elektrikal, energy automation service, konstruksi ME Bekasi, Fortana Ayuri Nusantara, solusi kompresor industri" name="keywords">

  <!-- SEO: Canonical URL -->
  <link rel="canonical" href="https://fortana-an.com/index.php">

  <!-- Favicons -->
  <link href="assets/img/Fortana Icon.png" rel="icon">
  <link href="assets/img/Fortana Icon.png" rel="apple-touch-icon">

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

  <!-- Custom Dynamic Styles for Dashboard -->
  <style>
    /* Custom Hero Enhancements */
    .hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 6px 16px;
      border-radius: 30px;
      background: rgba(253, 184, 19, 0.2);
      color: #ffc107;
      font-size: 0.85rem;
      font-weight: 700;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      margin-bottom: 15px;
      border: 1px solid rgba(253, 184, 19, 0.4);
    }

    /* Section Title Custom */
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

    /* Perbaikan Posisi Tab & Garis Indikator Bawah */
    .portfolio-flters {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 35px;
      border-bottom: none;
      padding-bottom: 0;
      margin-bottom: 45px;
      list-style: none;
    }

    .portfolio-flters li {
      font-size: 1.02rem;
      font-weight: 600;
      color: #64748b;
      position: relative;
      cursor: pointer;
      padding-bottom: 10px; /* Ruang bernapas antara teks dan garis */
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

    /* Garis bawah pas di bawah teks dengan jarak yang lega */
    .portfolio-flters li.filter-active::after {
      content: "";
      position: absolute;
      bottom: -4px; /* Posisi digeser sedikit ke bawah agar tidak menabrak huruf */
      left: 0;
      width: 100%;
      height: 3.5px;
      background: linear-gradient(90deg, #fdb813, #f5a623);
      border-radius: 3px;
    }

    /* Modern Dynamic Activity Cards */
    .activity-card-dynamic {
      border-radius: 18px;
      overflow: hidden;
      background: #ffffff;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
      transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
      position: relative;
    }

    .activity-card-dynamic:hover {
      transform: translateY(-8px);
      box-shadow: 0 16px 35px rgba(253, 184, 19, 0.25);
    }

    .activity-img-wrapper {
      position: relative;
      overflow: hidden;
    }

    .activity-img-wrapper img {
      width: 100%;
      height: 270px;
      object-fit: cover;
      transition: transform 0.6s ease;
    }

    .activity-card-dynamic:hover .activity-img-wrapper img {
      transform: scale(1.1);
    }

    /* Floating Pill Badge On Image */
    .activity-badge {
      position: absolute;
      top: 15px;
      left: 15px;
      background: rgba(26, 31, 36, 0.85);
      color: #fdb813;
      padding: 4px 12px;
      border-radius: 20px;
      font-size: 0.75rem;
      font-weight: 700;
      backdrop-filter: blur(4px);
      z-index: 2;
      border: 1px solid rgba(253, 184, 19, 0.3);
    }

    /* Interactive Overlay Gradient & Information */
    .activity-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to top, rgba(26, 31, 36, 0.95) 0%, rgba(26, 31, 36, 0.4) 60%, transparent 100%);
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      padding: 22px;
      color: #ffffff;
      transition: opacity 0.3s ease;
    }

    .activity-overlay h4 {
      font-size: 1.15rem;
      font-weight: 700;
      color: #ffffff;
      margin-bottom: 4px;
      transition: color 0.3s ease;
    }

    .activity-card-dynamic:hover .activity-overlay h4 {
      color: #fdb813;
    }

    .activity-overlay p {
      font-size: 0.85rem;
      color: #cbd5e1;
      margin: 0;
    }

    .activity-zoom-btn {
      position: absolute;
      top: 15px;
      right: 15px;
      width: 38px;
      height: 38px;
      background: rgba(253, 184, 19, 0.9);
      color: #1a1f24;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.1rem;
      opacity: 0;
      transform: scale(0.8);
      transition: all 0.3s ease;
      z-index: 3;
    }

    .activity-card-dynamic:hover .activity-zoom-btn {
      opacity: 1;
      transform: scale(1);
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
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="services.php">Our Business</a></li>
          <li><a href="projects.php">Portfolio</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <div class="hero-badge" data-aos="fade-down">
              <i class="bi bi-award-fill"></i> Professional Engineering & Contractor
            </div>
            <h2 data-aos="fade-down">Welcome to<span><br>Fortana Ayuri Nusantara</span></h2>
            <p data-aos="fade-up"><b>INSPIRING PEOPLE & DRIVING INDUSTRIAL EXCELLENCE</b></p>
            
            <!-- Tombol Get Started Terpusat di Tengah -->
            <div class="d-flex justify-content-center mt-4" data-aos="fade-up" data-aos-delay="200">
              <a href="about.php" class="btn-get-started m-0">Get Started</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/hero-carousel-1.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-2.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-3.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-4.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-5.jpg)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Our Projects Section (Company Activities Grid Dynamic) ======= -->
    <section id="projects" class="projects py-5">
      <div class="container" data-aos="fade-up">

        <div class="text-center mb-5">
          <div class="section-title-badge">
            <i class="bi bi-activity"></i> Operational Excellence
          </div>
          <h2 class="fw-bold mb-2">Company Activities</h2>
          <p class="text-muted">Empowering People and Driving Industrial Progress</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <!-- Category Filters dengan Indikator Garis Bawah Pas & Elegan -->
          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All Activities</li>
            <li data-filter=".filter-remodeling">Compressor & Chiller Solution</li>
            <li data-filter=".filter-construction">Energy & Automation Service</li>
            <li data-filter=".filter-repairs">Me and Building Construction</li>
            <li data-filter=".filter-others">Others</li>
          </ul><!-- End Projects Filters -->

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="activity-card-dynamic">
                <div class="activity-img-wrapper">
                  <span class="activity-badge">Compressor</span>
                  <a href="assets/img/projects/Project1.png" class="glightbox activity-zoom-btn"><i class="bi bi-zoom-in"></i></a>
                  <img src="assets/img/projects/Project1.png" class="img-fluid" alt="">
                  <div class="activity-overlay">
                    <h4>Chiller System Maintenance</h4>
                    <p>Compressor & Chiller Solution</p>
                  </div>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="activity-card-dynamic">
                <div class="activity-img-wrapper">
                  <span class="activity-badge">Compressor</span>
                  <a href="assets/img/projects/Project2.png" class="glightbox activity-zoom-btn"><i class="bi bi-zoom-in"></i></a>
                  <img src="assets/img/projects/Project2.png" class="img-fluid" alt="">
                  <div class="activity-overlay">
                    <h4>Compressor Overhaul</h4>
                    <p>Compressor & Chiller Solution</p>
                  </div>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="activity-card-dynamic">
                <div class="activity-img-wrapper">
                  <span class="activity-badge">Construction</span>
                  <a href="assets/img/projects/Project3.png" class="glightbox activity-zoom-btn"><i class="bi bi-zoom-in"></i></a>
                  <img src="assets/img/projects/Project3.png" class="img-fluid" alt="">
                  <div class="activity-overlay">
                    <h4>Piping & Mechanical Setup</h4>
                    <p>Me & Building Construction</p>
                  </div>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="activity-card-dynamic">
                <div class="activity-img-wrapper">
                  <span class="activity-badge">Construction</span>
                  <a href="assets/img/projects/Project4.png" class="glightbox activity-zoom-btn"><i class="bi bi-zoom-in"></i></a>
                  <img src="assets/img/projects/Project4.png" class="img-fluid" alt="">
                  <div class="activity-overlay">
                    <h4>Building Structural Works</h4>
                    <p>Me & Building Construction</p>
                  </div>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="activity-card-dynamic">
                <div class="activity-img-wrapper">
                  <span class="activity-badge">Compressor</span>
                  <a href="assets/img/projects/Project5.png" class="glightbox activity-zoom-btn"><i class="bi bi-zoom-in"></i></a>
                  <img src="assets/img/projects/Project5.png" class="img-fluid" alt="">
                  <div class="activity-overlay">
                    <h4>Air Dryer Servicing</h4>
                    <p>Compressor & Chiller Solution</p>
                  </div>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="activity-card-dynamic">
                <div class="activity-img-wrapper">
                  <span class="activity-badge">Energy</span>
                  <a href="assets/img/projects/Project6.png" class="glightbox activity-zoom-btn"><i class="bi bi-zoom-in"></i></a>
                  <img src="assets/img/projects/Project6.png" class="img-fluid" alt="">
                  <div class="activity-overlay">
                    <h4>Smart Energy Monitoring</h4>
                    <p>Energy & Automation Service</p>
                  </div>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="activity-card-dynamic">
                <div class="activity-img-wrapper">
                  <span class="activity-badge">Construction</span>
                  <a href="assets/img/projects/Project7.png" class="glightbox activity-zoom-btn"><i class="bi bi-zoom-in"></i></a>
                  <img src="assets/img/projects/Project7.png" class="img-fluid" alt="">
                  <div class="activity-overlay">
                    <h4>Factory Ducting Installation</h4>
                    <p>Me & Building Construction</p>
                  </div>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="activity-card-dynamic">
                <div class="activity-img-wrapper">
                  <span class="activity-badge">Construction</span>
                  <a href="assets/img/projects/Project8.png" class="glightbox activity-zoom-btn"><i class="bi bi-zoom-in"></i></a>
                  <img src="assets/img/projects/Project8.png" class="img-fluid" alt="">
                  <div class="activity-overlay">
                    <h4>Electrical Panel Assembly</h4>
                    <p>Me & Building Construction</p>
                  </div>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="activity-card-dynamic">
                <div class="activity-img-wrapper">
                  <span class="activity-badge">Compressor</span>
                  <a href="assets/img/projects/Project 9.png" class="glightbox activity-zoom-btn"><i class="bi bi-zoom-in"></i></a>
                  <img src="assets/img/projects/Project 9.png" class="img-fluid" alt="">
                  <div class="activity-overlay">
                    <h4>Chiller Plant Overhaul</h4>
                    <p>Compressor & Chiller Solution</p>
                  </div>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="activity-card-dynamic">
                <div class="activity-img-wrapper">
                  <span class="activity-badge">Energy</span>
                  <a href="assets/img/projects/Project10.png" class="glightbox activity-zoom-btn"><i class="bi bi-zoom-in"></i></a>
                  <img src="assets/img/projects/Project10.png" class="img-fluid" alt="">
                  <div class="activity-overlay">
                    <h4>PLC Automation System</h4>
                    <p>Energy & Automation Service</p>
                  </div>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="activity-card-dynamic">
                <div class="activity-img-wrapper">
                  <span class="activity-badge">Energy</span>
                  <a href="assets/img/projects/Project11.png" class="glightbox activity-zoom-btn"><i class="bi bi-zoom-in"></i></a>
                  <img src="assets/img/projects/Project11.png" class="img-fluid" alt="">
                  <div class="activity-overlay">
                    <h4>Inverter Retrofitting</h4>
                    <p>Energy & Automation Service</p>
                  </div>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="activity-card-dynamic">
                <div class="activity-img-wrapper">
                  <span class="activity-badge">Energy</span>
                  <a href="assets/img/projects/project12.png" class="glightbox activity-zoom-btn"><i class="bi bi-zoom-in"></i></a>
                  <img src="assets/img/projects/project12.png" class="img-fluid" alt="">
                  <div class="activity-overlay">
                    <h4>Digitalized Energy Audit</h4>
                    <p>Energy & Automation Service</p>
                  </div>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-others">
              <div class="activity-card-dynamic">
                <div class="activity-img-wrapper">
                  <span class="activity-badge">Others</span>
                  <a href="assets/img/projects/project13.jpg" class="glightbox activity-zoom-btn"><i class="bi bi-zoom-in"></i></a>
                  <img src="assets/img/projects/project13.jpg" class="img-fluid" alt="">
                  <div class="activity-overlay">
                    <h4>Safety & Team Briefing</h4>
                    <p>General Corporate Activity</p>
                  </div>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-others">
              <div class="activity-card-dynamic">
                <div class="activity-img-wrapper">
                  <span class="activity-badge">Others</span>
                  <a href="assets/img/projects/Project14.jpg" class="glightbox activity-zoom-btn"><i class="bi bi-zoom-in"></i></a>
                  <img src="assets/img/projects/Project14.jpg" class="img-fluid" alt="">
                  <div class="activity-overlay">
                    <h4>On-Site Engineering Assessment</h4>
                    <p>General Corporate Activity</p>
                  </div>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-others">
              <div class="activity-card-dynamic">
                <div class="activity-img-wrapper">
                  <span class="activity-badge">Others</span>
                  <a href="assets/img/projects/project15.jpg" class="glightbox activity-zoom-btn"><i class="bi bi-zoom-in"></i></a>
                  <img src="assets/img/projects/project15.jpg" class="img-fluid" alt="">
                  <div class="activity-overlay">
                    <h4>CSR & Community Support</h4>
                    <p>General Corporate Activity</p>
                  </div>
                </div>
              </div>
            </div><!-- End Projects Item -->

          </div><!-- End Projects Container -->

        </div>

      </div>
    </section><!-- End Our Projects Section -->

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

</body>

</html>