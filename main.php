<?php

require './models/all_model.php';

$sql = "SELECT * FROM tamu 
        INNER JOIN kehadiran ON tamu.id_hadir = kehadiran.id
        ";

$tamus = query($sql);

// var_dump($tamus);

// Logic untuk menambah data
if( isset($_POST["submit"]) ){
  // Mengecek apakah berhasil atau gagal
  if( tambahData($_POST) > 0){
    echo "
      <script>
        document.location.href= 'main.php';
      </script>
    ";
  }else {
    echo "
      <script>
        alert('Gagal, Coba Lagi');
        document.location.href= 'main.php';
      </script>
    ";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Main Turah & Yuni</title>

    <!-- Bootstarp -->
    <link
      rel="stylesheet"
      href="./node_modules/bootstrap/dist/css/bootstrap.min.css"
    />

    <!-- Font Awesome  -->
    <link
      rel="stylesheet"
      href="./node_modules/@fortawesome/fontawesome-free/css/all.css"
    />

    <!-- Swiper JS -->
    <link rel="stylesheet" href="./node_modules/swiper/swiper-bundle.min.css" />

    <!-- AOS  -->
    <link rel="stylesheet" href="./node_modules/aos/dist/aos.css">

    <!-- CSS CUSTOM  -->
    <link rel="stylesheet" href="./assets/css/main.css" />

    <link rel="stylesheet" href="./assets/css/main.css?v=<?php echo time(); ?>">
  </head>
  <body class="position-relative" style="overflow-x: hidden">
    <!-- Start Section header -->
    <section id="header">
      <!-- Slider main container -->
      <div class="container d-flex justify-content-center align-items-center">
        <div class="swiper" data-aos="zoom-in">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide swiper-slide-01">
              <!-- <img src="./assets/img/img-swiper/1.png" alt="" /> -->
            </div>
            <div class="swiper-slide swiper-slide-02">
              <!-- <img src="./assets/img/img-swiper/2.png" alt="" /> -->
            </div>
            <div class="swiper-slide swiper-slide-03">
              <!-- <img src="./assets/img/img-swiper/3.png" alt="" /> -->
            </div>
            <div class="swiper-slide swiper-slide-04">
              <!-- <img src="./assets/img/img-swiper/4.png" alt="" /> -->
            </div>
          </div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
    </section>
    <!-- End Section header -->

    <!-- Start Section Nama Pengantin -->
    <section
      id="nama-pengantin"
      class="d-flex justify-content-center align-items-center position-relative"
    >
      <div
        class="container d-flex flex-column justify-content-center align-items-center"
      >
        <div class="gold-ornamen pb-5">
          <img src="./assets/img/gold-ornamen.png" alt="" />
        </div>
        <div class="turah-khrisna text-center py-1">
          <h1 class="fs-1">Turah Khrisna</h1>
        </div>
        <div class="ring row">
          <div class="col-2"></div>
          <img class="d-block img-fluid col-8" src="./assets/img/ring.png" alt="" />
          <div class="col-1"></div>
        </div>
        <div class="yuni-riana text-center py-1">
          <h1 class="fs-1">Yuni Riana</h1>
        </div>
        <div class="gold-ornamen pt-5">
          <img src="./assets/img/gold-ornamen.png" alt="" />
        </div>
      </div>
    </section>
    <!-- End Section Nama Pengantin -->

    <!-- Start Section Pangastungkara -->
    <section
      id="pangastungkara"
      class="d-flex justify-content-center align-items-center"
    >
      <div class="container">
        <div
          class="pangastungkara-wrap d-flex flex-column flex-md-row justify-content-between align-content-center"
        >
          <div class="left-side col-12 col-md-8 d-flex justify-content-center mt-5">
            <img
              class="img-fluid"
              src="./assets/img/bingkai-bunga.png"
              alt=""
            />
          </div>
          <div class="right-side col-12 col-md-4">
            <div class="my-5">
              <img class="img-fluid" src="./assets/img/swastyastu.svg" alt="" />
            </div>
            <p class="text-center">
              Atas Asung Kerta Wara Nugraha Ida Sang Hyang Widhi Wasa/Tuhan Yang
              Maha Esa, kami bermaksud mengundang Bapak/Ibu/Saudara/i, pada
              Acara Pawiwahan (Pernikahan) kami
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- End Section Pangastungkara -->

    <!-- Start Section Personal -->
    <section id="personal">
      <div id="wave">
        <br />
        <div class="personal-space"></div>
        <div class="bg-personal">
          <div class="container">
            <div class="personal-wrap text-white">
              <!-- Start Turah -->
              <div class="turah row d-flex flex-column-reverse flex-md-row justify-content-center align-items-center pt-5 mt-5">
                <div class="d-none d-md-block col-1"></div>
                <div class="left-side col-md-5 pt-3">
                  <h1 class="text-center">I Gusti Ngurah Khrisna Yogi Vedangga</h2>
                  <p class="text-center">Putra Kedua Dari Pasangan
                      I Gusti Ngurah Asoka Mada Putra
                      &
                      Sagung Ari Lestyawati
                      <br>
                      <i class="text-bg-dark"> Puri Kompyang Tabanan (Saren Kaler)</i>
                  </p>
                </div>
                <div class="d-none d-md-block col-2"></div>
                <div class="right-side col-12 col-md-4" >
                  <img data-aos="fade-down" data-aos-duration="2000"
                    class="img-fluid"
                    src="./assets/img/personal/turah.png"
                    alt=""
                  />
                </div>
              </div>
              <!-- End Turah -->

              <!-- Start Yuni -->
              <div class="yuni row d-flex justify-content-center align-items-center pt-5 mt-5">
                <div class="left-side col-12 col-md-4 ">
                  <img data-aos="fade-down" data-aos-duration="2000"
                  class="img-fluid"
                  src="./assets/img/personal/yuni.png"
                  alt=""
                  />
                </div>
                <div class="d-none d-md-block col-2"></div>
                <div class="right-side col-12 col-md-5 pt-3">
                  <h1 class="text-center">Luh Putu Yuni Rianasari</h2>
                  <p class="text-center">Putri Pertama Dari Pasangan
                      I Made Riawa
                      &
                      Ni Nengah Sariani
                      <br>
                      <i class="text-bg-dark"> Br Sayan Baleran, Mengwi, Badung</i>
                  </p>
                </div>
                <div class="d-none d-md-block col-1"></div>
              </div>
              <!-- End Yuni -->
            </div>
          </div>
        </div>
      </div>
      <div class="bg-torn-paper">
        <img class="w-100 img-fluid" src="./assets/img/bg-torn-paper.svg" alt="">
      </div>
    </section>

    <!-- End Section Personal -->

    <!-- Start Section Resepsi Acara -->
    <section id="resepsi">
      <div class="container my-5 py-3 d-flex flex-column justify-content-center align-items-center">
        <div class="resepsi-text my-4">
          <img class="img-fluid" src="./assets/img/resepsi-text.svg" alt="">
        </div>
        <div class="resepsi-card">
          <img class="img-fluid" src="./assets/img/card.svg" alt="">
        </div>

        
        <!-- Start REQ WEDA -->
        <div class="reg-weda text-center my-5 d-flex align-items-center justify-content-center flex-column">
          <h6 class=" col-12 col-md-6">Ihaiva stam ma vi yaustam, visvam ayur vyasnutam, kridantau putrair naptrbhih, modamanau sve grhe.</h6>
          <h4 class="mt-4 col-12 col-md-6">(Rg Veda X.85.42)</h4>
          <h6 class="mt-4 col-12 col-md-6">Wahai pasangan suami-istri, semoga kalian tetap bersatu dan tidak pernah terpisahkan. Semoga kalian mencapai hidup penuh kebahagiaan, tinggal di rumah yang penuh kegembiraan bersama seluruh keturunanmu.</h6>
        </div>
        <!-- END REG WEDA -->
        <!-- Start Countdown -->
        <div class="countdown d-flex justify-content-center align-items-center flex-wrap">
          <div class="time p-5 d-flex flex-column justify-content-center align-items-center">
            <h2 id="day">00</h2>
            <small>Days</small>
          </div>
          <div class="time p-5 d-flex flex-column justify-content-center align-items-center">
            <h2 id="hour">00</h2>
            <small>Hours</small>
          </div>
          <div class="time p-5 d-flex flex-column justify-content-center align-items-center">
            <h2 id="minute">00</h2>
            <small>Minutes</small>
          </div>
          <div class="time p-5 d-flex flex-column justify-content-center align-items-center">
            <h2 id="second">00</h2>
            <small>Seconds</small>
          </div>
        </div>
      <!-- End COuntdown00 -->

      </div>
    </section>
  <!-- End Section Resepsi Acara -->

    <!-- Start Map  -->
    <section>
      <div class="container-fluid d-flex justify-content-center align-items-center  flex-column">
        <div class="map col-12">
          <p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.6295164903613!2d115.1249228!3d-8.535301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23a58a166546f%3A0xf67e5a24d3c14139!2sJl.%20Kaswari%20No.32%2C%20Dajan%20Peken%2C%20Kec.%20Tabanan%2C%20Kabupaten%20Tabanan%2C%20Bali%2082114!5e0!3m2!1sen!2sid!4v1659888134157!5m2!1sen!2sid" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </p>
        </div>
        <hr class="col-8">
        <div class="qr-map col-8 col-md-2">
          <img class="img-fluid  text-center" src="./assets/img/qr-map.png" alt="">
          <h4 class="text-center pt-3">Scan Lokasi</h4>
        </div>
      </div>
    </section>

    <!-- End Map  -->

    <!-- Start Torn Paper Flip Vertical -->
    <div class="bg-torn-paper-two mt-5 pt-5">
      <img class="w-100 img-fluid w-25" src="./assets/img/bg-torn-paper.svg" alt="">
    </div>
    <!-- end Torn Paper Flip Vertical -->

    <!-- Start Section Gallery -->
    <section id="gallery" class="overflow-hidden">
      <div class="container-fluid d-flex flex-column justify-content-center align-items-center ">
        <div class="mb-5 pb-3" >
          <img class="img-fluid" src="./assets/img/gallery-text.svg" alt="">
        </div>
        <!-- Gallery -->
        <div class="row">
        <!-- Bagian 1 -->
          <div class="col-lg-4 col-md-12 mb-4 mb-lg-0"  >
            <img data-aos="zoom-in"
              src="./assets/img/gallery/02-min.png"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Boat on Calm Water"
            />

            <img data-aos="zoom-in"
              src="./assets/img/gallery/04-min.png"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Wintry Mountain Landscape"
            />
          </div>

          <div class="col-lg-4 mb-4 mb-lg-0">
            <img data-aos="zoom-in"
              src="./assets/img/gallery/06-min.png"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Mountains in the Clouds"
            />

            <img data-aos="zoom-in"
              src="./assets/img/gallery/07-min.png"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Boat on Calm Water"
            />
          </div>

          <div class="col-lg-4 mb-4 mb-lg-0">
            <img data-aos="zoom-in"
              src="./assets/img/gallery/09-min.png"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Waves at Sea"
            />

            <img data-aos="zoom-in"
              src="./assets/img/gallery/11-min.png"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Yosemite National Park"
            />
          </div>

          <!-- Bagian 2 -->
          <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <img data-aos="zoom-in"
              src="./assets/img/gallery/12-min.png"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Boat on Calm Water"
            />

            <img data-aos="zoom-in"
              src="./assets/img/gallery/10-min.png"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Wintry Mountain Landscape"
            />
            <img data-aos="zoom-in"
              src="./assets/img/gallery/13-min.png"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Wintry Mountain Landscape"
            />
          </div>

          <div class="col-lg-4 mb-4 mb-lg-0">
            <img data-aos="zoom-in"
              src="./assets/img/gallery/17-min.png"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Mountains in the Clouds"
            />

            <img data-aos="zoom-in"
              src="./assets/img/gallery/15-min.png"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Boat on Calm Water"
            />
            <img data-aos="zoom-in"
              src="./assets/img/gallery/18-min.png"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Yosemite National Park"
            />

            <img data-aos="zoom-in"
              src="./assets/img/gallery/03-min.png"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Yosemite National Park"
            />
          </div>

          <div class="col-lg-4 mb-4 mb-lg-0">
            <img data-aos="zoom-in"
              src="./assets/img/gallery/14-min.png"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Waves at Sea"
            />

            <img data-aos="zoom-in"
              src="./assets/img/gallery/16-min.png"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Yosemite National Park"
            />
            <img data-aos="zoom-in"
              src="./assets/img/gallery/01-min.png"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Yosemite National Park"
            />
          </div>

          
        </div>
        <!-- Gallery -->
      </div>

      <!-- Start Doa dan Ucapan -->
      <div class="container d-flex flex-column justify-content-center align-items-center">
        <div class="my-5">
          <img class="img-fluid" src="./assets/img/doa-text.svg" alt="">
        </div>

        <div class="doa">
          <form action="" method="POST" >
            
            <div class="nama-absen row d-flex justify-content-between ">
              <!-- Nama -->
              <div class="input-nama col-12 col-md-6">
                <label class="my-2 fw-bold" for="nama">Nama</label>
                <br>
                <input type="text" id="nama" class="form-control" name="nama" autocomplete="off" placeholder="Masukan Nama..">
              </div>
              <!-- Kehadiran -->
              <div class="input-kehadiran col-12 col-md-6">
                <label class="my-2 fw-bold" for="inputGroupSelect01">Kehadiran</label>
                <select name="id_hadir" class="form-select" id="inputGroupSelect01">
                  <option disabled selected class="text-secondary">Kehadiran...</option>
                  <option value="1">Hadir</option>
                  <option value="2">Berhalangan</option>
                </select>
              </div>
            </div>

            <!-- Deskripsi -->
            <div class="deskripsi row">
              <div class="col-12">
                <label class="my-2 fw-bold" for="deskripsi">Doa & Ucapan</label>
                <br>
                <textarea type="text" class="form-control" name="deskripsi" placeholder="Berikan Doa & Ucapan"></textarea>
              </div>
            </div>

            <div class="button-submit d-flex justify-content-center my-5">
              <button type="submit" name="submit" class="btn btn-danger fw-bold"><i class="fa-regular fa-paper-plane pe-2"></i>Kirim</button>
            </div>
          </form>
        </div>
        

        <div class="show-ucapan my-5">
          <div class="d-flex row justify-content-center my-5">
            <?php foreach($tamus as $tamu) :?>
              <div class="card col-10 col-md-5 m-1">
                <div class="card-body">
                  <div class="card-head d-flex align-items-center">
                    <div class="pe-3">
                      <img class="img-fluid" src="./assets/img/card/user.svg" alt="">
                    </div>
                    <div class="pe-3">
                      <span class="fw-bold"><?= $tamu['nama']?></span>
                    </div>
                    <div class="pe-3">
                      <?php if($tamu['id_hadir'] == 1) :?>
                        <img class="img-fluid" src="./assets/img/card/hadir.svg" alt="">
                        <span><?= $tamu["presensi"]?></span>
                      <?php endif;?>
                      <?php if($tamu['id_hadir'] == 2) :?>
                        <img class="img-fluid" src="./assets/img/card/berhalangan.svg" alt="">
                        <span><?= $tamu["presensi"]?></span>
                      <?php endif;?>
                    </div>
                  </div>
                  <div class="card-deskripsi my-2">
                    <span><?= $tamu["deskripsi"]?></span>
                  </div>
                </div>
              </div>
            <?php endforeach;?>
          </div>
        </div>

      </div>
      <!-- End Doa dan Ucapan -->

    </section>
    <!-- End Section Gallery -->

    
    <div class="w-100 row container-fluid">
      <div class="col-1 music-button">
        <img class="d-block img-fluid col-12" src="./assets/music/circle-pause-regular.svg" id="icon-music">
      </div>
    </div>
    
    <audio id="mySong" autoplay loop>
      <source src="./assets/music/gus-teja.mp3" type="audio/mpeg" >
    </audio>
  
    <!-- Start Footer -->
    <section id="footer" class="footer pt-5 ">
      <div class="container wrap-footer">
        <div class="row footer-top d-flex justify-content-between flex-column flex-md-row">
          <div class="footer-one col-12 col-md-6 mt-4">
            <div>
              <div class="logo">
                <img class="img-fluid" src="./assets/img/logo-yikdev.png" alt="">
              </div>
              <div class="email-text ps-3">
                <a target="_blank" href="https://mail.google.com/mail/u/0/?fs=1&to=aripramana574@gmail.com&su=YourSubject&body=...&tf=cm">aripramana574@gmail.com</a>
              </div>
            </div>
            <div>
              <span><a target="_blank" href="https://www.facebook.com/wayanari.pramanaputra/"><i class="fab fa-facebook fs-4 p-2"></i></a></span>
              <span><a target="_blank" href="https://www.instagram.com/yik.dev/"><i class="fab fa-instagram fs-4 p-2"></i></a></span>
              <span><a target="_blank" href="https://www.youtube.com/channel/UC3KG6q11alGxrWfHqn4adLg"><i class="fab fa-youtube fs-4 p-2"></i></a></span>
              <span><a href="#"><i class="fab fa-twitter fs-4 p-2"></i></a></span>
            </div>
          </div>
          <div class="footer-two col-12 col-md-6 d-flex justify-content-around flex-column flex-md-row">
            <div class="text-center text-md-start mt-5 mt-md-0">
              <h5 class="fw-bold">OUR PRODUCT</h5 class="fw-bold">
              <p><a href="#">WEB UNDANGAN</a></p>
              <p><a target="_blank" href="https://dribbble.com/yanyiik99">WEB DESIGN</a></p>
              <p><a href="#">DESIGN</a></p>
              <p><a href="#">REKOMENDASI</a></p>
            </div>
            <div class="text-center text-md-start mt-5 mt-md-0">
              <h5 class="fw-bold">DUKUNGAN</h5 class="fw-bold">
              <p><a target="_blank" href="https://wa.me/+6285946370867">FAQ</a></p>
              <p><a target="_blank" href="https://wa.me/+6285946370867">CONTACT US</a></p>
              <p><a target="_blank" href="https://wa.me/+6285946370867">KEBIJAKAN PRIVASI</a></p>
              <p><a target="_blank" href="https://wa.me/+6285946370867">SYARAT DAN KETENTUAN</a></p>
            </div>
          </div>
        </div>
        <hr>
        <div class="footer-bottom d-flex justify-content-between pb-5 row">
          <div class="footer-left col-12 text-center text-md-start">
            &copy; Copyright YikDev 2022 - All Rights Reserved
          </div>
          <div class="footer-right">
            <span><img class="img-fluid p-2" width="80rem" src="./asset/img/payment/bca.png" alt=""></span>
            <span><img  class="img-fluid p-2" width="80rem" src="./asset/img/payment/bri.png" alt=""></span>
            <span><img  class="img-fluid p-2" width="80rem" src="./asset/img/payment/paypal.png" alt=""></span>
            <span><img  class="img-fluid p-2" width="80rem" src="./asset/img/payment/dana.png" alt=""></span>
          </div>
        </div>
      </div>
    </section>
    <!-- End Footer -->


    <script src="./node_modules/aos/dist/aos.js"></script>

    <script>

      AOS.init();

      // Play Music 
      const elIconMusic = document.getElementById("icon-music");
      const elMySong = document.getElementById("mySong");

      elIconMusic.addEventListener("click", ()=>{
        if(elMySong.paused){

          elMySong.play();
          elIconMusic.src = "./assets/music/circle-pause-regular.svg"
          
        }else {
          elMySong.pause();
          elIconMusic.src = "./assets/music/circle-play-regular.svg"

        }
      });

    </script>

    <!-- Pooper Bootstrap -->
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>

    <!-- Font Awesome -->
    <script src="./node_modules/@fortawesome/fontawesome-free/js/all.js"></script>

    <!-- Swiper JS -->
    <script src="./node_modules/swiper/swiper-bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="./assets/js/main.js"></script>

  </body>
</html>
