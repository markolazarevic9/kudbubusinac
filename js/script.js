function myFunction(x) {

    x.classList.toggle("change");

    var z = document.getElementById("navbar2");



    if (z.className === 'navbar' ) {

        z.className+= "responsive";
    } else  {
    z.className = 'navbar';
        

    }
    

};
const navSlide = () => {
    const container = document.querySelector('.container');
    const menu = document.querySelector('.menu');
    const navLinks = document.querySelectorAll('.menu li');
    const centar = document.getElementById('centar');

    container.addEventListener('click', () => {
        menu.classList.toggle('nav-active');
        navLinks.forEach((link, index)=>{
            link.style.animation = `menuFade 0.5s ease forwards ${index / 4 + 1}s`
        });
        
           menu.style.animation = `menuSlow 1.5s ease-in-out  `;
          
           
        
    });

    
}



navSlide();

// var slideIndex = 1;
// showSlides(slideIndex);

// function plusSlides(n) {
//   showSlides(slideIndex += n);
// }

// function currentSlide(n) {
//   showSlides(slideIndex = n);
// }
var slideIndex = 0;
showSlides();

function showSlides(n) {
  // var i;
  // var slides = document.getElementsByClassName("mySlides");
  // var dots = document.getElementsByClassName("dot");
  // if (n > slides.length) {slideIndex = 1}    
  // if (n < 1) {slideIndex = slides.length}
  // for (i = 0; i < slides.length; i++) {
  //     slides[i].style.display = "none";  
   
  // }
  // for (i = 0; i < dots.length; i++) {
  //     dots[i].className = dots[i].className.replace(" active", "");
  // }
  // slides[slideIndex-1].style.display = "block";  
  // dots[slideIndex-1].className += " active";


  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2500); 




}


// animacije

const karosel = document.querySelector('.slideshow-container');
const divovi = document.querySelector('.prvi_div');
const logo  = document.querySelector("#logo");
const header = document.querySelector("header");

// const div1 = document.querySelector("#div123");
// const div2 = document.querySelector("#div213");
// const div3 = document.querySelector("#div312");



//logo.style.animation = `animacija 5s ease`;
karosel.style.animation = `animacija 3s ease`;
header.style.animation  = `animacija 3s ease`;

//div1.style.visibility = "hidden";
// div2.style.visibility = "hidden";
// div3.style.visibility = "hidden";


// document.getElementById('ime').addEventListener('change', proveraIme);

// function proveraIme() {
//   const ime = document.getElementById('ime');
//   const reg1 = /^[A-Z]{1}[a-z]{2,20}$/;

//   if(!reg1.test(ime.value)) {
//     ime.style.border = '3px solid red';
//     alert('Ime mora početi velikim slovom, a sva ostala moraju biti mala!');
//   } else {
//     ime.style.border = '3px solid green';
//   }
// };


       
    