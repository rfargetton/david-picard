window.mySwipe = new Swipe(document.getElementById('slider'), {
  startSlide: 0,
  speed: 400,
  auto: 3000,
  draggable: false,
  continuous: true,
  disableScroll: false,
  stopPropagation: false,
});

document.getElementById("nav").addEventListener("click", function(){

  // button animation
  const slideToggle = document.getElementById("slide-toggle");
  if (slideToggle.classList.contains("active")) {
    slideToggle.classList.remove("active");
  } else {
    slideToggle.classList.add("active");
  }

  // toggling slide menu
  const slide = document.querySelector(".slide-menu");
  if (slide.offsetHeight > 0) {
    slide.style.height = "0px";
  } else {
    slide.style.height = "100vh";
  }

});

var gallery = document.querySelector(".grid");
var galleryHeight = gallery.offsetHeight / 2;
console.log(galleryHeight);
// gallery.style.height = galleryHeight + 1 + "px" ;
