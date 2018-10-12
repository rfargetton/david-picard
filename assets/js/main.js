// Tiled Gallery Effect Function

let galleryWidth, portrait, landscape, landscapeHeight, portraitHeight, documentWidth;

function tileGallery(){

  documentWidth = document.querySelector("body").offsetWidth;
  galleryWidth = document.querySelector(".grid").offsetWidth;
  portrait = document.querySelectorAll('.portrait');
  landscape = document.querySelectorAll('.landscape');


  if (documentWidth <= 960 ) {

    landscapeHeight = Math.trunc(galleryWidth/3 * 2) ;
    portraitHeight = Math.trunc(galleryWidth/3 * 4) ;
    for (var i = 0; i < landscape.length; i++) {
      landscape[i].style.height = landscapeHeight + "px";
    }

    for (var i = 0; i < portrait.length; i++) {
      var nextSibling = portrait[i].nextElementSibling ;
      portrait[i].style.height = portraitHeight + "px";
      nextSibling.style.marginTop = "4px" ;
    }

  } else {

    landscapeHeight = Math.trunc(galleryWidth/6 * 2) ;
    portraitHeight = Math.trunc(galleryWidth/6 * 4) ;
    for (var i = 0; i < landscape.length; i++) {
      landscape[i].style.height = (landscapeHeight - 4) + "px";
    }

    for (var i = 0; i < portrait.length; i++) {
      var nextSibling = portrait[i].nextElementSibling ;
      portrait[i].style.height = portraitHeight + "px";
      nextSibling.style.marginTop = "-" + landscapeHeight + "px" ;
    }

  }

}

//  Throttling Function for Resize and Scroll events

function throttle(fn, wait) {

  var timeInMs = Date.now();

  return function() {
    if ( Date.now() > timeInMs + wait ) {
      fn();
      timeInMs = Date.now();
    }
  }

}

// Grid Animations on Hover

// function hoverEffect(selector) {

//   var cells = document.querySelectorAll(selector);

//   if (cells.length == 0) {

//     return ;

//   } else {

//     var opacity = window.getComputedStyle(cells[0],null).getPropertyValue("opacity");

//     if (opacity == 0) {
//       console.log("positive");
//       for (var i = 0; i < cells.length; i++) {
//         cells[i].addEventListener("mouseover", function(){
//           this.style.opacity = 1;
//           // this.nextElementSibling.style.width = '105%';
//         });
//         cells[i].addEventListener("mouseout", function(){
//           this.style.opacity = 0;
//           // this.nextElementSibling.style.width = '101%';
//         });
//       }
//     } else {
//       console.log("negative");
//       for (var i = 0; i < cells.length; i++) {
//         cells[i].addEventListener("mouseover", function(){
//           this.style.opacity = 0;
//           this.nextElementSibling.style.width = '105%';
//         });
//         cells[i].addEventListener("mouseout", function(){
//           this.style.opacity = 1;
//           this.nextElementSibling.style.width = '101%';
//         });
//       }
//     }

//   }

// }

// slideUpHeader

var lastScroll = 0 ;
var delta = 5;

function slideUpHeader(){

  var scrollY = window.scrollY ;

  if(Math.abs(lastScroll - scrollY) <= delta){
    return;
  }

  if ( scrollY > lastScroll && scrollY > 500 ) {

    document.querySelector("header").style.height = "0px";

  } else {

    document.querySelector("header").style.height = "84px";

  }

  lastScroll = scrollY ;

}

// Fire SlideUpHeader Function on scroll, using the throttling function

window.addEventListener("scroll", throttle(slideUpHeader, 50));

// Menu Animations

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
    window.setTimeout(function(){
      document.querySelector("header").style.overflow = "hidden";
    }, 500);

  } else {

    document.querySelector("header").style.overflow = "visible";
    slide.style.height = "100vh";

  }

});

// Loading Panel

var loader = document.querySelector(".loader");

window.addEventListener("load", function(){
  document.querySelector(".logo").classList.remove("loading");
  loader.style.opacity = "0";

  window.setTimeout(function(){
    if (loader.parentNode) {
      loader.parentNode.removeChild(loader);
    }
  }, 1000);

});

// Calling Tile Gallery Function on load and resize events; using a throttling function for better performance

window.addEventListener("resize", throttle(tileGallery, 30), false);

tileGallery();

// Calling Hover hoverEffect Function on load

// hoverEffect(".main article");
// hoverEffect(".nextprev-navigation article");

// Slider

window.mySwipe = new Swipe(document.getElementById('slider'), {
  startSlide: 0,
  speed: 400,
  auto: 3000,
  draggable: false,
  continuous: true,
  disableScroll: false,
  stopPropagation: false,
});

// Vimeo Player API


var playButton = document.getElementById("play-button");

if(playButton){

  var iframe = document.getElementById('video');
  var player = new Vimeo.Player(iframe);

  playButton.addEventListener("click", function() {
    player.play();
    document.querySelector(".video-thumb").style.display = 'none';
  });

}
