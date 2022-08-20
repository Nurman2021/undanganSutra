<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- import AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- import css -->
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- importn tailwindcss -->
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->

    <!-- import swipper js -->
    <link  rel="stylesheet"  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
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
<canvas class="background"></canvas>
    
<div class="hero-welcome d-none">
          <div class="wrapper-hero position-absolute d-flex align-items-center justify-content-center">
              <div class="wrapper-nama col-md-5 text-center">
                  <h2 class="nama-mempelai parisienne" data-aos-duration="1500" data-aos="fade-down">Reynaldi Aditya Wisnuh</h2>
                  <p class="nickname">(Rey Mbayang)</p>
                  <h1 class="and">&</h1>
                  <h2 class="nama-mempelai parisienne" data-aos-duration="1500" data-aos="fade-up">Dinda Hauw</h2>
                  <p class="mb-5 nickname">(Dinda)</p>

                  <h4 class="invited-name mb-3" data-aos-duration="1000" data-aos="zoom-in">4 Maret 2022</h4>

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

        <!-- song -->
        <audio id="myAudio" class="d-none">
            <source src="assets/music/musik.mp4" type="audio/mpeg">
            Your browser does not support the audio element.
            </audio>


<!--             
<video class="d-none" width="320" height="240" controls autoplay>
  <source src="assets/videos/vudeos.mp4" type="video/mp4">
  <source src="assets/videos/vudeos.mp4" type="video/ogg">
  Your browser does not support the video tag.
