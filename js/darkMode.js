let mon =document.getElementById('darkmode-toggle');
let body =document.getElementById('darks');
let content= document .querySelector('.content')



mon.addEventListener('click' ,(eo) =>{
body.classList.toggle('dark'),
content.classList.toggle("voo")

})




var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });