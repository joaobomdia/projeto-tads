const imgs = document.getElementById("img");
const img = document.querySelectorAll("#img img");

let idx = 0;
let offset = getOffset();

function getOffset() {
    if (window.matchMedia("(max-width: 601px)").matches) {
      return 600; 
    } else if (window.matchMedia("(max-width: 900px)").matches) {
      return 900; 
    } else {
      return 1514; 
    }
  }

function carrosel(){
    idx++

    if(idx > img.length - 1){
        idx=0
    }
    imgs.style.transform = `translateX(${-idx * offset}px)`;
    
}
interval = setInterval(carrosel, 1800);

document.getElementById('carrossel').addEventListener('mouseenter', stop);
function stop(){
    clearInterval(interval)
}

document.getElementById('carrossel').addEventListener('mouseleave',start);
function start(){
    interval = setInterval(carrosel, 1800)
}

// document.addEventListener('DOMContentLoaded', function() {
//     var elems = document.querySelectorAll('.carousel');
//     var instances = M.Carousel.init(elems, options);
//   });

//   // Or with jQuery

//   $(document).ready(function(){
//     $('.carousel').carousel();
//   });