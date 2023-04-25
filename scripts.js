
const bar = document.getElementById('bar');
const nav = document.getElementById('navbar');
const close = document.getElementById('bar');


  bar.addEventListener('click', () => {
    nav.classList.toggle('active');
    //console.log('click');
  });

/*close.addEventListener('click', () => {
  nav.classList.toggle('active');
  //console.log('click');
});*/

const swiper = new Swiper('.swiper', {
  // Optional parameters
  autoplay:{
delay:3000,
disableOnInteraction: false,
  },
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable:true,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  
});

function openSearch() {
  document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}