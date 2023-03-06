/*SWIPER */

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  /*grabCursor: true,*/
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

/*BARRA LATERAL DEL NAV */

const body = document.querySelector('body'),
      navMenu = body.querySelector('.menu-content'),
      navOpenBtn = body.querySelector('.navOpen-btn'),
      navCloseBtn = navMenu.querySelector('.navClose-btn');

      if(navMenu && navOpenBtn){
       navOpenBtn.addEventListener("click" , () =>{
        navMenu.classList.add("open");
        body.style.overflowY = "hidden";
       })
      }

      if(navMenu && navCloseBtn){
        navCloseBtn.addEventListener("click" , () =>{
         navMenu.classList.remove("open");
         body.style.overflowY = "scroll";
        })
       }
     

       
  