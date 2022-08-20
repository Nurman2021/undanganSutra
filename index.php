<!doctype html>
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


    <!-- import swipper js -->
    <link  rel="stylesheet"  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


    <title>Invitation</title>
  </head>
  <body class="overflow-hidden">
      <div class="hero-welcome-1 position-fixed " style="overflow-y:hidden">
          <div class="wrapper-hero position-absolute d-flex align-items-center justify-content-center">
              <div class="wrapper-nama col-md-5 text-center">
                  <h2 class="nama-mempelai" data-aos-duration="1500" data-aos="fade-down">Reynaldi Aditya Wisnuh</h2>
                  <p class="nickname">(Rey Mbayang)</p>
                  <h1 class="and">&</h1>
                  <h2 class="nama-mempelai" data-aos-duration="1500" data-aos="fade-up">Dinda Hauw</h2>
                  <p class="mb-5 nickname">(Dinda)</p>

                  <h4 class="invited-name mb-3 text-capitalize satisfy" data-aos-duration="1000" data-aos="zoom-in">
                      <?php
                      if (isset($_GET["to"])) {
                          echo $_GET["to"];
                      }else{
                          echo "Welcome";
                      }
                       ?>
                  </h4>
                  <h4 class="greetings-invited" data-aos-duration="2000" data-aos="zoom-out">You're Invited!</h4>
                  <a href="wedding.php" class="button-open btn px-5 py-2 d-inline rounded-pill mx-auto"><img src="assets/img/open-mail.svg" class="pe-3" alt=""> Buka Undangan</a>
                </div>
          </div>
      </div>
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
  </body>
</html>