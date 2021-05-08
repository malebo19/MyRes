var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("Res");
  var bullets = document.getElementsByClassName("bullet");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < bullets.length; i++) {
    bullets[i].className = bullets[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  bullets[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); 

}