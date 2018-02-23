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
// ["resize", "load"].forEach(function(event) {
//   window.addEventListener(event, function() {
//     masonry(".grid", ".cell", 0, 2, 2, 1);
//   });
// });
