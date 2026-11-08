<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Fortana Ayuri Nusantara - About Us</title>
  <meta content="Tentang PT Fortana Ayuri Nusantara - Solusi terpercaya untuk Compressor & Chiller, Energy & Digitalization Service, serta Mechanical-Electric Building Construction di Indonesia." name="description">
  <meta content="tentang fortana, profil perusahaan fortana, solusi kompresor chiller, kontraktor mekanikal elektrikal" name="keywords">

  <!-- SEO: Canonical URL -->
  <link rel="canonical" href="https://fortana-an.com/about.php">

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

  <!-- Custom Enhanced Styles for About Page -->
  <style>
    :root {
      --primary-gold: #fdb813;
      --primary-gold-hover: #e0a10d;
      --dark-navy: #1a1f24;
      --light-bg: #f8fafc;
      --border-color: #e2e8f0;
      --text-muted: #64748b;
    }

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
      color: var(--dark-navy);
      position: relative;
      display: inline-block;
      margin-bottom: 8px;
    }

    .dynamic-title::after {
      content: "";
      position: absolute;
      bottom: -6px;
      left: 0;
      width: 50px;
      height: 3px;
      background: linear-gradient(90deg, var(--primary-gold), #f5a623);
      border-radius: 2px;
    }

    /* Modernized About Section */
    .about-story-box {
      background: #ffffff;
      border-radius: 20px;
      padding: 35px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
      border: 1px solid var(--border-color);
      height: 100%;
    }

    /* Opsi 1: Minimalist Soft Gold Badge List Item */
    .about-story-box .service-list-opt1 {
      display: flex;
      flex-direction: column;
      gap: 12px;
      margin-top: 25px;
    }

    .about-story-box .service-item-badge {
      display: flex;
      align-items: center;
      gap: 14px;
      background: #fffdf5;
      border: 1px solid rgba(253, 184, 19, 0.35);
      border-radius: 12px;
      padding: 12px 18px;
      transition: all 0.3s ease;
    }

    .about-story-box .service-item-badge:hover {
      background: #ffffff;
      border-color: var(--primary-gold);
      transform: translateX(6px);
      box-shadow: 0 4px 15px rgba(253, 184, 19, 0.18);
    }

    .about-story-box .badge-icon {
      width: 28px;
      height: 28px;
      border-radius: 50%;
      background: var(--primary-gold);
      color: var(--dark-navy);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.9rem;
      font-weight: 800;
      flex-shrink: 0;
      box-shadow: 0 3px 8px rgba(253, 184, 19, 0.35);
    }

    .about-story-box .badge-text {
      font-size: 0.95rem;
      font-weight: 700;
      color: var(--dark-navy);
    }

    .about-img-rounded {
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
      height: 100%;
      min-height: 380px;
      background-size: cover;
      background-position: center;
    }

    /* Dynamic Stats Counter Cards */
    .stat-card-modern {
      background: #ffffff;
      border-radius: 16px;
      padding: 24px;
      display: flex;
      align-items: center;
      gap: 20px;
      border: 1px solid var(--border-color);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
      transition: all 0.3s ease;
    }

    .stat-card-modern:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 25px rgba(253, 184, 19, 0.18);
      border-color: var(--primary-gold);
    }

    .stat-icon-wrapper {
      width: 60px;
      height: 60px;
      border-radius: 14px;
      background: rgba(253, 184, 19, 0.15);
      color: #d99b00;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.6rem;
      flex-shrink: 0;
    }

    .stat-card-modern .purecounter {
      font-size: 2rem;
      font-weight: 800;
      color: var(--dark-navy);
      line-height: 1;
      display: block;
    }

    .stat-card-modern p {
      margin: 4px 0 0 0;
      font-size: 0.88rem;
      color: var(--text-muted);
      font-weight: 600;
    }

    /* Vision, Mission & Core Values Interactive Cards */
    .feature-card-item {
      background: #ffffff;
      border-radius: 14px;
      padding: 20px;
      margin-bottom: 16px;
      border: 1px solid var(--border-color);
      transition: all 0.3s ease;
      display: flex;
      gap: 16px;
      align-items: center;
    }

    .feature-card-item:hover {
      transform: translateX(6px);
      border-color: var(--primary-gold);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05);
    }

    .feature-card-item .icon-box {
      width: 48px;
      height: 48px;
      border-radius: 12px;
      background: rgba(253, 184, 19, 0.18);
      color: #d99b00;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.3rem;
      flex-shrink: 0;
    }

    .feature-card-item h4 {
      font-size: 1.05rem;
      font-weight: 700;
      color: var(--dark-navy);
      margin-bottom: 4px;
    }

    .feature-card-item p {
      font-size: 0.88rem;
      color: var(--text-muted);
      margin: 0;
    }

    /* Core Values Grid */
    .core-value-card {
      background: #ffffff;
      border-radius: 16px;
      padding: 28px 24px;
      border: 1px solid var(--border-color);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
      transition: all 0.3s ease;
      height: 100%;
      position: relative;
      overflow: hidden;
    }

    .core-value-card::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 4px;
      height: 100%;
      background: var(--primary-gold);
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .core-value-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 14px 30px rgba(26, 31, 36, 0.08);
      border-color: rgba(253, 184, 19, 0.5);
    }

    .core-value-card:hover::before {
      opacity: 1;
    }

    .core-value-letter {
      display: inline-flex;
      width: 44px;
      height: 44px;
      border-radius: 12px;
      background: var(--dark-navy);
      color: var(--primary-gold);
      font-size: 1.25rem;
      font-weight: 800;
      align-items: center;
      justify-content: center;
      margin-bottom: 16px;
    }

    .core-value-card h4 {
      font-size: 1.15rem;
      font-weight: 700;
      color: var(--dark-navy);
      margin-bottom: 8px;
    }

    .core-value-card p {
      font-size: 0.88rem;
      color: var(--text-muted);
      margin: 0;
      line-height: 1.6;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/Fortana.png" class="logo" alt="Fortana Ayuri Nusantara">
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php" class="active">About</a></li>
          <li><a href="services.php">Our Business</a></li>
          <li><a href="projects.php">Portfolio</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2>About Us</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>About</li>
        </ol>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Us Story Section ======= -->
    <section id="about" class="about py-5">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 align-items-stretch">
          <div class="col-lg-6" data-aos="fade-right">
            <div class="about-img-rounded" style="background-image: url('assets/img/team-fortana.jpg');"></div>
          </div>

          <div class="col-lg-6" data-aos="fade-left">
            <div class="about-story-box">
              <div class="section-title-badge">
                <i class="bi bi-calendar-check-fill"></i> EST. 2023
              </div>
              <h2 class="dynamic-title d-block mb-3">Established</h2>
              <p class="text-secondary">
                Founded at the end of 2023 as an initiative to provide enhanced added value across the entire supply chain. Backed by extensive experience in <strong>Compressor & Chiller Solution</strong>, <strong>Energy & Digitalization Service</strong>, and <strong>Mechanical-Electric Building Construction</strong>, we are confident in our growth as a premier Solution Company driving competitive and sustainable business operations. We strongly believe this is our best way to contribute back to our local community.
              </p>
              
              <!-- Opsi 1: Minimalist Soft Gold Badge List -->
              <div class="service-list-opt1">
                <div class="service-item-badge">
                  <div class="badge-icon"><i class="bi bi-check-lg"></i></div>
                  <span class="badge-text">Compressor & Chiller Solution</span>
                </div>
                <div class="service-item-badge">
                  <div class="badge-icon"><i class="bi bi-check-lg"></i></div>
                  <span class="badge-text">Energy & Digitalization Service</span>
                </div>
                <div class="service-item-badge">
                  <div class="badge-icon"><i class="bi bi-check-lg"></i></div>
                  <span class="badge-text">Mechanical-Electric Building Construction</span>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Dynamic Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter bg-light py-5">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="stat-card-modern">
              <div class="stat-icon-wrapper">
                <i class="bi bi-emoji-smile-fill"></i>
              </div>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
                <p>Happy Clients</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="stat-card-modern">
              <div class="stat-icon-wrapper">
                <i class="bi bi-briefcase-fill"></i>
              </div>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="38" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects Handled</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="stat-card-modern">
              <div class="stat-icon-wrapper">
                <i class="bi bi-clock-history"></i>
              </div>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="2855" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hours Of Support</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="stat-card-modern">
              <div class="stat-icon-wrapper">
                <i class="bi bi-people-fill"></i>
              </div>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hard Workers</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Vision Section ======= -->
    <section id="vision" class="py-5">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 align-items-center">
          <div class="col-lg-6" data-aos="zoom-in">
            <div class="about-img-rounded" style="background-image: url('assets/img/vision.jpg');"></div>
          </div>

          <div class="col-lg-6" data-aos="fade-left">
            <div class="mb-4">
              <div class="section-title-badge">
                <i class="bi bi-eye-fill"></i> Our Purpose
              </div>
              <h2 class="dynamic-title d-block">Vision</h2>
              <p class="text-secondary mt-2">
                Contribute to our nation's growth and the creation of a happier, more harmonious society, we believe in the power of collective effort and positive impact.
              </p>
            </div>

            <div class="feature-card-item">
              <div class="icon-box"><i class="bi bi-flag-fill"></i></div>
              <div>
                <h4>Contribute to Nation</h4>
                <p>Our endeavor to contribute meaningfully to the progress and prosperity of our nation.</p>
              </div>
            </div>

            <div class="feature-card-item">
              <div class="icon-box"><i class="bi bi-heart-fill"></i></div>
              <div>
                <h4>Creation of Happier Society</h4>
                <p>Take every small step towards change and let's create a brighter world together.</p>
              </div>
            </div>

            <div class="feature-card-item">
              <div class="icon-box"><i class="bi bi-lightning-charge-fill"></i></div>
              <div>
                <h4>Believe in Power</h4>
                <p>Overcome challenges and turn every moment into an opportunity for growth and success.</p>
              </div>
            </div>

            <div class="feature-card-item">
              <div class="icon-box"><i class="bi bi-graph-up-arrow"></i></div>
              <div>
                <h4>Positive Impact</h4>
                <p>Has the power to create change and shape a future filled with hope and continuous growth.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Vision Section -->

    <!-- ======= Mission Section ======= -->
    <section id="mission" class="bg-light py-5">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 align-items-center flex-row-reverse">
          <div class="col-lg-6" data-aos="zoom-in">
            <div class="about-img-rounded" style="background-image: url('assets/img/mission.jpg');"></div>
          </div>

          <div class="col-lg-6" data-aos="fade-right">
            <div class="mb-4">
              <div class="section-title-badge">
                <i class="bi bi-rocket-takeoff-fill"></i> Execution Strategy
              </div>
              <h2 class="dynamic-title d-block">Mission</h2>
              <p class="text-secondary mt-2">
                Embark on a journey to excellence and prosperity with unwavering commitment to superior quality, ensuring every interaction delivers not just satisfaction, but unparalleled value.
              </p>
            </div>

            <div class="feature-card-item">
              <div class="icon-box"><i class="bi bi-people-fill"></i></div>
              <div>
                <h4>Win-Win Collaboration</h4>
                <p>Win-win collaboration with customers in creating more added value business.</p>
              </div>
            </div>

            <div class="feature-card-item">
              <div class="icon-box"><i class="bi bi-award-fill"></i></div>
              <div>
                <h4>Best Quality Commitment</h4>
                <p>Provide best quality by focusing on people, customer, and society development.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Mission Section -->

    <!-- ======= Core Value Section (AYURI) ======= -->
    <section id="core-values" class="py-5">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 align-items-center">
          <div class="col-lg-5" data-aos="zoom-in">
            <div class="about-img-rounded" style="background-image: url('assets/img/alt-services.jpg');"></div>
          </div>

          <div class="col-lg-7" data-aos="fade-left">
            <div class="mb-4">
              <div class="section-title-badge">
                <i class="bi bi-gem"></i> Corporate Principles
              </div>
              <h2 class="dynamic-title d-block">Core Value</h2>
              <p class="text-secondary mt-2 fw-semibold">AYURI Culture Framework</p>
            </div>

            <div class="row gy-3">
              <div class="col-md-6">
                <div class="core-value-card">
                  <div class="core-value-letter">A</div>
                  <h4>Accountability</h4>
                  <p>Building trust and empowering growth through honest actions and transparent choices.</p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="core-value-card">
                  <div class="core-value-letter">Y</div>
                  <h4>Yourself</h4>
                  <p>Unlocking your potential and creating a life of purpose, integrity, and confidence.</p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="core-value-card">
                  <div class="core-value-letter">U</div>
                  <h4>Unity</h4>
                  <p>Strength in togetherness, building strong bridges and shaping the future as one team.</p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="core-value-card">
                  <div class="core-value-letter">R</div>
                  <h4>Reliability</h4>
                  <p>Uncompromising reliability for maximum performance, efficiency, and unlimited trust.</p>
                </div>
              </div>

              <div class="col-md-12">
                <div class="core-value-card">
                  <div class="core-value-letter">I</div>
                  <h4>Innovative</h4>
                  <p>Creating breakthroughs with limitlessness, creativity, and smart engineering solutions that drive real change.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Core Value Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <a href="index.php"><img src="assets/img/Fortana Footer.png" class="img-fluid" alt="Fortana Footer" width="200px" height="250px"></a>
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