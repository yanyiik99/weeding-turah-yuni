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
        console.log(`berhasil`);
      </script>
    ";
  }else {
    echo "
      <script>
        alert('Gagal Ditambahkan');
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

    <!-- CSS CUSTOM  -->
    <link rel="stylesheet" href="./assets/css/main.css" />

    <link rel="stylesheet" href="./assets/css/main.css?v=<?php echo time(); ?>">
  </head>
  <body style="overflow-x: hidden">
    <!-- Start Section header -->
    <section id="header">
      <!-- Slider main container -->
      <div class="container d-flex justify-content-center align-items-center">
        <div class="swiper">
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
          <h1>I Gusti Ngurah Khrisna Yogi Vedangga</h1>
        </div>
        <div class="ring">
          <img src="./assets/img/ring.png" alt="" />
        </div>
        <div class="yuni-riana text-center py-1">
          <h1>Luh Putu Yuni Rianasari</h1>
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
          <div class="left-side col-12 col-md-8 d-flex justify-content-center">
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
        <hr />
        <div class="personal-space"></div>
        <div class="bg-personal">
          <div class="container">
            <div class="personal-wrap">
              <!-- Start Turah -->
              <div class="turah row d-flex flex-column-reverse flex-md-row justify-content-center align-items-center">
                <div class="d-none d-md-block col-1"></div>
                <div class="left-side col-md-5 pt-3">
                  <h1 class="text-center">I Gusti Ngurah Khrisna Yogi Vedangga</h2>
                  <p class="text-center">Putra Kedua Dari Pasangan
                      I Gusti Ngurah Asoka Mada Putra
                      &
                      Sagung Ari Lestyawati
                      Puri Kompyang (Saren Kaler)
                  </p>
                </div>
                <div class="d-none d-md-block col-2"></div>
                <div class="right-side col-12 col-md-4">
                  <img
                    class="img-fluid"
                    src="./assets/img/personal/turah.png"
                    alt=""
                  />
                </div>
              </div>
              <!-- End Turah -->

              <!-- Start Yuni -->
              <div class="yuni row d-flex justify-content-center align-items-center pt-5 mt-5">
                <div class="left-side col-12 col-md-4 p-5">
                  <img
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
                      Br Sayan Baleran, Mengwi,  Badung
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
      <div class="container-fluid">
        <div class="map">
          <p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.6295164903613!2d115.1249228!3d-8.535301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23a58a166546f%3A0xf67e5a24d3c14139!2sJl.%20Kaswari%20No.32%2C%20Dajan%20Peken%2C%20Kec.%20Tabanan%2C%20Kabupaten%20Tabanan%2C%20Bali%2082114!5e0!3m2!1sen!2sid!4v1659888134157!5m2!1sen!2sid" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </p>
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
        <div class="mb-5 pb-3">
          <img class="img-fluid" src="./assets/img/gallery-text.svg" alt="">
        </div>
        <!-- Gallery -->
        <div class="row">
        <!-- Bagian 1 -->
          <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <img
              src="./assets/img/gallery/02-min.png"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Boat on Calm Water"
            />

            <img
              src="./assets/img/gallery/04-min.png"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Wintry Mountain Landscape"
            />
          </div>

          <div class="col-lg-4 mb-4 mb-lg-0">
            <img
              src="./assets/img/gallery/06-min.png"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Mountains in the Clouds"
            />

            <img
              src="./assets/img/gallery/07-min.png"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Boat on Calm Water"
            />
          </div>

          <div class="col-lg-4 mb-4 mb-lg-0">
            <img
              src="./assets/img/gallery/09-min.png"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Waves at Sea"
            />

            <img
              src="./assets/img/gallery/11-min.png"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Yosemite National Park"
            />
          </div>

          <!-- Bagian 2 -->
          <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <img
              src="./assets/img/gallery/12-min.png"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Boat on Calm Water"
            />

            <img
              src="./assets/img/gallery/13-min.png"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Wintry Mountain Landscape"
            />
          </div>

          <div class="col-lg-4 mb-4 mb-lg-0">
            <img
              src="./assets/img/gallery/17-min.png"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Mountains in the Clouds"
            />

            <img
              src="./assets/img/gallery/15-min.png"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Boat on Calm Water"
            />
          </div>

          <div class="col-lg-4 mb-4 mb-lg-0">
            <img
              src="./assets/img/gallery/14-min.png"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Waves at Sea"
            />

            <img
              src="./assets/img/gallery/16-min.png"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Yosemite National Park"
            />
          </div>
        </div>
        <!-- Gallery -->
      </div>

      <!-- Start Doa dan Ucapan -->
      <div class="container d-flex flex-column justify-content-center align-items-center">
        <div>
          <img class="img-fluid" src="./assets/img/doa-text.svg" alt="">
        </div>
        
        <form action="" method="POST" id="insertform">
          <!-- Nama -->
          <div>
            <label for="nama">Nama</label>
            <br>
            <input type="text" id="nama" name="nama" autocomplete="off">
          </div>
          <!-- Kehadiran -->
          <div>
            <label for="inputGroupSelect01">Kehadiran</label>
              <select name="id_hadir" class="form-select" id="inputGroupSelect01">
                <option disabled selected>Kehadiran...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
              </select>
          </div>
          <!-- Deskripsi -->
          <div>
            <label for="deskripsi">Deskripsi</label>
            <br>
            <textarea type="text" id="deskripsi" name="deskripsi"  rows="10" cols="50"> </textarea>
          </div>

          <div>
            <button id="insert" type="submit" name="submit" class="btn btn-danger">Submit</button>
          </div>
        </form>

        <!-- Start Kehadiran -->
        <section class="my-5 py-5">
          <table border="1" cellpadding="10" cellspacing="0">
            <!-- Header -->
            <tr>
              <th>id</th>
              <th>Nama</th>
              <th>Deskripsi</th>
              <th>Kehadiran</th>
            </tr>
            <!-- Data -->

            <?php foreach($tamus as $tamu) : ?>
              <tr>
                  <td><?= $tamu["id"]?></td>
                  <td><?php echo $tamu["nama"]?></td>
                  <td><?php echo $tamu["deskripsi"]?></td>
                  <td><?php echo $tamu["presensi"]?></td>
              </tr>
            <?php endforeach;?>
            
          </table>
        </section>
        <!-- End  Kehadiran -->
      </div>
      <!-- End Doa dan Ucapan -->

    </section>
    <!-- End Section Gallery -->



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
