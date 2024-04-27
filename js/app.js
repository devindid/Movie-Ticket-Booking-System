$(document).ready(() => {
    $('#hamburger-menu').click(() => {
        $('#hamburger-menu').toggleClass('active')
        $('#nav-menu').toggleClass('active')
    })
       // setting owl carousel

       let navText = ["<i class='bx bx-chevron-left'></i>", "<i class='bx bx-chevron-right'></i>"]

       $('#hero-carousel').owlCarousel({
           items: 1,
           dots: false,
           loop: true,
           nav:true,
           navText: navText,
           autoplay: true,
           autoplayHoverPause: true
       })
       $('#top-movies-slide').owlCarousel({
        items: 2,
        dots: false,
        loop: true,
        autoplay: false,
        autoplayHoverPause: true,
        responsive: {
            500: {
                items: 3
            },
            1280: {
                items: 6
            },
            1600: {
                items: 7
            }
        }
})
$('.movies-slide').owlCarousel({
    items: 2,
    dots: false,
    nav:true,
    navText: navText,
    margin: 15,
    responsive: {
        500: {
            items: 2
        },
        1280: {
            items: 6
        },
        1600: {
            items: 7
        }
    }
})
const readMoreBtn = document.querySelector(".read-more-btn");  
 const text = document.querySelector(".text");  
 readMoreBtn.addEventListener("click", (e) => {  
  text.classList.toggle("show-more");  
  if (readMoreBtn.innerText === "READ MORE") {  
   readMoreBtn.innerText = "READ LESS";  
  } else {  
   readMoreBtn.innerText = "READ MORE";  
  }  
 });  
})