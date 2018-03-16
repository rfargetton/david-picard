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

var cells = document.querySelectorAll("article header");

for (var i = 0; i < cells.length; i++) {
  cells[i].addEventListener("mouseover", function(){
    this.style.opacity = 1;
  });
  cells[i].addEventListener("mouseout", function(){
    this.style.opacity = 0;
  });
}

// function masonry(grid, gridCell, gridGutter, dGridCol, tGridCol, mGridCol) {
//   var g = document.querySelector(grid),
//       gc = document.querySelectorAll(gridCell),
//       gcLength = gc.length,
//       gHeight = 0,
//       i;
//
//   for(i=0; i<gcLength; ++i) {
//     gHeight+=gc[i].offsetHeight+parseInt(gridGutter);
//   }
//
//   if (window.screen.width >= 1024) {
//     g.style.height = gHeight/dGridCol + (gHeight/dGridCol)/gcLength + "px";
//   } else if (window.screen.width < 1024 && window.screen.width >= 768) {
//     g.style.height = gHeight/tGridCol + gHeight/(gcLength+1) + "px";
//   } else {
//     g.style.height = gHeight/mGridCol + gHeight/(gcLength+1) + "px";
//   }
//
// }
//


function tileGallery(){

  var galleryWidth = document.querySelector(".grid").offsetWidth;
  var portrait = document.querySelectorAll('.portrait');
  var landscape = document.querySelectorAll('.landscape');
  var landscapeHeight = Math.trunc(galleryWidth/6 * 2) ;
  var portraitHeight = Math.trunc(galleryWidth/6 * 4) ;

  for (var i = 0; i < landscape.length; i++) {
    landscape[i].style.height = landscapeHeight + "px";
  }

  for (var i = 0; i < portrait.length; i++) {
    var nextSibling = portrait[i].nextElementSibling ;
    portrait[i].style.height = portraitHeight + "px";
    nextSibling.style.marginTop = "-" + landscapeHeight + "px" ;
  }
}

["resize", "load"].forEach(function(event) {
  window.addEventListener(event, tileGallery);
});