</video> -->


        <div class="row m-0 highlights p-4 justify-content-center align-items-center">
            <div class="col-lg-4 text-center thumbs-hights" data-aos="fade-right" data-aos-duration="3000">
                <img src="assets/img/dindahaw4.jpg" class="img-highlights" alt="">
            </div>
            <div class="col-lg-4 text-center thumbs-typography" data-aos="fade-left" data-aos-duration="1000">
                <q class="">Dan di antara tanda-tanda kekuasaan-Nya diciptakan-Nya untukmu pasangan hidup dari jenismu sendiri supaya kamu dapat ketenangan hati dan dijadikannya kasih sayang di antara kamu. Sesungguhnya yang demikian menjadi tanda-tanda kebesaran-Nya bagi orang-orang yang berpikir.</q>
                <p class="fw-bold mt-3">- Q.S. Ar-Rum: 21 -</p>
            </div>
        </div>


        <div class="parallax-window m-0" data-parallax="scroll" data-image-src="assets/img/windah8.jpg">
            <h1 class="headliner text-center fw-bold" >Resepsi</h1>
            <div class="row p-4 justify-content-evenly" data-aos="zoom-in-up" data-aos-duration="800">
                <div class="col-md-4 row p-4 card-time">
                    <div class="date col text-center">
                        <img src="assets/img/calendar.svg" alt="">
                        <p class="mt-2 sub-card-title">Friday</p>
                        <p class="mt-2 fw-bold sub-card-title">4 Mar 2022</p>
                    </div>
                    <div class="clock col text-center">
                        <img src="assets/img/clock.svg" alt="">
                        <p class="mt-2 sub-card-title">10:00 WITA</p>
                        <p class="mt-2 fw-bold sub-card-title">Until End</p>
                    </div>
                    <div class="mt-5 d-flex align-items-start">
                        <img class="me-2 location-text" src="assets/img/locations.svg" alt="">
                        <p class="location-text">Desa cenrana (jln poros maros-makassar)</p>
                    </div>
                </div>
            </div>
            <button data-aos="zoom-in" data-aos-duration="1000" class="button-save mx-auto btn px-5 mt-5 py-2 rounded-pill mx-auto"><img src="assets/img/save.svg" class="pe-3" alt=""> Save Date</button>
        </div>

        <!-- <div class="parallax-window m-0" data-parallax="scroll" data-image-src="assets/img/windah11.jpg">
            <h1 class="headliner text-center fw-bold" >Akad</h1>
            <div class="row p-4 justify-content-evenly" data-aos="zoom-in-up" data-aos-duration="800">
                <div class="col-md-4 row p-4 card-time">
                    <div class="date col text-center">
                        <img src="assets/img/calendar.svg" alt="">
                        <p class="mt-2 sub-card-title">Saturday</p>
                        <p class="mt-2 fw-bold sub-card-title">19 Feb 2022</p>
                    </div>
                    <div class="clock col text-center">
                        <img src="assets/img/clock.svg" alt="">
                        <p class="mt-2 sub-card-title">10:00 WITA</p>
                        <p class="mt-2 fw-bold sub-card-title">Until End</p>
                    </div>
                    <div class="mt-5 d-flex align-items-start">
                        <img class="me-2 location-text" src="assets/img/locations.svg" alt="">
                        <p class="location-text">Tarampang Poros Ara Kel. Tanah Lemo Kec. Bontobahari Kab.Bukumba</p>
                    </div>
                </div>
            </div>
            <button data-aos="zoom-in" data-aos-duration="1000" class="button-save mx-auto btn px-5 mt-5 py-2 rounded-pill mx-auto"><img src="assets/img/save.svg" class="pe-3" alt=""> Save Date</button>
        </div> -->

        
        <div class="thankyou px-4">
            <h1 class="headliner text-center fw-bold">Thankyou</h1>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"  data-aos="zoom-out-up">              
                        <div class="img-carousel row">
                            <div class="mx-auto img-sub-carousel">
                                <img src="assets/img/dindahaw5.jpg" class="img-fluid" alt="">
                                <div class="back-floating p-4 text-center">
                                    <q class="quots satisfy">Menikahlah, karena sesungguhnya aku akan membangga-banggakan jumlah kalian kepada umat-umat lain pada hari kiamat, dan janganlah kalian seperti para pendeta Nasrani.</q>
                                    <h6 class="qs-surat mt-3 satisfy">(HR. Al-Baihaqi)</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide"  data-aos="zoom-out-up">
                        <div class="img-carousel row">
                            <div class=" mx-auto img-sub-carousel">
                                <img src="assets/img/dindahaw2.jpg" class="img-fluid" alt="">
                                <div class="back-floating row align-items-end text-center">
                                    <div>
                                        <q class="quots satisfy">Jika seseorang menikah, maka ia telah menyempurnakan separuh agamanya. Karenanya, bertakwalah pada Allah pada separuh yang lainnya.</q>
                                        <h6 class="qs-surat satisfy mt-3">(HR. Al Baihaqi)</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide"  data-aos="zoom-out-up">              
                        <div class="img-carousel row">
                            <div class="mx-auto img-sub-carousel">
                                <img src="assets/img/dindahaw6.jpg" class="img-fluid" alt="">
                                <div class="back-floating p-4 text-center">
                                    <q class="quots satisfy">Ada empat perkara yang termasuk Sunnah para Rasul: rasa-malu, memakai wewangian, bersiwak, dan menikah.</q>
                                    <h6 class="qs-surat mt-3 satisfy">(HR. At-Tirmidzi)</h6>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>

        <h1 class="headliner p-4 text-center fw-bold pb-2" style="margin-top:6rem">Location</h1>
        <div class="location row m-0 justify-content-center py-4 parallax-window" data-parallax="scroll" data-image-src="assets/img/windah11.jpg">
        <iframe data-aos="zoom-in-down" class="embed-maps col-md-10" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.128448269243!2d120.06517921429861!3d-4.918168651754458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbe7bad25f7f63d%3A0xfc7d08a627b33339!2sJl.%20Poros%20Tanabatue-palattae%2C%20Kabupaten%20Bone%2C%20Sulawesi%20Selatan!5e0!3m2!1sid!2sid!4v1645168589953!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <a href="https://goo.gl/maps/6MJCoDzBgZDu1zNr5" target="0_blank" class="button-save d-block mx-auto col-md-3 btn px-5 mt-5 py-2 rounded-pill"><img src="assets/img/locations.svg" class="pe-3" alt=""> Menuju Lokasi</a>
        </div>


        <footer class="row align-items-end">
            <p class="copyright">Powered by <a href="https://prokoin.tech" class="fw-bold text-light">Prokoin.tech</a></p>
        </footer>
        

        
        <script>
            var x = document.getElementById("myAudio"); 
                x.play(); 
        </script>
        <!-- end song -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.3/particles.min.js"></script>
  
  <script>
  window.onload = function() {
  Particles.init({
    selector: '.background',
    color:'#d5d8dd'
  });
};
  </script>
        
        <!-- Optional JavaScript; choose one of the two! -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="assets/js/parallax.js"></script>

        <!-- import swipper js -->
        <script src="assets/js/swiper.js" type="module"></script>
        

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>    
</body>
</html>

