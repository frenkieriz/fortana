<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Fortana Ayuri Nusantara - Contact</title>
  <meta content="Contact PT Fortana Ayuri Nusantara" name="description">
  <meta content="Fortana, Contact, Building Construction, Services" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Fortana Icon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,400&family=Roboto:wght@300;400;500;700&family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- Custom CSS Layout Simetris & Dynamic Cards -->
  <style>
    #main, section#contact {
      display: block !important;
      visibility: visible !important;
      opacity: 1 !important;
    }

    /* Kartu Dinamis */
    .dynamic-info-card {
      background: #ffffff;
      border-radius: 16px;
      padding: 22px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.05);
      border: 1px solid rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .dynamic-info-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 12px 30px rgba(254, 185, 0, 0.15);
      border-color: #feb900;
    }

    .card-top-head {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 14px;
    }

    .card-icon-wrapper {
      width: 44px;
      height: 44px;
      border-radius: 10px;
      background: #fff8e6;
      color: #feb900;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
    }

    /* Status Badges */
    .status-badge {
      display: inline-flex;
      align-items: center;
      gap: 5px;
      padding: 4px 10px;
      border-radius: 20px;
      font-size: 11px;
      font-weight: 700;
    }
    .status-badge.open { background: #e6f9ed; color: #0e8642; }
    .status-badge.closed { background: #feeeee; color: #d93025; }
    .status-badge.info { background: #eef2ff; color: #4338ca; }
    
    .status-dot {
      width: 6px;
      height: 6px;
      border-radius: 50%;
      display: inline-block;
    }
    .status-badge.open .status-dot {
      background: #10b981;
      box-shadow: 0 0 6px #10b981;
      animation: pulse-dot 1.5s infinite;
    }
    .status-badge.closed .status-dot { background: #ef4444; }
    .status-badge.info .status-dot { background: #6366f1; }

    @keyframes pulse-dot {
      0% { transform: scale(0.95); opacity: 0.8; }
      50% { transform: scale(1.2); opacity: 1; }
      100% { transform: scale(0.95); opacity: 0.8; }
    }

    .card-main-title {
      font-size: 16px;
      font-weight: 700;
      color: #1b2f45;
      margin-bottom: 6px;
    }

    .card-sub-desc {
      font-size: 13px;
      color: #64748b;
      margin-bottom: 14px;
      line-height: 1.5;
    }

    .wa-topic-select {
      font-size: 12px;
      border-radius: 8px;
      border: 1px solid #cbd5e1;
      padding: 7px 10px;
      margin-bottom: 10px;
      width: 100%;
      background-color: #fff;
    }

    .card-action-group {
      display: flex;
      gap: 8px;
      flex-wrap: wrap;
      margin-top: auto;
    }

    .btn-card-act {
      flex: 1;
      min-width: 90px;
      padding: 8px 10px;
      border-radius: 8px;
      font-size: 12px;
      font-weight: 600;
      border: 1px solid #cbd5e1;
      background: #f8fafc;
      color: #334155;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 5px;
      text-decoration: none;
      transition: all 0.2s ease;
      cursor: pointer;
    }

    .btn-card-act:hover {
      background: #feb900;
      color: #000;
      border-color: #feb900;
    }

    /* Container Map Simetris 50%-50% */
    .map-container-wrapper {
      height: 100%;
      display: flex;
      flex-direction: column;
    }

    .map-container {
      position: relative;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.05);
      width: 100%;
      height: 100%;
      min-height: 480px;
      flex-grow: 1;
      background: #e2e8f0;
    }
    .map-container iframe {
      width: 100%;
      height: 100%;
      min-height: 100%;
      border: 0;
    }

    /* Floating WhatsApp Button */
    .whatsapp-float {
      position: fixed;
      bottom: 30px;
      left: 30px;
      background-color: #25d366;
      color: #FFF;
      border-radius: 50px;
      text-align: center;
      font-size: 30px;
      box-shadow: 2px 5px 15px rgba(0,0,0,0.3);
      z-index: 1000;
      width: 60px;
      height: 60px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      transition: all 0.3s ease;
    }
    .whatsapp-float:hover {
      background-color: #20ba5a;
      color: #fff;
      transform: scale(1.1);
    }

    /* Toast Notification */
    .toast-copy {
      position: fixed;
      bottom: 25px;
      right: 25px;
      background: #1b2f45;
      color: #fff;
      padding: 12px 20px;
      border-radius: 8px;
      font-size: 13px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.2);
      display: none;
      z-index: 9999;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/Fortana.png" alt="Fortana Logo" class="logo">
      </a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="services.php">Our Business</a></li>
          <li><a href="projects.php">Portfolio</a></li>
          <li><a href="contact.php" class="active">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">
        <h2>Contact Us</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Contact</li>
        </ol>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact py-5">
      <div class="container">

        <!-- ROW UTAMA SIMETRIS 50% - 50% -->
        <div class="row gy-4 align-items-stretch">

          <!-- SISI KIRI: 3 Kartu Dinamis (col-lg-6) -->
          <div class="col-lg-6 d-flex flex-column">
            <div class="row gy-3 flex-grow-1">
              
              <!-- KARTU 1: Real-Time Office Hours & Route -->
              <div class="col-12">
                <div class="dynamic-info-card">
                  <div>
                    <div class="card-top-head">
                      <div class="card-icon-wrapper">
                        <i class="bi bi-clock-history"></i>
                      </div>
                      <div id="officeStatusBadge" class="status-badge open">
                        <span class="status-dot"></span>
                        <span id="officeStatusText">Menghitung...</span>
                      </div>
                    </div>
                    <div class="card-main-title">Status & Lokasi Kantor</div>
                    <div class="card-sub-desc mb-2">
                      Kampung Kedaung RT03 RW01, Kedung Jaya, Babelan, Bekasi, Jawa Barat 17610
                    </div>
                  </div>
                  <div class="card-action-group">
                    <a href="https://maps.google.com/?q=PT.+Fortana+Ayuri+Nusantara" target="_blank" class="btn-card-act">
                      <i class="bi bi-geo-alt-fill"></i> Lihat Rute
                    </a>
                    <button class="btn-card-act" onclick="copyText('Kampung Kedaung RT03 RW01, Kedung Jaya, Babelan, Jawa Barat 17610')">
                      <i class="bi bi-copy"></i> Salin Alamat
                    </button>
                  </div>
                </div>
              </div>

              <!-- KARTU 2: Fast Response WhatsApp & Topic Selector -->
              <div class="col-12">
                <div class="dynamic-info-card">
                  <div>
                    <div class="card-top-head">
                      <div class="card-icon-wrapper">
                        <i class="fa-brands fa-whatsapp"></i>
                      </div>
                      <div class="status-badge open">
                        <span class="status-dot"></span> Respon &lt; 15 Mnt
                      </div>
                    </div>
                    <div class="card-main-title">WhatsApp Quick Chat</div>
                    <div class="card-sub-desc mb-2">Pilih topik pertanyaan Anda:</div>
                    
                    <select id="waTopicSelect" class="form-select wa-topic-select">
                      <option value="Halo%20Fortana,%20saya%20ingin%20bertanya%20mengenai%20Compressor%20%26%20Chiller%20Solution">Compressor & Chiller Solution</option>
                      <option value="Halo%20Fortana,%20saya%20ingin%20bertanya%20mengenai%20Energy%20%26%20Automation">Energy & Automation Service</option>
                      <option value="Halo%20Fortana,%20saya%20ingin%20bertanya%20mengenai%20ME%20%26%20Building%20Construction">ME & Building Construction</option>
                      <option value="Halo%20Fortana,%20saya%20ingin%20konsultasi%20penawaran%20harga">Konsultasi Penawaran / Proposal</option>
                    </select>
                  </div>

                  <div class="card-action-group">
                    <button onclick="sendWaMessage()" class="btn-card-act" style="background:#feb900; color:#000; border-color:#feb900;">
                      <i class="fa-brands fa-whatsapp"></i> Chat WhatsApp
                    </button>
                    <a href="tel:+628111134417" class="btn-card-act">
                      <i class="bi bi-telephone"></i> Panggil
                    </a>
                  </div>
                </div>
              </div>

              <!-- KARTU 3: Official Inquiry & Save vCard Contact -->
              <div class="col-12">
                <div class="dynamic-info-card">
                  <div>
                    <div class="card-top-head">
                      <div class="card-icon-wrapper">
                        <i class="bi bi-person-lines-fill"></i>
                      </div>
                      <div class="status-badge info">
                        <span class="status-dot"></span> Official Support
                      </div>
                    </div>
                    <div class="card-main-title">Kontak & Digital Card</div>
                    <div class="card-sub-desc mb-2">
                      Simpan info kontak resmi PT Fortana Ayuri Nusantara langsung ke HP Anda atau kirim email.
                    </div>
                  </div>
                  <div class="card-action-group">
                    <button onclick="downloadVCard()" class="btn-card-act">
                      <i class="bi bi-person-plus-fill"></i> Simpan vCard (.vcf)
                    </button>
                    <a href="mailto:fortana.business@fortana-an.com" class="btn-card-act">
                      <i class="bi bi-envelope"></i> Email Us
                    </a>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Sisi Kiri -->

          <!-- SISI KANAN: Google Maps Bawaan Asli (col-lg-6) -->
          <div class="col-lg-6 d-flex flex-column">
            <div class="map-container-wrapper">
              <div class="map-container">
                <iframe 
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.809040938718!2d107.03708247413022!3d-6.156324660338558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6989005d990443%3A0xa705ed9b6c4b654a!2sPT.%20Fortana%20Ayuri%20Nusantara!5e0!3m2!1sid!2sid!4v1710012207276!5m2!1sid!2sid" 
                  allowfullscreen="" 
                  loading="lazy">
                </iframe>
              </div>
            </div>
          </div><!-- End Sisi Kanan -->

        </div>

      </div>
    </section>
  </main><!-- End #main -->

  <!-- Toast Notification -->
  <div id="toast" class="toast-copy">Teks berhasil disalin!</div>

  <!-- ======= Footer (Lengkap Utuh) ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <a href="index.php"><img src="assets/img/Fortana Footer.png" class="img-fluid" alt="Fortana Footer Logo" width="200px"></a>
              <p class="mt-3">
                Kampung Kedaung RT03 RW01 <br>
                Kedung Jaya Babelan West Java 17610, Indonesia<br><br>
                <strong>Phone:</strong> +62 812 2277 4949, +62 811 1134 417<br>
                <strong>Email:</strong> fortana.business@fortana-an.com<br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="https://www.instagram.com/fortana_an" class="d-flex align-items-center justify-content-center" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/fortana-ayuri-nusantara" class="d-flex align-items-center justify-content-center" target="_blank"><i class="bi bi-linkedin"></i></a>
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

  </footer><!-- End Footer -->

  <!-- Floating WhatsApp Quick Button -->
  <a href="https://wa.me/628111134417?text=Halo%20Fortana,%20saya%20ingin%20konsultasi" class="whatsapp-float" target="_blank" rel="noopener" title="Chat via WhatsApp">
    <i class="fa-brands fa-whatsapp"></i>
  </a>

  <!-- Scroll Top Button -->
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>

  <!-- Script Fitur Dinamis -->
  <script>
    // 1. Cek Jam Operasional Otomatis (Senin - Jumat 08.00 - 17.00 WIB)
    function checkOfficeHours() {
      const now = new Date();
      const day = now.getDay(); 
      const hour = now.getHours();

      const badge = document.getElementById('officeStatusBadge');
      const text = document.getElementById('officeStatusText');

      if (day >= 1 && day <= 5 && hour >= 8 && hour < 17) {
        badge.className = 'status-badge open';
        text.textContent = '● Buka hingga 17.00 WIB';
      } else {
        badge.className = 'status-badge closed';
        text.textContent = '○ Tutup - Buka Besok 08.00 WIB';
      }
    }

    // 2. Direct WA Message Selector
    function sendWaMessage() {
      const selectedMsg = document.getElementById('waTopicSelect').value;
      const url = `https://wa.me/628111134417?text=${selectedMsg}`;
      window.open(url, '_blank');
    }

    // 3. Download vCard Contact
    function downloadVCard() {
      const vcardData = 
        "BEGIN:VCARD\n" +
        "VERSION:3.0\n" +
        "FN:PT. Fortana Ayuri Nusantara\n" +
        "ORG:PT. Fortana Ayuri Nusantara\n" +
        "TEL;TYPE=WORK,VOICE:+628111134417\n" +
        "TEL;TYPE=WORK,VOICE:+6281222774949\n" +
        "EMAIL:fortana.business@fortana-an.com\n" +
        "ADR;TYPE=WORK:;;Kampung Kedaung RT03 RW01, Kedung Jaya;Babelan;Jawa Barat;17610;Indonesia\n" +
        "END:VCARD";

      const blob = new Blob([vcardData], { type: 'text/vcard' });
      const url = window.URL.createObjectURL(blob);
      const a = document.createElement('a');
      a.setAttribute('href', url);
      a.setAttribute('download', 'Fortana_Ayuri_Nusantara.vcf');
      document.body.appendChild(a);
      a.click();
      document.body.removeChild(a);
    }

    // 4. Salin Teks ke Clipboard
    function copyText(text) {
      navigator.clipboard.writeText(text).then(() => {
        const toast = document.getElementById('toast');
        toast.style.display = 'block';
        setTimeout(() => { toast.style.display = 'none'; }, 2000);
      });
    }

    document.addEventListener('DOMContentLoaded', checkOfficeHours);
  </script>
</body>

</html>