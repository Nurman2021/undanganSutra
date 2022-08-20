AOS.init({
    offset: 200, // offset (in px) from the original trigger point

  });

  $('.hero-welcome').ready(function(){
    
      $('.hero-welcome').removeClass('d-none')
    })
    
    $('.button-open').on('click', function(){
        $('.hero-welcome-1').addClass('hero-welcome-hidden')
        $("body").removeClass('overflow-hidden')
        $("body").scrollTop(0)
  })


//   countdown
  $(document).ready(function () {
    const second = 1000,
          minute = second * 60,
          hour = minute * 60,
          day = hour * 24;
  
    //I'm adding this section so I don't have to keep updating this pen every year :-)
    //remove this if you don't need it
    let today = new Date(),
        dd = String(today.getDate()).padStart(2, "0"),
        mm = String(today.getMonth() + 2).padStart(2, "0"),
        yyyy = today.getFullYear(),
        nextYear = yyyy + 1,
        dayMonth = "09/30/",
        birthday = dayMonth + yyyy;
    
    today = mm + "/" + dd + "/" + yyyy;
    if (today > birthday) {
      birthday = dayMonth + nextYear;
    }
    //end
    
    const countDown = new Date(2022,2,4,10,00).getTime(),
        myInterval = setInterval(function() {    
  
          var now = new Date().getTime(),
                distance = countDown - now;
  
            document.getElementById("days").innerText = Math.floor(distance / (day)),
            document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
            document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
            document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);
  
          //do something later when date is reached
          if (distance < 1000) {
              $('#headline-text').removeClass('d-none')
              $('.days, .hours, .minutes, .seconds').text(0)
              clearInterval(myInterval);
          }
          //seconds

        }, 0)
    }());