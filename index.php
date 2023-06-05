<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="theme-color" content="#BC8887" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Undangan Pernikahan Marini & Taufiq</title>

  <meta property="og:title" content="Undangan Pernikahan Marini & Taufiq - Sabtu, 21 Maret 2020">
  <meta property="og:description" content="Undangan Pernikahan Marini & Taufiq - Sabtu, 21 Maret 2020 di RM Pondok Kenanga, Jakasampurna Bekasi">
  <meta property="og:locale" content="id_ID" />
  <meta property="og:image" content="https://sherly.dae.ng/image/sherly-daeng-wedding-thumbnail.png">
  <meta property="og:url" content="http://sherly.dae.ng/index.html">
  <meta name="twitter:card" content="summary_large_image">
  <!-- Bulma Version 0.8.x-->
  <link rel="stylesheet" href="https://unpkg.com/bulma@0.8.0/css/bulma.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/bulma-tooltip@0.1.5/dist/bulma-tooltip.min.css" />
  <link rel="stylesheet" type="text/css" href="css/menikah.css" />
  <link rel="stylesheet" type="text/css" href="css/jquery.countdown.css" />
  <script src="https://kit.fontawesome.com/2828f7885a.js" integrity="sha384-WAsFbnLEQcpCk8lM1UTWesAf5rGTCvb2Y+8LvyjAAcxK1c3s5c0L+SYOgxvc6PWG" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="js/jquery.coundown.js"></script>
  <link rel="icon" type="image/png" href="image/favicon.png" />
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23064379-20"></script>
  <!-- Begin Script for Countdown -->
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23064379-20');
  </script>
  <!-- Begin Script for Countdown -->

  <!-- Github Button -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<body>
  <!-- Begin Preloader -->
  <div class="preloader-wrapper">
    <div class="preloader">
      <img src="image/favicon.png" alt="Flower" />
    </div>
  </div>
  <!-- End Preloader-->
  <!-- Begin Header -->
  <div class="header-wrapper" id="home">
    <!-- Begin Hero -->
    <section class="hero is-large">
      <!-- Begin Mobile Nav -->
      <nav class="navbar is-transparent is-hidden-desktop">
        <!-- Begin Burger Menu -->
        <div class="navbar-brand is-fixed-top">
          <div class="navbar-burger burger" data-target="mobile-nav">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <!-- End Burger Menu -->
        <div id="mobile-nav" class="navbar-menu">
          <div class="navbar-end">
            <div class="navbar-item">
              <a class="navbar-item" href="#Waktu">
                Waktu
              </a>
            </div>
            <div class="navbar-item">
              <a class="navbar-item" href="#lokasi">
                Lokasi
              </a>
            </div>

            <div class="navbar-item">
              <a class="navbar-item" href="#tentang-sherly-daeng">
                Tentang Marini dan Taufiq
              </a>
            </div>
            <div class="navbar-item">
              <a class="navbar-item" href="#rsvp">
                RSVP
              </a>
            </div>
          </div>
        </div>
      </nav>
      <!-- End Mobile Nav -->
      <!-- Begin Hero Content-->
      <?php
      $namaPenerima = isset($_GET['nama']) ? $_GET['nama'] : '';
      ?>
      <div class="hero-body">
        <div class="container has-text-centered">
          <h1 class="subtitle">Undangan Pernikahan Kepada Bapak/Ibu <b><?php echo $namaPenerima;  ?></b></h1>
          <h2 class="title">Marini & Taufiq</h2>
          <h4 class="subtitle tempatwaktu">

            Sabtu, 21 Maret 2020
            </br>
            RM Pondok Kenanga, Jakasampurna
            </br>
            Kota Bekasi

          </h4>
        </div>
        <!-- Start Countdown -->
        <div>
          <ul id="hitungmundur">
            <li><span class="days">00</span>
              <p class="days_text">Hari</p>
            </li>
            <li class="separator">:</li>
            <li><span class="hours">00</span>
              <p class="hours_text">Jam</p>
            </li>
            <li class="separator">:</li>
            <li><span class="minutes">00</span>
              <p class="minutes_text">Menit</p>
            </li>
            <li class="separator">:</li>
            <li><span class="seconds">00</span>
              <p class="seconds_text">Detik</p>
            </li>
          </ul>
          <div class="spasi">
          </div>
          <script type="text/javascript">
            var now = new Date();
            var day = now.getDate();
            var month = now.getMonth() + 1;
            var year = now.getFullYear() + 1;

            var nextyear = month + '/' + day + '/' + year + ' 07:07:07';
            var harih = '08/21/2023 17:00:00';

            $('#hitungmundur').countdown({
              date: harih, // TODO Date format: 07/27/2017 17:00:00
              offset: +7, // TODO Your Timezone Offset
              day: 'Hari',
              days: 'Hari'
            }, function() {
              alert('Done!');
            });
          </script>
        </div>
        <!-- End Countdown -->
      </div>
      <!-- End Hero Content-->
      <!-- Begin Hero Menu -->
      <div class="hero-foot ">
        <div class="hero-foot--wrapper">
          <div class="columns">
            <div class="column is-12 hero-menu-desktop has-text-centered">
              <ul>
                <li class="is-active">
                  <a href="#home">Home</a>
                </li>
                <li>
                  <a href="#Waktu">Waktu</a>
                </li>
                <li>
                  <a href="#lokasi">Lokasi</a>
                </li>
                <li>
                  <a href="#tentang-sherly-daeng">Tentang Marini & Taufiq</a>
                </li>

                <li>
                  <a href="#rsvp">RSVP</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- End Hero Menu -->
    </section>
    <!-- End Hero -->
  </div>
  <!-- End Header -->

  <!-- Begin Main Content -->
  <div class="main-content">
    <!-- Begin regular-section-->
    <section class="section-light no-padding-top regular-section has-text-centered has-vertically-aligned-content" id="regular-section">

      <div data-aos="fade-up" data-aos-easing="linear">
        <img src="image/bismillah.png" class="bismillah has-text-centered" alt="Bismillahirrahmaanirrahiim">
      </div>

      <p class="bodytext" data-aos="fade-up" data-aos-easing="linear">
        Assalamu'alaikum Warahmatullahi Wabarakatuh.
        <br />
        Dengan memohon rahmat dan ridha Allah swt,
        <br />
        kami bermaksud mengundang Bapak/Ibu/Saudara/Saudari pada acara pernikahan kami
      </p>

      <span class="space40px"></span>
      <span class="space40px"></span>

      <div data-aos="fade-up" data-aos-easing="linear">
        <div class="nama-lengkap">
          Marini Nuar Aisyah
        </div>
        <div class="ampersand">&</div>
        <div class="nama-lengkap">
          Taufiq
        </div>

      </div>
      <span class="space40px"></span>
      <div data-aos="fade-up" data-aos-easing="linear">
        <img src="image/divider-leaves.png" class="divider has-text-centered" alt="~~~">
      </div>
      <span class="space40px"></span>
      <span class="space40px"></span>
    </section>
    <!-- End regular-section-->

    <!-- Begin Waktu Section -->
    <section class="section-dark" id="Waktu">
      <div class="container">

        <div class="column is-12 regular-section" data-aos="fade-up" data-aos-easing="linear">
          <h1 class="title has-text-centered section-title">Waktu</h1>
        </div>
        <div class="columns is-multiline" data-aos="fade-up" data-aos-easing="linear">
          <div class="column is-4 has-vertically-aligned-content">

            <p class="is-larger has-text-centered">
            <div class="waktu tanggal-hari has-text-centered">Sabtu</div>
            <div class="waktu tanggal-angka has-text-centered">21</div>
            <div class="waktu tanggal-bulan has-text-centered">Maret 2023</div>
            </p>

          </div>
          <div class="column is-4 has-vertically-aligned-content">

            <p class="waktu is-larger has-text-centered">
              Akad Nikah:
              <br>
              <strong>17.00 WIB</strong>
            </p>

          </div>

          <div class="column is-4 has-vertically-aligned-content">

            <h1 class="waktu is-larger has-text-centered">
              Resepsi:
              <br>
              <strong>19.00 - 21.00 WIB</strong>
            </h1>


          </div>

        </div>
      </div>
      <div class="space40px"></div>
      <div class="main-content has-text-centered" data-aos="fade-up" data-aos-easing="linear">
        <a href="https://calendar.google.com/event?action=TEMPLATE&amp;tmeid=NGgzdW00NG84dXFwMzcwNXYxbGliNGxzaWggZGFlbmdkb2FuZ0Bt&amp;tmsrc=daengdoang%40gmail.com" target="_blank" class="button has-tooltip btn-cta" data-tooltip="Add to Calendar" target="_blank" data-aos="zoom-in">
          <i class="far fa-calendar-plus"></i>
          &nbsp;&nbsp;Google Calendar
        </a>
      </div>
    </section>
    <!-- End Waktu Content -->

    <!-- Begin Lokasi Section -->
    <section class="section-darker" id="lokasi">
      <div class="container">
        <div class="column is-12 regular-section" data-aos="fade-up" data-aos-easing="linear">
          <h1 class="title has-text-centered section-title">Lokasi</h1>
          <p class="tempat is-larger has-text-centered">
            <strong>BSI Square Kaliabang</strong>
            <br>
            Jl. Lkr. Utara No.8, Perwira
            <br>
            Bekasi Utara, Kota Bks, Jawa Barat 17124
            <br>
          </p>
        </div>
        <div class="section-map" data-aos="fade-up" data-aos-easing="linear">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.437460966604!2d107.0156805!3d-6.2058835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698951a1c56c9f%3A0xba614a42161711ad!2sBSI%20Square%20Kaliabang!5e0!3m2!1sen!2sid!4v1685984165826!5m2!1sen!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div class="space40px"></div>
        <div class="has-text-centered" data-aos="fade-up" data-aos-easing="linear">
          <a href="https://maps.app.goo.gl/6e7tzRs7821esveK7" class="button btn-cta" target="_blank" data-aos="zoom-in">
            <i class="far fa-directions"></i>
            &nbsp;&nbsp;Google Maps
          </a>
        </div>
      </div>
    </section>
    <!-- End Lokasi Content -->

    <!-- Begin Tentang Sherly and Daeng -->
    <section class="section-light regular-section is-fullheight" id="tentang-sherly-daeng">
      <div class="container">
        <div class="columns is-multiline">
          <div class="column has-text-centered is-12 prolog">
            <h1 class="title has-text-centered section-title" data-aos="fade-up" data-aos-easing="linear">Tentang Marini dan Taufiq</h1>



            <!-- IMAGES -->
            <div class=" tile">
              <div class="tile is-ancestor">
                <div class="tile is-parent">
                  <article class="tile is-child foto1 notification foto1" data-aos="fade-up" data-aos-easing="linear">
                    <div class="content">
                      <p class="title-foto">November 2018</p>
                      <p class="subtitle-foto">
                        Pertama kali saling kenal di <a href="https://cashbac.com" target="_blank">Cashbac</a>
                      </p>
                    </div>
                  </article>
                </div>
                <div class="tile is-parent">
                  <article class="tile is-child notification foto2" data-aos="fade-up" data-aos-easing="linear">
                    <div class="content">
                      <p class="title-foto">
                        Desember 2018 - Februari 2019
                      </p>
                      <p class="subtitle-foto">
                        Satu kantor, satu divisi, dan posisi tempat duduk saling membelakangi.
                      </p>
                    </div>
                  </article>
                </div>
                <div class="tile is-parent">
                  <article class="tile is-child notification foto3" data-aos="fade-up" data-aos-easing="linear">
                    <div class="content">
                      <p class="title-foto">
                        Maret 2019
                      </p>
                      <p class="subtitle-foto">
                        Cerita cinta dimulai
                      </p>
                    </div>
                  </article>
                </div>
              </div>
            </div>
            <div class="space24px"></div>
            <div class="tile is-ancestor">
              <div class="tile is-parent">
                <article class="tile is-child notification foto6" data-aos="fade-up" data-aos-easing="linear">
                  <div class="content">
                    <p class="title-foto">Juni 2019</p>
                    <p class="subtitle-foto">Pertemuan 2 keluarga</p>
                  </div>
                </article>
              </div>
              <div class="tile is-parent">
                <article class="tile is-child notification foto4" data-aos="fade-up" data-aos-easing="linear">
                  <div class="content">
                    <p class="title-foto">Desember 2019</p>
                    <p class="subtitle-foto">Lamaran</p>
                  </div>
                </article>
              </div>
              <div class="tile is-parent">
                <article class="tile is-child notification foto5" data-aos="fade-up" data-aos-easing="linear">
                  <div class="content">
                    <p class="title-foto">Maret 2020</p>
                    <p class="subtitle-foto">Menikah</p>
                  </div>
                </article>
              </div>
            </div>
            <!-- IMAGES -->
            <div class="space40px"></div>
            <div data-aos="fade-up" data-aos-easing="linear">
              <img src="image/divider-leaves.png" class="divider has-vertically-align" alt="~~~">
            </div>
            <div class="space40px"></div>
            <div class="space40px"></div>

          </div>
        </div>
    </section>
    <!-- End Tentang Sherly dan Daeng -->

    <!-- Begin RSVP Content -->
    <section class="section-dark contact" id="rsvp">
      <div class="container">
        <div class="columns is-multiline">
          <div class="column is-12 prolog">
            <h1 class="title has-text-centered section-title" data-aos="fade-up" data-aos-easing="linear">Konfirmasi Kehadiran</h1>
          </div>
          <div class="column is-12 prolog has-text-centered" data-aos="fade-up" data-aos-easing="linear">
            <p class="h2 subtitle">
              Merupakan suatu kehormatan dan kebahagiaan bagi kami
              <br>
              apabila Bapak/Ibu/Saudara/Saudari berkenan hadir
              memberikan doa restu.
              <br>
              <br>
              Jika bisa hadir kami tunggu konfirmasinya,
              <br>
              Informasi: Di meja penerima tamu akan kami sediakan hand sanitizer dan pemeriksaan suhu tubuh.
              <br>
              <br>
              Jika tidak memungkinkan untuk hadir di pernikahan kami,tidak mengapa,
              <br>
              semoga bisa berjumpa di lain kesempatan
              <br>
              <br>
              Stay safe & jaga kesehatan ya :)
            </p>

            <a href="https://api.whatsapp.com/send?phone=628xxxxxxxxxx&text=Halo%20Sherly,%20saya%20akan%20datang%20di%20acara%20pernikahan&source=&data=" class="button btn-whatsapp" target="_blank" data-aos="zoom-in">
              <i class="fab fa-whatsapp"></i>
              &nbsp;&nbsp;Kabari Marini
            </a>



            <a href="https://api.whatsapp.com/send?phone=628xxxxxxxxxx&text=Halo%20Daeng,%20saya%20akan%20datang%20di%20acara%20pernikahan&source=&data=" class="button btn-whatsapp" target="_blank" data-aos="zoom-in">
              <i class="fab fa-whatsapp"></i>
              &nbsp;&nbsp; Kabari Taufiq
            </a>
            <div class="space40px"></div>

            <div class="space40px"></div>
            <div data-aos="fade-up" data-aos-easing="linear">
              <img src="image/divider-leaves.png" class="divider has-text-centered" alt="~~~">
            </div>
            <div class="space40px"></div>
            <p class="h2 subtitle" data-aos="fade-up" data-aos-easing="linear">
              Kami yang berbahagia,
              <br>
              <a class="instagram" :" href="https://instagram.com/nengchely" target="_blank" alt="Instagram Sherly">
                <i class="fab fa-instagram"></i> @nengchely
              </a>
              &nbsp
              <a class="instagram" href="https://instagram.com/daengdoang" target="_blank" alt="Instagram Daeng">
                <i class="fab fa-instagram"></i> @daengdoang
              </a>
            </p>

          </div>

        </div>
      </div>
    </section>
    <!-- End RSVP Content -->
  </div>
  <!-- End Main Content -->

  <!-- Begin Footer -->
  <div class="footer">
    <div class="container">
      <a href="https://github.com/daengdoang/daeng-sherly-menikah" class="has-vertically-align">
        <p class="has-vertically-align">2023 &copy Muhammad Ammar Arief</p>
      </a>
      <!-- <a href="https://bulma.io" class="has-vertically-align">
          <img src="https://bulma.io/images/made-with-bulma.png" alt="Made with Bulma">
        </a>
        <a href="https://www.netlify.com">
          <img src="https://www.netlify.com/img/global/badges/netlify-color-bg.svg" alt="Deploy with Netlify"/>
        </a> -->
    </div>
  </div>
  <!-- End Footer -->

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/menikah.js"></script>
  <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
  <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
  <script>
    AOS.init({
      easing: "ease-out",
      duration: 800,
    });
  </script>
</body>

</html>