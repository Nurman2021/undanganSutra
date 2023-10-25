<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- import AOS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- import css -->
  <link rel="stylesheet" href="assets/css/main.css">

  <!-- importn tailwindcss -->
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->

  <!-- import swipper js -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>



  <style>
    .background {
      position: absolute;
      display: block;
      top: 0;
      left: 0;
      z-index: 1;
    }
  </style>


  <title>Invitation</title>
</head>

<body>
  <!-- <canvas class="background"></canvas> -->
  <div class="bottom-bar-container">
    <div class="bottom-bar">
      <a href="#hero"><img class="bottom-item" src="assets\img\WDP_03_HOME.png" alt=""></a>
      <a href="#love"><img class="bottom-item" src="assets\img\WDP_03_COUPLE.png" alt=""></a>
      <a href="#galery"><img class="bottom-item" src="assets\img\WDP_03_EVENT.png" alt=""></a>
      <a href="#location"><img class="bottom-item" src="assets\img\WDP_03_GALLERY.png" alt=""></a>
    </div>
  </div>

  <div class="hero-welcome d-none">
    <div class="wrapper-hero position-absolute d-flex align-items-center justify-content-center" id="hero">
      <div class="wrapper-nama col-md-5 text-center">
        <div class="m-5">

          <h2 class="nama-mempelai parisienne" data-aos-duration="1500" data-aos="fade-down">Aldo Setiawan</h2>
          <p class="nickname">(Aldo)</p>
          <h1 class="and">&</h1>
          <h2 class="nama-mempelai parisienne" data-aos-duration="1500" data-aos="fade-up">Nur Amalia Putri</h2>
          <p class="mb-5 nickname">(Putri)</p>

          <h4 class="invited-name mb-3" data-aos-duration="1000" data-aos="zoom-in">17 November 2023</h4>

          <div class="countdown col-lg-7 mx-auto d-flex justify-content-evenly">
            <div class="part-time d-flex justify-content-center align-items-center">
              <h2 class="days m-0 position-relative" id="days">59</h2>
            </div>
            <div class="part-time d-flex justify-content-center align-items-center">
              <h2 class="hours m-0 position-relative" id="hours">59</h2>
            </div>
            <div class="part-time d-flex justify-content-center align-items-center">
              <h2 class="minutes m-0 position-relative" id="minutes">59</h2>
            </div>
            <div class="part-time d-flex justify-content-center align-items-center">
              <h2 class="seconds m-0 position-relative" id="seconds">59</h2>
            </div>
          </div>
          <h4 class="invited-name my-5 fw-bold d-none" id="headline-text">Hapy Wedding!</h4>
        </div>
      </div>
    </div>
  </div>

  <!-- song -->
  <audio id="myAudio" class="d-none">
    <source src="assets/music/musik.mp4" type="audio/mpeg">
    Your browser does not support the audio element.
  </audio>


  <div class="row m-0 highlights p-4 justify-content-center align-items-center" id="love">
    <div class="col-lg-4 text-center thumbs-hights" data-aos="fade-right" data-aos-duration="3000">
      <img src="assets\img\r\HYP00260.JPG" class="img-highlights" alt="">
    </div>
    <div class="col-lg-4 text-center thumbs-typography" data-aos="fade-left" data-aos-duration="1000">
      <q class="">Dan di antara tanda-tanda kekuasaan-Nya diciptakan-Nya untukmu pasangan hidup dari jenismu
        sendiri supaya kamu dapat ketenangan hati dan dijadikannya kasih sayang di antara kamu. Sesungguhnya
        yang demikian menjadi tanda-tanda kebesaran-Nya bagi orang-orang yang berpikir.</q>
      <p class="fw-bold mt-3">- Q.S. Ar-Rum: 21 -</p>
    </div>
  </div>


  <div class="parallax-window m-0" data-parallax="scroll">
    <h1 class="headliner text-center fw-bold">Resepsi</h1>
    <div class="row p-4 justify-content-evenly" data-aos="zoom-in-up" data-aos-duration="800">
      <div class="col-md-4 row p-4 card-time">
        <div class="date col text-center">
          <img src="assets/img/calendar.svg" alt="">
          <p class="mt-2 sub-card-title">Friday</p>
          <p class="mt-2 fw-bold sub-card-title">17 Nov 2023</p>
        </div>
        <div class="clock col text-center">
          <img src="assets/img/clock.svg" alt="">
          <p class="mt-2 sub-card-title">19:00 WITA</p>
          <p class="mt-2 fw-bold sub-card-title">Until End</p>
        </div>
        <div class="mt-5 d-flex align-items-start">
          <img class="me-2 location-text" src="assets/img/locations.svg" alt="">
          <p class="location-text">Jl. Arif Rahman Hakim, Balangnipa, Kec. Sinjai Utara, Kabupaten Sinjai, Sulawesi Selatan 92615</p>
        </div>
      </div>
    </div>
    <button onclick="window.open('https://calendar.google.com/calendar/r/eventedit?text=Acara+Nikah+Aldo+dan+Putri&dates=20231117T080000/20231117T220000', '_blank')" data-aos="zoom-in" data-aos-duration="1000"
      class="button-save mx-auto btn px-3 mt-5 py-2 rounded-pill mx-auto"><img src="assets/img/save.svg" class="pe-3"
        alt=""> Save Date</button>
    
  </div>
  <br>
  <div class="thankyou px-4 container" id="galery">
    <h1 class="headliner text-center fw-bold">Thankyou</h1>
    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="assets\img\r\HYP00331.JPG" />
        </div>
        <div class="swiper-slide">
          <img src="assets\img\r\HYP00243.JPG" />
        </div>
        <div class="swiper-slide">
          <img src="assets\img\r\HYP00286.JPG" />
        </div>
        <div class="swiper-slide">
          <img src="assets\img\r\HYP00307.JPG" />
        </div>
        <div class="swiper-slide">
          <img src="assets\img\r\HYP00313.JPG" />
        </div>
        <div class="swiper-slide">
          <img src="assets\img\r\HYP00335.JPG" />
        </div>
        <div class="swiper-slide">
          <img src="assets\img\r\HYP00346.JPG" />
        </div>
        <div class="swiper-slide">
          <img src="assets\img\r\HYP00361.JPG" />
        </div>
        <div class="swiper-slide">
          <img src="assets\img\r\HYP00362.JPG" />
        </div>
        <div class="swiper-slide">
          <img src="assets\img\r\HYP00375.JPG" />
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
    <div thumbsSlider="" class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="assets\img\r\HYP00331.JPG" />
        </div>
        <div class="swiper-slide">
          <img src="assets\img\r\HYP00243.JPG" />
        </div>
        <div class="swiper-slide">
          <img src="assets\img\r\HYP00286.JPG" />
        </div>
        <div class="swiper-slide">
          <img src="assets\img\r\HYP00307.JPG" />
        </div>
        <div class="swiper-slide">
          <img src="assets\img\r\HYP00313.JPG" />
        </div>
        <div class="swiper-slide">
          <img src="assets\img\r\HYP00335.JPG" />
        </div>
        <div class="swiper-slide">
          <img src="assets\img\r\HYP00346.JPG" />
        </div>
        <div class="swiper-slide">
          <img src="assets\img\r\HYP00361.JPG" />
        </div>
        <div class="swiper-slide">
          <img src="assets\img\r\HYP00362.JPG" />
        </div>
        <div class="swiper-slide">
          <img src="assets\img\r\HYP00375.JPG" />
        </div>
      </div>
    </div>
  </div>

  <h1 class="headliner p-4 text-center fw-bold pb-2" style="margin-top:6rem">Location</h1>
  <div class="location row m-0 justify-content-center py-4 parallax-window" data-parallax="scroll" id="location">
    <iframe data-aos="zoom-in-down" class="embed-maps col-md-10"
      src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3973.879492008329!2d120.2510371!3d-5.1231132!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbc252811cb4c97%3A0xcd4bd486d2a0d29a!2sCoto%20Bintang%20Timur!5e0!3m2!1sid!2sid!4v1698167987904!5m2!1sid!2sid"
      style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <a href="https://maps.app.goo.gl/933wRZzH6GLWPkGd6" target="0_blank"
      class="button-save d-block mx-auto col-md-3 btn px-5 mt-5 py-2 rounded-pill"><img src="assets/img/locations.svg"
        class="pe-3" alt=""> Menuju Lokasi</a>
  </div>


  <footer class="row align-items-end">
    <p class="copyright">Powered by <a href="https://www.instagram.com/a.obosky/" class="fw-bold text-light">Obo Sky</a></p>
  </footer>


  <script>
    var x = document.getElementById("myAudio");
    x.play();
  </script>
  <!-- end song -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.3/particles.min.js"></script>

  <script>
    window.onload = function () {
      Particles.init({
        selector: '.background',
        color: '#d5d8dd'
      });
    };

    // tanggal acara
    // Set the date we're counting down to
    var countDownDate = new Date("September 16, 2022 19:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function () {

      // Get today's date and time
      var now = new Date().getTime();

      // Find the distance between now and the count down date
      var distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Output the result in an element with id="demo"
      document.getElementById("days").innerHTML = days;
      document.getElementById("hours").innerHTML = hours;
      document.getElementById("minutes").innerHTML = minutes;
      document.getElementById("seconds").innerHTML = seconds;

      // If the count down is over, write some text 
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);
  </script>

  <!-- Optional JavaScript; choose one of the two! -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="assets/js/parallax.js"></script>

  <!-- import swipper js -->
  <script src="assets/js/swiper.js" type="module"></script>


  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="assets/js/main.js"></script>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>


</body>

</html>
</body>

</html>